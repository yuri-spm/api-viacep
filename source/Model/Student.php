<?php

namespace Source\Model;
use Source\Core\Model;




class Student
{
    protected  static $safe = ["id", "created_at", "update_at"];


    protected static $entity = "users";

    protected static $required = ["first_name", "last_name", "email" ];




    public function __construct($first_name, $last_name, $email, $address = null)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = is_email($email);
        $this->address = $address;
        return $this;
    }


}