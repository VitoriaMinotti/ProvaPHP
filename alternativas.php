<?php
include "conexao.php";
include "header.php";

if (isset($_POST) && !empty($_POST)) {
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

if(isset($_GET["pergunta_id"]) && !empty($_GET["pergunta_id"])){
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

<body style="background-color: #D8BFD8;">
  <div class="col-5 mt-5 mx-auto bg-light border rounded container-fluid">
    
    <div class="mx-auto mt-3" style="width: 60%">
      <h5> <?php echo $pergunta; ?> </h5>
    </div>

    <div class="mx-auto mt-3" style="width: 60%">
      <p>Digite as alternativas e selecione a correta.</p>
    </div>

        <form class="mx-auto mt-3" style="width: 40%" action="alternativas.php?pergunta_id=<?php echo $_GET["pergunta_id"]; ?>" method="post" >
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
        </form>
      </div>
</div>
</body>


