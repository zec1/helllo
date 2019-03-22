<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ControllerlolController extends AbstractController
{
    /**
     * index method
     * @Route("/controllerlol", name="controllerlol")
     */
    public function index()
    {
        return $this->render('controllerlol/index.html.twig', [
            'controller_name' => 'ControllerlolController',
        ]);
    }
}
