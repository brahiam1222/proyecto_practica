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

<iframe title="Lluvias por mes - Página 1" width="600" height="373.5" src="https://app.powerbi.com/view?r=eyJrIjoiMDAxNjNhODAtMmQ2Yy00NzRlLThmMDEtODExMWUzYzRhMTcyIiwidCI6ImI5NDc0NWY2LTExYjgtNDlkYi04NTdmLTI0MDFhY2U3ZDViOCIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>


<?php



?>