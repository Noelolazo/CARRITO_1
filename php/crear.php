<?php
$usuario=$_POST['nombre'];
$dni=$_POST['dni'];
if (!file_exists("../xml/carritos.xml")) {
    $archivo = fopen("../xml/carritos.xml", "w") or die("ERROR: No se pudo crear el carrito.");
    $texto = <<<_END
    <?xml version="1.0" encoding="UTF-8"?>
    <carritos>
    </carritos>
    _END;
    fwrite($archivo, $texto);
    fclose($archivo);
};
$xml = simplexml_load_file("../xml/carritos.xml");
$existe = false;
foreach ($xml->carrito as $carrito){
    if ((string)$carrito->dni == $dni) {
        $existe = true;
        break;
    }
}
if (!$existe) {
    $agregar = $xml->addChild("carrito", "");
    $agregar->addAttribute("nombre", $usuario);
    $agregar->addChild("dni", $dni);
    $xml->asXML("../xml/carritos.xml");
    echo "Carrito creado correctamente";
    echo '<br> <a href="../carrito.php"> Volver al menú </a>';
} else {
    echo "Carrito ya existe.";
    echo '<br> <a href="../carrito.php"> Volver al menú </a>';
};
?>