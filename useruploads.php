<?php
session_start();
$username=$_SESSION['id'];
include("usernav.php");
include("databaseconnect.php");
  
//GETTING THE VALUES FOR ALL ARTICLES
$result=mysqli_query($conn,"select * from article where Username ='$username'");
$count=mysqli_num_rows($result);
$titles=array();
$text=array();
if($count>0){
    $i=0;
    while($row = $result -> fetch_row()) {
        $titles[$i]=$row[2];
        $text[$i]=$row[3];
        $i++;
        
    }   
}
//GETTING THE VALUES FOR ALL POEMS
$result2=mysqli_query($conn,"select * from poem where Username ='$username'");
$count2=mysqli_num_rows($result2);
$titles2=array();
$text2=array();
if($count2>0){
    $i=0;
    while($row = $result2 -> fetch_row()) {
        $titles2[$i]=$row[2];
        $text2[$i]=$row[3];
        $i++;
        
    }   
}
//GETTING THE VALUES FOR ALL PHOTOS
$result3=mysqli_query($conn,"select * from photo where Username ='$username'");
$count3=mysqli_num_rows($result3);
$titles3=array();
$text3=array();
if($count3>0){
    $i=0;
    while($row = $result3 -> fetch_row()) {
        $titles3[$i]=$row[2];
        $text3[$i]=$row[3];
        $i++;
        
    }   
}

?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <style type="text/css">

            body{
                font-family: 'Titillium Web', sans-serif;
                background-color: #152238;
                color:aliceblue;
            }
            .collapsible {
                background-color: #eee;
                color: #444;
                cursor: pointer;
                padding: 18px;
                width: auto;
                position:relative;
                float:left;
                border: none;
                text-align: left;
                outline: none;
                font-size: 15px;
            }

            /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
            .active, .collapsible:hover {
                background-color: #ccc;
            }

            /* Style the collapsible content. Note: hidden by default */
            #content {
                color:black;
                border: 2px solid gray;
                padding: 0 18px;
                background-color: white;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
            }
            hr{
                border-color:aliceblue
            }
            #buttons1 button,#buttons2 button{
                border-radius:20px;margin:5px;
            }
            
        </style>
        <title>Your Uploads</title>
    </head>
    <body>
        <div class="container">
            <br>
            <div id="photos"><h3>Photographs</h3><hr>
            </div>
            <br style="clear:both">
            <br>
            <div id="buttons1"><h3>Article</h3><hr>
            </div>
            <br style="clear:both">
            <br>
            <div id="buttons2"><h3>Poem</h3><hr>
            </div>
            <br style="clear:both">
            <br>
            <div id="content"></div> 
            
        </div>
        <script type="text/javascript">
            var count=<?php echo $count?>;
            var i=0;
            var titles=<?php echo json_encode($titles); ?>;
            var text=<?php echo json_encode($text); ?>;
            for(i=0;i<count;i++) {
                
                $('#buttons1').append('<button type="button" class="collapsible" id="article'+i+'">'+titles[i]+'</button>');
            }
            var count2=<?php echo $count2?>;
            var i=0;
            var titles2=<?php echo json_encode($titles2); ?>;
            var text2=<?php echo json_encode($text2); ?>;
            for(i=0;i<count2;i++) {
                
                $('#buttons2').append('<button type="button" class="collapsible" id="poem'+i+'">'+titles2[i]+'</button>');
            }
            for(i=0;i<count;i++){
                var checkid1="#article"+i;
                $(checkid1).click(function() {
                    $(this).toggleClass('active');
                    var id = $(this).attr('id');
                    id=id.replace('article','');
                    $('#content').html(text[id]);
                    if($('#content').css("maxHeight")!="0px"){
                        $('#content').css({"maxHeight":"0px"});
                    }
                    else{
                        $('#content').css({"maxHeight":"800px"});
                    }
                                      
                });
                var checkid2="#poem"+i;
                $(checkid2).click(function() {
                    $(this).toggleClass('active');
                    var id = $(this).attr('id');
                    id=id.replace('poem','');
                    $('#content').html(text2[id]);
                    if($('#content').css("maxHeight")!="0px"){
                        $('#content').css({"maxHeight":"0px"});
                    }
                    else{
                        $('#content').css({"maxHeight":"800px"});
                    }
                                      
                });
            }
            var count3=<?php echo $count3?>;
            var i=0;
            var text3=<?php echo json_encode($text3); ?>;
            for(i=0;i<count3;i++) {
                
                $('#photos').append('<img id="'+i+'"class="images" style="width: 17rem; height:10rem; margin:5px;border-radius:20px;" src="'+text3[i]+'">');
            }
            $(".images").mouseover(function(){
                i=$(this).attr('id');
            });
            $("#photos").find('img').css("transition", "transform 1s ease-out");
            $("#photos").hover(function(){
                $(this).find("#"+i).css("transform","scale(1.2)");
            },
            function(){
                $(this).find("#"+i).css('transform','scale(1)');
            });

            

            /*var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}*/
</script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </body>
</html>