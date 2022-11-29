<?php
include "conexao.php";
include "header.php";

$query = "select * from perguntas";
$resultado = mysqli_query($conexao, $query);
?>  

<body style="background-color: #D8BFD8;">
  <div class="col-5 mt-5 mx-auto bg-light border rounded container-fluid">
    
    <div class="mx-auto mt-3" style="width: 60%">
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
    }
    
    echo "<button type='submit'>Enviar</button>";
    echo "<button><a href='.' style='text-decoration:none; color: black'>Voltar</a></button>";
    echo "</form>";
  ?>

</div>

        <!-- <form class="mx-auto mt-3" style="width: 40%" action="alternativas.php?pergunta_id=<?php echo $_GET["pergunta_id"]; ?>" method="post" >
          <input type="hidden" name="pergunta_id" value="<?php echo $_GET["pergunta_id"]; ?>"/>

          <div class="d-flex">
            <input class="form-control border rounded container-fluid" type="text" name="1"/>
            <input type="radio" name="correto" value="1">
          </div>
          <br>

          <div class="d-flex">
            <input class="form-control border rounded container-fluid" type="text" name="1"/>
            <input type="radio" name="correto" value="2">
            <br>
          </div>
          <br>

          <div class="d-flex">
            <input class="form-control border rounded container-fluid" type="text" name="1"/>
            <input type="radio" name="correto" value="3">
          </div>
          <br>

          <div class="d-flex">
            <input class="form-control border rounded container-fluid" type="text" name="1"/>
            <input type="radio" name="correto" value="4">
          </div>
          <br>

          <div class="d-flex">
            <input class="form-control border rounded container-fluid" type="text" name="1"/>
            <input type="radio" name="correto" value="5">
          </div>
          <br>

          <div class="d-flex">
            <button type="submit" class="btn btn-success">Salvar</button>
            <button type="button" class="btn btn-warning"><a href="." style="text-decoration:none; color: white">Voltar</a></button>
          </div>
          <br>
        </form> -->
      </div>
</div>
</body>


