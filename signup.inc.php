<div class="js-signup-modal class_55 hide">
	<div onclick="signup.cancel()" class="text-right cancel" > X </div>
	<h1 class="class_27" >
		Signup
	</h1>
	<img src="assets/images/slack.png" class="class_56" >
	<form onsubmit="signup.submit(event)" method = "post" class="js-signup-form" "class_57" >
		<div class="class_30" >
			<div class="class_58" >
				<label class="class_32"  >
					Username:
				</label>
				<input placeholder="Username" type="text" name="username" class="class_33"  required="true">
			</div>
			<div class="class_58" >
				<label class="class_32"  >
					Email:
				</label>
				<input placeholder="Email" type="email" name="email" class="class_33"  required="true">
			</div>
			<div class="class_58" >
				<label class="class_32"  >
					Password:
				</label>
				<input placeholder="Password" type="password" name="pass" class="class_33" >
			</div>
			<div class="class_58" >
				<label class="class_36"  >
					Retype Password:
				</label>
				<input placeholder="Retype Password" type="password" name="re_pass" class="class_33" >
			</div>
			<div class="class_59" >
				<button class="class_60"  >
					Signup
				</button>
				<div class="class_40" >
				</div> 
			</div>
		</div>
</form>
</div>

<script> 
	var signup = {

		show: function(){ 
			document.querySelector(".js-signup-modal").classList.remove('hide');
		},

		cancel: function(){
			document.querySelector(".js-signup-modal").classList.add('hide');
		},

		submit: function(e){ 

			e.preventDefault(); //prevent default browser submission settings
			let inputs = e.currentTarget.querySelectorAll("input");
			let form = new FormData(); 

			for(var i = inputs.length - 1; i >= 0; i--) {
				form.append(inputs[i].name, inputs[i].value);
			}
				
			
			let form = document.querySelector(".js-signup-form");
			var ajax = new XMLHttpRequest();

			ajax.addEventListener('readystatechange', function(){  //Listen for specific events

				if(ajax.readyState == 4 ) {

					if(ajax.status == 200) {

						alert(ajax.responseText);
					}else {
						alert("Please check your internet connection");
					}
					
				}
			});

			ajax.open('post', 'ajax.inc.php', true);
			ajax.send(form)
		},
	};
	
	
	
</script>