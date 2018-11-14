<?


$ubicacion= $_POST['ubicacion'];
$rollo=trim($_POST['rollo']);



include ("adodb5/adodb.inc.php");
$conexion = &ADONewConnection(odbc_mssql);
$datos = "Driver={SQL Server};Server=192.168.0.19;Database=PLASMARSA;";
$conexion->Connect($datos,'ofimatica','ofimatica');

$seleccion = &$conexion->Execute("select rollo from [dbo].[BodegaRollos] where rollo = '$rollo' ");

$captura = $seleccion->fields[0];
$rollo2=trim($captura);


if($rollo===$rollo2) {
    $resultado = &$conexion->Execute("update [dbo].[BodegaRollos] set ubicacion ='$ubicacion' where rollo ='$rollo'");
    echo "Rollo trasladado con éxito";

} else {

    echo "Hubo un error al trasladar el rollo, vuelva a intentarlo";
}

?>