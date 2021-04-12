<?php
session_start();
include 'db/db.php';

$sql = "SELECT id,title,price,writer,file,status FROM product";
$result = mysqli_query($conn, $sql);
?>

<html lang="en" style="margin-top: 20px">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
     
    <title>How to build dashboard with bootstrap.</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary fixed-top flex-md-nowrap p-0 shadow">
        <a class=" navber navber-brand  col-sm-4 col-md-2 ml-3 text-white " href="#">Dashboard</a>
        <input type="text" class="form-control form-control-primary w-100" placeholder="search....">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
      </nav>
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-2 bg-light d-none d-md-block sideber">
                  <div class="left-sideber">
                    <ul class="nav flex-column sideber-nav">
                    <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="productadd.php">
                            <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
                            Book Add
                        </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="product-view.php">
                            <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
                              Book List
                            </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="logout.php">
                            <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
                              Logout
                            </a>
                        </li>
                      </ul>
                  </div>
              </div>
              <main role="main" class="col-md-8 mx-auto main">
    			
    			<div class="container">
				<div class="card card-default">
				        <div class="card-header card-header-border-bottom d-flex justify-content-between">
				            <h5>Book list</h5>
				        </div>


				        <div class="card-body">
				            <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#sl.</th>
                          <th scope="col">title</th>
                          <th scope="col">price</th>
                          <th scope="col">writter</th>
                          <th scope="col">quantity</th>
                          <th scope="col">status</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                          if (mysqli_num_rows($result) > 0) {
                              // output data of each row
                              while($row = mysqli_fetch_assoc($result)) {
                          ?>
                      
                        <tr>
                          <th scope="row"><?php echo $row["id"] ?></th>
                          <td><?php echo $row["title"] ?></td>
                          <td><?php echo $row["price"] ?></td>
                          <td><?php echo $row["writer"] ?></td>
                          <td><a href="uploads/<?php echo $row["file"] ?>">View File</a></td>
                          <td><?php echo $row["status"] ?></td>
                        </tr>
                        <?php
                              }
                          } 
                        ?>
                      </tbody>
                    </table>
				        </div>
				</div>
                  </div>
              </main>
          </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>