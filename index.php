<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="css/index.css" />

    <!-- Font awesome -->
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
  </head>
  <body class="text-capitalize">
    <!-- Start your project here-->

    <!-- As a heading -->
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
      <div id="mySidenav" class="sidenav">
        <div class="side-menu-list">
        <div class="menuclose" onclick="closeNav()"><i class="fas fa-times"></i></div>
          <h5>main menu</h5>
          <ul class="list-unstyled">
            <li class="underline"><i class="fas fa-file-alt"></i> master file</li>
            <li class="underline"><i class="fas fa-industry"></i> production</li>
            <li class="underline"><i class="fas fa-cube"></i> material</li>
            <li class="underline"><i class="fas fa-layer-group"></i> stocks</li>
            <li class="underline"><i class="fas fa-dolly"></i> deliveries</li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid main-body" onclick="closeNav()">
      <div class="row g-2">

        <!-- pending po's -->
        <div class="col-md-6">
          <div class="card p-1 m-1 border-bottom border-success">
            <div class="d-flex">
              <div class="flex-grow-1 align-self-center">
                <div class="font-weight-bold text-primary">cutting production</div>
              </div>
              <div>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-sm mb-0">
                    <li class="page-item"><a class="page-link" href="#">new PO</a></li>
                    <li class="page-item"><a class="page-link" href="#">get stock</a></li>
                    <li class="page-item"><a class="page-link" href="#">gen JO</a></li>
                    <li class="page-item"><a class="page-link" href="#">partial delivery</a></li>
                    <li class="page-item"><a class="page-link" href="#">close PO</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="card p-1 m-1">
              <div class="each-card-body">
                <div class="pe-3">
                  <table class="table table-layout table-sm mb-2">
                    <thead>
                      <tr>
                        <th scope="col">Customer</th>
                        <th scope="col">PO ref.</th>
                        <th scope="col">part no.</th>
                        <th scope="col">qty reqd.</th>
                        <th scope="col">QOH</th>
                        <th scope="col">qty bal.</th>
                        <th scope="col">stock qty.</th>
                        <th scope="col">target del.</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                  </table>
                </div>

                <div class="overflow-auto table-height">
                <table class="table table-layout table-sm table-hover table-striped mb-2">
                  <tbody>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>
          </div>
        </div>

        <!-- stock inventory -->
        <div class="col-md-6">
          <div class="card p-1 m-1 border-bottom border-dark">
            <div class="text-center font-weight-bold text-primary">Laminating production</div>
          </div>

          <div class="card p-1 m-1">
              <div class="each-card-body">
                <div class="pe-3">
                  <table class="table table-layout table-sm mb-2">
                    <thead>
                      <tr>
                        <th scope="col">Customer</th>
                        <th scope="col">Part no.</th>
                        <th scope="col">lot no.</th>
                        <th scope="col">qty</th>
                        <th scope="col">prod date</th>
                        <th scope="col">material</th>
                        <th scope="col">mac ID.</th>
                        <th scope="col">param.</th>
                        <th scope="col">operator</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                  </table>
                </div>

                <div class="overflow-auto table-height">
                <table class="table table-layout table-sm table-hover table-striped mb-2">
                  <tbody>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card p-1 m-1 border-bottom border-dark">
            <div class="d-flex">
              <div class="flex-grow-1 align-self-center">
                <div class="font-weight-bold text-primary">for delivery</div>
              </div>
              <div>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-sm mb-0">
                    <li class="page-item"><a class="page-link" href="#">process</a></li>
                    <li class="page-item"><a class="page-link" href="#">print sticker</a></li>
                    <li class="page-item"><a class="page-link" href="#">delivered</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="card p-1 m-1">
              <div class="each-card-body">
                <div class="pe-3">
                  <table class="table table-layout table-sm mb-2">
                    <thead>
                      <tr>
                        <th scope="col">Customer</th>
                        <th scope="col">PO ref.</th>
                        <th scope="col">part no.</th>
                        <th scope="col">qty reqd.</th>
                        <th scope="col">QOH</th>
                        <th scope="col">qty bal.</th>
                        <th scope="col">stock qty.</th>
                        <th scope="col">target del.</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                  </table>
                </div>

                <div class="overflow-auto table-height">
                <table class="table table-layout table-sm table-hover table-striped mb-2">
                  <tbody>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card p-1 m-1 border-bottom border-dark">
            <div class="d-flex">
              <div class="flex-grow-1 align-self-center">
                <div class="font-weight-bold text-primary">material inventory</div>
              </div>
              <div>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-sm mb-0">
                    <li class="page-item"><a class="page-link" href="#">withdraw</a></li>
                    <li class="page-item"><a class="page-link" href="#">receiving</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="card p-1 m-1">
              <div class="each-card-body">
                <div class="pe-3">
                  <table class="table table-layout table-sm mb-2">
                    <thead>
                      <tr>
                        <th scope="col">Customer</th>
                        <th scope="col">PO ref.</th>
                        <th scope="col">part no.</th>
                        <th scope="col">qty reqd.</th>
                        <th scope="col">QOH</th>
                        <th scope="col">qty bal.</th>
                        <th scope="col">stock qty.</th>
                        <th scope="col">target del.</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                  </table>
                </div>

                <div class="overflow-auto table-height">
                <table class="table table-layout table-sm table-hover table-striped mb-2">
                  <tbody>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                    <tr>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                      <td>NaN</td>
                    </tr>
                  </tbody>
                </table>
                </div>
                
              </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card p-1 m-1 border-bottom border-dark">
            <div class="d-flex">
              <div class="flex-grow-1 align-self-center">
                <div class="font-weight-bold text-primary">on-going production</div>
              </div>
              <div>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-sm mb-0">
                    <li class="page-item"><a class="page-link" href="#">update qty</a></li>
                    <li class="page-item"><a class="page-link" href="#">print label</a></li>
                    <li class="page-item"><a class="page-link" href="#">reject qty</a></li>
                    <li class="page-item"><a class="page-link" href="#">close jO</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="card p-1 m-1">
            <div class="" style="height:15vh">
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card p-1 m-1 border-bottom border-dark">
            <div class="d-flex">
              <div class="flex-grow-1 align-self-center">
                <div class="font-weight-bold text-primary">machine parts usage</div>
              </div>
              <div>
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-sm mb-0">
                    <li class="page-item"><a class="page-link" href="#">action</a></li>
                    <li class="page-item"><a class="page-link" href="#">day output</a></li>
                    <li class="page-item"><a class="page-link" href="#">day reject</a></li>
                    <li class="page-item"><a class="page-link" href="#">effeciency</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <div class="card p-1 m-1">
            <div class="" style="height:15vh">
            </div>
          </div>
        </div>

      </div>
    </div>
    
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- jquery -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/time.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>

  </body>
</html>
