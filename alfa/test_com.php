<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Plantilla d'enviament de correus</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	  <?php require('valor.php'); ?>
  <form class="form-horizontal" action="" method="post">
<fieldset>

<legend>Sistema d'enviament automàtic de correus</legend>

<!-- Correu client-->
<div class="form-group">
  <label class="col-md-4 control-label" for="destination">Destinatari</label>  
  <div class="col-md-4">
  <input id="destination" name="destination" type="text" placeholder="Correu de destí" class="form-control input-md" required="">
  </div>
</div>

<!-- Nom del domini-->
<div class="form-group">
  <label class="col-md-4 control-label" for="domini">Domini</label>  
  <div class="col-md-4">
  <input id="domini" name="domini" type="text" placeholder="Domini del client" class="form-control input-md" required="">
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
	<label class="col-md-4 control-label" for="selectComunicat">Seleccionar Comunicat</label>
		<div class="col-md-4">
			<select id="selectComunicat" name="selectComunicat" class="form-control">
				<option>Selecciona una opció</option>
				<option value="com1">Comunicat 1</option>
				<option value="com2">Comunicat 2</option>
			</select>
		</div>
	</div>
	<!-- Select 2 -->
<div class="form-group">
  <label class="col-md-4 control-label" for="segonComunicat">Segon comunicat</label>
  <div class="col-md-4">
    <select id="segonComunicat" name="segonComunicat" class="form-control">
		<option value=null>Selecciona una opció</option>
      <option value="comSta">Comunicat Standard</option>
      <option value="comCold">Comunicat Coldfusion</option>
      <option value="comDNS">Comunicat ZonaDNS Fora</option>
    </select>
  </div>
</div>
<!-- Select 3 -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectSubclass">Casuístiques</label>
  <div class="col-md-4">
    <select id="selectSubclass[]" name="selectSubclass" class="form-control">
      <option value="noAlias">Normal</option>
      <option value="siAlias">Igniz: Alias de domini</option>
    </select>
  </div>
</div>
<!-- Button -->
<div class="form-group">
	<label class="col-md-4 control-label" for="send">Enviar correu</label>
		<div class="col-md-4">
			<button id="send" type="submit" name="send" class="btn btn-primary">Enviar</button>
		</div>
</div>
</fieldset>
</form>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

