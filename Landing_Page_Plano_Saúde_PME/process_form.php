<?php
	// Obtém os dados enviados pelo formulário
	$nome = $_GET['nome'];
	$email = $_GET['email'];

	// Define o destinatário, o remetente e o assunto do e-mail
	$destinatario = "a01nosila@gmail.com";
	$remetente = "a01nosila@gmail.com";
	$assunto = "Novo cadastro no site";

	// Monta o corpo do e-mail com as informações do formulário
	$mensagem = "Um novo usuário se cadastrou no site:\n\n";
	$mensagem .= "Nome: " . $nome . "\n";
	$mensagem .= "E-mail: " . $email . "\n";

	// Define os cabeçalhos do e-mail
	$headers = "From: " . $remetente . "\r\n";
	$headers .= "Reply-To: " . $remetente . "\r\n";
	$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

	// Envia o e-mail
	if (mail($destinatario, $assunto, $mensagem, $headers)) {
		echo "Cadastro realizado com sucesso!";
	} else {
		echo "Erro ao cadastrar. Tente novamente mais tarde.";
	}
?>