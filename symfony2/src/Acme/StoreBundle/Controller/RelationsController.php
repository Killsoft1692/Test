<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Category;
use Acme\StoreBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class RelationsController extends Controller
{
    /*
     ** @Route("/doctrine/relations")
     */
    public function createProductAction()
    {
        $category = new Category();
        $category->setName('Cool products');

        for($i=1;$i<10;$i++){
            $product = new Product();
            $product->setName('Some product')
                    ->setPrice(52.00)
                    ->setDescription('yep')
                    ->setCategory($category);


            $this->getDoctrine()->getManager()->persist($product);
        }
        $this->getDoctrine()->getManager()->persist($category);
        $this->getDoctrine()->getManager()->flush();

        return new Response(
            'Create product'.$product->getName()
            .'and category'.$category->getId()
        );
    }
} 