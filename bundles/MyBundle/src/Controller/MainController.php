<?php

namespace Acme\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="bundle_main")
     */
    public function index(): Response
    {
        return $this->render('@My/main/index.html.twig', [
            'app_name' => 'MyBundle',
        ]);
    }

    /**
     * @Route("/about", name="bundle_about")
     */
    public function about(): Response
    {
        return $this->render('@My/main/about.html.twig', [
            'app_name' => 'MyBundle',
        ]);
    }
}
