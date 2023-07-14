<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class authController extends Controller 
{

    public function index()
    {
        return $this->view('register',[
            "name" => "cogip"
        ]);
    }

    public function register()
    {
        $role_id = filter_var($_POST['role'], FILTER_SANITIZE_NUMBER_INT);
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);  
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];   

        $userModel = new User();

        $userModel->saveUser($role_id, $firstname, $lastname, $email, $password);
              
        header('Location: /login');
        exit();
    }
}
?>