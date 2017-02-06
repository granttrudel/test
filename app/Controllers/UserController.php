<?php

namespace Acme\FsTest\Controllers;

use Acme\FsTest\Views;
use Acme\FsTest\Data\User;

class UserController extends BaseController
{
    public function welcome()
    {
        if( ! $this->isLogged() )
            $this->redirect('login');

        $view = new Views\User\Welcome;
        return $view->render();
    }

    public function profile()
    {
        //TODO: implement please, this should support the update of firstName, lastName, email and password (make sure you hash it before saving it)
        $view = new Views\User\Profile;
        return $view->render();
    }

    public function register()
    {
        $view = new Views\User\Register;
        return $view->render();
        //TODO: implement please, this should support the creation of a new account to which, once created, you can login as
    }
}