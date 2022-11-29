<?php
include "conexao.php";
include "header.php";

if(isset($_POST) && !empty($_POST)){
    $pergunta = $_POST['pergunta'];
    $query = "INSERT INTO perguntas (pergunta) VALUES ('$pergunta')";
    $resultado = mysqli_query($conexao, $query);
}

$query = "select * from perguntas";
$resultado = mysqli_query($conexao, $query);
?>  

<body style="background-color: #D8BFD8;">
  <div class="col-7 mt-5 mx-auto bg-light border rounded container-fluid">
    
    <div class="mx-auto mt-3" style="width: 40%">
      <h3 >Cadastro De Perguntas</h3>
    </div>

      <form class="table table-hover table-striped mx-auto mt-3" style="width: 65%" action="perguntas.php" method="post">
        <div>Digite aqui a sua pergunta:</div>
        <input class="form-control" type="text" name="pergunta"/>
        <br>
        
        <div class="d-flex">
            <button type="submit" class="btn btn-success">Salvar</button>
          </div>
          <br>
      </form>

    <table class="table table-hover table-striped mx-auto" style="width: 65%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Pergunta</th>
          <th></th>
        </tr>
      </thead>

    <tbody>
      <?php while($linha = mysqli_fetch_array($resultado))
      {
          echo "<tr>";
          echo "<td>".$linha['id']."</td>";
          echo "<td>".$linha['pergunta']."</td>";
          echo"<td><button type='button' class='ms-5 btn btn-warning'><a href='./alternativas.php?pergunta_id=".$linha['id']." 'style='text-decoration:none; color: white'>Alternativas</a></button></td>";
          echo "</tr>";
      }
      ?>
    </tbody>
    </table>
</div>
</body>