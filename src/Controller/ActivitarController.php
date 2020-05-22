<?php
// src/Controller/ActivitarController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActivitarController extends AbstractController
{
    /**
    * @Route("/activitar/")
    */
    public function index()
    {
        return $this->render('activitar-master/index.html.twig');
    }
}