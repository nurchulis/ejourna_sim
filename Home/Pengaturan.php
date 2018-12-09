    <div class="col-md-12" style="background-color: white; height: 330px;">

    	<h3 style="float: left;">
    	<span class="glyphicon glyphicon-cog"></span>	
    	Pengaturan Akun </h3>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    	<h4 style="float: left;">Ganti Password</h4>
    	<form action="Home/Proses/Update_password.php" method="POST">
    		<input type="hidden" name="id_publisher" value="<?php echo $id_publisher = $_SESSION['id_publisher']; ?>">
    	 <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" name="password_baru"  id="company" placeholder="Password baru" class="form-control" required></div>
  
    	  <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" name="password_lama"  id="company" placeholder="Password lama" class="form-control" required></div>
    	  
    	        <button type="submit" class="btn btn-success" >Simpan Password</button>
  		</form>
   </div>