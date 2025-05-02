<?php 
$productos =[
  ['titulo' => 'Fresas',
  'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRi5L9VJLtgDlF_v-AbPSoKcE2or2Vv27fzkQ&s',
  'precio' => '$50',
  'piezas' => '40 piezas incluidas',
  'cultivo' => 'Cultivadas en Tabasco'],
  ['titulo' => 'Manzanas',
  'imagen' => 'https://www.rincondelasalud.com/sites/rincondelasalud.com/files/2019-08/Fraternidad_50507014.jpeg',
  'precio' => '$60',
  'piezas' => '10 piezas incluidas',
  'cultivo' => 'Cultivadas en Tabasco'],
  ['titulo' => 'Kiwis',
  'imagen' => 'https://www.5aldia.es/es/wp-content/uploads/2017/09/kiwi-1024x713.jpeg',
  'precio' => '$30',
  'piezas' => '5 piezas incluidas',
  'cultivo' => 'Cultivadas en Campeche']
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body >
    <nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand d-md-none" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Cambiar navegación">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Abertura</font></font></h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerca"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav flex-grow-1 justify-content-between">
                <li class="nav-item"><a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tienda</font></font></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Articulo</font></font></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">About</font></font></a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                  </svg>
                </a></li>
              </ul>
            </div>
          </div>
        </div>
    </nav>

    <div class="container">
      <h1 class="card-title">Carro</h1>
      <h6 style="color:rgb(82, 82, 82);">Maecenas ac metus at enim lobortis sagittis.</h6>
      <form>
        <div class="row row-cols-1 row-cols-md-3 mb-3">
          <?php foreach($productos as $producto) { ?>
          <div class="col">
            <div class="card mb-3 rounded-3 shadow-sm" style="max-width: 250px; margin: auto; font-size: 0.9rem;">
              <div class="card-body p-2">
                <input type="checkbox" id="<?= $producto["titulo"] ?>" name="<?= $producto["titulo"] ?>">
                <img src="<?= $producto["imagen"] ?>" class="img-fluid mb-2" alt="<?= $producto["titulo"] ?>">
                <h1 style="font-size:16px;"><?= $producto["titulo"] ?></h1>
                <h5 style="font-size:13px; color:rgb(82, 82, 82);"><?= $producto["piezas"] ?></h5>
                <h5 style="font-size:13px;"><?= $producto["precio"] ?></h5>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div>
          <h1>Total a pagar</h1>
          <h6>Lorem ipsum</h6>
          <button class="w-20 btn btn-primary btn-lg" type="submit">Comprar</button>
          <button class="w-20 btn btn-secondary btn-lg" type="submit">Comprar producto</button>
        </div>
      </div>
      </form>
    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2024 Compañía, Inc.</font></font></p>
      
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          </a>
      
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hogar</font></font></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Características</font></font></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Precios</font></font></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Preguntas frecuentes</font></font></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acerca de</font></font></a></li>
          </ul>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body> 
</html>
