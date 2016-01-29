<?php include ("./template/inc.ini.php"); ?>



<div id="internas">


<h1>Contacto</h1>

 <form id="form1" name="form1" method="post" action="form.php">
         <dl class="contato">
          <dt>Nombre</dt>
          <dd>
            <input type="text" name="txtNomee" id="txtNomee" class="formulad" style="width:400px; padding:5px; border:1px solid #CCC"/>
          </dd>
          <dt>Teléfono</dt>
          <dd>
            <input type="text" name="txtTelefone" id="txtTelefone" class="formulad" style="width:400px; padding:5px;border:1px solid #CCC"/>
          </dd>
          <dt>mail</dt>
          <dd>
            <input type="email" name="txtEmail"  class="formulad" style="width:400px;padding:5px; border:1px solid #CCC"/>
          </dd>
          <dt>Sujeto</dt>
          <dd>
            <input type="text" name="txtAssunto" id="txtAssunto" class="formulad" style="width:400px;padding:5px; border:1px solid #CCC"/>
          </dd>
          <dt>Mensaje</dt>
          
          <dd>
            <textarea name="txtMensagem" rows="5" id="txtMensagem" style="width:400px;padding:5px; border:1px solid #CCC"></textarea>
          </dd>
          <div class="clear"></div>
          <label>
            <input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar" style="padding:3px; padding:5px;background:#000; color:#FFF; margin-top:10px"/>
          </label>
          <label>
            <input type="reset" name="btnLimpar" id="btnLimpar" value="Borrar" style="padding:3px; padding:5px;background:#000; color:#FFF"/>
          </label>
        </dl>
      </form>




<dl class="ContatoEnd">

       <dt>Dirección: </dt>

<dd>Estrada do Santana, 20, Cacuia, Nova Iguaçu - RJ, Cep: 26082-035 </dd> 

 <dt>Mail: </dt>

<dd>diretoria@crstands.com.br / atendimento@crstands.com.br</dd> 

<dt>Teléfono:</dt>

<dd>+55 (21) 3776-9781 / +55 (21) 3776-9981</dd>




</dl>



<div class="clear"></div>
</div>

<?php include ("./template/inc.fim.php"); ?>