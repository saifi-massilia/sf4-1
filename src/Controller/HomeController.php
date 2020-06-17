<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * on declare des routes avec des annotations route
     * url: localhost/route
     * uri:/route
     * @Route("/", name="home")
     */
    public function index()
    {
        #templates/                home.html.twig
        return $this->render('home.html.twig',[
            'pseudo'=>'jhon doe',
            'liste' => ['1','2','3',]
        ]);
    }

    /**
     * on place les parametres dynamiques entre accolades
     * URI valide : /test/42
     *
     * @route("/test/{id}",name="test")
     */
    public function test($id, Request $request,SessionInterface $session)
    {
        $id+=100;
        return $this->json([
            'id'=>$id,
            'section'=>$request->query->get('section','profil'),
            'session'=>$session->get('user'),
        ]);
    }
}
