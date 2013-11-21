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
     * @return null|Event\Factory|Post\Factory
     */
    static public function get($type, $facebookClient) {
        $return = null;
        if('event' == $type) {
            $return = new Event\Factory($facebookClient);
        } else if('post' == $type) {
            $return = new Post\Factory($facebookClient);
        }
        return $return;
    }

} 