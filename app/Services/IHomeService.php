<?php

namespace App\Services;

interface IHomeService
{
    public function login($username, $password);
    public function logout();
    public function register($username, $password, $email);
    public function changePassword($username, $password, $newPassword);
    public function deleteAccount($username, $password);

}
