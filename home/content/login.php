<?php 
function login()
{
?>


<div class="col-md-12" style="margin-top:100px">
<div class="col-md-2">
</div>
<div class="col-md-8">
        <Center>  <h2>Login Patient</h2>
          <p>I am a patient here</p>
		  </center>
		  
		  <Br>
		  <Br>
		     <h3>Form Login</h3>
            Jika belum mempunyai akun silahkan Daftar : <a href="index.php?p=login&action=daftar" class="btn btn-danger">Form Pendaftaran</a>
            <br>
			
     <form class="form-signin" method="post" action="">
    
          <div class="form-group">
            <label class="control-label" for="input-email">Username</label>
			 <input
                type="text"
                name="username"  class="form-control"
                placeholder="Username">
				
          </div>
          <div class="form-group">
            <label class="control-label" for="input-password">Password</label>
            <input
                type="password"
                name="password" class="form-control"
                placeholder="Password">
			<br>
			<br>
         <button type="submit" name="login" id="button-login" data-loading-text="Loading..." class="btn btn-primary">Login</button>
        </div>
		</form>
	</div>	

<div class="col-md-2">
</div>	
</div>	
<!--
<br>
<center>
    <h2>
        LOGIN
    </h2>
</center>
<br>


    <div class="container">

        <form class="form-signin" method="post" action="">
            <h3>Form Login</h3>
            Jika belum mimiliki akun silahkan Daftar : <a href="index.php?p=login&action=daftar" class="btn btn-danger">Form Pendaftaran</a>
            <br>
            Username : <input
                type="text"
                name="username"
                class="input-block-level"
                placeholder="Username">
                <br>
                Password : 
            <input
                type="password"
                name="password"
                class="input-block-level"
                placeholder="Password">
                <br>
            <button class="btn btn-large btn-success" name="login" type="submit">Login</button>
        </form>
    </div>
-->
<?php
}
?>