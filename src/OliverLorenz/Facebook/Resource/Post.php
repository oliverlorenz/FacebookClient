<?php
/**
 * @author Oliver Lorenz <mail@oliverlorenz.com>
 */

namespace OliverLorenz\Facebook\Resource;


use OliverLorenz\Facebook\Resource;

class Post extends Resource {

    /**
     * @var int
     */
    protected $_id = null;

    /**
     * @var string
     */
    protected $_message = null;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->_message = $message;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->_message;
    }


} 