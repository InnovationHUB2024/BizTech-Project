<?php
session_start();
if($_SESSION) {
    include("usernav.php");
}
else {
    include("navbar.php");
}
include("databaseconnect.php");
//GETTING THE VALUES FOR ALL PHOTOGRAPHS
$result7=mysqli_query($conn,"select Name from photo order by ID desc");
$names=array();
$result8=mysqli_query($conn,"select Link from photo order by ID desc");
$file_name=array();
$result9=mysqli_query($conn,"select Username from photo order by ID desc");
$uploaders=array();
$i=0;
$count3=mysqli_num_rows($result7);
if($count3>0){
    while($row = $result7 -> fetch_row()) {
        $names[$i]=$row[0];
        $i++;
        
    }
    $i=0;
    while($row=$result8 ->fetch_row()) {
        $file_name[$i]=$row[0];
        $i++;
    }
    $i=0;
    while($row=$result9 ->fetch_row()) {
        $uploaders[$i]=$row[0];
        $i++;
    }
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <style type="text/css">
            body{
                background-image:url('finalback.jpeg');
                background-repeat:no-repeat;
                background-size:cover;
                font-family: 'Titillium Web', sans-serif;
            }
            #heading{
                width:100%;
                padding:auto;
                
                height:200px;
            }
            #circle {
                width:200px;height:200px;
                background-color: none;
                margin:auto;
                text-align:center;
                border-radius:50%;
                color:black;
            }
            #heading h2{
                position:relative;
                top:75px;
                border-bottom:2px solid gray;
                border-top:2px solid gray;
                padding:7px;
                font-size:50px;

            }
            .card-body,.card-text{
                border-color:none;
            }
            .card{
                border-color:none;
                background-color:transparent;
                color:black;
            }
            .foto{
                border-radius:70%;
            }
            
         
    </style>
      

    <title>Photography</title>
  </head>
  <body>
      
      <div class="container-fluid" >
            <div id="heading">
              <div id="circle"><h2>Photos</h2></div>
              
            </div>
            <div id="photos"></div>
      </div>
      
      <script type="text/javascript">
        
      
        var count3=<?php echo $count3?>;
        var i=0;
        var names=<?php echo json_encode($names); ?>;
        var file=<?php echo json_encode($file_name); ?>;
        var uploader=<?php echo json_encode($uploaders); ?>;

        for(i=0;i<count3;i++) {
            
            $('#photos').append('<div class="card" style="margin:15px;width: 27rem; position:relative; float:left">\
            <img id="'+i+'"src="'+file[i]+'" class="card-img-top foto" style="width: 27rem; height:20rem;" alt="...">\
            <div class="card-body">\
            <p class="card-text" style="text-align:center;">'+names[i]+'</p>\
        </div>\
        </div>');
        }
        

      

    </script>

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>