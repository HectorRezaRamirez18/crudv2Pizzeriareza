<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MENSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="saveTask.php" method="POST">

          <div class="form-group">
            <input type="text" name="nombref" class="form-control" placeholder="Nombre Provedor" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="sucursalf"  class="form-control" placeholder="Sucursal" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="ubicacionf" class="form-control" placeholder="Ubicacion Sucursal" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="tipof" class="form-control" placeholder="Tipo Productos" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="cantidadf" class="form-control" placeholder="Cantidad Productos" autofocus>
           </div>
          <div class="form-group">
            <input type="text" name="fechaf" class="form-control" placeholder="Fecha a Surtir" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="formaf" class="form-control" placeholder="Forma de Pago" autofocus>
          </div>

          <input type="submit" name="saveTask" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre Provedor</th>
            <th>Sucursal</th>
            <th>Ubi. Sucursal</th>
            <th>Tipo Productos</th>
            <th>Cantidad Productos</th>
            <th>Fecha a Surtir</th>
            <th>Forma Pago</th>
            <th>Fecha</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM tbl_provedor";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombrePro']; ?></td>
            <td><?php echo $row['sucursal']; ?></td>
            <td><?php echo $row['ubiSucursal']; ?></td>
            <td><?php echo $row['tipoP']; ?></td>
            <td><?php echo $row['cantidadP']; ?></td>
            <td><?php echo $row['fechaS']; ?></td>
            <td><?php echo $row['formaP']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="deleteTask.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>