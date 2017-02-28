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
