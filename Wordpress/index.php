<?php include '../header.php';?>
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Buscar proyecto..." aria-label="" aria-describedby="">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="search"><i class="fas fa-search fa-lg"></i></button>
                  </div>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <?php

                function scan_dir($dir_lm) {
                    $ignored = array('.', '..', '.svn', '.htaccess', '.DS_Store');

                    $files = array();
                    foreach (scandir($dir_lm) as $file) {
                        if (in_array($file, $ignored)) continue;
                        $files[$file] = filemtime($dir_lm . '/' . $file);
                    }

                    arsort($files);
                    $files = array_keys($files);

                    return ($files) ? $files : false;
                }

                $dir = scan_dir(getcwd());

                ?>
                <?php foreach ($dir as $file) : ?>

                    <?php if( $file != "." && $file != ".." && $file != "index.php"  ) : ?>

                     <li class="list-group-item d-flex justify-content-between align-items-center">
                         <a class="link" href="<?php echo $file; ?>"><?php echo $file; ?></a>
                         <a class="btn btn-dark" href="<?php echo $localhost .'/'. basename(__DIR__) .'/'. $file;?>"><i class="far fa-eye mr-2"></i>Ver proyecto</a>
                     </li>

                    <?php endif; ?>

                <?php endforeach; ?>
              </ul>
            </div>
            <div class="col-lg-4">
              <?php include '../sidebar.php';?>
            </div>
          </div>
        </div>
<?php include '../footer.php';?>
