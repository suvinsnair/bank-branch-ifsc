<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    
    /**
     * @Route("/create-branch", name="create_bbranch")
     */
    public function createBranchNew()
    {
        return $this->render('home/new.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
