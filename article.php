<?php 
$articulos =[
  ['titulo' => 'Lorem ipsum',
  'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcL5UDjFAdeD3CwYK7Ar4Z5dTAWn6wp-qgFA&s',
  'autor' => 'Auth 1'],
  ['titulo' => 'Lorem ipsum',
  'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvyYX0T5zhPW7pHkDedEONPQBi6Hny_ol9Tg&s',
  'autor' => 'Auth 2'],
  ['titulo' => 'Lorem ipsum',
  'imagen' => 'https://img.interempresas.net/fotos/4123363.jpeg',
  'autor' => 'Auth 3']
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
      <h1 class="card-title"><font style="left-align: inherit;">Lorem ipsum</font></h1>
      <h5 class="my-0 fw-normal">Aenean finibus, elit molestie hendrerit consectetur</h5>
      <div class="text-center">
        <img src="https://libbys.es/wordpress/wp-content/uploads/2014/12/multifrutas-web.jpg" width="40%" height="40%" alt="Lorem ipsum">
        <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper purus non nulla tincidunt, id lobortis lorem malesuada. Phasellus id ultrices massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras feugiat est quam, non fermentum mauris porttitor vitae. Maecenas ut nibh nulla. Proin sit amet scelerisque sapien. Quisque aliquam lectus id urna condimentum, vel molestie eros condimentum. Morbi iaculis, massa vel laoreet vulputate, eros massa auctor risus, quis suscipit ex tortor vel augue. Donec rhoncus magna non dui rutrum posuere. Maecenas iaculis, magna in efficitur molestie, quam lectus pulvinar nisi, ac egestas dui neque quis nisi. Suspendisse eu rutrum libero. Nulla leo massa, congue eu feugiat eu, luctus non est. Vivamus gravida metus justo, sed faucibus risus posuere ut. Quisque blandit posuere nisi sit amet vestibulum. Pellentesque ullamcorper, nunc a pellentesque aliquet, felis ipsum aliquet lectus, non tempus tortor metus eu nunc.</p>
        <p style="text-align: justify;">Maecenas ac metus at enim lobortis sagittis. Integer vitae tellus augue. Nulla eu quam ipsum. Nulla eleifend aliquet tempor. Ut ut dolor neque. Nullam gravida dolor at justo finibus, vitae sodales ante cursus. Fusce vel libero non magna aliquet venenatis. Ut luctus bibendum porta. Cras efficitur diam lacinia diam molestie, sit amet facilisis purus tempus. Nullam ut augue id odio fermentum interdum non non ex. Integer quis fringilla massa. Morbi viverra lectus sit amet eleifend tempor. Duis facilisis at enim at venenatis. Curabitur rhoncus massa id orci ultrices varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum in tellus non faucibus.</p>
        <p style="text-align: justify;">Sed pretium orci vitae justo condimentum, fringilla volutpat eros porttitor. Pellentesque ultricies, massa quis posuere commodo, libero odio tristique nisi, non semper lectus tortor quis ipsum. Sed eget tristique mauris, nec vestibulum dolor. Sed semper vel tellus blandit pellentesque. Vestibulum ullamcorper tristique nulla, vitae mollis lectus tincidunt a. Etiam vulputate quam sit amet volutpat sodales. Cras non mauris tincidunt quam tempor sodales nec ac mauris. Ut consectetur ornare facilisis.</p>
      </div>
    </div>

    <div class="container">
      <h2 class="card-title"><font style="left-align: inherit;">Mas articulos</font></h2>
      <div class="row row-cols-1 row-cols-md-3 mb-3">
        <?php foreach($articulos as $articulo) { ?>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-body">
              <img src="<?= $articulo["imagen"] ?>" width="100%" height="100%" alt="<?= $articulo["titulo"] ?>">
              <h1 style="font-size:15px;"><?= $articulo["autor"] ?></h1>
              <h5 style="font-size:15px;"><?= $articulo["titulo"] ?></h5>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
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