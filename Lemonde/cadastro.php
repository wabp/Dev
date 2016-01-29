<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="css/Test.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/fornecedores.css" />
        <link rel="stylesheet" type="text/css" href="css/produtos.css" />
        <script type="text/javascript" src="javascript/javascript.js"></script>
        <title>Barroso AJ - Produtos Alimenticeos</title>
    </head>

    <body>

   <div id="menus" >
        <div id="menus1"><?php include ("menus.html") ?></div>
    </div>

      <br />
    <br />
    <br />

    <div id="login" style="margin-top: 2%">

        <form name="form" method="post" action="cadastrando.php" onSubmit="return validacao()">
            <label for="nome">Nome:</label> <input type="text" name="nome"class="txt bradius" /> <br /><br />
            <label for="sobrenome">Sobrenome:</label> <input type="text" name="sobrenome"class="txt bradius" /> <br /><br />
            <label for="email">Email:</label> <input type="email" name="email" class="txt bradius" /> <br /><br />
            <label for="Empresa">Empresa:</label> <input type="text" name="empresa" class="txt bradius"/><br /><br />
            <label for="comercial">Tel. Comercial:</label> <input type="text" name="comercial" class="txt bradius" onKeyPress="fone();" 
                                                                  maxlength="14" /><br /><br />
            <label for="telefone">Celular:</label> <input type="text" name="telefone" class="txt bradius" onKeyPress="celular();" 
                                                          maxlength="15" /><br /><br />

            <label for="mensagem">Mensagem:</label><textarea id="mensagem" class="txtmensagem bradius" cols="53" rows="5" name="mensagem"></textarea>
            <input type="submit" name="submit" value="enviar" class="sb bradius" style="margin-left: 22%" />
            <br>
            <br>
        </form>
    </div>

    <br /><br />
    <br />
    <br />
    <br />

        <div id="rodape">
        <div id="rodape1"><?php include ("rodape.html") ?></div>
    </div>
    </div>

</body>
</html>
