 <div class="card" style="background-color: #F1F2F7; ">

                                <div class="card-header" style="background-color: white">
                                    <li class="fa fa-align-justify"></li><strong> Request Rejected Journal </strong>
                                    <small>
                                        You can edit or add categories here.
                                    </small>
                                </div>
                                <div class="row" style="padding-left: 20px; padding-top: 30px;">



	<?php
include "../config/config.php";
$journal = mysqli_query($mysqli, "SELECT * FROM journal,publisher where journal.id_publisher=publisher.id_publisher AND status = 2 "); 
   
  $cek = mysqli_num_rows($journal);
  if($cek>0){
    foreach ($journal as $key=>$val)
        {

	 ?>
	 <form action="Proses/Accept_journal.php" method="post">

	<input type="hidden" name="id_journal" value="<?php echo $val['id_journal'] ?>">
	<div class="col-md-12" style="height: 100%; width: 100%; padding: 0px; font-size: 15px;">
	<div class="col-md-2" style="background-color: #1abc9c">
		<img src="../assets/img/jurnal/<?php echo $val['foto_journal']; ?>" style="width: 100px; height: 150px;">
	</div> 
  	<div class="col-md-2" style="background-color:#3498db;   width: 500px; height: 100%; color: white; font-size: 20px;">User Name : <?php echo $val['username']; ?></div><div class="col-md-6" style="background-color: #1abc9c;  width: 100%;  height: 100%; color:white; font-size: 24px;">Journal Name: <?php  echo $val['nama_journal'] ?><br>
  	Label : <?php echo $val['label'] ?>(Status : <?php 
  		if($val['status'] == 2){
  			echo "Ditolak";
  		}else {
  			echo "Menunggu Review";
  		}
  		?>)	
  	</div><div class="col-md-2">
  		<?php 
  		if($val['status'] == 2){
  			?>
  			<button class="btn btn-success" type="submit" name="status" value="1">Publish Now</button>

  			<?php
  		}else {
  			?>
  		<button class="btn btn-success" type="submit" name="status" value="1">Publish</button>
  		<button class="btn btn-danger" type="submit" name="status" value="2">Tolak</button>	
  			<?php
  		}
  		?>
  	</div>
  	</div>
</form>

<?php }
}else {
	echo "<center><h1>Tidak Ada Data yang Masuk</h1></center>";
}
 ?>




</div>
                            </div><!-- /# card -->
