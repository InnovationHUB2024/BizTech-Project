<?php 
session_start();
if(isset($_POST['submit'])) {

    $username=$_SESSION['id'];
    $title=$_POST['title'];
    $text=$_POST['text'];
    $error="";
    $ok="";

    $option=$_POST['opt'];
    

    include("databaseconnect.php");

  if($option=='article') {
        $sql3="CREATE TABLE IF NOT EXISTS article(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            Username VARCHAR(70) NOT NULL,
            Title VARCHAR(99) NOT NULL,
            Text varchar(9999) NOT NULL
        )";
        $ok.=$username;
        if($conn->query($sql3) === true){
            $ok.="Table created successfully.";

            $sql4="INSERT INTO article VALUES(DEFAULT,'$username','$title','$text')";
            if($conn->query($sql4) === true){
                $ok.="Inserted into table successfully.";
            } else{
                $error.="ERROR: Could not able to execute $sql4. " . $conn->error;
            }
        } else{
            $error.="ERROR: Could not able to execute $sql3. " . $conn->error;
        }
    }
    else if($option=='poem') {
        $sql3="CREATE TABLE IF NOT EXISTS poem(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            Username VARCHAR(70) NOT NULL,
            Title VARCHAR(99) NOT NULL,
            Text varchar(9999) NOT NULL
        )";
       $ok.=$username;
        if($conn->query($sql3) === true){
            $ok.="Table created successfully.";

            $sql4="INSERT INTO poem VALUES(DEFAULT,'$username','$title','$text')";
            if($conn->query($sql4) === true){
                $ok.="Inserted into table successfully.";
            } else{
                $error.="ERROR: Could not able to execute $sql4. " . $conn->error;
            }
        } else{
            $error.="ERROR: Could not able to execute $sql3. " . $conn->error;
        }
    }
    else if($option=='photo') {
        $sql3="CREATE TABLE IF NOT EXISTS photo(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            Username VARCHAR(70) NOT NULL,
            Name VARCHAR(99) NOT NULL,
            Link varchar(999) NOT NULL
        )";
        $ok.=$username;
        if($conn->query($sql3) === true){
            $ok.="Table created successfully.";
            include('savephoto.php');
            $sql4="INSERT INTO photo VALUES(DEFAULT,'$username','$title','$img')";
            if($conn->query($sql4) === true){
                $ok.="Inserted into table successfully.";
            } else{
                $error.="ERROR: Could not able to execute $sql4. " . $conn->error;
            }
        } else{
            $error.="ERROR: Could not able to execute $sql3. " . $conn->error;
        }
    }
    else {
        $error.="Select a Category";
    }

}
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
                background-image:url('finalback4.jpeg');
                background-repeat:no-repeat;
                background-size:cover;
            }
            #title{
                border-radius:20px;
            }
            #text{
                height:300px;
                border-radius:20px;
            }
            .btn-group{
                left:400px;
                margin-top:20px;
            }
            #alert{
                position:relative;
                top:50px;
                right:68px;
            }
    </style>
    <title>Upload</title>
  </head>
  
  <body>
        <?php include("usernav.php"); ?>  
        
        <div class="container">
            

            <form method="post">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-dark ">
                    <input type="radio" name="opt" id="optarticle" value="article" autocomplete="off" > Article
                    </label>
                    <label class="btn btn-outline-dark">
                    <input type="radio" name="opt" id="optpoem" value="poem" autocomplete="off"> Poem
                    </label>
                    <label class="btn btn-outline-dark">
                    <input type="radio" name="opt" id="optphoto" value="photo" autocomplete="off"> Photo
                    </label>
                </div>   
                <br><hr>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" style="white-space: pre-line;"></textarea>
                </div>  

                <div class="form-group">
                    <label for="text">Textarea:<small class="form-text " style="color:white;">(Enter link address incase of a photograph).</small></label>
                    <textarea class="form-control" id="text" name="text" rows="3"></textarea>
                </div>  
                <button type="submit" class="btn btn-outline-dark" name="submit">Save</button>  
                <span id="alert"></span>            
            </form>
            
        </div><!-- Optional JavaScript -->
        <script type="text/javascript">
            var error='<?php echo $error;?>';
            if(error!="") {
                $('#alert').addClass('alert alert-danger');
                $('#alert').append(error);

            }   
            else {
                $('#alert').addClass('alert alert-success');
                $('#alert').append("Uploaded Successfully");
            } 
        </script>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>