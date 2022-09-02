<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinyController{
    #[Route('/')]
    public function homepage()
    {
        return new Response('Hello');
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