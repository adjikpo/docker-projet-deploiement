<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;


class DefaultController
{
    private const FAKEDATA = [
        ["id"=>1,"title"=>"SYMFONYYYY","completed"=>false],
        ["id"=>2,"title"=>"Add a task","completed"=>false],
        ["id"=>3,"title"=>"Add a task","completed"=>false]
    ];
    public function index (){
        return new JsonResponse(self::FAKEDATA);
    }
}
