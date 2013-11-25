<?php
/**
 * Created by PhpStorm.
 * User: olorenz
 * Date: 23.11.13
 * Time: 20:38
 */

namespace OliverLorenz\Facebook\Resource\User;


use OliverLorenz\Facebook\Resource\User;

class Converter {

    /**
     * @param User $post
     * @return array
     */
    static public function toArray(User $post)
    {
        $returnArray = array();

        $value = $post->getId();
        if(isset($value)) {
            $returnArray['id'] = $value;
        }
        return $returnArray;
    }

    /**
     * @param array $resourceArray
     * @param User $post
     * @return User
     */
    static public function toObject(array $resourceArray, User $post)
    {
        if(isset($resourceArray['id'])) {
            $post->setId($resourceArray['id']);
        }
        return $post;
    }
} 