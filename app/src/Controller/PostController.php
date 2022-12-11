<?php

namespace App\Controller;

use App\Factory\PDOFactory;
use App\Framework\Entity\BaseController;
use App\Framework\Route\Route;
use App\Manager\PostManager;
use App\Service\JWTHelper;

class PostController extends BaseController
{


    #[Route('/api/home', name: "homepage", methods: ["GET"])]
    public function homepage()
    {

        $manager = new PostManager(new PDOFactory());
        $posts = $manager->getAllPosts();

        $allPosts = [];

        foreach($posts as $post){

            $allPosts[] = [
                "id" => $post->getId(),
                "titre" => $post->getTitle(),
                "contenue" => $post->getContent(),
                "date" => $post->getDate()
            ];
        }

        echo json_encode([
            "message" => "those are all the posts",
            "posts" => $allPosts
        ]);
    }

    #[Route('/api/insertPost', name: "homepage", methods: ["POST"])]
    public function newPost()
    {
        $title = $_SERVER['PHP_POST_TITLE'];
        $content = $_SERVER['PHP_POST_CONTENT'];

        $manager = new PostManager(new PDOFactory());
        $posts = $manager->insertPost( $title, $content);



        if($posts != ""){

            echo json_encode([
                "id" => $title,
                "titre" => $content->getTitle()
            ]);
        }

    }

    #[Route('/toto', name: "app_mes_couilles", methods: ['GET'])]
    public function index()
    {
        $cred = str_replace("Bearer ", "", getallheaders()['authorization']);
        $token = JWTHelper::decodeJWT($cred);
        if (!$token) {
            $this->renderJSON([
                "message" => "invalid cred"
            ]);
            die;
        }

        $posts = [1, 12 , 3, 4];

        $this->renderJSON([
            "posts" => $posts
        ]);
    }

    #[Route("/post/{id}")]
    public function showOne(string $id)
    {
        var_dump($id);
    }
}
