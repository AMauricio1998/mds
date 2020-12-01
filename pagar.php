<?php 
require_once './checa_sesion.php';
include './conexion.php';
include './config.php';
include './carrito.php';
?>

<?php 
if($_POST){

    $total=0;
     $SID=session_id();
     $Correo=$_POST['email'];

foreach ($_SESSION['CARRITO'] as $indice=>$producto){
 $total=$total+($producto['Precio']*['CANTIDAD']);

}

$sentencia=$pdo->prepare("INSERT INTO `tblventas` (`ID`, `claveTransaccion`, `PaypalDatos`, `fecha`, `correo`, `total`, `status`) 
VALUES (NULL, :ClaveTransaccion,'', NOW(),  ':correo', 'Total', 'pendiente');");

$sentencia->bindParam(":Clavetransaccion" ,$SID);
$sentencia->bindParam(":correo" ,$Correo);
$sentencia->bindParam(":total" ,$total);

$sentencia->execute();
$idVenta=$pdo->lastInssertId();

foreach ($_SESSION['CARRITO'] as $indice=>$producto){

    $sentencia=$pdo->prepare("INSERT INTO 
    `detalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIO`, `CANTIDAD`, `DESCARGADO`) 
    VALUES (NULL, ':IDVENTA', ':IDPRODUCTO', ':PRECIO', ':CANTIDAD', ':DESCARGADO');");

$sentencia->bindParam(":IDVENTA" ,$idVenta);
$sentencia->bindParam(":IDPRODUCTO" ,$producto['IDPRODUCTO']);
$sentencia->bindParam(":PRECIO" ,$producto['PRECIO']);
$sentencia->bindParam(":CANTIDAD" ,$producto['CANTIDAD']);
}

echo "<h3>".$total. "/<h3>";


}

?>
<div class="jumbotron text-center">
       <h1 class="display-4">¡paso final¡</h1>
       
       <hr class="my-4">
       <p class="lead">Vas a realizar tu pago en paypal por un total de : $

            <h4><php echo nomber_format($total,2); ?></h4>
    <div id="paypal-button-container"></div>

       </p>
       
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> PayPal Smart Payment Buttons Integration | Client Demo </title>
</head>

<body>
    <!-- Set up a container element for the button -->
    

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=MXN"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: { 
                            value: '<php echo $total;?>'
                        }
                    }]
                });
            },

            client:{
                sandbox: 'AXjyRDQjvD2iLqv-vcVlETzyLu2DVLhnYF9Fu4HGCKnfkT-7EQ7XeCjBN7E-m-pkYFEmkcM0AgKu3Xjb',
                production: 'AV4Hkgk9xiEPAdz357ub-m653DcqKhdJbvo88RZAC58vOlHmuT2Ul6339MV1pNLl9DRw6yQaJa_oO57n'
            }

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('pago completo ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>
</body>

</html>