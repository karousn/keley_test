<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FilterController extends Controller
{
    /**
     * @Route("/filterByTag", name="filter_by_tag")
     */
    public function filterAction(Request $request)
    {
        $data = $request->request->all();
        dump($data);die;
        // get tag list from data

        $products = $em->getRepository('AppBundle:Product')->getProductsByCats($taglist);
        // $categories = $em->getRepository('AppBundle:Category')->findAll();
        return $this->render('default/index.html.twig', array(
            'products' => $products,
            // 'categories' => $categories
            )
        );
    }
}
