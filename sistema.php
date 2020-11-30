<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  /* background: #9999C5; */
  font-family: 'Raleway', sans-serif;
}

nav {
  margin: auto;
  margin-top: 40px;
  position: relative;
  width: 50vw;
  min-width: 320px;
  height: 250px;
}

nav h2 {
  border-radius: 2px;
  position: relative;
  background: #222222;
  height: 40px;
  text-transform: uppercase;
  color: ivory;
  font-weight: 200;
  display: flex;
  flex: 1;
  justify-content: center;
  align-items: center;
  box-shadow: 4px 4px 20px -2px rgba(0,0,0,.35);
  transition: all .1s;
}

nav:hover h2{
  transform: translateY(-2px);
  box-shadow: 2px 2px 5px -1px rgba(0,0,0,.35);
 }
nav:hover:active h2{
  transform: translateY(10px);
  box-shadow: 0px -1px 2px 0px rgba(0,0,0,.35);
 }

input {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  z-index: 1;
  opacity: 0;
  cursor: pointer;
  height: 40px;
}

#toggle:checked ~ul {
  height: 0%;
}

nav ul {
  padding-left: 0;
  padding-top: 0;
  margin-top: 0;
  list-style: none;
  overflow: hidden;
  text-align: right;
  margin-bottom: 22px;
  text-align: center;
  transition: all .1s ease-out;
  height: 100%;
  
}
nav ul li {
  border-radius: 2px;
  position: relative;
  display: inline-block;
  margin-left: 35px;
  line-height: 1.5;
  width: 100%;
  margin: 0;
  margin-bottom: 5px;
  background: #797470;
  transition: background 1s;
  box-shadow: 2px 2px 10px -2px rgba((127,127,161));
}

nav ul li:hover {
  background: mediumorchid;
  transition: background .45s;
}

nav ul a {
  display: block;
  color: ivory;
  /* text-align: center; */
  /* text-transform: lowercase; */
  font-size: 20px;
  font-weight: 200;
  text-decoration: none;
  transition: color .1s;
}
    </style>
</head>
<body background = "https://previews.123rf.com/images/dimapolie/dimapolie1804/dimapolie180400121/99172127-patr%C3%B3n-de-joyer%C3%ADa-de-vector-fondo-transparente-de-joyer%C3%ADa.jpg">
<div class="w3-display-topleft">Diamond</div>
<nav>
     <h2>Consultas</h2>
      <input id="toggle" type="checkbox" checked>
   <ul>
     <li><a href="consultar1.php">             Clientes    </a></li>
     <li><a href="consultar_compra.php">       Compras    </a></li>
     <li><a href="consultar_envio.php">        Envios     </a></li>
     <li><a href="consultar_estados.php">      Estados     </a></li>
     <li><a href="consultar_municipios.php">   Municipios </a></li>
     <li><a href="consultar_objetos.php">      Objetos    </a></li>
     <li><a href="consultar_producto.php">     Productos   </a></li>
   </ul>
</nav>

  <br><br><br><br><br><br><br><br><br><br>

<nav>
     <h2>Bajas logicas</h2>
      <input id="toggle" type="checkbox" checked>
   <ul>
     <li><a href="eliminar.php">Clientes</a></li>
     <!-- <li><a href="#">tabla 2</a></li>
     <li><a href="#">tabla 3</a></li>
     <li><a href="#">tabla 4</a></li>  -->
   </ul>
</nav>

<nav>
     <h2>Modificaciones</h2>
      <input id="toggle" type="checkbox" checked>
   <ul>
     <li><a href="modificar.php">Clientes</a></li>
     <!-- <li><a href="#">tabla 2</a></li>
     <li><a href="#">tabla 3</a></li>
     <li><a href="#">tabla 4</a></li>  -->
   </ul>
</nav>
    
</body>
</html>