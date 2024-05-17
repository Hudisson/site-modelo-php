<?php 

  $URL = getURL();

  function getURL(){
    $url = isset($_GET['url'])?$_GET['url']: "home";
    return explode("/",filter_var(trim($url,"/")),FILTER_SANITIZE_URL);
  }
  //
?>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top menu-main" id="menu-main">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">Portifólio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

      <ul class="navbar-nav nav-menu-ul">
        <li class="nav-item nav-menu-li">
          <a class="nav-link <?php echo strtolower($URL[0])== "home"? 'link-ativo':''; ?>" href="home">Home</a>
        </li>
        <li class="nav-item nav-menu-li">
          <a class="nav-link <?php echo strtolower($URL[0])== "sobre"? 'link-ativo':''; ?>" href="sobre">Sobre</a>
        </li>
        <li class="nav-item nav-menu-li">
          <a class="nav-link <?php echo strtolower($URL[0])== "projetos"? 'link-ativo':''; ?>" href="projetos">Projetos</a>
        </li>
        <li class="nav-item nav-menu-li">
          <a class="nav-link <?php echo strtolower($URL[0])== "contato"? 'link-ativo':''; ?>" href="contato">Contato</a>
        </li>
      </ul>

    </div>

  </div>
</nav>