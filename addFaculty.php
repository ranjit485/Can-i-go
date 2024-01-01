<!DOCTYPE html>
<!-- saved from url=(0043)http://127.0.0.1:5501/student_dashbord.html -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg" />


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add faculty</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <!-- --------------------- -->

  <!-- --------------------- -->

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style type="text/css">
    /* Chart.js */
    @keyframes chartjs-render-animation {
      from {
        opacity: .99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      animation: chartjs-render-animation 1ms
    }

    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
      position: absolute;
      direction: ltr;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
      pointer-events: none;
      visibility: hidden;
      z-index: -1
    }

    .chartjs-size-monitor-expand>div {
      position: absolute;
      width: 1000000px;
      height: 1000000px;
      left: 0;
      top: 0
    }

    .chartjs-size-monitor-shrink>div {
      position: absolute;
      width: 200%;
      height: 200%;
      left: 0;
      top: 0
    }
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="http://127.0.0.1:5501/student_dashbord.html#"
                id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="http://127.0.0.1:5501/student_dashbord.html#"
                id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:5501/student_dashbord.html#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:5501/student_dashbord.html#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:5501/student_dashbord.html#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500"
                  href="http://127.0.0.1:5501/student_dashbord.html#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="http://127.0.0.1:5501/student_dashbord.html#"
                id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:5501/student_dashbord.html#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="./Student Dashboard-2_files/undraw_profile_1.svg" alt="...">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                      problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:5501/student_dashbord.html#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="./Student Dashboard-2_files/undraw_profile_2.svg" alt="...">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how
                      would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:5501/student_dashbord.html#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="./Student Dashboard-2_files/undraw_profile_3.svg" alt="...">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with
                      the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:5501/student_dashbord.html#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                      told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500"
                  href="http://127.0.0.1:5501/student_dashbord.html#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="http://127.0.0.1:5501/student_dashbord.html#" id="userDropdown"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ranjit</span>
                <img class="img-profile rounded-circle" src="./Student Dashboard-2_files/undraw_profile.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="http://127.0.0.1:5501/student_dashbord.html#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="http://127.0.0.1:5501/student_dashbord.html#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="http://127.0.0.1:5501/student_dashbord.html#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="http://127.0.0.1:5501/student_dashbord.html#" data-toggle="modal"
                  data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Faculty</h1>
            <a href="http://127.0.0.1:5501/student_dashbord.html#"
              class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100 py-2 bg-light" style="border: none;">
                <button class="card-body btn btn-primary" data-toggle="modal" data-target="#addFacultyModel">
                  ADD NEW
                </button>
              </div>
            </div>
          </div>

          <!-- Content Row -->


          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Your Leaves</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="http://127.0.0.1:5501/student_dashbord.html#" role="button"
                      id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                      aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="http://127.0.0.1:5501/student_dashbord.html#">Action</a>
                      <a class="dropdown-item" href="http://127.0.0.1:5501/student_dashbord.html#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://127.0.0.1:5501/student_dashbord.html#">Something else
                        here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Position</th>
                          <th>Department</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Position</th>
                          <th>Department</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php
                        include "db_connect.php";

                          $sql_data_display = "SELECT TeacherID, FirstName, LastName, Department, Position, Username,Password FROM Teachers"; 

                          $result_data = $conn->query($sql_data_display); 

                          if ($result_data->num_rows > 0) {    

                              // output data of each row  
                              while($row = $result_data->fetch_assoc()) {  
                                  echo "<tr> 
                                          <td>
                                              " . $row["TeacherID"]. "
                                          </td> 
                                          <td>
                                              " . $row["FirstName"]. " 
                                              " . $row["LastName"]. "

                                          </td> 
                                          <td>
                                              " . $row["Department"]. "
                                          </td> 
                                          <td>
                                              " . $row["Position"]. "
                                          </td> 
                                          <td>
                                              " . $row["Username"]. "
                                          </td> 
                                          </td> 
                                          <td>
                                              " . $row["Password"]. "
                                          </td>  
                                          <td>
                                            <button class='btn btn-success'>
                                              <i class='fas fa-edit text-white-300' title='Approve'></i>
                                            </button>
                                        
                                            <button class='btn btn-success'>
                                              <i class='fas fa-trash text-white-300' title='Approve'></i>
                                            </button>
                                          </td>                                          
                                        </tr>";  
                              }  
                          } else {  
                              echo "error or no results";  
                          }  
                          $conn->close();  
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Pie Chart -->

      </div>

      <!-- Content Row -->

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright © can I GO 2023</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="http://127.0.0.1:5501/student_dashbord.html#page-top" style="display: none;">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="http://127.0.0.1:5501/login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- -----------------Modal Start Leave form---------------------- -->

  <!-- Modal -->
  <div class="modal fade" id="addFacultyModel" tabindex="-1" role="dialog" aria-labelledby="addFacultyModel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Faculty</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form>
        <div class="modal-body">
        <div class="form-row">
          <div class="form-group col-md-6">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" placeholder="Enter first name" required>
          </div>
          <div class="form-group col-md-6">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Enter last name" required>
          </div>
      </div>
      <div class="form-group">
          <label for="position">Position</label>
          <select id="position" class="form-control" required>
              <option value="" selected disabled>Select position</option>
              <option value="FY">FY</option>
              <option value="SY">SY</option>
              <option value="TY">TY</option>
              <!-- Add more options as needed -->
          </select>
      </div>
      <div class="form-group">
          <label for="department">Department</label>
          <select id="department" class="form-control" required>
              <option value="" selected disabled>Select department</option>
              <option value="Computer Science">Computer Science</option>
              <option value="Electrical Engineering">Electrical Engineering</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <!-- Add more options as needed -->
          </select>
      </div>
      <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Enter username" required>
      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" required>
      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" onclick="addFac()">Add Teacher</button>

        </div>
       </form>
      </div>
    </div>
  </div>

  <!-- -----------------Modal End Leave form---------------------- -->

<script>
  function addFac(){
    let name = document.getElementById("teacherName").value;
    let year = document.getElementById("teacherYear").value;
    let dept = document.getElementById("teacherDept").value;
    let username = document.getElementById("teacherUsername").value;
    let password = document.getElementById("teacherPassword").value;

    var tableBody = document.querySelector('#dataTable tbody');

            
    var row = tableBody.insertRow();
            var cell1 = row.insertCell(0).textContent = name;
            var cell2 = row.insertCell(1).textContent = year;
            var cell3 = row.insertCell(2).textContent = dept;
            var cell3 = row.insertCell(3).textContent = username;
            var cell3 = row.insertCell(4).textContent = password;
            var cell3 = row.insertCell(5).innerHTML = `<td>
                                                             <i class="fas fa-sign-out-alt fa-2x fa-fw mr-2 text-gray-400"></i>
                                                         </td>`;
  }
</script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>