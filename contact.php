<!doctype html>
<html lang="en">

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css" />

    <title>STATIONARY MART</title>
</head>

<body class="back">
    <!-- our code starts here -->
    <nav class="navbar  sticky-top navbar-expand-lg navbar-dark  " style="background-color: #3b5249;">
        <a class="head navbar-brand" href="#"> <i class="fa fa-pencil" style="color:whitesmoke; size: 100px;"></i><u> Contact Us</u>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item ">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="stationary.html">stationary </a>
                        

                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>

                <li class="nav-item dropdown active ">
                    <a class="nav-link dropdown-toggle other" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="contact.php">Message Us</a>
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="fa-solid fa-cart-shopping" id="cart" href="cart.html"> </a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h3><b><u>Contact Us for Any Query</b></u></h3>
        <form action="" method="post">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" aria-required="true">Name</label>
                    <input type="text" name='name' class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4" aria-required="true">Reason For Contacting</label>
                    <input type="text" name='reason' class="form-control" id="reason" placeholder="Reason For Contacting">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" aria-required="true">Email</label>
                    <input type="email" name='email' class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhone no." aria-required="true">phone no.</label>
                    <input type="phone" name='phone' class="form-control" id="inputphone no." placeholder="+91">

                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress" aria-required="true">address</label>
                <input type="text" name='address' class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2" aria-required="true">locality</label>
                <input type="text" name='locality' class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="City" aria-required="true">city</label>
                    <input type="text" name='city' class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="State" aria-required="true">state</label>
                    <select id="inputState" name='state' class="form-control">
                        <option selected>Choose...</option>
                        <option>Delhi</option>
                        <option>Rajasthan</option>
                        <option>Punjab</option>
                        <option>Haryana</option>
                        <option>Himachal pradesh</option>
                        <option>Uttar pradesh</option>
                        <option>Madhya pradesh</option>
                        <option>Mumbai</option>
                        <option>Assam</option>
                        <option>Chhatisgarh</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip" aria-required="true">Zip</label>
                    <input type="text" name="zip" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" name="save" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php

    $server_name = "localhost";
    $username = "id21615288_register";
    $password = "Stationary@1";
    $database_name = "id21615288_register";

    $conn = mysqli_connect($server_name, $username, $password, $database_name);
    //now check the connection
    if (!$conn) {
        die("Connection Failed:" . mysqli_connect_error());
    }

    // Check the connection
    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    if (isset($_POST['save'])) {
        // Sanitize and validate input
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $reason = filter_var($_POST['reason'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
        $locality = filter_var($_POST['locality'], FILTER_SANITIZE_STRING);
        $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
        $state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
        $zip = filter_var($_POST['zip'], FILTER_SANITIZE_STRING);

        // Use prepared statements to prevent SQL injection
        $sql_query = "INSERT INTO register (name, reason, email, phone, address, locality, city, state, zip) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql_query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssssssss", $name, $reason, $email, $phone, $address, $locality, $city, $state, $zip);

            if (mysqli_stmt_execute($stmt)) {
                echo '';
            } else {
                error_log("Error executing statement: " . mysqli_stmt_error($stmt));
                echo "Error submitting data. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        } else {
            error_log("Error preparing statement: " . mysqli_error($conn));
            echo "Error submitting data. Please try again later.";
        }
    }

    // Close the database connection
    mysqli_close($conn);

    ?>
    
    <br>
    <footer class="xt-5 py-1">
       
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>
            © 2017-2019 STATIONARY MART, Inc. · <a href="#">Privacy</a> ·
            <a href="#">Terms</a>
        </p>
     
    </footer>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
