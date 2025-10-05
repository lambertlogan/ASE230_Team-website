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
    <title>Our Amazing Team</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">
</head> 

<body>
<!-- NEW CODE for team project part 3-->
<?php
	function findAge($person){
		return date("Y") - (int)$person["birthyear"];
	}
?>
    <article class="resume-wrapper text-center position-relative">
        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
            <h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
            <?php foreach ($members as $index => $individual): ?>
                <header class="resume-header pt-4 pt-md-0">
                    <div class="row">
                        <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                            <img class="picture" src="assets/images/<?php echo $individual["image"]; ?>" alt="">
                        </div>
                        <div class="col">
                            <div class="row p-4 justify-content-center justify-content-md-between">
                                <div class="primary-info col-auto">
                                    <h1 class="name mt-0 mb-1 text-white text-uppercase">
                                        <?php echo $individual["name"]; ?>
                                    </h1>
<!-- NEW CODE for team project part 3-->
									<h4>
										<?php echo "Age: ",  findAge($individual), " years old"; ?>
									</h4>
                                    <div class="title mb-3"><?php echo $individual["role"]; ?></div>
                                    <a href="<?php echo "detail.php?id=" . $index; ?>" class="btn btn-secondary">
                                        <?php echo"See full profile";?>
                                    </a>
                                </div>
                                <div class="secondary-info col-auto mt-2"></div>
                            </div>
                        </div>
                    </div>
                </header>
            <?php endforeach; ?>
        </div>
    </article>

    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you"d like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright"><?php echo"Designed with ";?><span class="sr-only"><?php echo "love";?></span><i class="fas fa-heart"></i> <?php echo "by Logan Lambert";?></small>
    </footer>
	
</body>
</html>
