<?php include('loginprocess.php'); ?>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- The Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        body {
            background-image: url(images/MOUcampus.jpg);
            background-repeat: no repeat;
            background-size: contain;
        }
           
   
        .container {
            background-color: rgba(22, 53, 100, 0.8);           /* Dark transparent background */
            border: 2px solid rgba(255, 255, 255, 0.8);          /* The white border */
            width: 90%;
            max-width: 450px;
            padding: 50px;
            border-radius: 20px;
            color: white;
            margin-top: 200px;          
        }
       
        label {
            font: small-caps;
            font-weight: 500;
            }

        .img {
            text-align: center;
            margin-bottom: 20px;                /* the space between logo and form */
        }

        .img img {
            width: 50%;
            height: auto;
        }

        .log {
            width: 100%;
        }

        .log button {
            width: 100%;
            border-radius: 40px;
        }

        .log a {
            text-align: center;
            font-size: small;
            margin-top: 20px;
        }

        .log a > p {
            margin-top: 10px;
            color: white;
            opacity: 0.7;
            text-decoration: underline;
        }

        .log a > p:hover {
            opacity: 1;
        }

        .back {
            position: absolute;  
            bottom: 20px;                          /* Positioninig */
            left: 20px;         
            width: auto;        
            border-radius: 20px;                   /* Adjustable */
            background-color: rgb(22, 53, 100);
            cursor: pointer;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            padding: 10px 20px;                 /* I can keep padding */
            text-align: center;
            display: block;
            color: white;            
        }

        .back a {
            text-decoration: none;
            color: white;
        }

        .back:hover {
            box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.6);
            transform: translateY(-10px) scale(1.05);
            background-color: rgba(22, 53, 100, 0.8);
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .back {
                font-size: 18px;
                padding: 10px;
            }
        }
    </style>
    <title>Sign up</title>
</head>
<body>
<div class="bgimg"></div>
<div class="container">
    <div class="img">
        <a href="index.php"><img src="images/footer-logo.png" alt="Miva logo"></a>
    </div>

    <form method="post" id="form">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com" required>
        </div> 
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        
        <div class="log">
            <button type="submit" class="btn btn-outline-light" name="submit">Log in</button>
            <a class="create" href="signup.php"><p>Create Account</p></a>
        </div>
    </form>
    <br>
    <span id="alert"></span>
</div>

<a href="index.php"><button class="back">Back <i class="fa fa-arrow-circle-o-left"></i></button></a>
<!-- for password and confirm password--> 
<script type="text/javascript">
    $('#form').on('submit', function(e) {
        var password = $('#password').val();
        var confirmPassword = $('#confirm_password').val();
        if (password !== confirmPassword) {
            e.preventDefault();
            alert("Passwords do not match!");
        }
    });

    var error = '<?php echo $error; ?>';
    if (error != "") {
        $('#alert').addClass('alert alert-danger');
        $('#alert').append(error);
    }
</script>
</body>
</html>