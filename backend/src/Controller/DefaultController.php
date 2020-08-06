<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\DBAL\Driver\Connection;



class DefaultController
{
    public function index (Connection $connection){
        $todos = $connection->fetchAll('SELECT * FROM todo');

        return new JsonResponse(array_map(
            function ($item) {
                return ["id" => (int)$item["id"],
                        "title" => $item["title"],
                        "completed" => (bool)$item["completed"],
                        ];
            },
            $todos));
    }
}
