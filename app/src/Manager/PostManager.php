<?php

namespace App\Manager;

use App\Entity\Post;

class PostManager extends BaseManager
{
    /**
     * @return Post[]
     */
    public function getAllPosts(): array
    {
        $query = $this->pdo->prepare("SELECT * FROM Post");
        $query->execute();
        $posts = [];
        while ($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $posts[] = new Post($data);
        }
        return $posts;
    }

    /**
     * @param int $id
     * @return Post|bool
     */
    public function getPostsById(int $id): Post
    {
        $query = $this->pdo->prepare("SELECT * FROM Post WHERE id = :id");
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $data = $query->fetch(\PDO::FETCH_ASSOC);
        $post = new Post($data);
        return $post;
    }

    /**
     * @param int $id
     * @return Post|bool
     */
    public function insertPost(string $title, string $content)
    {
        $query = $this->pdo->prepare("INSERT INTO Post (title, content, date) VALUES (:title, :content, CURRENT_DATE())");
        $query->bindValue(":title", $title, \PDO::PARAM_STR);
        $query->bindValue(":content", $content, \PDO::PARAM_STR);
        $query->execute();
        return $title;
    }


    public function updatePost(int $id, string $content, string $title, string $image)
    {
        $query = $this->pdo->prepare("UPDATE Post SET content = :content, title = :title, image = :image  WHERE id = :id");
        $query->bindValue(":content", $content, \PDO::PARAM_STR);
        $query->bindValue(":title", $title, \PDO::PARAM_STR);
        $query->bindValue(":image", $image, \PDO::PARAM_STR);
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
    }

    public function deletePost(int $id)
    {
        $query = $this->pdo->prepare("DELETE FROM Post WHERE id = :id");
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
    }
}