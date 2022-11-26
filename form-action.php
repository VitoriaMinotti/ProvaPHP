<?php
  if (isset($_POST['correto'])) {
    var_dump("escolheu " . $_POST['correto']);
    } else {
    var_dump("não escolheu nenhuma resposta");
  }
  var_dump($_POST);
?>