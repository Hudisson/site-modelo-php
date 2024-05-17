<?php  $this->view("includes/header"); ?>
<?php  $this->view("includes/nav-menu"); ?>

<?php
    $projetos = [
        0 => [
            "Projeto 1",
            "Essa é uma pequena descrição do Projeto 1 e de sua tecnologias",
            "https://github.com/Hudisson"
        ],

        1 => [
            "Projeto 2",
            "Essa é uma pequena descrição do Projeto 2 e de sua tecnologias",
            "https://github.com/Hudisson"
        ],

        2 => [
            "Projeto 3",
            "Essa é uma pequena descrição do Projeto 2 e de sua tecnologias",
            "https://github.com/Hudisson"
        ],

        3 => [
            "Projeto 4",
            "Essa é uma pequena descrição do Projeto 4 e de sua tecnologias",
            "https://github.com/Hudisson"
        ]
    ];

    // echo"<pre><br><br><br><br><br><br>";
    // var_dump($projetos);
?>

<div class="container div-main">
    <div class="row">
        <?php for($cont = 0; $cont < sizeof($projetos); $cont++): ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $projetos[$cont][0];?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text"><?php echo $projetos[$cont][1];?></p>
                <a href="<?php echo $projetos[$cont][2] ?> " target="_blank" class="btn link_projeto">
                    Ver projeto 
                    <span><i class="fa-brands fa-github"></i></span>
                </a>
            </div>
        </div>
        <?php endfor ?>
    </div>
</div>

<?php if(sizeof($projetos) < 5): ?>
    <style>
        .div-preenchimento{ width: 100%; height: 250px;}
    </style>
    <div class="div-preenchimento"></div>
<?php endif ?>

<?php   $this->view("includes/footer"); ?>