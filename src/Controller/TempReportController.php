<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TempReportController extends AbstractController
{
    /**
     * @Route("/temp/report", name="temp_report")
     */
    public function index()
    {
        return $this->render('temp_report/index.html.twig', [
            'controller_name' => 'TempReportController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('temp_report/home.html.twig', [
            "title"     => "bienvenue sur la page HOME"
        ]);
    }

    /**
     * @Route("/baptiste", name="baptiste")
     */
    public function baptiste()
    {
        return $this->render("temp_report/baptisteTemp.html.twig");
    }
    /**
     * @Route("/camille", name="camille")
     */
    public function camille()
    {
        return $this->render("temp_report/camilleTemp.html.twig");
    }
    /**
     * @Route("/christian", name="christian")
     */
    public function christian()
    {
        return $this->render("temp_report/christianTemp.html.twig");
    }
}
