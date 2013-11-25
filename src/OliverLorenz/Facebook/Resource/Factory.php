<?php
/**
 * @author Oliver Lorenz <mail@oliverlorenz.com>
 */

namespace OliverLorenz\Facebook\Resource;


use OliverLorenz\Facebook\Resource\Event;

class Factory {

    /**
     * @param $type
     * @param $facebookClient
     * @return null|Event\Handler|Post\Handler
     */
    static public function get($type, $facebookClient) {
        $return = null;
        if('event' == $type) {
            $return = new Event\Handler($facebookClient);
        } else if('post' == $type) {
            $return = new Post\Handler($facebookClient);
        }
        return $return;
    }

} 