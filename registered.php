<!-- // PHP \\ -->

<?php
require_once('db.php');
$query = "SELECT * FROM registration";
$result = mysqli_query($conn, $query);
?>

<!-- /// HTML \\\ -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Registration | MAH CODER&reg;</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.jfif" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="registered.css">
</head>

<body>
    <header>
        <nav>
            <h2>
                CARREG&reg;
            </h2>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="reg.html">Registration</a></li>
                <li><a href="registered.php" id="active">Registered</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <div class="container">
            <h2>
                Registered Candidates:
            </h2>
            <div class="table">
            <table>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Registration No.</th>
                    <th>Manufacturer</th>
                    <th>Car Model</th>
                    <th>Car Color</th>
                    <th>Model Year</th>
                    <th>Car Type</th>
                    <th>Mileage</th>
                    <th>Insurance</th>
                </tr>
                <tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['registrationNum']?></td>
                    <td><?php echo $row['carMake']?></td>
                    <td><?php echo $row['carModel']?></td>
                    <td><?php echo $row['carColor']?></td>
                    <td><?php echo $row['modelYear']?></td>
                    <td><?php echo $row['carType']?></td>
                    <td><?php echo $row['mileage']?></td>
                    <td><?php echo $row['insurance']?></td>



                    </tr>
                    <?php
                    }
                    ?> 
                </>
            </table>
            </div>
        </div>
    </main>

    <footer>
        <p>Copyright © 2024 by <span><a href="https://alihusnain-dev.github.io/portfolio/"><b>MAH Coder
                    </b></a></span>&reg; | All Rights Reserved.</p>
        <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
    </footer>
</body>

</html>