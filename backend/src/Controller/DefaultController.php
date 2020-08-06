<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\DBAL\Driver\Connection;



class DefaultController
{
    private const FAKEDATA = [
        ["id"=>1,"title"=>"SYMFONYYYY","completed"=>false],
        ["id"=>2,"title"=>"Add a task","completed"=>false],
        ["id"=>3,"title"=>"Add a task","completed"=>false]
    ];
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
