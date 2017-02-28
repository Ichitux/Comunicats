<!DOCTYPE html>
<html>

<head>
  <title>Olakease</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
</head>

<body>

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

      <!-- Datepicker -->
      <div id="fecha" class="form-group">
        <label class="col-md-4 control-label" for="dataMigracio">Data migració</label>
        <div class="col-md-4">
          <div class='input-group date' id='dataMigracio'>
            <input type='text' class="form-control" placeholder="Ex: 12/12/2012" readonly/>
            <span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
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
      <div id="menu2" class="hidden">
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
      </div>
      <!-- Select 3 -->
      <div id="menu3" class="hidden">
        <div class="form-group">
          <label class="col-md-4 control-label" for="selectSubclass">Casuístiques</label>
          <div class="col-md-4">
            <select id="selectSubclass" name="selectSubclass" class="form-control">
              <option value="noAlias">Normal</option>
              <option value="siAlias">Igniz: Alias de domini</option>
            </select>
          </div>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/moment.js/2.17.1/moment-with-locales.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>