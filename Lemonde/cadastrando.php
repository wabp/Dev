<html>
    <head>
        <title>Enviar</title>
        <script type="text/javascript" src="javascript/javascript.js"></script>

        <script>
            mensagemEnvia();
        </script>

        <?php
        $host = "lemondeserver.no-ip.biz";
        $user = "root";
        $pass = "";
        $banco = "cadastro";
#$conexao = mysql_connect($host, $user, $pass)or die(mysql_error());
#mysql_select_db($banco) or die(mysql_error());

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $empresa = $_POST['empresa'];
        $telefone = $_POST['telefone'];
        $cidade = $_POST['cidade'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $comercial = $_POST['comercial'];
#$sql = mysql_query("INSERT INTO usuarios(nome, sobrenome, pais, estado, cidade, email, senha)
#VALUES('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')");



        /* Configuramos o e-mail para o qual serão enviadas as informações */

        $seuemail = "arianelb@bol.com.br"; /* email de destino */

        $assunto = "Contato do Site"; /* assunto padrão do email(não o digitado pelo úsuario) */

        /* Configuramos os cabeçalhos do e-mail */
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; /* para o envio com formatação HTML. Charset po ser iso-8859-1 também */
        $headers .= "From: $seuemail \r\n"; /* Para "seu email" */


        /* Configuramos o conteúdo do e-mail */
        $conteudo = "<strong>Nome:</strong> $nome<br />"; /* vai para o seu email o que foi digitado no campo "nome" */
        $conteudo .= "<strong>Email:</strong> $email<br />"; /* vai para o seu email o que foi digitado no campo "email" */
        $conteudo .= "<strong>Assunto:</strong> $assunto<br />"; /* vai para o seu email o que foi digitado no campo "assunto" */
        $conteudo .= "<strong>Tel. Comercial:</strong> $comercial<br />";
        $conteudo .= "<strong>Celular:</strong> $telefone<br />"; /* vai para o seu email o que foi digitado no campo "mensagem" */
        $conteudo .= "<strong>Empresa:</strong> $empresa<br />";
        $conteudo .= "<strong>Cidade:</strong> $cidade<br />";
        $conteudo .= "<strong>Mensagem:</strong> $sobrenome<br />";



        mail($seuemail, $assunto, $conteudo, $headers);
        
        ?>
        <META HTTP-EQUIV="REFRESH" CONTENT="1; URL=http://barrosoaj.com.br/cadastro.php">
        <?
        
        
        ?>

    </body>
</html>
