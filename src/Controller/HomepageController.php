<?php

namespace App\Controller;

use App\Entity\ContenuAdministrable;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function showHomepage(): Response
    {
        $contenus = $this->getDoctrine()->getRepository(ContenuAdministrable::class)->findAll();

        return $this->render('homepage.html.twig', [
            'contenus' => $contenus,
        ]);
    }
}