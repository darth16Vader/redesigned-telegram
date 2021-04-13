<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Paper Frame | I-TEC</title>
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
    <?php include "./nav.php" ?>

    <div class="container-fluid main-body" onclick="closeNav()">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item text-primary cursor-p" onclick="location.href='index.php';"><i class="fas fa-home"></i> home</li>
        <li class="breadcrumb-item text-primary cursor-p" aria-current="page">parts</li>
      </ol>
    </nav>

      <div class="row g-2">

        <div class="col-md-12">
          <div class="card p-1 m-1 border-bottom border-success font-weight-bold">
            <div class="d-flex">
              <div class="flex-grow-1 align-self-center">
                <div class="font-weight-bold text-primary"><i class="fas fa-chevron-right"></i> parts</div>
              </div>
              <div>
                <nav aria-label="">
                  <ul class="pagination pagination-sm mb-0">
                    <li 
                    class="page-item" 
                    data-mdb-toggle="modal"
                    data-mdb-target="#staticBackdrop">
                    <a class="page-link" href="#"><i class="fas fa-plus"></i> add parts</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="card p-1 m-1">
            <div class="part-table">
              <div class="pe-3">
                <table class="table table-layout table-sm mb-0">
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

              <div class="overflow-auto">
                <table class="table table-layout table-sm table-hover mb-2">
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

      </div>
    </div>
    
    <!-- MODAL -->
      <div
        class="modal fade"
        id="staticBackdrop"
        data-mdb-backdrop="static"
        data-mdb-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header px-2">
              <span class="modal-title" id="staticBackdropLabel">add parts</span>
              <button
                type="button"
                class="btn-close btn-sm"
                data-mdb-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
            <!-- <div class="form-outline">
              <i class="fas fa-exclamation-circle trailing"></i>
              <input type="text" id="form1" class="form-control form-icon-trailing" />
              <label class="form-label" for="form1">Example label</label>
            </div>
            <select class="form-select form-select-sm" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select> -->
            <div class="row">

              <div class="col-3 align-self-center">input here</div>
              <div class="col-9">
                <div class="form-outline">
                <i class="fas fa-exclamation-circle trailing"></i>
                <input type="text" id="form1" class="form-control form-icon-trailing" />
                <label class="form-label" for="form1">Example label</label>
                </div>
              </div>

              <div class="col-3 align-self-center">select here</div>
              <div class="col-9">
                <select class="form-select form-select-sm" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
              </div>

            </div>
            </div>
            <div class="modal-footer px-2">
              <button type="button" class="btn btn-secondary btn-sm" data-mdb-dismiss="modal">
                Close
              </button>
              <button type="button" class="btn btn-primary btn-sm">Understood</button>
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
