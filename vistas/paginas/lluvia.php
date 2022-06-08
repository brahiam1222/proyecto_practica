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

<iframe title="Sigatoka y precipitaciones" width="1026" height="650" src="https://app.powerbi.com/view?r=eyJrIjoiYTE0MDc0MzUtM2Y2ZC00MzcxLWE5NzUtMjAxNjlkY2E2OWIwIiwidCI6ImI5NDc0NWY2LTExYjgtNDlkYi04NTdmLTI0MDFhY2U3ZDViOCIsImMiOjR9&pageName=ReportSection" frameborder="0" allowFullScreen="true"></iframe>


<?php



?>