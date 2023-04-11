<?php
namespace Controller;
include_once 'Model/user.php';
use Model\User;

class Login
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function getUserDetail()
    {
        $user = new User();
        $email = $_REQUEST['id'];
        $password = $_REQUEST['password'];
        $checkEmail = $user->getUserByEmail($email);
        $responseData = [];
        if (!empty($checkEmail)) {
            $id = $checkEmail['id'];
            $checkPassword = $user->checkPassword($id, $password);
            if ($checkPassword) {
                $responseData['code'] = '200';
                $responseData['message'] = 'Success';
                $responseData['user_id'] = $id;
                header('Location:list-user');
            } else {
                $responseData['code'] = '400';
                $responseData['message'] = 'Failed';
            }
        } else {
            $responseData['code'] = '400';
            $responseData['message'] = 'Failed';
        }

       // echo json_encode($responseData);
    }
}