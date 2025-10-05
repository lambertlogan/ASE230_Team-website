<?php
	$members = [
		[
			"name"   => "Logan Lambert",
			"birthyear" => "2005",
			"role"   => "Software Engineer",
			"image"  => "profile.jpg",
			"email"  => "lambertl8@mymail.nku.edu",
			"phone"  => "859-465-7980",
			"links"  => [
				"linkedin" => "https://www.linkedin.com/in/logan-lambert-52a74a308/",
				"github"   => "https://github.com/lambertlogan",
				"website"  => "#"
			],
			"website_echo" => [
				"linkedin" => "My LinkedIn",
				"github" => "My GitHub",
				"website" => "I don't have a website..."
			],
			"summary" => "Second year at NKU and have worked half a year at Amazon. Also is learning Japanese.",
			"experience" => [
				"title"       => "Amazon Fulfillment Associate",
				"company"     => "Amazon",
				"years"       => "2023 - 2024",
				"description" => "I worked at the 'Smalls' department. It was very difficult work during the Christmas season because we were working extra hours.",
				"achievements_description" => "I worked at the 'Smalls' department. It was very difficult work during the Christmas season because we were working extra hours.",
				"achievements"=> "Working my first job.",
				"technology"  => "Hard work"
			],
			"skills" => ["JavaScript", "HTML/CSS/SASS/LESS"],
			"other_skills" => ["Python"],
			"education" => [
				"degree"=>"Applied Software Engineering","organization"=>"Northern Kentucky University","years"=>"2024 - Present"
			],
			"awards" => ["name"=>"Soccer Championship","description"=>"I don't exactly remember when I won this, but it was either 2015 or 2016."],
			"languages" => ["English (Native)","Japanese (Intermediate)"],
			"interests" => ["Language Learning","Anime","Competitive Video Games"],
			"projects"  => [
				"image"=>"ProjectPage.png","title"=>"Final Project for Web Development","description"=>"My last project","link"=>"https://github.com/lambertlogan/Final_Project"
			]
		],
		[
			"name"   => "John Doe",
			"birthyear" => "0",
			"role"   => "Director",
			"image"  => "profile2.jpg",
			"email"  => "john.doe@gmail.com",
			"phone"  => "859-123-4567",
			"links"  => [
				"linkedin" => "#",
				"github"   => "#",
				"website"  => "#"
			],
			"website_echo" => [
				"linkedin" => "I don't have a LinkedIn...",
				"github" => "I don't have a GitHub...",
				"website" => "I don't have a website..."
			],
			"summary" => "Has experience directing for over 2000 years!",
			"experience" => [			
				"title"       => "Director",
				"company"     => "LOGAN LAMBERT CORPORATION",
				"years"       => "0 AD - Present",
				"description" => "Managing the ice cream machine and preventing it from breaking.",
				"achievements_description" => "All of the things I have accomplished fixing ice cream machines over the years.",
				"achievements"=> "Fixed 20 ice cream machines.",
				"technology"  => "Left hand, right hand."
			],
			"skills" => ["Leadership"],
			"other_skills" => ["Ice Cream Taste Testing"],
			"education" => [
				"degree"=>"Bachelor's in Desserts","organization"=>"CandyLand University","years"=>"2 Years."
			],
			"awards" => ["name"=>"Gold Trophy", "description"=>"Won the company Golf Championship."],
			"languages" => ["English (Native)"],
			"interests" => ["Eating Cheeseburgers"],
			"projects"  => [
				"image"=>"ProjectPage2.jpg","title"=>"Ice Cream Machine Repair Tool","description"=>"Made a new state-of-the-art technology for repairing ice cream machines!","link"=>"https://a.co/d/jdtJ5dA"
			]
		],
		[
			"name"   => "Christopher Redfield",
			"birthyear" => "50",
			"role"   => "Assistant",
			"image"  => "profile3.jpeg",
			"email"  => "ChrisRedfield@yahoo.com",
			"phone"  => "859-987-6543",
			"links"  => [
				"linkedin" => "#",
				"github"   => "#",
				"website"  => "#"
			],
			"website_echo" => [
				"linkedin" => "I don't have a LinkedIn...",
				"github" => "I don't have a GitHub...",
				"website" => "I don't have a website..."
			],
			"summary" => "Assists John with the ice cream machine.",
			"experience" => [
				"title"       => "Sleeper",
				"company"     => "LOGAN LAMBERT CORPORATION",
				"years"       => "100 AD - Present",
				"description" => "Sleeping on the job.",
				"achievements_description" => "All the things I'm proud of accomplishing.",
				"achievements"=> "Slept 20 hours once.",
				"technology"  => "Melatonin."
			],
			"skills" => ["REM Sleep"],
			"other_skills" => ["Snoring"],
			"education" => [
				"degree"=>"Sleeping Degree","organization"=>"Sleeping University","years"=>"1.5 Years."
			],
			"awards" => ["name"=>"Silver Trophy", "description"=>"Second in the company Golf Championship."],
			"languages" => ["English (Native)"],
			"interests" => ["Fitness","Outdoors"],
			"projects"  => [
				"image"=>"ProjectPage3.png","title"=>"Dairy Queen","description"=>"Made a fast-food chain dedicated to serving ice cream!","link"=>"https://a.co/d"
			]
		]
	];
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Your name's Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
<!-- NEW CODE for team project part 3-->
	<?php 
		$index = $_GET["id"];
		
		function findAge($person){
			return date("Y") - (int)$person["birthyear"];
		}
	?>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary"><?php echo "Back to index";?></a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/<?php echo $members[$index]["image"]; ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $members[$index]["name"]; ?></h1>
							    <div class="title mb-3"><?php echo $members[$index]["role"]; ?></div>
