<?php include('signupprocess.php');
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">  
      <style type="text/css">
       body {
        background-image:url('finalback3.jpeg');
        background-repeat:no-repeat;
        background-size:cover;
      }
     
        .container {
            margin-top:100px;
        }
        #image{
          size:50%;
          position:relative;
          left:360px;
          
          margin:auto;
          border-radius:15%;
        }
        label {
          color: white;
          font: small-caps;
          font-weight: 500;
        }
        #form {
          position: relative;
          float: right;
          right: 405px;
          top: 125px;
          
        }
        #back{
          margin:10px;
          border-radius:50px;
        }
        #signup {
          position:relative;
          top:70px;
          left:55px;
          border-radius:50px;
        }

          #email,#password,#username,#checkpass {
            border-radius:20px;
          }
          #alert{
            position:relative;
            bottom:280px;
          }
      </style>
      

    <title>Sign up</title>
  </head>
  <body>
  <button id="back" type="submit" class="btn btn-outline-dark" name="submit" onclick="location.href = 'userhome.php';"><-Back</button>

    <div class="container">
    <img id="image" src="signback6.jpeg">
      <form method="post" id="form">
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com">
          <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Joe Mama">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
          <label for="checkpass">Re-Type Password</label>
          <input type="password" class="form-control" id="checkpass" name="checkpass">
          
          
        </div>
      
        <button type="submit" class="btn btn-outline-dark" name="submit" id="signup">Sign Up</button>
      </form>
      <span id="alert"></span>
    </div>
    <script type="text/javascript">
    
      var error='<?php echo $error;?>';
      if(error!="") {
        $('#alert').addClass('alert alert-danger');
        $('#alert').append(error);

      }    
      
    </script>
    
  </body>
</html
