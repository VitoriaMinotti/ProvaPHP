<?php
include "conexao.php";
include "header.php";

$query = "select * from perguntas";
$resultado = mysqli_query($conexao, $query);
?>  

<div style="padding: 10px;" class="col-9 mt-5 bg-light border rounded container-fluid">
<h3 >Responda</h3>
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
      while($resposta = mysqli_fetch_array($resultadoAlternativa))
    {

      echo"<input type='radio' name='correto".$linha['id']."' value=".$resposta['alternativa']."> ".$resposta['alternativa']."";
      echo "<br>";
      
      ?>
      <?php
    }

      ?><br>     
      <?php
    }
    
    echo "<button type='submit'>Enviar</button>";
    echo "<button><a href='.' style='text-decoration:none; color: black'>Voltar</a></button>";
    echo "</form>";
  ?>

</div>
