<div class="js-login-modal class_55 hide">
	<div onclick="login.cancel()" class="text-right cancel">X</div>
	<h1 class="class_27">Login</h1>
	<img src="assets/images/slack.png" class="class_56">
	<form onsubmit="login.submit(event)" method="post" class="class_57">
		<div class="class_30">
			<div class="class_58">
				<label class="class_32">Email:</label>
				<input placeholder="Email" type="email" name="email" class="class_33" required>
			</div>
			<div class="class_58">
				<label class="class_32">Password:</label>
				<input placeholder="Password" type="password" name="pass" class="class_33" required>
			</div>
			<div style="padding: 10px;">Don't have an account? <span style="color:blue; cursor: pointer;" onclick="signup.show()">Click here to Signup</span></div>
			<div class="class_59">
				<button class="class_60">Login</button>
				<div class="class_40"></div>
			</div>
		</div>
	</form>
</div>

<script>
	// JavaScript part unchanged
	var login = {
		show: function() {
			document.querySelector(".js-login-modal").classList.remove('hide');
			document.querySelector(".js-signup-modal").classList.add('hide');
		},

		hide: function() {
			document.querySelector(".js-login-modal").classList.add('hide');
		},

		cancel: function() {
			document.querySelector(".js-login-modal").classList.add('hide');
		},

		submit: function(e) {
			e.preventDefault(); // prevent default browser submission settings
			var form = new FormData(e.currentTarget);

			form.append('data_type', 'login'); // assigning the data type of the signin form

			var ajax = new XMLHttpRequest();

			ajax.addEventListener('readystatechange', function() {
				if (ajax.readyState == 4) {
					if (ajax.status == 200) {
						var obj = JSON.parse(ajax.responseText);
						alert(obj.message);

						if (obj.success) {
							window.location.reload(); // if the event is a success, reload the page
						}
					} else {
						alert("Please check your internet connection");
					}
				}
			});

			ajax.open('post', 'ajax.inc.php', true);
			ajax.send(form);
		},
	};
</script>
