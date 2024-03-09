<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JapanGuideController extends AbstractController
{
    #[Route('/', name: 'japanguide')]
    public function index()
    {
        return $this->render('japanguide/index.html.twig', [
        ]);
    }
}