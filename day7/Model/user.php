<?php
namespace Model;
class User
{
    public function __construct()
    {
    }

    public function getUserByEmail($email)
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

    public function checkPassword($id, $password)
    {
        switch ($id) {
            case '1':
                if ($password == '123456')
                    return true;
                else
                    return false;
            case '2';
                if ($password == '654321')
                    return true;
                else
                    return false;
            default:
                return false;
        }

    }
}

class Test {

}