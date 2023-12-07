<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="css/custom-style.css">
  </head>

  <body id="reportsPage">
    <div class="" id="home">
      <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
          <a class="navbar-brand" href="">
            <h1 class="tm-site-title mb-0">Land Plots</h1>
          </a>
          <button
            class="navbar-toggler ml-auto mr-0"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars tm-nav-icon"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto h-100">
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="fas fa-tachometer-alt"></i> Dashboard
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="far fa-file-alt"></i>
                  <span> Reports <i class="fas fa-angle-down"></i> </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Daily Report</a>
                  <a class="dropdown-item" href="#">Weekly Report</a>
                  <a class="dropdown-item" href="#">Yearly Report</a>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="">
                  <i class="far fa-user"></i> Land Plots
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="fas fa-cog"></i> Settings
                </a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link d-block" href="">
                  <b>Logout</b>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container mt-5">
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <h2 class="tm-block-title">List of Lands</h2>
              
              <select class="custom-select">
                <option value="0">Select Land</option>
                <option value="1">Land 1</option>
                <option value="2">Land 2</option>
                <option value="3">Land 3</option>
                <option value="4">Land 4</option>
              </select>
            </div>
          </div>
        </div>
        
        <div class="col-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
              <h2 class="tm-block-title">Land Plot List</h2>
              <table class="table">
                  <thead>
                      <tr>
                          <th scope="col">LAND ID</th>
                          <th scope="col">STATUS</th>
                          <th scope="col">SUITABLE CROPS</th>
                          <th scope="col">LOCATION</th>
                          <th scope="col">PLOT SIZE</th>
                          <th scope="col">LEASE COST</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th scope="row"><b>#122349</b></th>
                          <td>
                              <div class="tm-status-circle moving">
                              </div>Available
                          </td>
                          <td><b>Crop 1, Crop 2</b></td>
                          <td><b>Galle</b></td>
                          <td><b>485 sqkm</b></td>
                          <td>Rs. 500 000</td>
                          
                      </tr>
                      <tr>
                          <th scope="row"><b>#122349</b></th>
                          <td>
                              <div class="tm-status-circle cancelled">
                              </div>Unavailable
                          </td>
                          <td><b>Crop 4, Crop 7</b></td>
                          <td><b>Galle</b></td>
                          <td><b>340 sqkm</b></td>
                          <td>Rs. 340 000</td>
                          
                      </tr>
                      <tr>
                          <th scope="row"><b>#122349</b></th>
                          <td>
                              <div class="tm-status-circle moving">
                              </div>Available
                          </td>
                          <td><b>Crop 2, Crop 3</b></td>
                          <td><b>Galle</b></td>
                          <td><b>218 sqkm</b></td>
                          <td>Rs. 280 000</td>
                          
                      </tr>
                      <tr>
                          <th scope="row"><b>#122349</b></th>
                          <td>
                              <div class="tm-status-circle moving">
                              </div>Available
                          </td>
                          <td><b>Crop 5, Crop 8</b></td>
                          <td><b>Galle</b></td>
                          <td><b>124 sqkm</b></td>
                          <td>Rs. 176 000</td>
                          
                      </tr>
                      <tr>
                          <th scope="row"><b>#122349</b></th>
                          <td>
                              <div class="tm-status-circle cancelled">
                              </div>Unavailable
                          </td>
                          <td><b>Crop 2, Crop 7</b></td>
                          <td><b>Galle</b></td>
                          <td><b>100 sqkm</b></td>
                          <td>Rs. 129 000</td>
                          
                      </tr>
                  </tbody>
              </table>
          </div><br><br>
          <div class="col-12">
            <button
              type="submit"
              class="btn btn-primary btn-block text-uppercase"
            >
              Add Land Plot
            </button>
          </div>
      </div>

      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
