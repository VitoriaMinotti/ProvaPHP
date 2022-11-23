<?php
include "conexao.php";
include "header.php";

//mostrar as perguntas
if(isset($_POST) && !empty($_POST)){
    $pergunta = $_POST['pergunta'];
    $query = "INSERT INTO perguntas (pergunta) VALUES ('$pergunta')";
    $resultado = mysqli_query($conexao, $query);
}

$query = "select * from perguntas";
$resultado = mysqli_query($conexao, $query);
?>  

<div style="padding: 10px;" class="col-9 mt-5 bg-light border rounded container-fluid">
<h3 >Responda</h3>
<br>
  <?php while($linha = mysqli_fetch_array($resultado))
    {
      echo "<td>".$linha['id']."- </td>";
      echo "<td>".$linha['pergunta']."</td>";?><br><?php
    }
  ?>
</div>

<?php 
if(isset($_GET["pergunta_id"]) && !empty($_GET["pergunta_id"]))
{
$pergunta_id = $_GET["pergunta_id"];
$query = "select * from perguntas where id = $pergunta_id";
$resultado = mysqli_query($conexao,$query);

$pergunta = mysqli_fetch_array($resultado)["pergunta"];

$query = "select * from alternativas where pergunta_id = ".$pergunta_id;
$resultadoAlternativas = mysqli_query($conexao,$query);

}
else
{
  //  header("Location: perguntas.php");
}

  while($linha = mysqli_fetch_array($resultadoAlternativas))
    {
      echo "".$linha['alternativa']."<br>";
    }
?>