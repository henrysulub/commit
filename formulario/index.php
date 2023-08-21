<!-- sistema de control de usuario 
formulario:
nombre completo:
email:
numero telefonico:
-->
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="conteiner h-100" style="padding-top: 15rem ;">
     <div class="row justify-content-center align-item-center h-100">

<div class="col-6">
  <div class="card">
  <div class="card-body">
    <form action="./function/insert.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
          <input name="nombre" type="text" class="form-control">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
          <input name="email" type="email" class="form-control">
    </div>
    <div> <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Teléfono</label>
        <input name="telefono" type="number" class="form-control" >
    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
  </div>
</div>  
<div>
  
</div>
<div class="col-6">
<div class="card">
<div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
</tr>
</thead>
<tbody>
<?php
require("./connection/connection.php");
$query = "SELECT * FROM usuario";
$ejecutar = mysqli_query($connection, $query);

while($fila = fetch_array($ejecutar))
{ call to unknow

}

}

?>

<tr>
  <td>1</td>
  <td>Henry</td>
  <td>henry.tun@hotmail.com</td>
  <td>99885544</td>
</tr>

<tr>
  <td>10</td>
  <td>Maria</td>
  <td>henry.tun@hotmail.com</td>
  <td>99885544</td>
</tr>


</tbody>
</table>



        </div>
    </div>
    



  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

