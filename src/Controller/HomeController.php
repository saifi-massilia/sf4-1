<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
     * @route("/test",name="test")
     */
    public function test(EntityManagerInterface $em)
    {
       //creation d'une entité
        $product=new Product();

        $product
            ->setName('jeans')
            ->setDescription('Un super jean')
            ->setPrix(79.99)
            ->setQuantity(50)
                ;
        //l"entite n'est pas encore enregistrer en base
dump($product);

//1-preparer a l'enregistrement d'une entité
        $em->persist($product);
//2- executer les requetes sql
        $em->flush();

        //fonction de debug: dump() & die(enregistrement fait dans la base de donnée)
        dd($product);
    }
}
