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
	  
<?php
    $host = $_POST['domini'];
    $adress = $_POST['destination'];
if(isset($_POST['selectComunicat'])){
    $select1 = $_POST['selectComunicat'];
    switch ($select1) {
        case 'com1':
            $output = " Benvolgut client,</br>
Ens posem en contacte amb vosaltres en relació als serveis d'allotjament (hosting) que actualment teniu contractats amb ILIMIT (<a href=". $host ."> ". $host ."</a> ).</br>
 Us informem que el període de suport de la versió de PHP utilitzada a la plataforma d'allotjament on esteu ubicats ha acabat, el que suposa que des de fa temps no es fan actualitzacions de seguretat i això suposa un risc així com una possible causa d'incidències. </br>
</br>
A continuació enumerem les versions i la data en que va acabar el període oficial de suport de PHP:</br>
</br>
* PHP 4.x (període de suport caducat fa més de 6 anys)</br>
* PHP 5.2 (període de suport caducat fa més de 4 anys)</br>
* PHP 5.3 (període de suport caducat fa més de d'1 any)</br>
</br>
Amb aquest motiu, properament us contactarem per coordinar una migració del vostre allotjament de hosting cap a una nova plataforma amb més possibilitats de millora i actualitzacions de seguretat.</br>
</br>
Si teniu cap dubte estem a la vostra disposició, podeu contactar amb nosaltres per telèfon o bé per correu a suport@ilimit.com.</br>
</br>
Salutacions cordials.</br>";
            break;
        case 'com2': 
//					$select2 = $_POST['segonComunicat'];
//					switch($select2) {
//						case 'comSta':
//							break;
//						}
//						case 'comCold':
//							break;
//						case 'comDNS':
//							break;
				break;
        case 'def':
            echo '';
            break;
    }
}
echo $output;
echo $adress;
?>
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
			<select id="selectComunicat[]" name="selectComunicat" class="form-control">
				<option value="def">Selecciona una opció</option>
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
		<option value="">Selecciona una opció</option>
      <option value="comSta">Comunicat Standard</option>
      <option value="comCold">Comunicat Coldfusion</option>
      <option value="comDNS">Comunicat ZonaDNS Fora</option>
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

