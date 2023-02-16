<?php


namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    #[Route(path: '/admin', name: 'admin_')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
    }
}

// Path: src/Controller/Admin/MainController.php