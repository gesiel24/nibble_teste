<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:900px;min-width:150px" method="post"><div class="title"><h2>Novo Cliente</h2></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Dados Pessoais</h3></div>
	<div class="element-name<?php frmd_add_class("name"); ?>"><label class="title"><span class="required">*</span></label><span class="nameFirst"><input placeholder=" Nome" type="text" size="8" name="name[first]" required="required"/><span class="icon-place"></span></span><span class="nameLast"><input placeholder=" Sobrenome" type="text" size="14" name="name[last]" required="required"/><span class="icon-place"></span></span></div>
	<div class="element-number<?php frmd_add_class("number"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" min="11" max="11" name="number" required="required" placeholder="CPF" value=""/><span class="icon-place"></span></div></div>
	<div class="element-phone<?php frmd_add_class("phone"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" required="required" placeholder="Telefone" value=""/><span class="icon-place"></span></div></div>
	<div class="element-email<?php frmd_add_class("email"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="email" name="email" value="" required="required" placeholder="Email"/><span class="icon-place"></span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Endereço Principal</h3></div>
	<div class="element-select<?php frmd_add_class("select1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="medium"><span><select name="select1" required="required">

		<option value="Comercial">Comercial</option>
		<option value="Residencial">Residencial</option>
		<option value="Correspondência">Correspondência</option>
		<option value="Combrança">Combrança</option>
		<option value="Rural">Rural</option>
		<option value="Casa de praia">Casa de praia</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-number<?php frmd_add_class("number1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="small" type="text" min="0" max="100" name="number1" required="required" placeholder="CEP" value=""/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input" required="required" placeholder="Logradouro"/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number2"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="small" type="text" min="0" max="100" name="number2" required="required" placeholder="Número" value=""/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input2" placeholder="Complemento"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input1" required="required" placeholder="Cidade"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="small"><span><select name="select" required="required">

		<option value="        AC">        AC</option>
		<option value="       AL">       AL</option>
		<option value="       AP">       AP</option>
		<option value="       AM">       AM</option>
		<option value="       BA">       BA</option>
		<option value="       CE">       CE</option>
		<option value="       DF">       DF</option>
		<option value="       ES   ">       ES   </option>
		<option value="      GO">      GO</option>
		<option value="       MA">       MA</option>
		<option value="       MS">       MS</option>
		<option value="       MT">       MT</option>
		<option value="       MG ">       MG </option>
		<option value="       PA">       PA</option>
		<option value="       PB">       PB</option>
		<option value="       PR">       PR</option>
		<option value="       PE">       PE</option>
		<option value="       PI">       PI</option>
		<option value="       RJ">       RJ</option>
		<option value="       RN">       RN</option>
		<option value="       RS">       RS</option>
		<option value="       RO">       RO</option>
		<option value="       RR">       RR</option>
		<option value="       SC">       SC</option>
		<option value="       SP">       SP</option>
		<option value="       SE">       SE</option>
		<option value="       TO">       TO</option></select><i></i><span class="icon-place"></span></span></div></div></div>
<div class="submit"><input type="submit" value="Salvar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>