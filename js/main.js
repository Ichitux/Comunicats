/* global $ */
$(function() {
  'use strict';

  $('#selectComunicat').change(function () {
    if ($('#selectComunicat').val() == "com2") {
      $('#menu2').removeClass('hidden');
    } else {
      $('#menu2').addClass('hidden');
      $('#menu3').addClass('hidden');
      $('#segonComunicat').val('');
      $('#selectSubclass').val('noAlias');
    }
  });

  $('#segonComunicat').change(function () {
    if ($('#segonComunicat').val() == "comSta") {
      $('#menu3').removeClass('hidden');
    } else {
      $('#menu3').addClass('hidden');
      $('#selectSubclass').val('noAlias');
    }
  });

  $('#dataMigracio').datetimepicker({
    locale: 'es',
    ignoreReadonly: true,
    format: 'DD/MM/YYYY',
  });

  $('#formComs').submit(function (event) {
    event.preventDefault();
    var formData = $(this).serialize();
    console.log('Datos del formulario', formData);
    $.ajax({
      url: 'php/main.php',
      method: 'POST',
      data: formData,
    }).done(function (response) {
      console.log('Todo chachi', response);
    }).fail(function () {
      console.log('Uuuuu el server cascó =o!!');
    });
  });
});
