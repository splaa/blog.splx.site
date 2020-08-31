<?php

use \DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator as Crumbs;


Breadcrumbs::register('home', function (Crumbs $crumbs) {
    $crumbs->push('Home', route('home'));
});

Breadcrumbs::register('login', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push('Login', route('login'));
});
//
//Breadcrumbs::register('login.phone', function (Crumbs $crumbs) {
//    $crumbs->parent('home');
//    $crumbs->push('Login', route('login.phone'));
//});

Breadcrumbs::register('register', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push('Register', route('register'));
});

Breadcrumbs::register('password.request', function (Crumbs $crumbs) {
    $crumbs->parent('login');
    $crumbs->push('Reset Password', route('password.request'));
});

Breadcrumbs::register('password.reset', function (Crumbs $crumbs) {
    $crumbs->parent('password.request');
    $crumbs->push('Change', route('password.reset'));
});
Breadcrumbs::register('cabinet', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push('Cabinet', route('cabinet'));
});

//
//Breadcrumbs::register('page', function (Crumbs $crumbs, PagePath $path) {
//    if ($parent = $path->page->parent) {
//        $crumbs->parent('page', $path->withPage($path->page->parent));
//    } else {
//        $crumbs->parent('home');
//    }
//    $crumbs->push($path->page->title, route('page', $path));
//});
