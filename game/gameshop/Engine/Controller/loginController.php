<?php

namespace Engine\Controller;
use Engine\View\View;
use Engine\View\Login;
use Engine\View\EmptyPage;
use Engine\View\VerkeerdWachtwoord;
use Engine\View\GeenToegang;
use Engine\Model\Gebruiker;

/**
 * Description of LoginController
 *
 * @author Yoran
 */
class LoginController implements iController
{
    
    private $view;
            
    public function __construct($entityManager)
    {
        if(isset($_SESSION['kr-user'])){
            header("Location: /Home");
        }
        if(isset($_POST['naam']))
        {
            $user = new Gebruiker();
            $users = $entityManager->getRepository("Engine\Model\Gebruiker")->findBy(array('klantnr'=>$_POST['naam']));
            $user = $users[0];
            if($user != null && $user->checkPass($_POST['pass'])){
                if($user->getToegang()){
                    $_SESSION['kr-user'] = $user;
                    header("Location: /gameshop/Home");
                    $this->view = new EmptyPage();
                }
                else{
                    $this->view = new GeenToegang();
                    header( "refresh:5;url=game/login" );
                }
            }
            else{
                $user = $entityManager->getRepository("Engine\Model\Gebruiker")->findBy(array('klantnr'=>0));
				$_SESSION['kr-user'] = $user;
				header("Location: /gameshop/Home");
				$this->view = new EmptyPage();
            }
        }
        else
        {
            $this->view = new Login();
        }
    }
    
    public function getView()
    {
        return $this->view;
    }

    public function setView(View $view)
    {
        $this->view = $view;
    }

}
