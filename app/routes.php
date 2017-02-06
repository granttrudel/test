<?php

const NOT_FOUND = '404';

$__routes = [
    'welcome'  => 'User@welcome',
    'login'    => 'Auth@login',
    'logout'   => 'Auth@logout',
    'profile'  => 'User@profile',
    'register' => 'User@register',
    NOT_FOUND  => 'Auth@notFound'
];