<?php

namespace Acme\FsTest\Models;

use Acme\FsTest\Data;
use Acme\FsTest\Traits\ConnectionTrait;
use Illuminate\Database\Capsule\Manager as DB;

class User
{
    use ConnectionTrait;

    public function getById($id)
    {
        $user = DB::table('users')
            ->select('*')
            ->where('id', '=', $id)
            ->first();

        return $user && $user->id ? (array) $user : NULL;
    }

    public function update(Data\User $user)
    {
        $query = 'update users 
                    set password = :password
                    where id = :id';
                    
        $bind = array( 
            'password' => $user->password, 
            'id' => $user->id
            );

        return DB::table('users')->update( $query, $bind );
    }

    public function login(Data\User $user)
    {
        $user = DB::table('users')
            ->select('*')
            ->where('email', '=', $user->email)
            ->where('password', '=', $user->password)
            ->first();
        
        return $user && $user->id ? (array) $user : NULL;
    }
}