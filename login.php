<?php include("loginprocess.php");?>
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
        background-image:url('finalback.jpeg');
        background-repeat:no-repeat;
        background-size:cover;
      }
       
        .container {
            margin-top:100px;
        }

        

        #forrm {
          position: relative;
          float: right;
          right: 355px;
          top: 175px;
          bottom: 200px;
          
                  }

        label {
          color: white;
          font: small-caps;
          font-weight: 500;
        }
        #image{
          size:50%;
          position:relative;
          left:360px;
          margin:auto;
          border-radius:25%;
        }
        #back{
          margin:10px;
          border-radius:50px;
        }
        #login {
          position:relative;
          top:50px;
          left:110px;
          border-radius:50px;
        }
        #email,#password{
          width:300px;
          border-radius:20px;
        }
        #alert{
          position:relative;
          bottom:550px;
          left:525px;
        }
       
      </style>
      </style>
      

    <title>Sign up</title>
  </head>
  <body>
        
  <button id="back" type="submit" class="btn btn-outline-dark" name="submit" onclick="location.href = 'userhome.php';"><-Back</button>
    <div class="container">
      <img id="image" src="loginback.jpeg">
    <form method="post" id="forrm">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com">
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button id="login" type="submit" class="btn btn-outline-light" name="submit">Log In</button>
    </form>
    <br>
    <span id="alert"></span>
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