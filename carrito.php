<?php
require_once './checa_sesion.php';
session_start();

$mensaje='';
if(isset($_POST['btnAccion'])){
  switch($_POST['btnAccion']){
    case 'Agregar':

    if(is_numeric(openssl_decrypt($_POST['id_objeto'],COD,KEY))){

        $ID=openssl_decrypt($_POST['id_objeto'],COD,KEY);
        $mensaje.='Id correcto   ,'.$ID;
    }else{
        $mensaje.='Upps.. incorrecto ID   ,'.$ID;
    }
    if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
        $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
        $mensaje.='Ok nombre   ,'.$NOMBRE ;
    }else{ $mensaje.='Upps.. incorrecto Nombre   ,'; break;}


    if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
        $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
        $mensaje.='Ok cantidad   ,'.$CANTIDAD ;
    }else{ $mensaje.=',Upps.. incorrecta Cantidad    '; break;}


    if(is_string(openssl_decrypt($_POST['precio'],COD,KEY))){
        $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
       $mensaje.='Ok precio   ,'.$PRECIO ;
    }else{ $mensaje.='Upps.. incorrecto Precio  '; break;}
    
     if(!isset($_SESSION['CARRITO'])){
    $producto=array(
     'id_objeto'=>$ID,
     'NOMBRE'=>$NOMBRE,
     'CANTIDAD'=>$CANTIDAD,
     'PRECIO'=>$PRECIO
    );
    $_SESSION['CARRITO'][0]=$producto;

    }else{
     $numeroProductos=count($_SESSION['CARRITO']);
    $producto=array(
        'id_objeto'=>$ID,
        'NOMBRE'=>$NOMBRE,
        'CANTIDAD'=>$CANTIDAD,
        'PRECIO'=>$PRECIO
       );
       $_SESSION['CARRITO'][$numeroProductos]=$producto;
     }

      //$mensaje=print_r($_SESSION,true);   
      $mensaje="Producto agregado al carrito"; 

      //$mensaje=print_r($_SESSION,true); 
      $mensaje="Producto agregado al carrito";

         break;
     case 'Eliminar':
        //print_r($_POST);
       //exit;
       if(is_numeric(openssl_decrypt($_POST['id_objeto'],COD,KEY))){
        $ID=openssl_decrypt($_POST['id_objeto'],COD,KEY); 
        foreach($_SESSION['CARRITO'] as $indice=>$producto); {
            if($producto ['id_objeto']==$ID){
                unset($_SESSION['CARRITO'][$indice]);
            }
            
        }
    }
     break;
        }
  
  }       

?>