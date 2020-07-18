<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
    #ques {
        min-height: 433px;
    }
    </style>

    <title>Accident Detection | Badmeester</title>
</head>

<body>

    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>


    <!-- Alerts for signup success or failure -->
    <?php 
    
        if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true")
        {
            echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                    <strong>Success !</strong> You account has been successfully created and now you can login.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    
        else if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "false")
        {
            echo '<div class="alert alert-danger alert-dismissible fade show mb-0"  role="alert">
                    <strong>Error !</strong> '.$_GET['error'].'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    
    ?>

    <!-- Alerts for Login success or failure -->
    <?php 
        if(isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "true")
        {
            echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                    <strong>Success !</strong> Logged in Successfully as - <b>'.$_SESSION['hosp_name'].'</b>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    
        else if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "false")
        {
            echo '<div class="alert alert-danger alert-dismissible fade show mb-0"  role="alert">
                    <strong>Error !</strong> '.$_GET['error'].'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    
    ?>

    <!-- Alert for Logout -->
    <?php 
        if(isset($_GET['logged']) && $_GET['logged'] == "true")
        {
            echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                    <strong>Success !</strong> Logged Out Successfully
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    ?>


    <div class="container-fluid px-0">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/accident.jpg" height="380" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/accident2.jpg" height="380" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/accident3.jpg" height="380" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container my-4">
        <h1 style="text-align: center; margin-bottom:40px; text-decoration:underline">Accident Detection and
            Notification System</h1>
        <h4 style="
            padding: 9px;
            background: #343a40;
            color: white;
            margin: 0;
            text-align: center;">
            Recent Accident Notifications <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell"
                fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 3px;font-size: 31px;">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
                <path fill-rule="evenodd"
                    d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
            </svg></h4>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Emergency Contact Number</th>
                    <th scope="col">Accident Location</th>
                    <th scope="col">Accident Time</th>
                    <th scope="col">Vehicle Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td><a href="maps.php">@mdo</a></td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td><a href="maps.php">@mdo</a></td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td><a href="maps.php">@mdo</a></td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td><a href="maps.php">@mdo</a></td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>

            </tbody>
        </table>


    </div>


    <?php include 'partials/_footer.html'; ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>