<?php


namespace Source\Model;

use Source\Core\User;
use Source\Core\Address;

class Register
{
    protected  static $safe = [];

    protected static $entityUser = "users";

    protected static $entityAddress = "address";

    private $user;

    private $address;

    public function __construct(User $user, Address$address)
    {
        $this->user = $user;
        $this->address = $address;
    }

    public function find()
    {

    }

    public function finById()
    {

    }

    public function findByEmail()
    {

    }

    public function all()
    {

    }

    public function save()
    {

    }

    public function destroy()
    {

    }


}