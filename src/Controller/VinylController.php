<?php

namespace App\Controller;

use App\Repository\VinylMixRepository;
use App\Service\MixRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    public function __construct(
        private bool $isDebug,
        private MixRepository $mixRepository
    )
    {}

    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];

        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks,
        ]);
    }

    #[Route('/browse/{slug}', name: 'app_browse')]
<<<<<<< HEAD
    public function browse(VinylMixRepository $mixRepository, string $slug = null): Response
=======
    public function browse(string $slug = null): Response
>>>>>>> 0b28922085d87e3706366450fa2b8c3e4a4f0ca8
    {
        dump($this->isDebug);
        $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true) : null;

<<<<<<< HEAD
        $mixes = $mixRepository->findBy([], ['votes' => 'DESC']);
=======
        $mixes = $this->mixRepository->findAll();
>>>>>>> 0b28922085d87e3706366450fa2b8c3e4a4f0ca8

        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre,
            'mixes' => $mixes,
        ]);
    }
}
