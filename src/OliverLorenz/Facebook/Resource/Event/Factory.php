<?php
/**
 * @author Oliver Lorenz <mail@oliverlorenz.com>
 */

namespace OliverLorenz\Facebook\Resource\Event;


use OliverLorenz\Facebook\Resource\AbstractFactory;
use OliverLorenz\Facebook\Resource\Event;
use OliverLorenz\Facebook\Resource\Post;

class Factory extends AbstractFactory {

    /**
     * @param Event $event
     * @return Event
     */
    public function create($event)
    {
        $event->setFacebookClientInstance($this->_facebookClient);
        $data = Converter::toArray($event);
        $id = $this->getClient()->api('/events/', 'post', $data);
        $event->setId($id['id']);
        return $event;
    }

    public function update($event) {
        $event->setFacebookClientInstance($this->_facebookClient);
        $data = Converter::toArray($event);
        return $this->getClient()->api('/' . $event->getId(), 'post', $data);
    }

    /**
     * @param $id
     * @return Event
     */
    public function get($id)
    {
        $data = $this->getClient()->api('/' . $id, 'get');
        $event = Converter::toObject($data, new Event());
        $event->setFacebookClientInstance($this->_facebookClient);
        return $event;
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        return (bool) $this->getClient()->api('/' . $id, 'delete');
    }
} 