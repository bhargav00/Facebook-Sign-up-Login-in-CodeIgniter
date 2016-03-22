<html>
<head>
<title>CodeIgniter : Login Facebook via Oauth 2.0</title>
 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
</head>
<body>

	<div align="center">
		<h2>CodeIgniter : Login Facebook via Oauth 2.0</h2>
		
	</div>

<div class="container">
		<div class="row">
	<a class="waves-effect waves-light btn-large">By:-Bhargav</a>
			<div class="col s12 m6 offset-m3 l6 offset-l3">

				<?php 
				if($this->session->userdata('sess_logged_in')==0){?>
					<a href="<?=$login_url?>"class="waves-effect waves-light btn red"><i class="fa fa-facebook left"></i>Facebook login</a>
				<?php }else{?>
					<a href="<?=base_url()?>auth/logout" class="waves-effect waves-light btn red"><i class="fa fa-facebook left"></i>Facebook logout</a>
				<?php }
				?>
	
			</div>
		</div>
</body>
</html>