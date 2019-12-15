<?php require_once('config.php'); ?>
<!doctype html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Localhost</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script defer src="/library/fontawesome-free/js/all.js"></script> <!--load all styles -->
      <link rel="stylesheet" href="../index-custom-style.css">
  </head>
  <body>
    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar bg-dark mb-5">
    <a class="navbar-brand mr-0 mr-md-3" href="http://localhost:8888/MAMP/" aria-label="MAMP">
      <svg id="logotipo" style="width:36px;height:auto;" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 378.41 326.17"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Mesa de trabajo 1</title><path class="cls-1" d="M22.3,163.32a250.3,250.3,0,0,0-5.43,58.32l-.59.34a26.05,26.05,0,0,1-2.49-2.78c-4.49-6.57-6.82-14-8.69-21.66C.38,178.29-.79,158.74.47,139,3.62,89.82,37.1,38.09,80.75,15.19,100.11,5,120.71-.43,142.65,0c24.13.5,46.79,7.11,68.45,17.41a220.74,220.74,0,0,1,59.5,41.67c.58.56,1.11,1.19,1.87,2-1,.74-1.86,1.36-2.73,2-13.31,9.24-26.1,19.08-36.73,31.45-1.9,2.21-3.6,4.59-5.49,6.8a3.84,3.84,0,0,0-.69,4.11c5.91,18.53,18.23,31.24,35.62,39.33a52.1,52.1,0,0,0,8.5,3.1c-.6-.41-1.19-.85-1.81-1.23-14.92-9.14-26-21.44-31.68-38.25a4.11,4.11,0,0,1,.88-4.67c19.94-22.62,42.86-41.4,70.13-54.58,3.81-1.84,7.85-3.2,11.76-4.86,1.61-.68,2.77-.26,4.06.82,18.73,15.57,32.1,35,41.43,57.36,9.12,21.82,13.75,44.61,12.49,68.24-2.5,46.86-18.9,88.22-50.78,123-5.08,5.54-11.38,10-17.11,14.91A7,7,0,0,1,304,310a20.09,20.09,0,0,1-12.46-8.12,4.89,4.89,0,0,1-.51-5.32c8.93-20.45,17-41.24,22.28-63,2.63-10.77,4.79-21.64,4.25-32.82a38.7,38.7,0,0,0-5.13-18.33c-2.79-4.66-6.43-8.54-12.18-9a17.59,17.59,0,0,0-7.92,1.44,22,22,0,0,0-10.08,9.38c-11.31,19-19.1,39.52-25.34,60.66-6.91,23.4-11.76,47.29-16.6,71.17-1.35,6.72.38,5.47-6.94,7-14.88,3-29.87,3.9-44.9,1-2.27-.44-4.45-1.34-6.68-2-1.7-.49-2.29-1.53-2.28-3.32.09-12.83.07-25.66.1-38.49,0-13.5-.28-27-3-40.27-1.42-6.81-3.34-13.5-7.47-19.18a37.43,37.43,0,0,0-8-8.13c-4.73-3.47-10-3.3-15-.28-4.67,2.79-7.79,7-10.22,11.71-4.17,8.09-6.15,16.85-7.53,25.75-2.69,17.37-2.61,34.85-1.92,52.35.18,4.82.56,9.64,1,14.44a2.73,2.73,0,0,1-1.76,3.11c-7.67,4.05-16,5.72-24.5,6.21a106.59,106.59,0,0,1-36.28-4.25c-2.56-.75-3.74-1.81-4.18-4.61C54.64,278.1,44.64,240,33.83,202c-3.49-12.24-7.21-24.42-10.82-36.62C22.8,164.7,22.54,164,22.3,163.32Z"/></svg>
    </a>

    <div class="navbar-nav-scroll">
      <ul class="navbar-nav bd-navbar-nav flex-row">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8888/phpMyAdmin/?lang=es">phpMyAdmin</a>
        </li>
        <?php
        $dirs = glob('../*', GLOB_ONLYDIR);
        foreach ($dirs as $index=>$dir){
          if ($dir != '../library'){
            $link = $_SERVER['PHP_SELF'];
            $link_array = explode('/',$link);
            $name = '/'.str_replace("../", "", $dir).'/index.php';
            $active = $link == $name ? 'active' : '';
            echo '<li class="nav-item">
              <a class="nav-link '. $active .'" href="'.$dir.'">'. str_replace("../", "", $dir) .'</a>
            </li>';
          }
        }
        ?>
      </ul>
    </div>

    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
      <li class="nav-item">
        <a class="nav-link p-2 text-white" href="https://getbootstrap.com/" target="_blank" rel="noopener" aria-label="GitHub"><i class="fab fa-bootstrap fa-lg"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link p-2 text-white" href="https://fontawesome.com/" target="_blank" rel="noopener" aria-label="GitHub"><i class="fab fa-font-awesome fa-lg"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link p-2 text-white" href="https://github.com/" target="_blank" rel="noopener" aria-label="GitHub"><i class="fab fa-github fa-lg"></i></a>
      </li>
    </ul>
  </header>
