<?php

namespace OliverLorenz\Facebook;

class Credentials 
{
    /**
     * @var string
     */
    protected $_appId;

    /**
     * @var string
     */
    protected $_secret;

    /**
     * @var string
     */
    protected $_accessToken;

    /**
     * @param $accessToken
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->_accessToken = $accessToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->_accessToken;
    }

    /**
     * @param $appId
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->_appId = $appId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
        return $this->_appId;
    }

    /**
     * @param $secret
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->_secret = $secret;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->_secret;
    }


}