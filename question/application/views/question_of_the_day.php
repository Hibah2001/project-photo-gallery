<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $question?> - Question of the day | Tutorialzine Demo</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Rancho" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css" />

        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

		<header id="blackboard">
			<h1><?php echo $question?></h1>
			<?php if($previous) echo anchor("questions/show/$previous",'&laquo;','class="arrow left"')?>
			<?php if($next) echo anchor("questions/show/$next",'&raquo;','class="arrow right"')?>
		</header>
				
		<?php 
		
		// This method will create a link to the answer form. It is given relative
		// to your index page, but will be transformed depending on your base in config.php
		
		echo anchor("answers/add/$id",'Add your answer','class="addAnswer"');
		
		?>
		
		<ul id="answers">
			
		<?php foreach ($answers as $ans): ?>

			<li>
				<?php
					// Creating the URL of the gravatar image.
					$gravatar = 'http://www.gravatar.com/avatar/'.md5( strtolower( trim($ans['email']) ) ).'?d=mm'; 
				?>
				
				<span class="avatar" style="background-image:url(<?php echo $gravatar?>)"></span>
				<span class="meta">
					<a href="#" class="author"><?php echo $ans['name']?></a>
					<?php
						// We are using the built-in timestamp method. We are using
						// array slice to limit the shown time divisions.
						$ts = explode(',', timespan(strtotime($ans['dt'])));
						$t = implode(',',array_slice($ts,0,2));
					?>
					<i><?php echo $t?> ago</i>
				</span>
				<p class="answer"><?php echo $ans['answer']?></p>
			</li>
		
		<?php endforeach; ?>
		
		</ul>
		

        <footer>
	        <h2><i>Tutorial:</i> Question of the Day with CodeIgniter</h2>
            <a class="tzine" href="http://tutorialzine.com/2012/01/question-of-the-day-codeigniter-php-mysql/">Head on to <i>Tutorial<b>zine</b></i> to download this example</a>
        </footer>
    
    </body>
</html>

