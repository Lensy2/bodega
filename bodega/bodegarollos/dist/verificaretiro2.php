<?

session_start();

$ubicacion=$_SESSION['ubicacion'];
$fecha=$_SESSION['fecha'];
$rollo= $_POST['rollo'];


include("adodb5/adodb.inc.php");
$conexion = &ADONewConnection(odbc_mssql);
$datos = "Driver={SQL Server};Server=192.168.0.19;Database=PLASMARSA;";
$conexion->Connect($datos,'ofimatica','ofimatica');  


   $resultado = &$conexion->Execute("DELETE FROM [dbo].[BodegaRollos] WHERE rollo='$rollo'");
   $resultado2 = &$conexion->Execute("INSERT INTO [dbo].[MovBodegaRollos](id,FechaHora,Rollo,UltUbicacion,TipoMov) VALUES ('$fecha','$rollo','$ubicacion','d')");
     		
			
		if(!$resultado and $resultado2) {
            echo "No se puede retirar este rollo";
        require 'verificaretiro.php';			  		   
        } else {
           echo "Este rollo fue retirado con éxito";
        require 'verificaretiro.php';
      }

?>