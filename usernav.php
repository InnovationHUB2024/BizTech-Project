<?php 

  $username=$_SESSION['id'];
  

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a id="check12" class="navbar-brand" href="#"><img src="Aurora.gif"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="userhome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="photography.php">Photography</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="upload.php">Upload</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" style="margin-right:70px;">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $username?>
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="useruploads.php">Your Uploads</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Log Out</a>
                </div>
            </li>
            
        </ul>
    </form>
  </div>
</nav>