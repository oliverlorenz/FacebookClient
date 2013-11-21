<?php
/**
 * @author Oliver Lorenz <mail@oliverlorenz.com>
 */

namespace OliverLorenz\Facebook\Resource;


use OliverLorenz\Facebook\Resource;

class Event extends Resource {

    /**
     * @var string
     */
    protected $_id = null;

    /**
     * @var string
     */
    protected $_name = null;

    /**
     * @var string
     */
    protected $_startTime = null;

    /**
     * @var string
     */
    protected $_endTime = null;

    /**
     * @var string
     */
    protected $_description = null;

    /**
     * @var string
     */
    protected $_location = null;

    /**
     * @var int
     */
    protected $_locationId = null;

    /**
     * @var string
     */
    protected $_privacyType = null;

    /**
     * @var \BaseFacebook
     */
    protected $_facebookClientInstance = null;

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param $description
     * @return $this
     * @throws \Exception
     */
    public function setDescription($description)
    {
        if(!is_string($description)) {
            throw new \Exception('description must be a string');
        }
        $this->_description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param $endTime
     * @return $this
     * @throws \Exception
     */
    public function setEndTime($endTime)
    {
        if(!is_string($endTime)) {
            throw new \Exception('endTime must be a string');
        }
        $inputTime = strtotime($endTime);
        $this->_endTime = date('c', $inputTime);
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->_endTime;
    }

    /**
     * @param $location
     * @return $this
     * @throws \Exception
     */
    public function setLocation($location)
    {
        if(!is_string($location)) {
            throw new \Exception('location must be a string');
        }
        $this->_location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->_location;
    }

    /**
     * @return int
     */
    public function getLocationId()
    {
        return $this->_locationId;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param $privacyType
     * @return $this
     * @throws \Exception
     */
    public function setPrivacyType($privacyType)
    {
        $privacyTypes = array('OPEN', 'SECRET', 'FRIENDS');
        $privacyType = strtoupper($privacyType);

        if(!in_array($privacyType, array('OPEN', 'SECRET', 'FRIENDS', 'CLOSED'))) {
            throw new \Exception('only types ' . implode(', ', $privacyTypes) . ' are allowed');
        }
        $this->_privacyType = $privacyType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrivacyType()
    {
        return $this->_privacyType;
    }

    /**
     * @param $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $inputTime = strtotime($startTime);
        $this->_startTime = date('c', $inputTime);
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->_startTime;
    }

    /**
     * @return array
     */
    public function getAsArray() {
        $returnArray = array();

        if(isset($this->_name)) {
            $returnArray['name'] = $this->_name;
        }
        if(isset($this->_description)) {
            $returnArray['description'] = $this->_description;
        }
        if(isset($this->_startTime)) {
            $returnArray['start_time'] = $this->_startTime;
        }
        if(isset($this->_endTime)) {
            $returnArray['end_time'] = $this->_endTime;
        }
        if(isset($this->_location)) {
            $returnArray['location'] = $this->_location;
        }
        if(isset($this->_locationId)) {
            $returnArray['location_id'] = $this->_locationId;
        }
        if(isset($this->_privacyType)) {
            $returnArray['privacy_type'] = $this->_privacyType;
        }
        return $returnArray;
    }

    /**
     * @param $locationId
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->_locationId = $locationId;
        return $this;
    }

    /**
     * @return Post\Factory
     */
    public function post() {
        /** @var Post\Factory $postFactory */
        $postFactory = Factory::get('post', $this->getFacebookClientInstance());
        $postFactory->setBasePath('/' . $this->getId());
        return $postFactory;
    }
} 