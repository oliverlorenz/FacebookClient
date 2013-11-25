<?php
/**
 * Created by PhpStorm.
 * User: olorenz
 * Date: 22.11.13
 * Time: 23:12
 */

namespace OliverLorenz\Facebook\Resource;

class User {

    protected $_id;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }


}