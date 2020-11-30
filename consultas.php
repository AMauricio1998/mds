<?php


class cliente{
    public $idcliente;
    public $nombre;
    public $primer_apellido;
    public $segundo_apellido;
    public $telefono;
    public $correo;
    public $contrasena;
    public $perfil;
    public $activo;

    public function mostrar(){
        echo $this->idcliente;
        echo $this->nombre;
        echo $this->primer_apellido;
        echo $this->segundo_apellido;
        echo $this->telefono;
        echo $this->correo;
        echo $this->contrasena;
        echo $this->perfil;
        echo $this->activo;
    }
    //-------------------------Consultas--------------------------------------------
    public function consultar(){
        $con = new mysqli("127.0.0.1:33065","root","","id14591310_diamond");
        $res = $con->query("SELECT * FROM cliente WHERE activo = 1 ");
        return $res;
    }

    public function consultar_compra(){
        $con = new mysqli("127.0.0.1:33065","root","","id14591310_diamond");
        $res = $con->query("SELECT * FROM compra ");
        return $res;
    }

    public function consultar_envio(){
        $con = new mysqli("127.0.0.1:33065","root","","id14591310_diamond");
        $res = $con->query("SELECT * FROM envio  ");
        return $res;
    }

    public function consultar_estados(){
        $con = new mysqli("127.0.0.1:33065","root","","id14591310_diamond");
        $res = $con->query("SELECT * FROM estados  ");
        return $res;
    }

    public function consultar_municipios(){
        $con = new mysqli("127.0.0.1:33065","root","","id14591310_diamond");
        $res = $con->query("SELECT * FROM municipios  ");
        return $res;
    }

    public function consultar_objeto(){
        $con = new mysqli("127.0.0.1:33065","root","","id14591310_diamond");
        $res = $con->query("SELECT * FROM objetos ");
        return $res;
    }

    public function consultar_producto(){
        $con = new mysqli("127.0.0.1:33065","root","","id14591310_diamond");
        $res = $con->query(" SELECT * FROM producto ");
        return $res;
    }

//---------------------------------------------------------------------
//-------------------------C--------------------------------------------

    public function consultar_criterio ($criterio){
        $con = new mysqli("127.0.0.1:33065","root","","id14591310_diamond");
        $res = $con->query("SELECT * FROM cliente  WHERE ( idcliente LIKE '%$criterio %' nombre LIKE
        '%$criterio %' OR primer_apellido LIKE '%$criterio%' OR segundo_apellido 
        LIKE '%$criterio%' OR telefono LIKE '%$criterio%' OR correo LIKE '%$criterio%
        OR contrasena LIKE '%$criterio% OR perfil LIKE '%$criterio%
        OR activo LIKE '%$criterio%' ) AND activo = 1 or 2");
         return $res;
       }
//-----------------------Eliminaciones----------------------------------------------
    public function elimiar_logica(){
    $con = new mysqli("127.0.0.1:33065","root","","id14591310_diamond");
    $con->query("UPDATE cliente SET activo=2  WHERE idcliente = $this->idcliente");
    echo "<script>
            alert('Tu registro se ha eliminado');
            window.location.replace('eliminar.php');
        </script>";
   }
   //---------------------------------------------------------------------
   public function modificar(){
    $con = new mysqli("127.0.0.1:33065","root","","id14591310_diamond");
    $con->query("UPDATE cliente SET nombre='$this->nombre', primer_apellido='$this->primer_apellido', segundo_apellido='$this->segundo_apellido', telefono='$this->telefono',correo=$this->correo, contrasena=$this->contrasena, perfil=$this->perfil WHERE idcliente=$this->idcliente");
    echo "<script>
    alert('Tu registro ha sido modificado');
    window.location.replace('modificar.php');
</script>";
}
//------------------------------------------------------------------------
public function consultar_registro(){
    $con = new mysqli("127.0.0.1:33065","root","","id14591310_diamond");
    $res = $con->query("SELECT * FROM cliente WHERE idcliente=$this->idcliente");
    return $res;
}
}

?>