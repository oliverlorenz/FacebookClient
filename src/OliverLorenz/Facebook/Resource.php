<?php
/**
 * @author Oliver Lorenz <mail@oliverlorenz.com>
 */

namespace OliverLorenz\Facebook;


abstract class Resource {

    protected $_facebookClientInstance;

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->_facebookClientInstance;
    }

    /**
     * @param mixed $facebookClientInstance
     */
    public function setFacebookClientInstance($facebookClientInstance)
    {
        $this->_facebookClientInstance = $facebookClientInstance;
    }

    /**
     * @return mixed
     */
    public function getFacebookClientInstance()
    {
        return $this->_facebookClientInstance;
    }


} 