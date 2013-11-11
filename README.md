FacebookClient
==============

A FacebookClient for PHP. Works on Web and CLI / command line

Hint: CLI is already tested, web coming soon

Usage
-----
    require_once('vendor/autoload.php');

    $appId = 'XXXXX'; // you can get here: https://developers.facebook.com/apps/
    $secret = 'XXXXX'; // you can get here: https://developers.facebook.com/apps/
    $accessToken = 'XXXXX'; // you can get here: https://developers.facebook.com/tools/access_token/

    $credentials = new \OliverLorenz\Facebook\Credentials();
    $credentials->setAppId($appId);
    $credentials->setSecret($secret);
    $credentials->setAccessToken($accessToken);

    $facebook = \OliverLorenz\Facebook\ClientFactory::get($credentials);

    $user = $facebook->api('/me');

    print_r($user);