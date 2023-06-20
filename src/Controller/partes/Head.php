<?php

namespace App\Controller\partes;

use App\Entity\Artwork;
use App\Form\ArtworkType;
use App\Repository\ArtworkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Head extends AbstractController
{
    
    public function head_render(): Response
    {
        return $this->render('include/head.html.twig', [
            'artworks' => "header",
        ]);
    }

}