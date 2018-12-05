   
    <div class="card" style="background-color: #F1F2F7; ">

                                <div class="card-header" style="background-color: white">
                                    <li class="fa fa-align-justify"></li><strong> Category Journal </strong>
                                    <small>
                                        You can edit or add categories here.
                                    </small>
                                </div>
                                <div class="row" style="padding-left: 10px;">
                    <?php 
include "../config/config.php";
$catagories = mysqli_query($mysqli, "SELECT * FROM kategori ORDER BY urut ASC");
    foreach ($catagories as $key=>$val)
        {
?>
                                
 <div class="modal fade" id="mediumModal<?php echo $val['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Category Edit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <center>

            <?php //('Kirim/kategori_edit');?>
                            <form method="POST" enctype="multipart/form-data">
                            
                            <input type="file" name="foto" class="dropify" data-default-file="../assets/img/Kategori/<?php echo $val['foto_kategori']; ?>" data-allowed-file-extensions="JPG PN jpeg png jpg">
                            </center>
                            <br/>
                            <input type="hidden" name="gambar_lama" value="<?php echo $val['foto_kategori'] ?>">
                            <center>
                            <input type="hidden" name="id_kategori" value="<?php echo $val['id_kategori'] ?>">
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" name="nama_kategori" id="company" placeholder="<?php echo $val['nama_kategori'] ?>" class="form-control" value="<?php echo $val['nama_kategori'] ?>"></div>
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" name="deskripsi_kategori" id="company" placeholder="<?php echo $val['deskripsi_kategori'] ?>" class="form-control" value="<?php echo $val['deskripsi_kategori']; ?>"></div>
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="color" name="color" id="company" placeholder="<?php echo $val['color'] ?>" class="form-control" value="<?php echo $val['color']; ?>"></div>
                            <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <select name="icon" class="form-control" id="sel1">
                            <option value="star.svg" <?php if($val['icon'] == "star.svg") echo "selected"; ?>>Icon Star</option>
                            <option value="four-black-squares.svg" <?php if($val['icon'] == "four-black-squares.svg") echo "selected"; ?>>Icon square</option>
                            <option value="user-shape.svg" <?php if($val['icon'] == "user-shape.svg") echo "selected"; ?>>Icon User</option>
                            <option value="thumbs-up.svg" <?php if($val['icon'] == "thumbs-up.svg") echo "selected"; ?>>Icon Like</option>
                            <option value="checked-symbol.svg" <?php if($val['icon'] == "checked-symbol.svg") echo "selected"; ?>>Icon Check</option>
                            <option value="text-file.svg" <?php if($val['icon'] == "text-file.svg") echo "selected"; ?>>Icon Document</option>
                            <option value="thumbs-down-silhouette.svg" <?php if($val['icon'] == "thumbs-down-silhouette.svg") echo "selected"; ?>>Icon UnLike</option>
                            
                             </select>
                            </div>

                            </center>
                                                    
                      
                      
                     
                   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="button submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                </form>  
                  </div>
                </div>
                


                 <div class="modal fade" id="staticModal<?php echo $val['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticModalLabel">WARNING</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                Deleted data can not be restored again!    
                                </p>
                            </div>
                            <div class="modal-footer">
                            <form method="POST" action="Kirim/delete/">
                            <input type="hidden" name="id_hapus" value="<?php echo $val['id_kategori'] ?>">

                            <input type="hidden" name="foto_kategori" value="<?php echo $val['foto_kategori'] ?>">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                               
                                <button type="submit" class="btn btn-primary">Yes!</button>
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


<?php }  ?>

                

         

                            






 

   
   <div class="col-md-12 page_list" id="page_list" style="margin: 5px;">
                    <?php 
include "../config/config.php";
$catagories = mysqli_query($mysqli, "SELECT * FROM kategori ORDER BY urut ASC");
    foreach ($catagories as $key=>$val)
        {
?>

    <div class="col-md-3" style="margin-top:10px; margin-bottom:25px; margin-left: 5px; cursor: move;" id="<?php echo $val['id_kategori'] ?>">
                        <aside class="profile-nav alt">
                            <section class="card" style="margin-bottom: 0px;">
                                <div class="card-header" style="background-color: #272C33">
                                    <div class="media">
                                        <a href="#">
                                            <img  class="align-self-center rounded-circle mr-3" style="width:45px; height:45px; background-color: white" alt="" src="../assets/img/Kategori/<?php echo $val['foto_kategori']; ?>">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="text-light"> <?php echo $val['nama_kategori'];?></h6>
                                        </div>
                                    </div>
                                </div>                                       
                            </section>

                            <div class="col-md-6" style="padding: 0; float: left;"> <button type="button" style="width: 100%; border-color: #16a085; background-color: #27ae60" class="btn btn-primary" data-toggle="modal" data-target="#mediumModal<?php echo $val['id_kategori'] ?>"><i class="fa fa-pencil"></i></button></div>
 
                            <div class="col-md-6" style="padding: 0; float: left; font-size: 12px;" ><button  type="button" class="btn btn-danger" style="width: 100%;  background-color:#e74c3c" data-toggle="modal" data-target="#staticModal<?php echo $val['id_kategori'] ?>"><i class="fa fa-trash" style="color:white; font-size: 20px;"></i></button></div>
                        </aside>
                    </div>


   
   <?php }
   ?>
   </div>

  
   <input type="hidden" name="page_order_list" id="page_order_list" />

 <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="color:#555t" id="mediumModalLabel"><span class="fa fa-plus"></span> Add Category Journal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

    <?php //echo form_open_multipart('Kirim/kirim_kategori');?>
                            <form method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                            <center>
                            <input type="file" name="gambar" class="dropify"  required/>                      
                            </center>
                            <br/>
                            <center>
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" id="company" name="nama_kategori" placeholder="Masukan Nama Kategori" class="form-control" required/></div>
                            <b/>
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" id="company" name="deskripsi_kategori" placeholder="Deskripsi Kategori" class="form-control" required/></div>

                            <div class="form-group">Choose Color: Enter<label for="company" class=" form-control-label"></label><input type="color" id="company" name="color" placeholder="Color" class="form-control" required/></div>

                            <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <select name="icon" class="form-control" id="sel1">
                            <option>IconStar</option>
                            <option>Icon 4 BOX</option>
                            <option value="user-shape.svg">Icon User</option>
                            <option>Icon Like</option>
                            <option>Icon Check</option>
                            <option>Icon Document</option>
                            <option>Icon Like</option>
                             </select>
                            </div>


                            </center>                        
                      
                      
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary" value="upload">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

<div class="col-md-12" style="padding-left: 35px;">
                                    <button type="button" class="btn btn-success" style="float:left; margin-left: 0px; margin-bottom: 10px; background-color: #3498db; border-color:white" data-toggle="modal" data-target="#tambah"><b>
                                    <i class="fa fa-plus"></i>    
                                    Add Category</b></button>
                                </div>

<script>
$(document).ready(function(){
 $( "#page_list" ).sortable({
  placeholder : "ui-state-highlight",
  update  : function(event, ui)
  {
   var page_id_array = new Array();
   $('#page_list div').each(function(){
    page_id_array.push($(this).attr("id"));
   });
   $.ajax({
    url:"update.php",
    method:"POST",
    data:{page_id_array:page_id_array},
    success:function(data)
    {
    }
   });
  }
 });

});
</script>


</div>
                            </div><!-- /# card -->
