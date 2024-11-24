<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;


class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home_redirect')]
    public function redirectToDefaultLanguage(): Response
    {
        // Redirige vers la page d'accueil avec la langue 'fr' par défaut
        return $this->redirectToRoute('app_home', ['_locale' => 'fr']);
    }

    #[Route('/{_locale}/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/{_locale}/tourism', name: 'tourism')]
    public function tourism(): Response
    {
        return $this->render('home/tourism.html.twig');
    }


    // // Route pour changer la langue et rediriger vers la même page
    // #[Route('/switch-language/{_locale}', name: 'switch_language', requirements: ['_locale' => 'en|fr'])]
    // public function switchLanguage(
    //     string $_locale,
    //     SessionInterface $session,
    //     Request $request
    // ): RedirectResponse {
    //     /// Obtenir l'URL actuelle
    //     $referer = $request->headers->get('referer'); // Référence l'URL précédente

    //     if (!$referer) {
    //         // Si aucune URL précédente, rediriger vers l'accueil
    //         return $this->redirectToRoute('home_index', ['_locale' => $_locale]);
    //     }

    //     // Extraire uniquement le chemin à partir de l'URL référente
    //     $path = parse_url($referer, PHP_URL_PATH);

    //     // Remplacer la langue dans le chemin
    //     $updatedPath = preg_replace('/^\/[a-z]{2}/', '/' . $_locale, $path);


    //     // Mettre à jour la langue dans la session
    //     $session->set('_locale', $_locale);

    //     // Rediriger vers la bonne URL
    //     return $this->redirect($updatedPath);
    //}
}
