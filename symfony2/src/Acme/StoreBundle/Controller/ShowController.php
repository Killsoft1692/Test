<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class ShowController extends Controller
{
    public function indexAction($id)
    {
        /*
         * @Route("/doctrine/show/{id}")
         */
        $product = $this->getDoctrine()
            ->getRepository('AcmeStoreBundle:Product')
            ->find($id);

        if(!$product){
            throw $this->createNotFoundException(
                'Sorry, db is empty'.$id
            );

        }
        $this->getDoctrine()->getManager()->remove($product);
        $this->getDoctrine()->getManager()->flush();
    return new Response($product->getName());

    }
}