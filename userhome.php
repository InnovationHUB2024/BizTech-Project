<?php
session_start();
if($_SESSION) {
    include("usernav.php");
}
else {
    include("navbar.php");
}
include("databaseconnect.php");
  
include("getvalues.php");
$rand1=rand(0,$count3-1);
$rand2=rand(0,$count3-1);
$rand3=rand(0,$count-1);


?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a9950323cb.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <style type="text/css">

        body {
                background-image:url('https://wallpaperaccess.com/full/340452.png');
                background-repeat:no-repeat;
                background-size:cover;
                font-family: 'Titillium Web', sans-serif;
        }
     
        #carouselExampleCaptions {
            margin:auto;
            margin-top:10px;
            width:70%;
            height:600px;
        }
        .caru{
            border-radius:30px;
        }
        #left {
            margin-top:35px;
            border:2px solid gray;
            padding:10px;
            border-radius:20px;
        }
        #left h3{
            color:white;
            text-align:center;
        }
        #left a{
            color:white;
            font-weight:400;
        }
        #right {
            
        }
        .list-group-item {
            color:white;
            background:transparent;
        }
        #header{
            color:white;
        }
        hr{
            border-color:white;
        }
        #content {
            
            color:white;
            font-weight:400;
            height:810px;
        }
        .article{
            height:970px;
            color:white;
        }
        #footer {
              position:relative;
              top:1000px;
              padding-top: 20px;
              margin-top: 20px;
              text-align: center;
              padding-bottom: 20px;
              color: #fff;
              background-color:black;
              text-align: center;
				
          }
          #footer p,#footer h2{
            position:relative;
            right:800px;
          }
          
        
      </style>

    <title>Home</title>
  </head>
  <body>
      

        <!--Caraousel-->
      
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img id="check" src="Photos (1).gif" class="d-block w-100 caru" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 id="name1">Connecting people</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <div id="img2"><img src="Articles.gif" class="d-block w-100 caru" alt="..."></div>
      <div class="carousel-caption d-none d-md-block">
        <h5 id="name2"><?php echo $names[$rand1]?></h5>
        <p id="by2">Uploaded by <?php echo $uploaders[$rand2]?>
        </p>
      </div>
    </div>
    <div class="carousel-item">
    <div id="img3"><img src="<?php echo $file_name[$rand2]?>" class="d-block w-100 caru" alt="..."></div>
      <div class="carousel-caption d-none d-md-block">
        <h5 id="name3"><?php echo $names[$rand2]?></h5>
        <p id="by3">Uploaded by <?php echo $uploaders[$rand2]?></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <!--Display content-->
    <div class="container-fluid">
        <div id='left' class="scrollable">
            <h3>Articles</h3>
          <ul class="list-group" id="articlecontainer"></ul>
          <h3>Poems</h3>
          <ul class="list-group" id="poemcontainer"></ul>
        </div>

        <div id="right" >
          <div class="article ">
              <h1 id="header"><?php echo $titles[$rand3]?></h1>
              <hr>
              <br>
          <article class="lead scrollable" id="content">
          <?php echo $text[$rand3]?>
                 
          
          </article>
              
              <p id="by" class="lead"></p>
              <br>
          </div>
      </div>
    </div>

        <footer  id="footer">
          
            <div style="position:relative;"><h2><img src="footericon.jpeg"></h2>
              <p class="lead">© All Rights Reserved Aurora Pvt. Ltd.</p></div>
              <p><a href=""><i class="fa fa-facebook-f" style="font-size:24px;color:white;margin:5px;"></i>
                            <i class="fa fa-linkedin-square" style="font-size:24px;color:white;margin:5px;"></i>
                            <i class="fa fa-instagram" style="font-size:24px;color:white;margin:5px;"></i></a></p>
              

              <p> <i class="fa fa-phone" style="font-size:24px;color:white;margin:5px;"></i>  022-2377457</p>

              
          
        </footer>
          
        

      <script type="text/javascript">
        //alert($("#check").height());
        var count=<?php echo $count?>;
        var i=0;
        var titles=<?php echo json_encode($titles); ?>;
        var text=<?php echo json_encode($text); ?>;
        var author=<?php echo json_encode($author); ?>;
        for(i=0;i<count;i++) {
            

            $('#articlecontainer').append('<li class="list-group-item"><a href="#" id="article'+i+'">'+titles[i]+'</a></li>');
        }
        for(i=0;i<count;i++) {
            var checkid="#article"+i;
            $(checkid).click(function() {
                var id = $(this).attr('id');
                id=id.replace('article','');
                $('#header').html(titles[id]);
                $("#content").html(text[id]);
                $("#by").html("-"+author[id]);
            })
        }
        var count2=<?php echo $count2?>;
        var i=0;
        var poem_titles=<?php echo json_encode($poem_titles); ?>;
        var poem=<?php echo json_encode($poem); ?>;
        var poet=<?php echo json_encode($poet); ?>;
        for(i=0;i<count2;i++) {
            

            $('#poemcontainer').append('<li class="list-group-item list-group-item-dark"><a href="#" id="poem'+i+'">'+poem_titles[i]+'</a></li>');
        }
        for(i=0;i<count2;i++) {
            var checkid="#poem"+i;
            $(checkid).click(function() {
                var id = $(this).attr('id');
                id=id.replace('poem','');
                $('#header').html(poem_titles[id]);
                $("#content").html(poem[id]);
                $("#by").html("<em>-"+poet[id]+"</em>");
            })
        }
        /*function getrand(max) {
            return Math.floor(Math.random() * Math.floor(max));
        }
        var count3=<?php echo $count3?>;
        var i=0;
        var names=<?php echo json_encode($names); ?>;
        var file=<?php echo json_encode($file_name); ?>;
        var uploader=<?php echo json_encode($uploaders); ?>;*/
        
        //$("#img2").append('<img src="'.file[getrand(count3)].'" class="d-block w-100" alt="...">');

        



      </script>

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>