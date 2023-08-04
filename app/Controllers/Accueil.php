<?php

namespace App\Controllers;


use Config\Database;

class Accueil extends BaseController
{
    /**
     * @var \Twig\Environment
     */
    protected $twig;



    /**
     * @var \CodeIgniter\Session\Session
     */
    protected $session;




    public function __construct()
    {
        $appPaths = new \Config\Paths();
        $appViewPaths = $appPaths->viewDirectory;
        $loader = new \Twig\Loader\FilesystemLoader($appViewPaths);
        $this->twig = new \Twig\Environment($loader, [
            'cache' => false,
        ]);
        $this->session = \Config\Services::session();

    }

    public function accueil()
    {

            return $this->twig->render('accueil.html.twig', [

            ]);
   
    }


}