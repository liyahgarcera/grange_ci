<div id="sidebar">
  <div id="login_form">
  <?php
		$attr = array(
				'id' => 'grange_login',
				'name' => 'grange_login'
			);
  	echo form_open('display/view_home', $attr);
			$attr = array(
					'id' => 'label_for_username',
					'name' => 'label_for_username'
				);
			echo form_label('Username:', 'username', $attr);
			
			$attr = array(
					'id' => 'username',
					'name' => 'username',
					'maxlength' => '100',
					'size' => '20'
				);
			echo form_input($attr);
			
			$attr = array(
					'id' => 'label_for_password',
					'name' => 'label_for_password'
				);
			echo form_label('Password:', 'password', $attr);
			
			$attr = array(
					'id' => 'password',
					'name' => 'password',
					'maxlength' => '100',
					'size' => '20'
				);
			echo form_password($attr);
			
			$attr = array(
					'id' => 'sign_up_button',
					'name' => 'sign_up_button',
					'content' => 'Sign Up'
				);
			echo form_button($attr);
			
			$attr = array(
					'id' => 'login_button',
					'name' => 'login_button',
					'value' => 'Login'
				);
			echo form_submit($attr);
		echo form_close();
	?>
  </div><!-- end #login_form -->