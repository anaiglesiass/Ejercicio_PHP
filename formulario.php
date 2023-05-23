<!DOCTYPE html>

<html>
	<head>
		<title>Formulario Ejercicio PHP</title>
        <link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
        <div class="middle_div">
            <form method="POST" action="">
                <h2>Formulario de registro</h2>
                <br><br>
                <fieldset>
                    <label for="nombre">Nombre<span><em>(requerido)</em></span></label><br>
                    <input type="text" name="nombre" id="nombre" required><br>
                    <br>

                    <label for="apellido">Apellido<span><em>(requerido)</em></span></label><br>
                    <input type="text" name="apellido" id="apellido" required><br>
                    <br>
                    <label for="email">Email<span><em>(requerido)</em></span></label><br>
                    <input type="email" name="email" id="email" required><br>
                    
                    <input class= "registerbtn" type="submit" name="submit" value="Suscribirse" /><br>
                </fieldset> 
                
<?php
if ($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

// Conexión con PDO

//$servername = "localhost:4324"; // Mi host es el 4324 por conflictos de mi máquina. Si lo tenemos configurado en otro host, cambiarlo por el bueno.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursosql";

// Crear la conexión

$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn -> connect_error){
    die('La conexión ha fallado'.conn->connect_error);
}

$sql = "INSERT INTO usuario(nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";

if ($conn->query($sql) === TRUE){
    echo "Se ha añadido un registro correctamente";
}else{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>


            </form>  
        </div>
	</body>
</html>
