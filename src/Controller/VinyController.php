<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinyController extends AbstractController{
    #[Route('/',name:'app_homepage')]
    public function homepage()
    {
        $tracks=[
            ['song' =>'chal sath sath','artist' =>" nilesh"],
            ['song' =>'ami shetkari','artist' =>"nandkishor"],
            ['song' =>'ham sath sath hai','artist' =>" pragati"],
        ];
        return $this->render('viny/homepage.html.twig',[
            'title'=>'PB & Jams',
            'tracks' =>$tracks,
        ]);
    }
    #[Route('/browse/{slug}',name:'app_browse')]
    public function browse(string $slug =null) :Response
    {
        $genre= $slug ? str_replace('-',' ',$slug):null;
        return $this->render('viny/browse.html.twig',[
            'genre' =>$genre,
        ]);
}
}