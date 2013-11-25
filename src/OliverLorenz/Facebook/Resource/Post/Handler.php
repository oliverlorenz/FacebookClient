<?php
/**
 * @author Oliver Lorenz <mail@oliverlorenz.com>
 */

namespace OliverLorenz\Facebook\Resource\Post;


use OliverLorenz\Facebook\Resource\AbstractFactory;
use OliverLorenz\Facebook\Resource\Event;
use OliverLorenz\Facebook\Resource\Post;

class Handler extends AbstractFactory {

    protected $_basePath = '/me';

    /**
     * @param string $basePath
     */
    public function setBasePath($basePath)
    {
        $this->_basePath = $basePath;
    }

    /**
     * @return string
     */
    public function getBasePath()
    {
        return $this->_basePath;
    }

    /**
     * @param Post $post
     * @return mixed
     */
    public function create($post)
    {
        $post->setFacebookClientInstance($this->_facebookClient);
        $data = Converter::toArray($post);
        $id = $this->getClient()->api($this->getBasePath() . '/feed', 'post', $data);
        $post->setId($id['id']);
        return $post;
    }

    public function update($event) {
        /** @var $event Event */
        $event->setFacebookClientInstance($this->_facebookClient);
        $data = Converter::toArray($event);
        return $this->getClient()->api('/' . $event->getId(), 'post', $data);
    }

    public function get($id)
    {
        $data = $this->getClient()->api('/' . $id, 'get');
        return Converter::toObject($data, new Event());
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