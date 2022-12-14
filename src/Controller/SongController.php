<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Exception\JsonException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/song/{id<\d+>}', name: 'app_song',methods:['GET'])]
    public function getSong(int $id ,LoggerInterface $logger): Response
    {
       $song=[
           'id'=> $id,
           'name'=>"waterfalls",
           'url' =>'https://unsplash.com/photos/OE6qLhRHhhs'
       ];
       $logger->info("Hii",[
           'song'=>$id,
       ]);
       return new JsonResponse($song);
    }
}
