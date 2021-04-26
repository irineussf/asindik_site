<?php
//Variáveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// Compo E-mail
  $arquivo = "
     <html>
   		Nome:$nome<br>
   		E-mail:<b>$email</b><br>
        Mensagem:$nome<br>
        Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b><br>
    </html>
  ";
//enviar

  // emails para quem será enviado o formulário
  $emailenviar = "vedder.1@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
	  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
	  echo " <meta http-equiv='refresh' content='10;URL=../index_teste.html'>";
	  } else {
	 	 $mgm = "ERRO AO ENVIAR E-MAIL!";
	 	 echo "";
  }
?>