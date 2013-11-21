<?php
/**
 * Created by PhpStorm.
 * User: olorenz
 * Date: 20.11.13
 * Time: 23:50
 */

namespace OliverLorenz\Facebook\Resource\Event;


use OliverLorenz\Facebook\Resource;

class Converter extends Resource\AbstractConverter {

    static public function toArray(Resource $event)
    {
        /** @var Resource\Event $event */
        $returnArray = array();

        $value = $event->getName();
        if(isset($value)) {
            $returnArray['name'] = $value;
        }
        $value = $event->getDescription();
        if(isset($value)) {
            $returnArray['description'] = $value;
        }
        $value = $event->getStartTime();
        if(isset($value)) {
            $returnArray['start_time'] = $value;
        }
        $value = $event->getEndTime();
        if(isset($value)) {
            $returnArray['end_time'] = $value;
        }
        $value = $event->getLocation();
        if(isset($value)) {
            $returnArray['location'] = $value;
        }
        $value = $event->getLocationId();
        if(isset($value)) {
            $returnArray['location_id'] = $value;
        }
        $value = $event->getPrivacyType();
        if(isset($value)) {
            $returnArray['privacy_type'] = $value;
        }
        return $returnArray;
    }

    /**
     * @param array $resourceArray
     * @param Resource $event
     * @return Resource\Event
     */
    static public function toObject(array $resourceArray, $event)
    {
        /** @var $event Resource\Event */
        if(isset($resourceArray['id'])) {
            $event->setId($resourceArray['id']);
        }
        if(isset($resourceArray['name'])) {
            $event->setName($resourceArray['name']);
        }
        if(isset($resourceArray['description'])) {
            $event->setDescription($resourceArray['description']);
        }
        if(isset($resourceArray['start_time'])) {
            $event->setStartTime($resourceArray['start_time']);
        }
        if(isset($resourceArray['end_time'])) {
            $event->setEndTime($resourceArray['end_time']);
        }
        if(isset($resourceArray['location'])) {
            $event->setLocation($resourceArray['location']);
        }
        if(isset($resourceArray['location_id'])) {
            $event->setLocationId($resourceArray['location_id']);
        }
        if(isset($resourceArray['privacy_type'])) {
            $event->getPrivacyType($resourceArray['privacy_type']);
        }
        return $event;
    }
} 