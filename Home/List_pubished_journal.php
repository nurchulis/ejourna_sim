            <div class="profile-content" style="height: 360px;">
              <div class="col-md-12" style="padding: 5px; float: left;" >
                <button type="button" data-toggle="modal" style="float: right;" data-target="#Modalk" class="btn icon-btn btn-success"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>Upload Journal</button>
              </div> 
 <?php
include "config/config.php";
$id_publisher = $_SESSION['id_publisher'];
$journal = mysqli_query($mysqli, "SELECT * FROM journal where id_publisher='".$id_publisher."'");
   
  $cek = mysqli_num_rows($journal);
  if($cek>0){
    foreach ($journal as $key=>$val)
        {


 ?>
 
      <div class="col-md-2">
               <div class="thumbnail hvr-glow hvr-fade">
                <a href="<?php echo $tampil['link_journal'] ?>" target="blank" style="text-decoration: none">
                  <img src="https://media1.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy-preview.gif" alt="Photo" style="height: 150px; margin-bottom:0" data-echo="http://localhost/ejourna_sim/assets/img/jurnal/<?php echo $val['foto_journal'] ?>">
                  <div class="caption">
                     <h5><?php echo $val['nama_journal'] ?></h5>
                  </div>
                  </a>
                  <?php if($val['status']=='1'){ ?>
                   <span class="label label-success">Terposting</span>
                  <?php } else { ?>
                    <span class="label label-danger">Proses Review</span> 
                  <?php } ?>  
               </div>

            </div>

<?php }
}else {
  echo '<img src="http://localhost/ejourna_sim/assets/img/null.png" class="img-responsive" style="width: 120px;" alt="">';
  echo "Belum Ada Journal Terpublish";
}
 ?>


<div class="modal fade" id="Modalk" tabindex="-1">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Upload journal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <center>
                            <form method="POST" action="Proses/Upload_journal.php" type="multipart/form-data">
                            </center>
                            <br/>
                            <center>
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" name="nama_journal" id="company" placeholder="Nama Journal" class="form-control" required></div>
                            
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" name="link_journal" id="company" placeholder="Link Journal" class="form-control" required></div>
                          
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="file" name="foto_journal" id="company" placeholder="Cover" class="form-control" required></div>
                            </center>

                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" name="label" id="company" placeholder="Label" class="form-control" required></div>

                                 <button type="button" class="btn btn-secondary" style="float: right; margin-top: 20px; " data-dismiss="modal">Batal</button>
                                <button type="button submit" class="btn btn-primary" style="margin-top:20px;float: right; margin-right: 20px;">Simpan</button>
                            </center>                        
                        
                      
                     
                   
                            </div>
                       
                        </div>
                        </div>
                        </div>
</form>

            </div>