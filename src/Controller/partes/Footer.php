<?php

namespace App\Controller\partes;

use App\Entity\Artwork;
use App\Form\ArtworkType;
use App\Repository\ArtworkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Footer extends AbstractController
{
    
    public function footer_render(): Response
    {
        return $this->render('include/footer.html.twig', [
            'artworks' => "footer",
        ]);
    }

}