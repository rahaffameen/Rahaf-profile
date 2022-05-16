<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>معرض أعمال رهف</title>
	<meta content="Development portfolio of .... " name="description" property="og:description">
		<link href="style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> <!-- Load JQuery, as our little script depends on it -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,600,400" rel="stylesheet" type="text/css"> <!-- Load our font from Google -->
  <script src="./index.js"></script>
</head>
<?php require 'scripts/connection.php';?>
<body>
  <div class="preloader"></div>
  <main>
  <section class="intro">
		<div class="intro-text"> 
      <div class="Hi">
				<h1>اهلا وسهلاً! 👋  &mdash; My name is <span>Rahaf</span>, I'm a <span>developer</span>👩‍💻 located in Jeddah, KSA 🇸🇦.</h1>
        <h1>Thank you for reaching out 🎉<span> Here is my Portfolio</span></h1>
    <div id='form'>
      <p> <a href="#contact">💌 تواصل معي</a></p>
    </div>
	</section>

  <section class="projects">
    <div class="projects-collage">
      		<!-- Projects loop -->
          <?php
     $projectsQ = mysqli_query($dbc, 'SELECT project_name, P_description, img FROM projects');
     foreach( $projectsQ as $data ) // using foreach  to display each element of array
     { ?>
      <a class="project-item" target="_blank">
        <figure class="project-figure">
          <div class="project-overlay"></div>
          <?php $img_path ="Assets/".$data['img'].".png";?>
          <img src="<?php echo $img_path ?>">
          <figcaption class="project-text">
            <h2> <?php echo $data['project_name']; ?></h2>
           <p class='hidden popUpdesc'>
           <?php echo $data['P_description']; ?>
          </p>
      </figcaption>
      </figure>
			</a>
      <?php } ?>
      </div>
	</section>
	<!-- Contact section -->
  <section id="contact" class="content contact">
    <div id='form'>
      <h1>محتاج/ىة خدمة أو استفسار؟ 🙌 تفضل ارسل رسالة تحت وبحاول أساعدك</h1>
      <p>And I'll get to you ASAP</p>
      <form> 
        <input type="text" placeholder="اسمك"> 
        <input type="email" placeholder="ايميلك">
        <textArea placeholder="رسالتك">
        </textArea>
        <div id='buttonDiv'><button>ارسال</button></div>
      </form>
    </div>
    </section>	
	<!-- Footer section -->
  <footer>
    <div class="wrapper">
      <ul>
        <li><a href="https://twitter.com/progrhf" target="_blank">Twitter</a></li>
        <li><a href="https://www.linkedin.com/in/rahaffelemban1999/" target="_blank">Linkedin</a></li>
				<li><a href="https://github.com/jabedford" target="_blank">GitHub</a></li>
      </ul>
      <p style="font-size: small;">Made with 💛	by PHP</p>
    </div>
	</footer>
	<!-- Footer section ends -->
  </main>
 <!--This section would ONLY appear when an individual project 'box' is clicked, It gives more detail about the project. it contains-- IMAGE OF THE PROJECT, THE PROJECT'S NAME, THE PROJECT FULL DESCRIPTION, GITHUB LINK && PREVIEW LINK -->
 <div class="popUp">
    <div class="popUpImg"></div>
    <div id="popUpText">
      <h1>اسم المشروع</h1>
      <p class="projectDesc">x</p>


    </div>
    <span id="cancelBtn">X</span>
  </div>
</body>
</html>
