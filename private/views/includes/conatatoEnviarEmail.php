<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer(true);

    # Arquivo de configuração
    @include "../../core/config.php";
    
    # Obter formulário
    if(isset($_POST['btn-enviar'])){

        $nome     = $_POST['nome'];
        $email    = $_POST['email'];
        $assunto  = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        $telefone = $_POST['telefone'];
        $telegram = $_POST['telegram'];
        $whatsapp = $_POST['whatsapp'];

        # Verificar se os campos obrigatórios estão vazios
        if($nome == "" || $nome == null){
            header("Location: /contato?status=campo_vazio");
            die();
        }

        if($email == "" || $email == null){
            header("Location: /contato?status=campo_vazio");
            die();
        }

        if($assunto == "" || $assunto == null){
            header("Location: /contato?status=campo_vazio");
            die();
        }

        if($mensagem == "" || $mensagem == null){
            header("Location: /contato?status=campo_vazio");
            die();
        }

        if($telefone != ""){
            if( $telegram == 'on'){
                $telegram = "Sim";
            }else{
                $telegram = "Não";
            }

            if( $whatsapp == 'on'){
                $whatsapp = "Sim";
            }else{
                $whatsapp = "Não";
            }

        }else{
            $telefone = "Não informado";
            $telegram = "Não";
            $whatsapp = "Não";
        }


        # Tenta enviar a mensagem
        try{
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Username = USEREMAIL;
            $mail->Password = PASSEMAIL;
            $mail->Port = 587;

            $mail->setFrom(USEREMAIL);
            $mail->addReplyTo(USEREMAIL);
            $mail->addAddress(USEREMAIL, "Hudisson");
            $mail->addAddress(USEREMAIL, 'Site-Portifólio'); 
            $mail->addCC(USEREMAIL, 'Cópia');
            $mail->addBCC(USEREMAIL, 'Cópia Oculta');

            $mail->isHTML(true);
            $mail->Subject = $assunto;
            $mail->Body    = "
                <h3>$assunto</h3><br>
                <p>$mensagem</p><br>
                <h5>Contato:</h5>
                <b>Nome: $nome</b><br>
                <b>E-mail:  $email</b><br>
                <b>Telefone:  $telefone</b><br>
                <b>Telegram:  $telegram </b><br>
                <b>Whatsapp:  $whatsapp </b><br>
            ";
           $mail->send();
           header("Location: /contato?status=sucesso");

        }catch(Exception $e){
            echo "Erro: {$mail->ErrorInfo}";
        }
    }

?> 