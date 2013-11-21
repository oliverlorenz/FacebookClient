<?php
/**
 * @author Oliver Lorenz <mail@oliverlorenz.com>
 */

namespace OliverLorenz\Facebook;


use OliverLorenz\Facebook\Resource\Factory;

class Client {

    protected $_facebookClientInstance;
    protected $_eventFactory;

    public function __construct($facebookClient)
    {
        $this->_facebookClientInstance = $facebookClient;
        $this->_eventFactory = Factory::get('event', $facebookClient);
    }

    /**
     * @return Resource\Event\Factory
     */
    public function event()
    {
        return $this->_eventFactory;
    }

    public function profile()
    {

    }





} 