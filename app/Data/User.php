<?php

namespace Acme\FsTest\Data;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $password;
}