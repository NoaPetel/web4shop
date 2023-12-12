<?php

require_once 'WelcomeController.php';

require_once 'BoissonsController.php';
require_once 'FruitsController.php';
require_once 'BiscuitsController.php';

class Router
{
    private $twig;
    private $url;
    private $ctrlWelcome;
    private $ctrlBoissons;
    private $ctrlFruits;
    private $ctrlBiscuits;
    public function __construct($twig)
    {
        $this->twig = $twig;
        $this->ctrlWelcome = new WelcomeController();
        $this->ctrlBoissons = new BoissonsController();
        $this->ctrlFruits = new FruitsController();
        $this->ctrlBiscuits = new BiscuitsController();
    }

    public function route()
    {
        try {
            if (isset($_GET['page'])) {

                switch ($_GET['page']) {
                    case 'default':
                        $this->ctrlWelcome->render($this->twig);
                        break;
                    case 'boissons':
                        $this->ctrlBoissons->render($this->twig);
                        break;
                    case 'biscuits':
                        $this->ctrlBiscuits->render($this->twig);
                        break;
                    case 'fruits':
                        $this->ctrlFruits->render($this->twig);
                        break;

                }
            } else {
                $this->ctrlWelcome->render($this->twig);
            }

        } catch (Exception $e) {
            throw new Exception("Action invalide");
        }
    }


}
