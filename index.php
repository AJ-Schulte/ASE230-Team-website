<?php
include 'assets/functions/birthday.php';
include 'assets/functions/cardindex.php';
// INSERT DATA HERE.
	$members = [
		[
			"name" => "AJ Schulte",
			"birthday"=> "2005-09-12",
			"role" => "Video Game Developer",
			"email"=> "ajschulte91@gmail.com",
			"phoneNumber"=> "(859) 609-5647",
			"linkedIn"=> "aj-schulte",
			"github"=> "AJ-Schulte"
		],
		[
			"name"=> "Joseph Gallucci",
			"birthday"=> "2005-03-08",
			"role"=> "Software Developer",
			"email" => "josephagallucci38@gmail.com",
			"phoneNumber" => "317-775-1545",
			"linkedIn"=> "joseph-a-gallucci",
			"github"=> "josephagallucci",
		],
		[
			"name"=> "Riley Fitzgerald",
			"birthday"=> "",
			"role"=> "Cyber Security Major",
			"email"=> "Fitzgeralw1@mymail.nku.edu",
			"phoneNumber"=> "513-111-7175",
			"linkedIn"=> "riley-fitzgerald",
			"github"=> "Rfitz2k",
		]
	];
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our amazing team</title>
    
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
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
			<?php for($i = 0; $i < count($members); $i++) { ?>
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/<?= $i ?>.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $members[$i]["name"]?></h1>
								<div class="title mb-3"><?= "Age: " . calculateAge($members[$i]['birthday']) ?></div>
							    <div class="title mb-3"><?= $members[$i]["role"] ?></div>
								<a href="detail.php?index=<?= $i ?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
								<?= cardInfo($members[$i])?>
							<!--<ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i></a><?=cardInfo($members[$i])?></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i></a><?=cardInfo($members[$i])?></li>
							    </ul>-->
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
			<?php } ?>
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?php foreach($members as $member) {
			echo $member["name"], ", ";
		} ?></small>
    </footer>

    

</body>
</html> 

