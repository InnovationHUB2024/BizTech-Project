<?php
if($_POST) {
  if(isset($_POST["login"])) {
    header("Location:login.php");
  }
  elseif(isset($_POST["signup"])) {
    header("Location:signup.php");
  }
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="Aurora.gif"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="userhome.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="photography.php">Photography</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post">
      <input class="btn btn-outline-light my-2 my-sm-0" type="submit" name="login" value="Log In">
      <input class="btn btn-outline-light my-2 my-sm-0" type="submit" name="signup" value="Sign Up">
      
    </form>
  </div>
</nav>