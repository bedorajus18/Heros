<?php

namespace App\Controller;

use App\Services\HeroService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeroController extends AbstractController
{
    /**
     * @Route("/hero", name="hero")
     */
    public function index(HeroService $heroService): Response
    {
        $listeHeros = $heroService->getList();
        return $this->render('hero/index.html.twig', [
            'controller_name' => 'HeroController',
            'listeHeros'=>$listeHeros
        ]);
    }
}
