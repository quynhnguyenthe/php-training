<?php
namespace Model;
class User {
    public function __construct()
    {
    }
    public function getUserByEmail($email): Array
    {
        switch ($email) {
            case 'luc@amela.vn':
                return ['id' => 1];
            case 'duy@amela.vn';
                return ['id' => 2];
            default:
                return [];
        }

    }
}