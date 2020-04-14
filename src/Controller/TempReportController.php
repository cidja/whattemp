<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Temp;
use App\Repository\TempRepository;

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
        $repo = $this->getDoctrine()->getRepository(Temp::class);

        $result = $repo->findby(
            ["person" => "Baptiste"]
        );

        return $this->render("temp_report/baptisteTemp.html.twig", [
            "result"    => $result
        ]);
    }
    /**
     * @Route("/camille", name="camille")
     */
    public function camille(TempRepository $repo)  // on passe un repository directement dans la variable $repo
    {
        $result =  $repo->findBy(
            ["person"   => "Camille"]
        );
        return $this->render("temp_report/camilleTemp.html.twig",
            ["result"   => $result
            ]);
    }
    /**
     * @Route("/christian", name="christian")
     */
    public function christian(TempRepository $repo) // on passe un repository directement dans la variable $repo
    {
        $result = $repo->findBy(
            ["person"   => "Christian"]
        );
        return $this->render("temp_report/christianTemp.html.twig",[
            "result"    => $result
        ]);
    }
}
