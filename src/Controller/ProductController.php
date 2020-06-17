<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ProductController.php',
        ]);
    }

    /**
     * @Route("product/all", name="allproduct")
     */
    public function allProduct()
    {
        return $this->json([
            'message' => 'AllProducts!',
            'path' => 'src/Controller/ProductController.php',
        ]);
    }



    /**
     * @Route("product/new", name="addProduct")
     */
    public function addProduct()
    {
        return $this->json([
            'message' => 'ajouter un produit',

        ]);
    }


    /**
     * @Route("product/update/{id}", name="updateProduct")
     */
    public function updateProduct($id)
    {
        return $this->json([
            'message' => 'modification du produit '.$id

        ]);
    }
}
