<?php

class SecuredController extends Controller
{

  function __construct()
  {
    session_start();
    if(isset($_SESSION['USER'])){
      if (time() - $_SESSION['LAST_ACTIVITY'] > 1000) {
        header('Location: '.LOGOUT);
        die();
      }
      $_SESSION['LAST_ACTIVITY'] = time();
    }
    else {
    //  header('Location: '.LOGIN);
    //  die();
    }
  }

  public function getUser() {
    if(isset($_SESSION['USER'])){
      return $_SESSION['USER'];
    }
    else{
      return false;
    }
    }

  }


 ?>
