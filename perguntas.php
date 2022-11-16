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
<div style="padding: 10px;" class="col-9 mt-5 bg-light border rounded container-fluid">
<h3 >Cadastre uma pergunta</h3>
<br>
  <form action="perguntas.php" method="post">
      <input type="text" name="pergunta"/>
      <br>
      <br>
      <button type="submit">Salvar</button>
      <button type="button" href="quiz.php">Voltar</button>
  </form>
</div>

<div style="padding: 10px;" class="col-9 mt-5 bg-light border rounded d-flex container-fluid">

<table>
<thead>
    <tr>
        <th>id</th>
        <th>Pergunta</th>
        <th></th>
    </tr>
</thead>
<tbody>
    <?php while($linha = mysqli_fetch_array($resultado))
    {
        echo "<tr style='border: 1px solid black'>";
        echo "<td>".$linha['id']."</td>";
        echo "<td>".$linha['pergunta']."</td>";
        echo "<td> <a href='./alternativas.php?pergunta_id=".$linha['id']." '>Lista de Alternativas </a> </td>";
        echo "</tr>";
     }
    ?>
</tbody>
</table>
</div>