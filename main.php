<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SmartCustodiX</title>
  <link rel="icon" type="image/x-icon" href="images/SC logo.png">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

  <!--NavVar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/Nav SC logo.png" alt="" width="200" height="70" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Inventory & Assets
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Inventory List</a></li>
              <li><a class="dropdown-item" href="#">Purchase Encoding</a></li>
              <li><a class="dropdown-item" href="#">Fund Sources</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Academic Year</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Requests & Approvals
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Item Requests</a></li>
              <li><a class="dropdown-item" href="#">Approvals</a></li>
              <li><a class="dropdown-item" href="#">Reports</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              User & Account Management
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="userinfo.php">User Accounts</a></li>
              <li><a class="dropdown-item" href="facultyinfo.php">Faculty Information</a></li>
              <li><a class="dropdown-item" href="#">Account Settings</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Reports & Logs
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Request Reports</a></li>
              <li><a class="dropdown-item" href="#">Inventory Reports</a></li>
              <li><a class="dropdown-item" href="#">Purchase Reports</a></li>
            </ul>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a class="nav-link" href="index.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!--Header Dashboard-->
  <header class="bg-light d-flex align-items-center text-dark pt-5 mt-5">
    <div class="container-fluid">
      <div class="row align-items-center">
        <!--bar Chart-->
        <div class=" col-md-4 col-lg-4">
          <div>
            <canvas id="linechart"></canvas>
          </div>

        </div>
        <!--Line Chart-->
        <div class="col-md-4 col-lg-4">
          <div>
            <canvas id="barchart"></canvas>
          </div>
        </div>

        <!--Line Chart-->
        <div class="col-md-4 col-lg-4">
          <div>
            <canvas id="piechart"></canvas>
          </div>
        </div>


      </div>


    </div>




  </header>
  <hr class="my-5">
  <!--Menu Section-->
  <div class="row justify-content-center">
    <div class="col-lg-4 col-md-4">
      <div class="card" style="width: auto;">
        <img src="images/pending.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Pending Request</h5>
          <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
          <div class="text-center">
            <button class="btn btn-primary position-relative">
              Show
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                10
                <span class="visually-hidden">unread messages</span>
              </span>
            </button>
          </div>

        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4">
      <div class="card" style="width: auto;">
        <img src="images/approved.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Approved Request</h5>
          <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
          <div class="text-center">
            <button class="btn btn-primary position-relative">
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                5
                <span class="visually-hidden">unread messages</span>
              </span>
              Show</button>
          </div>

        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4">
      <div class="card" style="width: auto;">
        <img src="images/stocklevel.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Stock Levels</h5>
          <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
          <div class="text-center">
            <button class="btn btn-primary">Show</button>
          </div>

        </div>
      </div>
    </div>


  </div>
  <hr class="my-3">
  <div class="row justify-content-center my-2">
    <div class="col-lg-3 col-md-3">
      <div class="card" style="width: auto;">
        <img src="images/faculty.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Faculty Information</h5>
          <div class="text-center">

            <form action="facultyinfo.php" method="post">
              <button type="submit" class="btn btn-primary">Manage</button>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-3">
      <div class="card" style="width: auto;">
        <img src="images/user.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">User Information</h5>
          <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
          <div class="text-center">
            <form action="userinfo.php" method="post">
              <button type="submit" class="btn btn-primary">Manage</button>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-3">
      <div class="card" style="width: auto;">
        <img src="images/asset.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">School Asset Information</h5>
          <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
          <div class="text-center">
            <button class="btn btn-primary">Manage</button>
          </div>

        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-3">
      <div class="card" style="width: auto;">
        <img src="images/supply.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">School Supply information</h5>
          <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
          <div class="text-center">
            <button class="btn btn-primary">Manage</button>
          </div>

        </div>
      </div>
    </div>


  </div>

  <script>
    const ctx = document.getElementById('linechart');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Bond Paper A4 ', 'Epson ink Black ', 'Bond Paper short '],

        datasets: [{
          label: 'Low Stocks',
          backgroundColor: ["red","red","red"], // Example background color
          borderColor: ["yellow","yellow","yellow"], // Example border color
          data: [8, 5, 3],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
      }
    });
  </script>

  <script>
    const ctxbar = document.getElementById('barchart');

    new Chart(ctxbar, {
      type: 'bar',
      data: {
        labels: ['Bond Paper A4 ', 'Chalk', 'Epson ink black '],
        datasets: [{
          label: 'Most Requested Supplies',
         
          data: [60, 25, 32],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
      }
    });
  </script>
  <script>
    const ctxpie = document.getElementById('piechart');

    new Chart(ctxpie, {
      type: 'doughnut',
      data: {
        labels: ['Pending Request'],
        datasets: [{
          label: 'Pending',
          data: [10],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
      }
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>



</body>

</html>