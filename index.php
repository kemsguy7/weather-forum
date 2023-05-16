<?php 

	require('config.inc.php');
	require('functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home - PHP Forum
	</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>


	<style> 

		.hide{
			display:none;
		}
	</style>
	<section class="class_1" >
		
	<?php include('header.inc.php')?>
		<div class="class_11" >
			<div class="class_12" >

				<?php include('success.inc.php')?>
				<?php include('failed.inc.php') ?>
					
				
			</div>
			<h1 class="class_41"  >
				Posts
			</h1>

			<?php if(logged_in()): ?>
				<div class="class_42" >
					<div class="class_43" >
						<textarea placeholder="Whats on your mind?" name="comments" class="class_44" >
						</textarea>
					</div> 
					<div class="class_45" >
						<button class="class_46"  >
							Post
						</button>
					</div>
				</div>
			<?php else: ?>
				<div class="class_13" >
					<i class="bi bi-info-circle-fill class_14">
					</i>
					<div class="class_15" style="cursor:pointer;text-align:center;" >
						You're not logged in <br> Click here to Login 
						<br>
					</div>
				</div>
				<div>Click here to Login and post </div>
			<?php endif;?>


			<div class="class_42" >
				<div class="class_45" >
					<img src="assets/images/59.png" class="class_47" >
					<h2 class="class_48"  >
						Jane Name
						<br>
					</h2>
				</div>
				<div class="class_49" >
					<h4 class="class_41"  >
						3rd Jan 23 14:35 pm
						<br>
					</h4>
					<div class="class_15"  >
						is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets c
					</div>
					<div class="class_51" >
						<i class="bi bi-chat-left-dots class_52">
						</i>
						<div class="class_53"  >
							Comments
						</div>
					</div>
				</div>
			</div>
			
			<div class="class_37" >
				<button class="class_54"  >
					Prev_page
				</button>
				<button class="class_39"  >
					Next_page
				</button>
				<div class="class_40" >
				</div>
			</div>
			
		</div>
		
		<br><br>
		<?php include('signup.inc.php')  ?>
	</section>
	
</body>
</html>