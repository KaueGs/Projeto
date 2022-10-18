<?php
if (isset($_POST['BTEnvia'])) {
 
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone']; 
 
 $email_remetente = "email@doseudominio";
 
 $email_destinatario = "email@querecebe"; 
 $email_reply = "$email"; 
 $email_assunto = "Contato formmail"; 
 
 $email_conteudo = "Nome = $nome \n"; 
 $email_conteudo .= "Email = $email \n";
 $email_conteudo .= "Telefone = $telefone \n"; 
 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo "</b>E-Mail enviado com sucesso!</b>"; 
 } 
 else{ 
 echo "</b>Falha no envio do E-Mail!</b>"; } 
 
} 
?>
 
 <form action="<? $PHP_SELF; ?>" method="POST"> 
 <p> 
 Nome:<br /> 
 <input type="text" size="30" name="nome"> 
 </p>   
 <p> 
 E-mail:<br /> 
 <input type="text" size="30" name="email"> 
 </p>   
 <p> 
 Telefone:<br /> 
 <input type="text" size="35" name="telefone"> 
 </p>   
 <p> 

         <input type="submit" name="BTEnvia" value="Enviar"> 
        </p>