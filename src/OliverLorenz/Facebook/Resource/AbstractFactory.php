<?php
/**
 * @author Oliver Lorenz <mail@oliverlorenz.com>
 */

namespace OliverLorenz\Facebook\Resource;


abstract class AbstractFactory {

    protected $_facebookClient;

    public function __construct($facebookClient)
    {
        $this->_facebookClient = $facebookClient;
    }

    public function getClient()
    {
        return $this->_facebookClient;
    }

    abstract public function get($id);
    abstract public function update($resource);
    abstract public function create($resource);
    abstract public function delete($id);

} 