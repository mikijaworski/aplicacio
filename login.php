<html>
    <head>
        <title>Aplicacio</title>
    </head>
    <body>
    <?php
    include_once "dades.php";
    include_once "valida.php";

    $rebo_dades = ( $_SERVER['REQUEST_METHOD'] == 'POST' );

    if ($rebo_dades) {
        comprovar_dades($_POST["username"], $_POST["password"]);
    }

    ?>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Usuari" >
            <input type="password" name="password" placeholder="Contrasenya" >
            <input type="submit" value="Inicia sessio">
        </form>
    </body>
</html>