<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{


    /**
     * liste des produits
     * @Route("product/all", name="allproduct")
     */
    public function allProduct(ProductRepository  $repository)
    {

        //Recuperer tte les entités
//        $result = $repository->findAll();


        //recuperer plusieurs entités selon des criteres
        //$result=$repository->findBy(['id'=>2]);//['name'=>'jeans']

         //recuperer 1 entité selon des criteres
       // $result=$repository->findOneBy(['name'=>'jeans']);//['name'=>'jeans']

        //recuperer 1 entité par son id
         // $result=$repository->find(2);
          //  dd($result);
        return $this->render('product/list.html.twig',[
            'product_list'=>$repository->findAll()
        ]);

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
