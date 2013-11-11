<?php

namespace OliverLorenz\Facebook;

class ClientFactory {
	
	static public function get(Credentials $credentials)
	{
		$instance = null;
        $credentialsArray = array(
            'appId' => $credentials->getAppId(),
            'secret' => $credentials->getSecret(),
        );

        if (PHP_SAPI === 'cli')
		{
            $accessToken = $credentials->getAccessToken();
            if(is_null($accessToken)) {
                throw new \Exception('for working with the console a access_token is required');
            }

            $instance = new \CliFacebook($credentialsArray);
            $instance->setAccessToken($accessToken);
		} else {
			$instance = new \Facebook($credentialsArray);
		}
		return $instance;
	}

	static protected function _getAccessToken(array $credentials) 
	{
		return $credentials['access_token'];
	}

}