<?php
include "conexao.php";
include "header.php";

$query = "select * from perguntas";
$resultado = mysqli_query($conexao, $query);
?>  

<body style="background-color: #D8BFD8;">
  <div class="col-6 mt-5 mx-auto bg-light border rounded container-fluid">
    
    <div class="mx-auto mt-3" style="width: 20%">
      <h3 >Responda</h3>
    </div>

    <form class="p-3 m-4 p-5 mx-auto" action="resposta.php" method="post" >
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
    }?>
    
    <div class="d-flex">
      <button type="submit" class="ms-3 btn btn-success">Salvar</button>
      <button type="button" class="ms-3 btn btn-warning"><a href="index.php" style="text-decoration:none; color: white">Voltar</a></button>
    </div>
    <?php
    echo "</form>";
  ?>
</div>
</body>