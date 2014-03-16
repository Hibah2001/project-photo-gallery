<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $question?> - Add Answer | Tutorialzine Demo</title>
        
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
		</header>
		
		<?php 
		
		// This will print a link to the question page
		echo anchor("questions/show/$qid",'Back to the question','class="addAnswer"');
		
		// Creating the form using the form helper
		
		echo form_open('');

		echo form_label('Name','name');
		echo form_input(array(
          'name'        => 'name',
          'id'          => 'name',
          'value'       => set_value('name'),
          'maxlength'   => '64'
        ));
		
		echo form_label('Email (gravatar enabled)','email');
		echo form_input(array(
          'name'        => 'email',
          'id'          => 'email',
          'value'       => set_value('email'),
          'maxlength'   => '128'
        ));
		
		echo form_label('Answer','answer');
		echo form_textarea(array(
          'name'        => 'answer',
          'id'          => 'answer',
          'value'       => set_value('answer'),
        ));

		echo form_submit('subm', 'Add Answer!'); 
		
		// Showing the validation errors
		$validation = validation_errors(); 
		
		if($validation):
		?>
			<div class="errorMessages">
				<?php echo $validation?>
			</div>
			
		<?php endif;?>
		
		<?php echo form_close()?>
		
        <footer>
	        <h2><i>Tutorial:</i> Question of the Day with CodeIgniter</h2>
            <a class="tzine" href="http://tutorialzine.com/2012/01/question-of-the-day-codeigniter-php-mysql/">Head on to <i>Tutorial<b>zine</b></i> to download this example</a>
        </footer>
    
    </body>
</html>

