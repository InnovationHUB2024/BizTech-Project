<?php
//GETTING THE VALUES FOR ALL ARTICLES
$result=mysqli_query($conn,"select * from article order by ID desc");
$titles=array();
$text=array();
$author=array();
$i=0;
$count=mysqli_num_rows($result);
if($count>0){
    while($row = $result -> fetch_row()) {
        $author[$i]=$row[1];
        $titles[$i]=$row[2];
        $text[$i]=$row[3];
        $i++;
        
    }
    
}
//GETTING THE VALUES FOR ALL POEMS
$result4=mysqli_query($conn,"select * from poem order by ID desc");
$poem_titles=array();
$poem=array();
$poet=array();
$i=0;
$count2=mysqli_num_rows($result4);
if($count2>0){
    while($row = $result4 -> fetch_row()) {
        $poet[$i]=$row[1];
        $poem_titles[$i]=$row[2];
        $poem[$i]=$row[3];
        $i++;
        
    }
    
}
//GETTING THE VALUES FOR ALL PHOTOGRAPHS
$result7=mysqli_query($conn,"select * from photo order by ID desc");
$names=array();
$file_name=array();
$uploaders=array();
$i=0;
$count3=mysqli_num_rows($result7);
if($count3>0){
    while($row = $result7 -> fetch_row()) {
        $uploaders[$i]=$row[1];
        $names[$i]=$row[2];
        $file_name[$i]=$row[3];
        $i++;
        
    }
    
}
?>