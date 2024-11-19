<!doctype html>
<?php
session_start();



// include("databaseconnect.php");

// include("getvalues.php");
// $rand1=rand(0,$count3-1);
// $rand2=rand(0,$count3-1);
// $rand3=rand(0,$count-1);


?>


<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a9950323cb.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->


  <title>Home</title>

  <style>
    .wrapper {
      width: 100%;
      margin: auto;
    }

    .carousel-inner>.item>img,
    .carousel-inner>.item>a>img {
      width: 100%;
      margin: auto;
    }

    .carousel .carousel-item {
      height: 500px;
    }

    .carousel-item img {
      position: absolute;
      object-fit: cover;
      top: 0;
      left: 0;
      min-height: 250px;
    }

    .theme-color {
      background-color: rgb(22, 53, 100) !important;
    }
  </style>
</head>

<body>

  <!-- <div class="containe"> -->

  <?php
  if ($_SESSION) {
    include("usernav.php");
  } else {
    include("navbar.php");
  }

  ?>
  <!-- </div> -->



  <div class="wrapper">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/Ishaan99Tekken.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/images/Ishaan99gfd.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/images/Ishaan99Nature.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </div>

  <section class="pt-5">

    <div class="container">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Articles</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Photography</button>
        </li>

      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="row">
            <div class="col-md-5">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <div class="card">
                    <div class="card-body ">
                      <h5 class="card-title"><b>The Power of Collaboration: Why Teamwork Matters in School</b></h5>
                      <p class="card-text">
                       Highlight the importance of working together on projects, group discussions, and extracurricular activities. 
                       Share tips on effective collaboration and how it benefits personal growth and success in academics.
                      </p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Top Study Tips to Ace Your Exams</b></h5>
                      <p class="card-text">
                      Provide actionable study techniques, like using flashcards, creating a schedule, and taking breaks. 
                      Include advice on managing stress and balancing study with relaxation.
                      </p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Exploring the Digital World: Safe Internet Practices for Students</b>t</h5>
                      <p class="card-text">
                       Educate readers about cybersecurity and online etiquette. Share practical tips on protecting personal 
                       information, avoiding cyberbullying, and recognizing phishing attempts.
                      </p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Why Extracurricular Activities are the Key to Success</b></h5>
                      <p class="card-text">
                        Discuss the role of sports, arts, and clubs in developing leadership, teamwork, and creativity. 
                        Share success stories from students who excelled due to their participation in such activities.
                      </p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-md-5">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Sustainability Starts in School: Go Green Initiatives</b></h5>
                      <p class="card-text">
                       Write about eco-friendly practices students can adopt, like recycling, reducing plastic use, and participating in tree-planting drives. 
                       Highlight your school's sustainability efforts.
                      </p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Leadership Lessons: What I Learned from Being a Class Representative</b></h5>
                      <p class="card-text">
                       Offer personal insights or interviews with student leaders about the challenges and 
                       rewards of leadership roles in school.
                      </p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>The Art of Balancing School and Personal Life</b></h5>
                      <p class="card-text">
                       Provide tips on time management, setting priorities, and finding time for 
                       hobbies while keeping up with schoolwork.
                      </p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><b>Hidden Gems of Our School Campus</b></h5>
                      <p class="card-text">
                       Have you discovered all the treasures within our campus? From our serene library to the blooming garden and inspiring artwork adorning the corridors, 
                       each corner has a story. These spaces foster creativity, provide tranquility, 
                       and inspire learning. Take a walk and explore—you might find your favorite spot!
                      </p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> Photography</div>
      </div>
    </div>

  </section>
  <hr />
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-5">
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-body ">
                <h5 class="card-title"><b>Mastering the Art of Public Speaking</b></h5>
                <p class="card-text">
                 Share tips on overcoming stage fright, crafting compelling speeches, and engaging an audience. 
                 Include anecdotes from students who improved their public speaking skills.
                </p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>

          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><b>How to Build Your College Application Portfolio</b></h5>
                <p class="card-text">
                 Guide students on organizing extracurricular achievements, writing strong personal statements, 
                 and obtaining impactful letters of recommendation.
                </p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>

          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><b>Mental Health Matters: Coping with School Stress</b></h5>
                <p class="card-text">
                 Provide actionable advice on managing stress, recognizing burnout, and seeking help. 
                 Highlight the importance of self-care and mental health awareness.
                </p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>

          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><b>The Evolution of Technology in Education</b></h5>
                <p class="card-text">
                Explore how tools like tablets, coding platforms, and virtual learning environments are reshaping 
                the way students learn and collaborate.

                </p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-5">
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><b>Volunteer Work: Giving Back to the Community</b></h5>
                <p class="card-text">
                  Emphasize the value of volunteering for personal growth and college applications. Share opportunities for 
                  high school students to get involved in their communities.</p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>

          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><b>The Science Behind Effective Time Management</b></h5>
                <p class="card-text">
                 Offer a detailed breakdown of time management strategies, such as using planners, 
                 prioritizing tasks, and avoiding procrastination.
                </p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>

          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><b>Discovering Career Paths in High School</b></h5>
                <p class="card-text">
                 Write about how students can explore potential careers through internships, shadowing professionals, 
                 or engaging in career counseling sessions.
                </p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>

          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><b>The Role of Social Media in Shaping Identity</b></h5>
                <p class="card-text">
                 Discuss the impact of social media on self-esteem, relationships, and personal branding. 
                 Share tips on using social platforms positively.
                </p>
                <a href="#" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

  </div>

  <!-- footer section -->

  <footer class="bg-dark text-center text-white theme-color">

    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <p>&copy; All Rights Reserved Miva Innovation Hub.</p>
      <img src="images/miva.png" alt="aurora" height="100px">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-linkedin"></i></a>
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex

  <script src=" https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
          </script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>