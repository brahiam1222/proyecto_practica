<?php

if (!isset($_SESSION["validar"])) {

  echo '<script> window.location = "index.php";</script>';
  return;
} else {
  if ($_SESSION["validar"] != "ok") {
    echo '<script> window.location = "plantilla.php";</script>';
    return;
  }
}



?>

<iframe title="Informe Precipitacion  y Sigatoka - Lluvia" width="1024" height="612" src="https://app.powerbi.com/view?r=eyJrIjoiNzlhNDZjN2ItYjY4NS00ZWY4LTliZDAtNzM2ODc0ZjFlNDI0IiwidCI6ImI5NDc0NWY2LTExYjgtNDlkYi04NTdmLTI0MDFhY2U3ZDViOCIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>


<?php



?>