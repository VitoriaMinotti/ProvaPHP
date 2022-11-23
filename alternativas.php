<?php
include "conexao.php";
include "header.php";

if(isset($_POST) && !empty($_POST)){
    $alternativa1 = $_POST["1"];
    $alternativa2 = $_POST["2"];
    $alternativa3 = $_POST["3"];
    $alternativa4 = $_POST["4"];
    $alternativa5 = $_POST["5"];

    $radioCorreto = $_POST["correto"];
            $correta1=0;
            $correta2=0;
            $correta3=0;
            $correta4=0;
            $correta5=0;
    switch ($radioCorreto) {
        case '1': $correta1=1; break;
        case '2': $correta2=1; break;
        case '3': $correta3=1; break;
        case '4': $correta4=1; break;
        case '5': $correta5=1; break;
    }

    $pergunta_id = $_POST['pergunta_id'];
    $query = "insert into alternativas(alternativa, pergunta_id, correta)values";
    $valores1 = "('$alternativa1',$pergunta_id, $correta1)";
    $valores2 = "('$alternativa2',$pergunta_id, $correta2)";
    $valores3 = "('$alternativa3',$pergunta_id, $correta3)";
    $valores4 = "('$alternativa4',$pergunta_id, $correta4)";
    $valores5 = "('$alternativa5',$pergunta_id, $correta5)";
    $query = $query.$valores1.",".$valores2.",".$valores3.",".$valores4.",".$valores5;
   // echo $query;
   $resultado = mysqli_query($conexao, $query);
}

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
?>

<div style="padding: 10px;" class="col-4 mt-5 bg-light border rounded container-fluid">
  <h3> <?php echo $pergunta; ?> </h3>
  <div class="center">
    <form action="alternativas.php?pergunta_id=<?php echo $_GET["pergunta_id"]; ?>" method="post" >
      <input type="hidden" name="pergunta_id" value="<?php echo $_GET["pergunta_id"]; ?>"/>
      <input type="text" name="1"/>
      <input type="radio" name="correto" value="1">
      <br>
      <input type="text" name="2"/>
      <input type="radio" name="correto" value="2">
      <br>
      <input type="text" name="3"/>
      <input type="radio" name="correto" value="3">
      <br>
      <input type="text" name="4"/>
      <input type="radio" name="correto" value="4">
      <br>
      <input type="text" name="5"/>
      <input type="radio" name="correto" value="5">
      <br>
      <br>
      <button type="submit">Salvar</button>
      <button><a href="." style="text-decoration:none; color: black">Voltar</a></button>
    </form>
  </div>

<?php 
  while($linha = mysqli_fetch_array($resultadoAlternativas))
    {
      echo "".$linha['alternativa']."<br>";
    }
?>
</div>