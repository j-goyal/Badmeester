<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
        i{
            color: #339966;
        }
        h3{
            line-height: 20%;
        }
        p{
            margin-top:4%;
            line-height:35%;
            padding-bottom: 30px;
            padding-left: 10px;
        }
      
    </style>
    <title>Contact Us</title>
</head>

<body>

    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>



    <div class="container">
        <div class="jumbotron jumbotron-sm" style="background-color:#339966;margin-top:2%;color:white;margin-right:-30px">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h1 class="h2" style="margin-top:-2%">
                        Contact Us
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="well">
                    <h3><i class="fa fa-home fa-1x"></i> Address:</h3>
                    <p>Thapar University, P.O. Box 32, Patiala, Pin - 147004</p>
                    
                    <h3><i class="fa fa-envelope fa-1x"></i> E-Mail Address:</h3>
                    <p>info@birisi.com</p>
                    
                    <h3><i class="fa fa-user fa-1x"></i> Phone Number</h3>
                    <p>123456789</p>
                    
                    <h3><i class="fa fa-yelp fa-1x"></i> Support Center</h3>
                    <p><a href="siteadresi.com/destek">siteadresi.com/destek</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-6" style="margin: 0px -10px; padding: 0px 0px">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13771.175861412305!2d76.3688073!3d30.3568049!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa7f6232cbef903a4!2sThapar+Institute+of+Engineering+and+Technology+University!5e0!3m2!1sen!2sin!4v1500631550669"
                    width="600" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h1 style="margin: 20px 0px;">Your Query:</h1>
        <form method="post" action=''>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                    required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your 10-digit Phone Number"
                    required>
            </div>

            <div class="form-group">
                <label for="content">Enter Message</label>
                <textarea class="form-control" id="content" rows="8" name="content" required></textarea>
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>

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