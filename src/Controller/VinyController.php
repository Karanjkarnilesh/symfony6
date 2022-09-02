<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinyController extends AbstractController{
    #[Route('/')]
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
    #[Route('/browse/{slug}')]
    public function browse(string $slug =null) :Response
    {
        if($slug){
        $title=str_replace('-',' ',$slug);
        }else{
            $title="All Nilesh";
        }
        return new Response($title);
}
}