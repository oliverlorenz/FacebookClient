<?php
/**
 * @author Oliver Lorenz <mail@oliverlorenz.com>
 */

namespace OliverLorenz\Facebook\Resource;


use OliverLorenz\Facebook\Resource;

abstract class AbstractConverter {

    abstract static public function toArray(Resource $resource);
    abstract static public function toObject(array $resourceArray, $emptyResource);

} 