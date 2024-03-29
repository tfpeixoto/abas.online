<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../lib/vendor/autoload.php';

$nome = filter_input(INPUT_POST, 'blog-nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'blog-email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'blog-telefone', FILTER_SANITIZE_SPECIAL_CHARS);
$url = filter_input(INPUT_POST, 'blog-url', FILTER_SANITIZE_URL);

if (isset($email)) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug  = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                             //Send using SMTP
        $mail->Host       = 'smtp-mail.outlook.com';                 //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                    //Enable SMTP authentication
        $mail->Username   = 'rafael.amorim@groupsoftware.com.br';    //SMTP username
        $mail->Password   = 'group@123';                             //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          //Enable implicit TLS encryption
        $mail->Port       = 587;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet    = 'UTF-8';

        //Recipients
        $mail->setFrom('rafael.amorim@groupsoftware.com.br', 'Formulário Abas');
        $mail->addAddress('contato@abas.online', 'Contato Abas');     //Add a recipient
        // $mail->addAddress('carlos.mendes@groupsoftware.com.br');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nova solicitacao de contato';
        $mail->Body    = "
            <h2>Temos uma nova solicitacao de contato!</h2>
            <span><strong>Alguem preencheu um formulario no seu blog nesse endereco:</strong> $url</span>
            <br>
            <span>Seguem abaixo os dados do solicitante.</span>
            <br>
            <p>Nome: $nome</p>
            <p>Email: $email</p>
            <p>Telefone: $telefone</p>
            ";
        $mail->AltBody = "
            <h2>Temos uma nova solicitacao de contato!</h2>
            \n\nAlguem preencheu um formulario no seu blog nesse endereco: $url
            \nSegue abaixo os dados do solicitante.
            \n\nNome: $nome
            \nEmail: $email
            \nTelefone: $telefone
        ";

        $mail->send();
        echo 'O email foi enviado com sucesso.';
    } catch (Exception $e) {
        echo "O email não foi enviado. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Formulário não foi enviado.";
}
