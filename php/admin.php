<link rel="stylesheet" href="../css/all.css">
<link rel="stylesheet" href="../css/admin.css">

<?php
    session_start();
    include "cabecalho.php";
    echo '<h1 class="text-center">Como ADMIN você pode excluir usuários</h1>';
    echo "<table class = 'table table-striped table-bordered'>";
    include "conecta.php";
    $resultado = mysqli_query($conn, "select * from Usuario");

    while($usuario = mysqli_fetch_assoc($resultado)) {
        echo "<form action='remove.php' method='post'><tr><td id='excluiUsuario'>
                <input type='text' name='id' 
                       value=".$usuario['login']."></td>";
        echo "<td id='excluiUsuario'><button class='btn btn-danger'>excluir</button></td></tr></form>";
    }
    echo "</table>";

    include "rodape.php";
?>
    