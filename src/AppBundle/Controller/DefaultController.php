<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->findProductsForShow();
        $categories = $em->getRepository('AppBundle:Category')->findAll();
        return $this->render('default/index.html.twig', array(
            'products' => $products,
            'categories' => $categories
            )
        );
    }

    /**
     * @Route("/admin", name="adminpage")
     */
    public function adminAction()
    {
        return $this->redirectToRoute('product_index');
    }
}
