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

<iframe title="Informe Precipitacion  y Sigatoka - Página 1" width="600" height="373.5" src="https://app.powerbi.com/view?r=eyJrIjoiNTBlMjlhODAtMjM5Mi00NzZlLTk2MzUtMGYwOGIyMTRhZWQyIiwidCI6ImI5NDc0NWY2LTExYjgtNDlkYi04NTdmLTI0MDFhY2U3ZDViOCIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>


<?php



?>