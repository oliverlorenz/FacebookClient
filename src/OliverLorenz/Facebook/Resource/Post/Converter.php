<?php
/**
 * @author Oliver Lorenz <mail@oliverlorenz.com>
 */

namespace OliverLorenz\Facebook\Resource\Post;


use OliverLorenz\Facebook\Resource\Post;

class Converter {

    /**
     * @param Post $post
     * @return array
     */
    static public function toArray(Post $post)
    {
        $returnArray = array();

        $value = $post->getId();
        if(isset($value)) {
            $returnArray['id'] = $value;
        }
        $value = $post->getMessage();
        if(isset($value)) {
            $returnArray['message'] = $value;
        }
        return $returnArray;
    }

    /**
     * @param array $resourceArray
     * @param Post $post
     * @return Post
     */
    static public function toObject(array $resourceArray, Post $post)
    {
        if(isset($resourceArray['id'])) {
            $post->setId($resourceArray['id']);
        }
        if(isset($resourceArray['message'])) {
            $post->setMessage($resourceArray['message']);
        }
        return $post;
    }
} 