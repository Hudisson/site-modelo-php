<?php  $this->view("includes/header"); ?>
<?php  $this->view("includes/nav-menu"); ?>

<!-- <a href="/images/visualdicas_logo.png" download>Clique aqui </a> -->
<div class="container div-main">
<div class="content conteudo-sobre">

        <div class="div-img-avatar">
            <img src="https://avatars.githubusercontent.com/u/39242337?v=4" alt="Imagem do autor" id="img-avatar">
            <h2>Hudisson Xavier</h2>
        </div>
        
        <p id="p-about-intro">
            Olá, sou Hudisson Xavier, um desenvolvedor de software com expertise nas linguagem de programação Java, PHP, e C++ 
            e estou familiarizado com o desenvolvimento de aplicativos web e desktop.
        </p>

        <p id="p-about-habilidades">
            Sou apaixonado por resolver problemas complexos de maneira eficiente. Minha abordagem é 
            focada na entrega de soluções que atendam às necessidades específicas dos clientes.
        </p>

        <div class="div-hablidades">
            <h5>Habilidades</h5>
            <p>✔ Java, JEE, JSP, Spring Boot e Maven;</p>
            <p>✔ PHP e Composer;</p>
            <p>✔ Banco de Dados MySQL;</p>
            <p>✔ HTML5, CSS3, JS e Bootstrap;</p>
            <p>✔ C++ e QT-Creator;</p>
        </div>

        <p class="p-curriculo-info">Para mais informações entre em contato ou baixe o currículo atravez do botão abaixo.</p>

        <div class="div-btn-contateme div-btn-cv">
            <a href="assets/cv/cv_hudisson_xavier.txt" class="btn-contateme btn-cv" download >
                <i class="fa-solid fa-cloud-arrow-down"></i>
                Baixar Currículo
            </a>
        </div>    
    </div>
</div>

<style>
    .div-preenchimento{ width: 100%; height: 90px;}
</style>

<div class="div-preenchimento"></div>


<?php   $this->view("includes/footer"); ?>