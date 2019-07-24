<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include('../conecta.php');
include('../view/logica.php');
include "../PHPMailer-master/PHPMailerAutoload.php"; 

$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$torcedores = buscaTorcedores($conn);
$a = '';
foreach ($torcedores as $torcedor):
    $a .= $torcedor['torcedor_email'] . ', ';
    //print_r($emails);
    //return $emails;
endforeach;
//print_r($a);

$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->Host = "mail.meusitemodelo.com"; 
$mail->Port = 25;
$mail->SMTPAuth = true; 
$mail->Username = 'rugby@meusitemodelo.com'; 
$mail->Password = 'senha-do-email'; 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
// $mail->SMTPDebug = 2; 

$mail->From = "rugby@rugby.com";
// Seu nome 
$mail->FromName = "AllBlacks"; 
// Define o(s) destinatário(s) 
foreach ($torcedores as $torcedor){
  $mail->AddAddress($torcedor['torcedor_email']);   
}
// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 

// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 

// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 

// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 

// Assunto da mensagem 
$mail->Subject = $assunto; 

// Corpo do email 
$mail->Body = $mensagem; 

// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 

// Envia o e-mail 
$enviado = $mail->Send(); 

//$mail->SMTPDebug = 2;
// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
   echo "<script type=\"text/javascript\">
			alert(\"Altrado com sucesso!\");
			window.location = \"torcedor-lista.php\"
                      </script>"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 


 








