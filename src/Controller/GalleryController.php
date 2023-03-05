<?php

namespace App\Controller;

use App\Repository\GalleryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{

    public function nos_plats(GalleryRepository $galleryRepository): Response
    {
        return $this->render('gallery/index.html.twig', [
            'gallery' => $galleryRepository->findAll()
        ]);
    }
    
}


