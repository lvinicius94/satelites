<div class="logo-top">
  <a href="<?=$url?>" title="Início">
    <img src="imagens/img-home/logo.png" alt="Logo" title="Logo"></a>
</div>
<ul>
  <li><a class="nav-link nav-link-ltr" href="<?=$url?>" title="Página inicial"><span class="fas-icons"><i
          class="fas fa-home"></i></span>Início</a></li>
  <li><a class="nav-link nav-link-ltr" href="<?=$url?>sobre-nos"><span class="fas-icons"><i
          class="fas fa-user"></i></span>Sobre Nós</a></li>
  <li class="dropdown"><a href="<?=$url?>produto" title="Produtos"><span class="fas-icons"><i
          class="fas fa-box-open"></i></span>Produtos</a>
    <ul class="sub-menu">
      <? include('inc/sub-menu.php');?>
    </ul>
  </li>

  <!--<li class="dropdown"><a href="<?=$url?>informacoes" title="Informações"><span class="fas-icons"><i
          class="fas fa-info-circle"></i></span>Informações <span class="fas-icons-down"><i
          class="fa fa-angle-down"></i></span></a>
    <ul class="sub-menu sub-menu-mpi">
      <? include('inc/sub-menu-info.php');?>
    </ul>
  </li>-->