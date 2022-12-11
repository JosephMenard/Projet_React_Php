<?php

namespace App\Controller;

use App\Framework\Entity\BaseController;
use App\Framework\Route\Route;
use App\Framework\Route\Router;
use App\Manager\UserManager;
use App\Factory\PDOFactory;
use App\Entity\User;
use App\Service\JWTHelper;

class UserController extends BaseController
{
    #[Route("/api/getOne/user", name: "app_user", methods: ["POST"])]
    public function getUserById()
    {
        $id = $_SERVER['PHP_AUTH_ID'];
        //$id = 1;
        $userManager = new UserManager(new PDOFactory());
        $user=$userManager->getByUserId($id);
        echo json_encode([
            "id" =>$user->getId(),
            "lastname" => $user->getLastname(),
            "firstname" => $user->getFirstname(),
            "email" => $user->getEmail(),
            "password" => $user->getPassword()
        ]);
    }

    #[Route("/api/insert/user", name: "app_insertUser", methods: ["POST"])]
    public function insertUser()
    {
        $firstName = $_SERVER['PHP_AUTH_FIRSTNAME'];
        $lastName = $_SERVER['PHP_AUTH_LASTNAME'];
        $email = $_SERVER['PHP_AUTH_EMAIL'];
        $password = $_SERVER['PHP_AUTH_PW'];

        //$id = 1;
        $userManager = new UserManager(new PDOFactory());
        $user=$userManager->insertUser( $firstName,  $lastName,  $email,  $password);
        if($user != ""){
            echo json_encode([
                "lastname" => $firstName,
                "firstname" => $lastName,
                "email" => $email,
                "password" => $password
            ]);
        }
    }


    #[Route('/api/getAll/user', name: "app_user")]
    public function index()
    {
        $userManager = new UserManager(new PDOFactory());
        $users=$userManager->getAllUsers();
        $allUsers = [];


        foreach($users as $user){

            $allUsers[] = [
                "id" =>$user->getId(),
                "lastname" => $user->getLastname(),
                "firstname" => $user->getFirstname(),
                "email" => $user->getEmail(),
                "password" => $user->getPassword()
            ];

            echo json_encode([
                "message" => "Voici la liste de tous les Users",
                "posts" => $allUsers
            ]);

        }
    }


}
