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

<div style="padding: 10px;" class="col-9 mt-5 bg-light border rounded d-flex container-fluid">
    <?php while($linha = mysqli_fetch_array($resultado))
    {
        echo "<td>".$linha['id']."- </td>";
        echo "<td>".$linha['pergunta']."</td>";?><br><?php
        echo "</tr>";
     }
    ?>
</div>

