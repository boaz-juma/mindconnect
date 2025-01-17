<?php
session_start();
include('./api/connection.php');
include("./api/route.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> MIND CONNECT Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +254798002050
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html"    class="logo me-auto"><img style="width:250px , height: 2 rem" src="assets/img/logo.jfif" alt="" /></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <?php if(isset($_SESSION['userId'])) :?>
            <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <?php endif;?>
          <?php if(isset($_SESSION['doctorId'])) :?>
            <li><a class="nav-link scrollto" href="#doctors">Patients</a></li>
          <?php endif;?>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php if(isset($_SESSION['doctorId'])) :?>
        <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">See</span> Appointments</a>
      <?php endif;?>
      <?php if(isset($_SESSION['userId'])) :?>
        <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointments</a>
      <?php endif;?>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Welcome to <span>MIND CONNECT</span></h2>
            <p>Therapy is a professional relationship aimed at mental health improvement. It involves confidential, empathetic discussions to understand, manage emotions, and foster personal growth. Therapists employ various techniques tailored to individual needs to facilitate healing and well-being.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Clinical Psychology</h2>
            <p>Focuses on diagnosing and treating mental illness, emotional disturbances, and dysfunctional behavior.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Cognitive Psychology</h2>
            <p>Studies mental processes such as perception, memory, thought, and problem-solving.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Clinical Psychology</a></h4>
              <p class="description">Focuses on diagnosing and treating mental illness, emotional disturbances, and dysfunctional behavior.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">Cognitive Psychology</a></h4>
              <p class="description">Studies mental processes such as perception, memory, thought, and problem-solving.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">Developmental Psychology</a></h4>
              <p class="description"> Examines the psychological growth of individuals throughout their lifespan, from infancy to old age.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4 class="title"><a href="">Biopsychology</a></h4>
              <p class="description">Investigates the biological underpinnings of behavior, combining principles from biology and psychology to understand how the brain and nervous system influence actions.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>In an emergency? Need help now?</h3>
          <p> 
If an emergency arises with one of my psychology clients, the first step is to ensure their safety. I would immediately contact emergency services if needed and provide calm, supportive assistance, following established crisis intervention protocols to handle the situation effectively.</p>
          <a class="cta-btn scrollto" href="#appointment">Make an Make an Appointment</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Today, it is the world’s largest therapy service — providing professional, affordable, and personalized therapy in a convenient online format. BetterHelp’s network of over 30,000 licensed therapists has helped millions of people take ownership of their mental health and work towards their personal goals. As the unmet need for mental health services continues to grow, BetterHelp is committed to expanding access to therapy globally.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>counseling treatments</h3>
            <p class="fst-italic">
            Mental therapy, also known as psychotherapy or counseling, involves a range of treatments that can help with mental health issues, emotional challenges, and some psychiatric disorders. It aims to provide individuals with the means to manage their symptoms, understand themselves better, and improve their functioning and well-being. Here's an overview in point form:
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Goal-oriented: Therapy focuses on achieving specific outcomes, such as reducing anxiety, coping with depression, managing stress, or overcoming phobias.</li>
              <li><i class="bi bi-check-circle"></i> Variety of Approaches: There are multiple types of therapy, including cognitive-behavioral therapy (CBT)</li>
              <li><i class="bi bi-check-circle"></i> Individual or Group Settings: Therapy can be conducted one-on-one, with couples, or in groups, depending on the individual's needs</li>
            </ul>
            <p>
            Mental therapy is a personalized process where the type, duration, and intensity of therapy are tailored to the individual's unique needs and goals.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Doctors</strong> Compassionate professionals dedicated to healing and improving patient well-being.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Departments</strong> Specialized unit focused on specific therapeutic interventions.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Research Lab</strong> Innovative space developing new therapeutic techniques, treatments.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Awards</strong> Recognition for outstanding contributions to therapeutic practices.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Therapeutic Approach or Orientation</h4>
              <p>This dimension refers to the theoretical framework or model guiding the therapy. Common approaches include cognitive-behavioral therapy (CBT), psychodynamic therapy, humanistic therapy, existential therapy, and integrative or eclectic therapy.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Modality: </h4>
              <p>Therapy can be conducted in different formats or modalities, such as individual therapy, couples therapy, family therapy, group therapy, or online therapy. Each modality has its own dynamics and is suited to addressing specific issues or goals.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Goals and Objectives:</h4>
              <p>The specific goals set by the therapist and client shape the direction and focus of the therapy. Goals can be related to symptom reduction, behavior change, personal growth, relationship improvement, </p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Therapeutic Relationship</h4>
              <p>The relationship between the therapist and the client is a critical dimension of therapy. Elements such as trust, rapport, empathy, and collaboration are vital for a successful therapeutic outcome.</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/features.jpg");' data-aos="zoom-in"></div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Mental Health Disorders</a></h4>
            <p class="description">Addressing clinical conditions like depression, anxiety disorders, bipolar disorder, schizophrenia, and others, using evidence-based treatments to manage symptoms and improve quality of life.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">Emotional Distress</a></h4>
            <p class="description">Helping individuals navigate feelings of sadness, anger, grief, or emotional turmoil stemming from various life events or circumstances.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title"><a href="">Trauma and Post-Traumatic Stress Disorder (PTSD)</a></h4>
            <p class="description">Offering specialized interventions to help people process and recover from traumatic experiences, reducing the impact of trauma on their daily lives.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">Stress Management</a></h4>
            <p class="description"> Providing strategies and tools to cope with stress related to work, relationships, or other aspects of life, aiming to improve overall well-being and resilience.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href="">Self-esteem and Self-Image</a></h4>
            <p class="description">Working on issues related to self-worth, body image, and identity, encouraging a healthier relationship with oneself.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="">Relationships and Interpersonal Issues</a></h4>
            <p class="description">Addressing problems in relationships, whether with partners, family members, or colleagues, focusing on communication, conflict resolution, and building healthy connections.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <?php if(isset($_SESSION['userId'])) :?>
      <section id="appointment" class="appointment section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Make an Appointment</h2>
            <p>Making an appointment for therapy involves contacting a therapist or mental health clinic, either by phone, email, or online platform. Provide basic information, discuss availability, and possibly the reasons for seeking therapy, to schedule a suitable time for your initial session.</p>
          </div>
          <?php
            $userId = $_SESSION['userId'];
            $userdet = "SELECT * FROM users WHERE id = $userId";
            $userexc  = mysqli_query($connection,$userdet);
            $rowuserdet = mysqli_fetch_array($userexc);
            $name = $rowuserdet['name'];
            $email = $rowuserdet['email'];
            $phone = $rowuserdet['phone'];
          ?>
          <form action="./api/appointment.php" method="post" class="php-contact-form" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
              <div class="col-md-4 form-group">
                <input type="text" value="<?php echo $name  ?>" readonly name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input type="email" value="<?php echo $email  ?>" readonly class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input type="tel" value="<?php echo $phone  ?>" readonly class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group mt-3">
                <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
              </div>
              <div class="col-md-4 form-group mt-3">
              <?php
                $department = "SELECT * FROM department";
                $depexc = mysqli_query($connection,$department);
              ?>
                <select name="department" id="department" class="form-select">
                  <option value="">Select Department</option>
                  <?php while ($row = mysqli_fetch_array($depexc)) :?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                  <?php endwhile; ?>
                </select>
              </div>
              <div class="col-md-4 form-group mt-3">
                <?php
                  $doctors = "SELECT * FROM doctors ";
                  $docexc = mysqli_query($connection, $doctors);
                ?>
                <select name="doctor" id="doctor" class="form-select">
                  <option value="">Select Doctor</option>
                  <?php while($row = mysqli_fetch_array($docexc)): ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                  <?php endwhile; ?>
                </select>
              </div>
            </div>

            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            </div>
            <br>
            <div class="text-center"><button name='appointment' style="border:none;background-color:#3fbbc0; cursor:pointer;border-radius:50px;padding:10px 35px;color:#FFF;transition:0.4s;" type="submit">Make an Appointment</button></div>
          </form>

        </div>
      </section><!-- End Appointment Section -->
    <?php endif; ?>

    <!-- ======= Appointments Section ======= -->
    <?php if(isset($_SESSION['userId'])) :?>
      <section id="doctors" class="doctors section-bg">
        <div class="container" data-aos="fade-up">
          <?php
            $userId = $_SESSION["userId"];
            $apointments = "SELECT d.*,a.id AS apId,a.date,a.status FROM doctors AS d INNER JOIN appointment AS a ON d.id = a.doctorsId WHERE a.userId = $userId";
            $docexc = mysqli_query($connection, $apointments);
          ?>
          <?php if(mysqli_num_rows($docexc) > 0) :?>
            <div class="section-title">
              <h2>Your Appointment</h2>
              <p> Appointments are commonly used in various contexts, such as business meetings, medical consultations, job interviews, and personal engagements. They serve to organize and manage time effectively by ensuring that individuals allocate specific periods for specific tasks or interactions.</p>
            </div>
          <?php  endif; ?>
          <?php if(mysqli_num_rows($docexc) > 0) :?>
            <div class="row">
              <?php while($row = mysqli_fetch_array($docexc)): ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                      <img src="assets/img/doctors/<?php echo $row['image'] ?>" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4><?php echo $row['name'] ?></h4>
                      <span><?php echo $row['position'] ?></span>
                      <span><?php echo $row['date'] ?></span>
                      <form action="./api/appointment.php" method="post" style="display:flex; justify-content:center;flex-wrap:wrap;">
                        <input type="text" value="<?php echo $row['apId'] ?>" name="appointmentId" style="display:none;">
                        <?php if($row['status'] === 'Pending') : ?>
                          <div class='Rload' style="border:none;background-color:#cf920e; cursor:pointer;border-radius:4px;padding:10px 30px;color:#FFF;transition:0.4s;width:90%;margin-bottom:10px;margin-top:10px;">Pending</div>
                        <?php endif; ?>
                        <?php if($row['status'] === 'Accepted') : ?>
                          <div class='Rload' style="border:none;background-color:#1cd94e; cursor:pointer;border-radius:4px;padding:10px 30px;color:#FFF;transition:0.4s;width:90%;margin-bottom:10px;margin-top:10px;">Accepted</div>
                        <?php endif; ?>
                        <?php if($row['status'] === 'Rejected') : ?>
                          <div class='Rload' style="border:none;background-color:#d91c55; cursor:pointer;border-radius:4px;padding:10px 30px;color:#FFF;transition:0.4s;width:90%;margin-bottom:10px;margin-top:10px;">Rejected</div>
                        <?php endif; ?>
                        <button name='RemoveAppointment' style="border:none;background-color:#3fbbc0; cursor:pointer;border-radius:4px;padding:10px 30px;color:#FFF;transition:0.4s; width:90%;">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>

            </div>
          <?php  endif; ?>
        </div>
      </section><!-- End Doctors Section -->
    <?php endif; ?>

    <?php if(isset($_SESSION['doctorId'])) :?>
      <section id="appointment" class="doctors section-bg">
        <div class="container" data-aos="fade-up">
          <?php
            $doctorId = $_SESSION["doctorId"];
            $apointments = "SELECT u.*,a.id AS apId, a.date, a.status FROM users AS u INNER JOIN appointment AS a ON u.id = a.userId WHERE a.doctorsId = $doctorId";
            $docexc = mysqli_query($connection, $apointments);
          ?>
          <?php if(mysqli_num_rows($docexc) > 0) :?>
            <div class="section-title">
              <h2>Your Appointment</h2>
              <p> Appointments are commonly used in various contexts, such as business meetings, medical consultations, job interviews, and personal engagements. They serve to organize and manage time effectively by ensuring that individuals allocate specific periods for specific tasks or interactions.</p>
            </div>
          <?php  endif; ?>
          <?php if(mysqli_num_rows($docexc) > 0) :?>
            <div class="row">
              <?php while($row = mysqli_fetch_array($docexc)): ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                      <img src="assets/img/patient.png" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4><?php echo $row['name'] ?></h4>
                      <span><?php echo $row['date'] ?></span>
                      <form action="./api/appointment.php" method="post" style="display:flex; justify-content:center;flex-wrap:wrap;">
                        <input type="text" value="<?php echo $row['apId'] ?>" name="appointmentId" style="display:none;" >
                        <?php if($row['status'] === 'Accepted') : ?>
                          <div style="border:none;background-color:#1cd94e; cursor:pointer;border-radius:4px;padding:10px 30px;color:#FFF;transition:0.4s;width:90%;margin-bottom:10px;margin-top:10px;">Accepted</div>
                        <?php endif; ?>
                        <?php if($row['status'] === 'Rejected') : ?>
                          <div style="border:none;background-color:#d91c55; cursor:pointer;border-radius:4px;padding:10px 30px;color:#FFF;transition:0.4s;width:90%;margin-bottom:10px;margin-top:10px;">Rejected</div>
                        <?php endif; ?>
                        <?php if($row['status'] === 'Rejected') : ?>
                          <button name="AcceptAppointment"  style="border:none;background-color:#3fbbc0; cursor:pointer;border-radius:4px;padding:10px 30px;color:#FFF;transition:0.4s;width:90%;margin-bottom:10px;margin-top:10px;">Accept</button>
                        <?php endif; ?>
                        <?php if($row['status'] === 'Accepted') : ?>
                          <button name='RejectAppointment' style="border:none;background-color:#3fbbc0; cursor:pointer;border-radius:4px;padding:10px 30px;color:#FFF;transition:0.4s; width:90%;">Reject</button>
                        <?php endif; ?>
                        <?php if($row['status'] === 'Pending') : ?>
                          <button name='RejectAppointment' style="border:none;background-color:#3fbbc0; cursor:pointer;border-radius:4px;padding:10px 30px;color:#FFF;transition:0.4s; width:90%;">Reject</button>
                          <button name="AcceptAppointment"  style="border:none;background-color:#cf920e; cursor:pointer;border-radius:4px;padding:10px 30px;color:#FFF;transition:0.4s;width:90%;margin-bottom:10px;margin-top:10px;">Accept</button>
                        <?php endif; ?>
                      </form>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>

            </div>
          <?php  endif; ?>
        </div>
      </section><!-- End appointments Section -->
    <?php endif; ?>

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Departments</h2>
          <p>Therapy departments specialize in various mental health treatments, offering services like individual, group, and family counseling. They address issues such as depression, anxiety, trauma, and addiction, utilizing professionals skilled in diverse therapeutic approaches to support clients' emotional and psychological well-being.</p>
        </div>

        <?php
            $department = "SELECT * FROM department LIMIT 4";
            $depexc = mysqli_query($connection,$department);
        ?>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <?php $count = 0;  ?>
              <?php while($row = mysqli_fetch_array($depexc)) :?>
                <?php 
                  $count = $count + 1;
                ?>
                <li class="nav-item">
                  <a class="nav-link  <?php if($count == 1){echo 'active show';} ?>" data-bs-toggle="tab" data-bs-target="#tab-<?php echo $count ?>">
                    <h4><?php echo $row['name']  ?></h4>
                    <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
                <?php
                    $department = "SELECT * FROM department LIMIT 4";
                    $depexc = mysqli_query($connection,$department);
                    $countTwo = 0; 
                ?>
                <?php while( $row =  mysqli_fetch_array($depexc)) :?>
                  <?php 
                    $countTwo = $countTwo + 1;
                  ?>                 
                  <div class="tab-pane <?php if($countTwo == 1){echo 'active show';} ?>" id="tab-<?php echo $countTwo; ?>">
                    <h3><?php echo $row['name']  ?></h3>
                    <p class="fst-italic"><?php echo $row['sammary']  ?></p>
                    <img src="assets/img/<?php echo $row['image']  ?>" alt="" class="img-fluid">
                    <p><?php echo $row['Description']  ?></p>
                  </div>
                <?php endwhile; ?>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
    <?php if(isset($_SESSION['userId'])) :?>
      <section id="doctors" class="doctors section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Doctors</h2>
            <p>Doctors specializing in therapy are compassionate, highly skilled professionals dedicated to understanding and treating emotional and psychological challenges. They create safe, confidential spaces for healing, employing evidence-based practices to guide individuals towards improved mental health and well-being.</p>
          </div>

          <div class="row">
            <?php
              $doctors = "SELECT * FROM doctors LIMIT 4 ";
              $docexc = mysqli_query($connection, $doctors);
            ?>
            <?php while($row = mysqli_fetch_array($docexc)): ?>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="assets/img/doctors/<?php echo $row['image'] ?>" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4><?php echo $row['name'] ?></h4>
                    <span><?php echo $row['position'] ?></span>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>

          </div>

        </div>
      </section><!-- End Doctors Section -->
    <?php endif; ?>

    <!-- ======= Doctors Section ======= -->
    <?php if(isset($_SESSION['doctorId'])) :?>
      <section id="doctors" class="doctors section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Patients</h2>
            <p>Patients seeking therapy are courageous individuals recognizing the need for support in navigating life's challenges. They bring unique stories and strengths to the therapeutic process, actively engaging in self-discovery and healing to enhance their mental health and overall quality of life.</p>
          </div>

          <div class="row">
            <?php
              $doctors = "SELECT * FROM users LIMIT 4 ";
              $docexc = mysqli_query($connection, $doctors);
            ?>
            <?php while($row = mysqli_fetch_array($docexc)): ?>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="assets/img/patient.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4><?php echo $row['name'] ?></h4>
                    <span>+254<?php echo $row['phone'] ?></span>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>

          </div>

        </div>
      </section><!-- End Doctors Section -->
    <?php endif; ?>

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>serene, inspiring space where art and healing intersect. It's a sanctuary for expression and reflection, allowing individuals to explore emotions, gain insights, and find solace through the transformative power of visual art in their healing journey.</p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <?php 
              $gallary  = "SELECT * FROM gallery LIMIT 10";
              $galexc = mysqli_query($connection,$gallary);
            ?>
            <?php while($row = mysqli_fetch_array($galexc)):?>
              <div class="swiper-slide" style="max-height:200px;" ><a class="gallery-lightbox" href="assets/img/gallery/<?php echo $row['image'] ?>"><img src="assets/img/gallery/<?php echo $row['image'] ?>" class="img-fluid"  alt=""></a></div>
            <?php endwhile; ?>
          </div>
          <div class="swiper-pagination" style="margin-top:-150px;"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->


    <!-- ======= Pricing Section ======= -->
    <?php if(isset($_SESSION['userId'])) :?>
      <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Pricing</h2>
            <p>Offers essential medical services and consultations at an affordable price, suitable for individuals or families with standard healthcare needs. Covers routine check-ups, basic treatments, and primary care services.</p>
          </div>

          <div class="row">
            <?php
                $price = "SELECT * FROM pricing LIMIT 4";
                $prcexc = mysqli_query($connection,$price);
            ?>
            <?php while($row = mysqli_fetch_array($prcexc)) :?>
              <div class="col-lg-3">
                <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                  <h3><?php echo $row['name'] ?></h3>
                  <h4><sup>$</sup><?php echo $row['Amount'] ?><span> / month</span></h4>
                  <ul style="height:200px;">
                    <li><?php echo $row['Description'] ?></li>
                  </ul>
                  <div class="btn-wrap">
                    <a href="<?php if($row['Amount'] > 0){echo 'payment.php?id=' . $row['id'];} else{echo '#';} ?>" class="btn-buy">Buy Now</a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>


          </div>

        </div>
      </section><!-- End Pricing Section -->
    <?php endif; ?>

    <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questioins</h2>
          <p>Therapy involves many common questions from individuals considering or starting the process. Here are some frequently asked questions in therapy:</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What can I expect in my first therapy session?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
              Your first session is generally about getting to know your therapist, discussing your reasons for seeking therapy, and outlining your goals.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">How long does therapy usually last?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
              The duration of therapy can vary widely based on individual needs, the nature of the issues being addressed, and the therapeutic approach. It can range from a few sessions to several years.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">How do I know if therapy is working?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
              Signs of progress can include feeling more capable of handling life's challenges, improved relationships, and a better understanding of yourself and your emotions.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">How often should I attend therapy sessions?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
              Frequency can vary, with weekly sessions being common. However, some may benefit from more or less frequent visits depending on their situation and progress.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">What’s the difference between a psychologist, a psychiatrist, and a therapist?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
              Psychiatrists are medical doctors who can prescribe medication. Psychologists have specialized training in psychological testing and therapy. Therapists/counselors provide therapy but typically cannot prescribe medication.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Can I switch therapists if I don't feel it's a good fit?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
              Absolutely. It's important to find a therapist with whom you feel comfortable. Therapy is most effective when there's a strong therapeutic alliance.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p> "contact" refers to how you can reach out to initiate therapy, schedule appointments, or seek urgent support from your therapist or a mental health facility. This might include using a dedicated phone line, email address, an online booking system, or a contact form on a therapy center's website. For emergency situations, your therapist might provide specific instructions for contacting crisis hotlines or emergency services. Having clear and effective contact methods is crucial for ensuring that you feel supported and can easily access the help you need when you need it.</p>
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>
          <?php
          if(isset($_SESSION['userId'])){
              $userId = $_SESSION['userId'];
              $userdet = "SELECT * FROM users WHERE id = $userId";
              $userexc  = mysqli_query($connection,$userdet);
              $rowuserdet = mysqli_fetch_array($userexc);
              $name = $rowuserdet['name'];
              $email = $rowuserdet['email'];
              $phone = $rowuserdet['phone'];
          }
          if(isset($_SESSION['doctorId'])){
              $userId = $_SESSION['doctorId'];
              $userdet = "SELECT * FROM doctors WHERE id = $userId";
              $userexc  = mysqli_query($connection,$userdet);
              $rowuserdet = mysqli_fetch_array($userexc);
              $name = $rowuserdet['name'];
              $email = $rowuserdet['email'];
          }
          ?>
          <div class="col-lg-6">
            <form action="./api/contact.php" method="post"  class="php-contact-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" value="<?php echo $name ?>" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" value="<?php echo $email ?>" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              <br>
              <div class="text-center"><button type="submit" style="border:none;background-color:#3fbbc0; cursor:pointer;border-radius:4px;padding:10px 30px;color:#FFF;transition:0.4s;" name='contact'>Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Medicio</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>A therapy newsletter provides updates, mental health tips, therapy insights, and resources to support well-being and foster a supportive community.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MIND CONNECT</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <?php
          $username = '';
          if(isset($_SESSION['userId'])){
            $userId = $_SESSION['userId'];
            $query = "SELECT name FROM users WHERE Id = $userId";
            $execute = mysqli_query($connection, $query);
            $row = mysqli_fetch_array($execute);
            $username = $row['name']; 
          }
          elseif(isset($_SESSION['doctorId'])){
            $userId = $_SESSION['doctorId'];
            $query = "SELECT name FROM doctors WHERE Id = $userId";
            $execute = mysqli_query($connection, $query);
            $row = mysqli_fetch_array($execute);
            $username = $row['name']; 
          }
        ?>
        <form action="./api/logout.php" method='post'>
          logged in As <a href="#"><?php echo $username; ?></a> <button type="submit" name="logout"style="border:none; background:transparent; cursor:pointer;color:inherit;">(Log Out)</button>
        </form>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>