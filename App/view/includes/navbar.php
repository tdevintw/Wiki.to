<?php

   if (session_status() == PHP_SESSION_NONE) {

    session_start();
}
    if(isset($_SESSION['user_name'])){
        $session_setted = $_SESSION['user_name'];
    }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
  <a class="navbar-brand" href="./"><img src="images/Wiki.to_Logo.png" alt="logo" style="height:70px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto align-items-center">
      <li class="nav-item active">
        <a class="nav-link" href="./"><span style="font-weight:bold;font-size:2rem;">Wiki.to</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="Dashboard">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li>
    </ul>
    <?php 
    if(isset($session_setted)){
      echo "
      <form class='form-inline my-2 my-lg-0 justify-content-center' id ='auth-buttons' style='gap:20px'>
      <h3>welcome back ". $session_setted ."</a>
      <a href='Login/Logout' style='width:13rem' class='btn btn-outline-light my-2 my-sm-0'>Logout</a>
      </form>
      ";
    }else{
      echo "
      <form class='form-inline my-2 my-lg-0 justify-content-center' id ='auth-buttons' style='gap:20px'>
      <a href='Login' style='width:13rem' class='btn btn-outline-light my-2 my-sm-0'>LogIn</a>
      <a href='Signup' style='width:13rem' class='btn btn-outline-light my-2 my-sm-0'>SignIn</button></a>
      </form>
      ";
    }

    ?>
  </div>
</nav>