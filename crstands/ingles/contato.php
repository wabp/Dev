<?php include ("./template/inc.ini.php"); ?>



<div id="internas">


<h1>Contacts</h1>

 <form id="form1" name="form1" method="post" action="form.php">
         <dl class="contato">
          <dt>Name</dt>
          <dd>
            <input type="text" name="txtNomee" id="txtNomee" class="formulad" style="width:400px; padding:5px; border:1px solid #CCC"/>
          </dd>
          <dt>Telephone Number</dt>
          <dd>
            <input type="text" name="txtTelefone" id="txtTelefone" class="formulad" style="width:400px; padding:5px;border:1px solid #CCC"/>
          </dd>
          <dt>E-mail</dt>
          <dd>
            <input type="email" name="txtEmail"  class="formulad" style="width:400px;padding:5px; border:1px solid #CCC"/>
          </dd>
          <dt>Subject</dt>
          <dd>
            <input type="text" name="txtAssunto" id="txtAssunto" class="formulad" style="width:400px;padding:5px; border:1px solid #CCC"/>
          </dd>
          <dt>Message</dt>
          
          <dd>
            <textarea name="txtMensagem" rows="5" id="txtMensagem" style="width:400px;padding:5px; border:1px solid #CCC"></textarea>
          </dd>
          <div class="clear"></div>
          <label>
            <input type="submit" name="btnEnviar" id="btnEnviar" value="Send" style="padding:3px; padding:5px;background:#000; color:#FFF; margin-top:10px"/>
          </label>
          <label>
            <input type="reset" name="btnLimpar" id="btnLimpar" value="Clean" style="padding:3px; padding:5px;background:#000; color:#FFF"/>
          </label>
        </dl>
      </form>




<dl class="ContatoEnd">

       <dt>Address: </dt>

<dd>Estrada do Santana, 20, Cacuia, Nova Iguaçu - RJ, Cep: 26082-035 </dd> 

 <dt>Mail: </dt>

<dd>diretoria@crstands.com.br / atendimento@crstands.com.br</dd> 

<dt>Phone:</dt>

<dd>+55 (21) 3776-9781 / +55 (21) 3776-9981</dd>




</dl>



<div class="clear"></div>
</div>

<?php include ("./template/inc.fim.php"); ?>