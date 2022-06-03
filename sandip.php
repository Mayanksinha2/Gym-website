<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">Iron Gym</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Feedback</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
        </nav>
        <img src="https://source.unsplash.com/1530x700/" alt="">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $height = $_POST['height'];
            $age = $_POST['age'];
    
    
            // Connecting to a database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "dbmanku3";
    
            // Create a connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            $sql = "INSERT INTO `sandip` (`name`, `height`, `age`) VALUES ('$name', '$height', '$age')";
            $result = mysqli_query($conn, $sql);
    
            // Add a new data to the phpsuraksha table in the database
            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your record has been submitted successfully!...
          </div>';
            } else {
                echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                The record was not inserted successfully due to this error ---> " . mysqli_error($conn) 
          </div>';
                
            }
        }
        ?>
        <div class="container-sm mx-3 my-5">
            <h2>Contact us for Registring yourself.</h2>
            <form action="/phpLearning/sandip.php" method="post">
                <div class="mb-1">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
                </div>
                <div class="mb-1">
                    <label for="exampleInputheight" class="form-label">Height</label>
                    <input type="text" name="height" class="form-control" id="mail" aria-describedby="emailHelp">
                </div>
                <div class="mb-1">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" name="age" class="form-control" id="age" aria-describedby="age">
                </div>
                <div class="mb-1 form-check">
                    <input type="checkbox" name="checkbox" class="form-check-input" id="check">
                    <label class="form-check-label" for="exampleCheck1">Check me in</label>
                </div>
                <button type="submit" class="btn btn-primary" id="btn">Submit</button>
            </form>
        </div>
</body>
<script>
    (function() {
        var button = document.getElementById('btn');

        button.disabled = true;

        var f = document.getElementById('check');

        f.addEventListener('change', function() {

            if (f.value === '') {

                button.disabled = true;

            } else {
                button.disabled = false;
            }
        });

    })();
</script>
</html>