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

    #[Route('/osaka/ten-things-to-do-in-osaka', name: 'osakaTenThingsToDo')]
    public function osakaTenThingsToDo()
    {
        return $this->render('japanguide/osakaTenThingsToDo.html.twig', [
        ]);
    }

    #[Route('/japan/exploring-the-hidden-gems-of-japan', name: 'japanExploringHiddenGems')]
    public function japanExploringHiddenGems()
    {
        return $this->render('japanguide/japanExploringHiddenGems.html.twig', [
        ]);
    }
}