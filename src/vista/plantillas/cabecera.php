<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DWESgram</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/2f89e4ccc6.js" crossorigin="anonymous"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DWESgram</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li>
            <a class="nav-link" href="index.php?controlador=ranking&accion=lista">Top 3 Usuarios</a>
          </li>
          <a class="nav-link" href="index.php?controlador=estadisticas&accion=lista">Top 3 Me gusta</a>
          </li>

          <?php if ($sesion->haySesion()) { ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?controlador=entrada&accion=nuevo">Crear entrada</a>
            </li>
          <?php }
          if ($sesion->haySesion()) { ?>
            <li><a href="index.php?controlador=usuario&accion=logout">Cerrar sesión (<?= $sesion->getNombre() ?>)</a> &nbsp; </li>
            <img height='70px' width='70px' src="<?= $sesion->getAvatar() !== null ? $sesion->getAvatar() : "../../assets/img/bender.png"; ?>">
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?controlador=usuario&accion=login">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?controlador=usuario&accion=registro">Registro</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>