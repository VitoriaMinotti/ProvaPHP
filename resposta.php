<?php
include "conexao.php";
include "header.php";


$query = "select * from perguntas";
$resultado = mysqli_query($conexao, $query);
?>  

<div style="padding: 10px;" class="col-9 mt-5 bg-light border rounded container-fluid">
<h3 >Respostas</h3>
<br>
<form action="resposta.php" method="post" >
  <?php while($linha = mysqli_fetch_array($resultado))
    {
      echo "<td>".$linha['id']."- </td>";
      echo "<td>".$linha['pergunta']."</td><br>";
      ?> 
    <?php
     
      $queryAlternativas = "select * from alternativas where pergunta_id=".$linha['id']."";
      $resultadoAlternativa = mysqli_query($conexao, $queryAlternativas);

      $queryAltCorreta = "select * from alternativas where pergunta_id=".$linha['id']." and correta = 1";
      $resultadoAltCorreta = mysqli_query($conexao, $queryAltCorreta);

      while($resposta = mysqli_fetch_array($resultadoAlternativa))
      {
             echo "<p>" .$resposta['alternativa']."</p>";
        while($correto = mysqli_fetch_array($resultadoAltCorreta))
        {
          if ( $_POST['correto'.$linha['id']] == $correto['alternativa'] ) { 
            echo "<p style = 'background-color: green'> " .$resposta['alternativa']. "</p>";
          }
          else{
            echo "<p style = 'background-color: red;margin-bottom:0 '> " .$resposta['alternativa']. "</p>";
          }
        }
    }
  }
    echo "<button><a href='.' style='text-decoration:none; color: black'>Voltar</a></button>";
    echo "</form>";
  ?>
</div>
