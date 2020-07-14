<?php

session_start();
include '_dbconnect.php';

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/capstone">Badmeester</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/capstone">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    
                        
                </ul>';
                    
            echo '<form class="form-inline my-2 my-lg-0" method="get" action="search.php">
            <input class="form-control mr-sm-2" type="search" name = "query" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>';
                        
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {
        echo 
            '<p class="text-light mb-0 ml-3"> Welcome '.$_SESSION['username'].'</p>
            <a href="partials/_logout.php" class="btn btn-outline-success my-2 ml-3 my-sm-0">Logout</a>
            </div>
            </nav>';
    }
    else
    {
        echo '
            <button class="btn btn-outline-success my-2 ml-2 my-sm-0" data-toggle="modal" data-target="#signupModal">SignUp</button>
            <button class="btn btn-outline-success my-2 ml-2 my-sm-0" data-toggle="modal" data-target="#loginModal">Login</button>
            </div>
            </nav>';
    }
                

    include 'partials/_loginmodal.php';
    include 'partials/_signupmodal.php';
?>