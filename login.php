<?php include("loginprocess.php");?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />  
      <style type="text/css">
     
        .container {
            margin-top: 100px;
            background-color: rgb(22, 53, 100);
            width: 90%;
            max-width: 450px;
            height: auto;
            padding: 50px;
            border-radius: 20px;
        }

        label {
          color: white;
          font: small-caps;
          font-weight: 500;
        }

        .img {
          width: 100%;
          height: auto;
          background-color: rgb(22, 53, 100);
          text-align: center;
        }

        .img img {
          width: 50%;
          height: auto;
          margin-left: auto;
          margin-right: auto;
        }

        .log {
          width: 100%;
          height: auto;
          margin-left: auto;
          margin-right: auto;
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
          width: 150px;
          height: auto;
          border-radius: 40px;
          background-color: rgb(22, 53, 100);
          margin-left: 30px;
          cursor: pointer;
          transition: box-shadow 0.3s ease, transform 0.3s ease;
          padding: 10px 20px;
          text-align: center;
        }

        .back a {
          text-decoration: none;
        }

        .back a > p {
          color: white;
          font-size: 20px;
          margin-top: auto;
          margin-bottom: auto;
        }

        .back {
          box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .back:hover {
          box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.6);
          transform: translateY(-10px) scale(1.05);
          background-color: rgba(22, 53, 100, 0.8);
        }

        #email, #password {
          width: 100%;
          border-radius: 20px;
        }

        @media (max-width: 768px) {
          .container {
            width: 90%;
            padding: 20px;
          }

          .back {
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            font-size: 18px;
            padding: 10px;
          }

          .log button {
            border-radius: 20px;
          }
        }
       
      </style>
    <title>Sign up</title>
  </head>
  <body>
        
<div class="img">
<div>
  <a href="index.php"><img src="images/miva.png" alt="Miva logo"></a>
</div>  
</div>

  <div class="container">
    <form method="post" id="forrm">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="log">
          <button type="submit" class="btn btn-outline-light" name="submit">Log In</button>
          <a class="create" href="#"><p>Create Account</p></a>
        </div>
    </form>
    <br>
    <span id="alert"></span>
  </div>

  <br><br>
  <div class="back">
    <a href="index.php"><p> <----- Back </p></a>
  </div>

  <script type="text/javascript">
      //alert($('#image').width())
      var error='<?php echo $error;?>';
      if(error!="") {
        $('#alert').addClass('alert alert-danger');
        $('#alert').append(error);

      }    
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
</body>
</html>
