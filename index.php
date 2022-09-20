<?php include 'include/header.php'; ?>
<section id="container">
	<div id="nav_mobile">
		<li><a href="#project_container" class="navlink">Project</a></li>
		<li><a href="#about_container" class="navlink">About</a></li>
		<li><a href="#contact_container" class="navlink">Contact</a></li>
	</div>

	<article id="profile">
		<section id="profile_name">
			<p class="augustine">Hi, I'm <span style="color: white">Augustine</span><span class="wave">👋🏾</span></p>
			<div id="typing_wrapper"><h1 class="typing"></h1></div>
			<div id="contact_me"><a href="#contact_container">Contact Me</a></div><a href="document/cv.pdf" target="blank"><div id="download_cv" >Download Resume</div></a>
		</section>
		<section id="profile_img"><img src="img/profile.png"></section>
	</article>

	<article id="project_container" data-aos="fade-up" data-aos-duration="1000">
		<h1 class="project_header">My Projects</h1>
		<div class="project1" >
			<h1>Polling CRUD</h1>
			<img src="img/crud.jpg">
			<span class="project1_stack1">HTML</span>
			<span>PHP</span>
			<span>JQUEY</span>
			<span>AJAX</span>
			<span>CSS</span>
			<span>MYSQL</span>
			<div id="link">
				<a href="https://pollingcrud.eselunjikoka.live/"><button class="view">View</button></a>
				<a href="#"><button class="git">GitHub</button></a>
			</div>
		</div>

		<div class="project1" >
			<h1>Tour API</h1>
			<img src="img/tour.jpg">
			<span class="project1_stack1">HTML</span>
			<span>REACTJS</span>
			<span>CSS</span>
			<span>HTML</span>
			<div id="link">
				<a href="https://tourapi.netlify.app/"><button class="view">View</button></a>
				<a href="#"><button class="git">GitHub</button></a>
			</div>
		</div>
		<!-- <div class="project2"></div>
		<div class="project3"></div>
		<div class="project4"></div> -->
	</article>
	<article id="about_container" data-aos="fade-up" data-aos-duration="1000">
		<div id="about_profile">
			<!-- <img src="img/pro_pix.jpg"> -->
			<img src="img/pix.jpg">
		</div>
		<div id="about_text">
			<h1 class="about_header">About <span style="color: yellow">Me</span></h1>
			<p>
				My name is IWUANYANWU CHIDOZIE AUGUSTINE. I am a full-stack Web Application Developer, currently living in Port Harcourt, Rivers State, Nigeria. I have a Bachelor of Science in Industrial Chemistry from University of Port Harcourt. My primary focus is Technology. I am self-motivated, and I am constantly experimenting with new technologies and techniques. I am very passionate about Web Development, and strive to better myself as a developer, and the development community as a whole.
			</p>
			<p>
				I have been studying web development since 2016 and I develop in PHP. I am experienced in both front and back-end development, and I am proficient in HTML/HTML5, CSS/CSS3, JavaScript, jQuery, AJAX, and SQL/MySQL DATABASE, to name a few. I am also proficient in software like ADOBE PHOTOSHOP and ADOBE AFTER EFFECTS. I have also worked on some PHP projects like Polling CRUD website, MUSIC Blog and Ecommerce Website.
			</p>
			
		</div>
	</article>
	<article id="skill" data-aos="fade-up" data-aos-duration="1000">
		<h1 class="about_header">My Skills</h1>
		<div id="skill_holder">
			<div class="skill_img"><img src="img/html.png"></div>
			<div class="skill_txt">HTML</div>
			
		</div>

		<div id="skill_holder">
			<div class="skill_img"><img src="img/css.png"></div>
			<div class="skill_txt">CSS</div>
			
		</div>

		<div id="skill_holder">
			<div class="skill_img"><img src="img/javascript.png"></div>
			<div class="skill_txt">JavaScript</div>
			
		</div>
		<div id="skill_holder">
			<div class="skill_img"><img src="img/php.png"></div>
			<div class="skill_txt">PHP</div>
			
		</div>

		<div id="skill_holder">
			<div class="skill_img"><img src="img/jquery.png"></div>
			<div class="skill_txt">jQuery</div>
			
		</div>

		<div id="skill_holder">
			<div class="skill_img"><img src="img/ajax.png"></div>
			<div class="skill_txt">AJAX</div>
			
		</div>
		<div id="skill_holder">
			<div class="skill_img"><img src="img/react.png"></div>
			<div class="skill_txt">ReactJS</div>
			
		</div>

		<div id="skill_holder">
			<div class="skill_img"><img src="img/mysql.png"></div>
			<div class="skill_txt">MySQL</div>
			
		</div>

		<div id="skill_holder">
			<div class="skill_img"><img src="img/photoshop.png"></div>
			<div class="skill_txt">Photoshop</div>
			
		</div>
		<div id="skill_holder">
			<div class="skill_img"><img src="img/aftereffect.png"></div>
			<div class="skill_txt">After Effect</div>
			
		</div>
	</article>

	<article id="contact_container" data-aos="fade-up" data-aos-duration="1000">
		<div id="contact_form">

			<h1 class="contact_header">Contact <span style="color: yellow">Me</span></h1>
			<form id="send_msg" method="POST" enctype="multipart/form-data">
				<label>Name</label><br><br>
				<input type="text" name="fullname"><br><br>

				<label>Email</label><br><br>
				<input type="email" name="email"><br><br>

				<label>Message</label><br><br>
				<textarea name="msg"></textarea><br><br>

				<button type="submit" name="add">Send Message</button>
			</form>
				<?php email(); ?>
		</div>

		<div id="social_media_container" data-aos="fade-up" data-aos-duration="1000">
			<h1 class="social_header">Let's Connect On Social Media</h1>
			<a href="https://www.linkedin.com/mwlite/in/iwuanyanwu-augustine-34772a164"><div id="social_media_holder1">
				<img src="img/linkedin.png">
			</div></a>
			<a href="https://twitter.com/Augustine_Iwu?t=JljQJjVdQfWk2EaJ-hiFNg&s=09"><div id="social_media_holder">
				<img src="img/twitter.png">
			</div></a>
			<a href="https://www.instagram.com/iwuanyanwuaugustine/"><div id="social_media_holder">
				<img src="img/instagram.png">
			</div></a>
			<a href="https://www.facebook.com/augustine.iwuanyanwu"><div id="social_media_holder">
				<img src="img/facebook.png">
			</div></a>
		</div>
		
	</article>
</section>
<footer>
	<div id="thank_u">Thank You For Scrolling!</div>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src='js/jquery.js'></script>
<script src="js/script.js"></script>
</body>
</html>