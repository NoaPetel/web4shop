<?php

require_once 'WelcomeController.php';
require_once 'ProductsController.php';
class Router
{
    private $twig;
    private $url;
    private $ctrlWelcome;
    private $ctrlProducts;
    public function __construct($twig)
    {
        $this->twig = $twig;
        $this->ctrlWelcome = new WelcomeController();
        $this->ctrlProducts = new ProductsController();
    }

    public function route()
    {
        try {
            if (isset($_GET['page'])) {
                
                switch ($_GET['page']) {
                    case 'default':
                        $this->ctrlWelcome->render($this->twig);
                    case 'products':
                        $this->ctrlProducts->render($this->twig);
                }
            } else {
                $this->ctrlWelcome->render($this->twig);
            }

        } catch (Exception $e) {
            throw new Exception("Action invalide");
        }
    }


}
