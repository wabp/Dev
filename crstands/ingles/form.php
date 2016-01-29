<?php
$date = date("d/m/Y h:i");

if ( strtolower($_SERVER['REQUEST_METHOD']) == 'post') 
{
	// ATIVAÇÃO
	$autoresposta					= '0';    // 0 = nao utilizar       1 = utilizar
	$emailmarketing					= '0';    // 0 = nao utilizar		1 = utilizar
	
    //CABEÇALHO - CONFIGURAÇÕES SOBRE SEUS DADOS E SEU WEBSITE
    $dominio_newsletter             = 'Seu newsletter';
    $nome_do_site                   = "CR Stands";
    $email_para_onde_vai_a_mensagem = "projetos@crstands.com.br";
    $exibir_apos_enviar             = "obrigado.php";
    $assunto_da_mensagem_original   = "Contato";
    
    // NAO ALTERAR
    $txtNome        = isset($_POST['txtNomee']) ? trim($_POST['txtNomee']) : '';
    $txtEmail       = isset($_POST['txtEmail']) ? trim($_POST['txtEmail']) : '';
    $txtTelefone    = isset($_POST['txtTelefone']) ? trim($_POST['txtTelefone']) : '';
    $txtAssunto     = isset($_POST['txtAssunto']) ? trim($_POST['txtAssunto']) : '';
    $txtMensagem    = isset($_POST['txtMensagem']) ? trim($_POST['txtMensagem']) : '';
    $hdCategoria    = isset($_POST['hdCategoria']) ? trim($_POST['hdCategoria']) : '';
    // NAO ALTERAR

    $configuracao_da_mensagem_original = "
    ENVIADO POR:\n
    Nome: $txtNome\n
    E-mail: $txtEmail\n
    Telefone: $txtTelefone\n
    Assunto: $txtAssunto\n
    Mensagem: $txtMensagem\n
    ENVIADO EM: $date";

    // adicionar para maladireta / email mkt isbrasil e disparar
    require('funcao_envio.php');
    //fim email mkt isbrasil
}
else
{
    $str_referer = isset($_SERVER['HTTP_REFERER']) ? trim($_SERVER['HTTP_REFERER']) : '';
    if (!  empty($str_referer))
    {
        header('Location:'.$str_referer);
        exit();
    }
    else
    {
        echo 'Acesso inválido.';
    }
}