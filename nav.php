<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <nav class="navbar bg-primary mb-2">
    <div class="container-fluid">
      <span class="d-flex align-items-center mb-0 navbar-font">
        <button class='btn btn-sm text-primary btn-light btn-rounded btn-floating me-2' onclick="openNav()"><i class="fas fa-bars"></i></button>
          paper Frame Production Monitoring System</span>
      <?php 
      echo "<body onload='startTime()'>
        <div id='txt' class='time text-light'>
        </div>
      </body>"
      ?>
    </div>
    <div id="mySidenav" class="sidenav shadow-5-strong">
      <div class="side-menu-list">
      <div class="menuclose" onclick="closeNav()"><i class="fas fa-times"></i></div>
        <h5>main menu</h5>
        <ul class="list-unstyled">
          <li class="underline" onclick="location.href='index.php';"><i class="fas fa-home"></i> home</li>
          <li class="underline" 
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#masterfile"
          aria-expanded="false"
          aria-controls="masterfile">
          <i class="fas fa-file-alt"></i> master file</li>
          <div class="collapse" id="masterfile">
          <ul class="list-unstyled ps-3">
            <li class="drop-downs-item py-1" onclick="location.href='parts.php';"><i class="fas fa-chevron-right"></i> parts</li>
          </ul>
          </div>
          <li class="underline"><i class="fas fa-industry"></i> production</li>
          <li class="underline"><i class="fas fa-cube"></i> material</li>
          <li class="underline"><i class="fas fa-layer-group"></i> stocks</li>
          <li class="underline"><i class="fas fa-dolly"></i> deliveries</li>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>