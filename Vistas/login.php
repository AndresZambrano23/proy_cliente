<?php 
require('head.php');
$head = head();
echo($head);
?>

<section class='login-block'>
    <div class='container'>
	<div class='row'>
		<div class='col-md-4 login-sec'>
		    <h2 class='text-center'>ESSEN</h2>
		    <form class='login-form'>
        <div class='form-group'>
    <label for='exampleInputEmail1' class='text-uppercase'>Username</label>
    <input type='text' class='form-control' id='usuario' placeholder='INGRESA TU USUARIO'>
    
  </div>

  <div class='form-group'>
    <label for='exampleInputPassword1' class='text-uppercase'>Password</label>
    <input type='password' class='form-control' id='password' placeholder='AQUI LA CONTRASEÑA'>
  </div>

 <!--    <div class='form-check'>

        <input type='button' class='btn btn-login' value='ingresar' id='btnlogin'>
        <button type='submit' class='btn btn-login float-left'><a href='registrar.php'>Registar</a></button>
    </div> -->
    <div class='form-check'>
        <input type='submit' class='btn btn-login float-left' id='btnlogin' onclick='validarusuario()' value='ingresar'/>
        <button type='submit' class='btn btn-login float-right'><a style='color:white;' href='registrar.php'>Registar</a></button>
    </div>
  
</form>
	</div>
		<div class='col-md-8 banner-sec'>
            <div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>
                 <ol class='carousel-indicators'>
                    <li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>
                    <li data-target='#carouselExampleIndicators' data-slide-to='1'></li>
                    <li data-target='#carouselExampleIndicators' data-slide-to='2'></li>
                  </ol>

            <div class='carousel-inner' role='listbox'>
                <div class='carousel-item active'>
                    <img class='d-block img-fluid' src='../img/login/pexels-photo.jpg' alt='First slide' width="100%;">
                    <div class='carousel-caption d-none d-md-block'>
                        <div class='banner-text'>
                            <h2>This is Heaven</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>	
                    </div>
                </div>

                <div class='carousel-item'>
                    <img class='d-block img-fluid' src='../img/login/people-coffee-tea-meeting.jpg' alt='First slide' width="100%;">
                    <div class='carousel-caption d-none d-md-block'>
                        <div class='banner-text'>
                            <h2>This is Heaven</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>	
                    </div>
                </div>

                <div class='carousel-item'>
                    <img class='d-block img-fluid' src='../img/login/pexels-photo-872957.jpeg' alt='First slide' width="92.4%;">
                    <div class='carousel-caption d-none d-md-block'>
                        <div class='banner-text'>
                            <h2>This is Heaven</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        </div>	
                    </div>
                </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>

<?php 
$footer= footer();
echo($footer);
?>