<!-- NEW CODE for team project part 3-->
								<div><?php echo "Age: ",  findAge($members[$index]), " years old"; ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="<?php echo "mailto:".$members[$index]["email"]; ?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $members[$index]["email"]; ?></a></li>
								    <li><a class="text-link" href="<?php echo "tel:".$members[$index]["phone"]; ?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $members[$index]["phone"]; ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="<?php echo $members[$index]["links"]["linkedin"]; ?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo $members[$index]["website_echo"]["linkedin"]; ?></a></li>
					                <li class="mb-3"><a class="text-link" href="<?php echo $members[$index]["links"]["github"]; ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo $members[$index]["website_echo"]["github"]; ?></a></li>
					                <li><a class="text-link" href="<?php echo $members[$index]["links"]["website"]; ?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo $members[$index]["website_echo"]["website"]; ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Summary";?></h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo $members[$index]["summary"]; ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Work Experience";?></h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $members[$index]["experience"]["title"]; ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo $members[$index]["experience"]["company"]; ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo $members[$index]["experience"]["years"]; ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <?php echo $members[$index]["experience"]["description"]; ?>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo "Achievements:";?></h4>
										    <p><?php echo $members[$index]["experience"]["achievements_description"]; ?></p>
										    <ul>
											    <li><?php echo $members[$index]["experience"]["achievements"]; ?></li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo "Technologies used:"; ?></h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo $members[$index]["experience"]["technology"]; ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
							    </div><!--//resume-timeline-->
							    
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Skills &amp; Tools"; ?></h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
	<!--- I spent waaaaay to long on this lol -->
										<?php foreach ($members[$index]["skills"] as $item): ?>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $item;?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
										<?php endforeach; ?>
										
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold"><?php echo "Others";?></h4>
						            <ul class="list-inline">
										<?php foreach ($members[$index]["other_skills"] as $item): ?>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo $item;?></span></li>
										<?php endforeach; ?>
										
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Education";?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo $members[$index]["education"]["degree"]; ?></div>
								        <div class="resume-degree-org"><?php echo $members[$index]["education"]["organization"]; ?></div>
								        <div class="resume-degree-time"><?php echo $members[$index]["education"]["years"]; ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Awards";?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo $members[$index]["awards"]["name"]; ?></div>
								        <div class="resume-award-desc"><?php echo $members[$index]["awards"]["description"]; ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Languages";?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								
									<?php foreach ($members[$index]["languages"] as $item): ?>
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo $item;?></span></li>
									<?php endforeach; ?>
									
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Interests"; ?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								
									<?php foreach ($members[$index]["interests"] as $item): ?>
								    <li class="mb-1"><?php echo $item; ?></li>
									<?php endforeach; ?>
									
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Projects" ?></h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/<?php echo $members[$index]["projects"]["image"];?>" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo $members[$index]["projects"]["title"];?></h5>
									<p class="card-text"><?php echo $members[$index]["projects"]["description"];?>.</p>
									<a class="btn btn-outline-primary" href="<?php echo $members[$index]["projects"]["link"];?>"><?php echo "The Link:"?></a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright"><?php echo"Designed with ";?><span class="sr-only"><?php echo "love";?></span><i class="fas fa-heart"></i> <?php echo "by Logan Lambert";?></small>
    </footer>

    

</body>
</html> 

