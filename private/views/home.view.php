<?php  $this->view("includes/header"); ?>
<?php  $this->view("includes/nav-menu"); ?>


<div class="container div-main">
    <div class="content">
        <label>Olá, meu nome é</label>
        <h1>Hudisson Xavier</h1>
        <p class="desc-pro">Desenvolvedor Back-end</p>
        <p id="desc">
            Aqui você encontrará alguns dos meus projetos com links direto para os respectivos
            repositórios.
      </p>

      <div class="div-btn-contateme" id="div-btn-contateme">
        <a class="btn-contateme" href="contato">Entrar em contato</a>
      </div>

      <div class="div-btn-projetos">
        <a class="btn-projetos" href="projetos">Ver projetos</a>
      </div>
    </div>
</div>

<style>
    .div-preenchimento{ width: 100%; height: 150px;}
</style>

<div class="div-preenchimento"></div>

<?php   $this->view("includes/footer"); ?>