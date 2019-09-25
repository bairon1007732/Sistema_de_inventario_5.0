<?php
$conexion = mysqli_connect('localhost','root','','oswa_inv');

$codigo = $_POST['name'];
$registros = "SELECT * FROM products where categorie_id = name";

$result=mysqli_query($conexion,$registros) or die ("Error al conectar base de datos");
while ($registro = mysqli_fetch_array($result)){
    echo $registro['id']." ".$regitro['name']." ".$registro['quantity']." ".$registro['buy_price']." "
    .$registro['sale_price']." ".$registro['categorie_id']." ". 
    $registro['madia_id']." ".$registro['date']." ";

}
?>
<input type="submit" onclick="location.href='product.php'">