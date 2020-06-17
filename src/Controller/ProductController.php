<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{


    /**
     * liste des produits
     * @Route("product/all", name="allproduct")
     */
    public function allProduct()
    {
        return $this->render('product/list.html.twig');

    }



    /**
     * ajouter un produit
     * @Route("product/new", name="addProduct")
     */
    public function addProduct()
    {
        return $this->render('product/add.html.twig');

    }



    /**
     * modifier un produit
     * @Route("product/update/{id}", name="updateProduct")
     */
    public function updateProduct($id)
    {
        return $this->render('product/edit.html.twig',[
             'n°'=>$id

        ]);
    }
}
