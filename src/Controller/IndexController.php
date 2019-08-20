<?php

namespace App\Controller;

use Pianissimo\Component\Routing\Annotation\Route;
use Pianissimo\Component\Framework\ControllerService;
use Pianissimo\Component\Framework\Response;

class IndexController
{
    /**
     * @var ControllerService
     */
    private $controllerService;

    public function __construct(
        ControllerService $controllerService
    ) {
        $this->controllerService = $controllerService;
    }

    /**
     * @Route(path="", name="app_home")
     */
    public function index(): Response
    {
        return $this->controllerService->render('index.html.twig');
    }
}
