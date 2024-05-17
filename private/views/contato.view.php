<?php  $this->view("includes/header"); ?>
<?php  $this->view("includes/nav-menu"); ?>

<?php include "includes/conatatoEnviarEmail.php"; ?>

<div class="container div-main">
    <div class="row">

        <p class="p-msg">Deixe-me sua mensagem</p>

        <div class="mb-3 col-6" id="div-form">
       

        <div class="alert alert-success alert-dismissible fade show hide" role="alert" id="divAlert">
            <strong>Obrigado por entrar em contato!</strong> Aguarde te retornarei em breve.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="alert alert-danger alert-dismissible fade show campo_vazio" role="alert" id="divAlertDanger">
            <strong>Atenção!</strong> Preencha todos os campos marcados com asterisco <b>(*)</b>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

            <form class="form-horizontal" action="contato" method="post" role="form" >

                <div class="div-inputs" id="div-input-name">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="nome" placeholder="Seu nome *">
                </div>

                <div class="meios-de-contato" id="meios-de-contato">
                    <div  class="div-inputs" id="div-input-email">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="E-mail para contato *" >
                    </div>

                    <div  class="div-inputs" id="div-input-telefone">
                        <label for="telefone">Telefone</label>
                        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone (opcional)">
                    </div>

                    <fieldset id="fieldset" class="fieldset" >
                        <input type="checkbox" name="telegram" id="telegram">
                        <label for="telegram" style="font-size: 14px;">Telegram</label>
                        <input type="checkbox" name="whatsapp" id="whatsapp" style=" margin-left: 20px;">
                        <label for="whatsapp" style="font-size: 14px;">WhatsApp</label>
                    </fieldset>
                </div>

                <div  class="div-inputs" id="div-input-assunto">
                    <label for="assunto">Assunto:</label>
                    <input class="form-control" type="text" name="assunto" id="assunto" placeholder="Assunto da mensagem *" >
                </div>

                <div  class="div-inputs" id="div-input-mensagem">
                    <label for="mensagem">Sua Mensagem</label>
                    <textarea class="form-control" name="mensagem" id="mensagem" cols="60" rows="10" placeholder="Deixe aqui sua mensagem *"></textarea>
                </div>
                <div class="div-btn-enviar">
                    <input class = "btn btn-outline-secondary my-3 btn-enviar" id="submit" name="btn-enviar" type="submit" value="Enviar">
                </div>
                <!-------------------------------------------------------------------------------------------->
            </form>
        </div>
    </div> 
</div>

<?php   $this->view("includes/footer"); ?>