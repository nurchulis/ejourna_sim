<div class="card" style="background-color: #F1F2F7; ">
<div class="card-header">
                                    <li class="fa fa-align-justify "></li><strong>
Journal By val </strong>
                                    <small>
                                    You can add, edit and delete journaling by val
                                    </small>
                                </div>


                            </div><!-- /# card -->

<?php 
include "../config/config.php";
$catagories = mysqli_query($mysqli, "SELECT * FROM kategori ORDER BY urut ASC");
$journal = mysqli_query($mysqli, "SELECT * FROM journal ORDER BY urut ASC");
    foreach ($catagories as $key=>$val)
        {
?>

<div class="col-md-12" style="" id="unsortable">
<div class="card" style="padding: 2px; margin-bottom: 3px;">
                            <div class="card-header bg-dark" id="unsortable" style="padding: 5px;">
                            <center>
                            <img class="align-self-center " style="width:35px; height:35px;" alt="" src="../assets/img/Kategori/<?php echo $val['foto_kategori']; ?>">   
                                <h4 style="color: white;">
                                <b><?php echo $val['nama_kategori'] ?></b></h4>                        
                            </center>  
                                </div>
                        

<div class="row" style="padding: 5px;" id="unsortable">

<div class="col-md-12">
  <ul class="page_list" id="page_list<?php echo $val['id_kategori'] ?>" style="float: left;">

<?php
     foreach ($journal as $key => $tampil) {
          if ($val['id_kategori'] === $tampil['kategori_journal']){
        ?>

<li id="<?php echo $tampil['id_journal'] ?>" >
<center>


        <div class="modal fade" id="Modals<?php echo $tampil['id_journal'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Edit Journal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <center>

           <!-- <?php //echo form_open_multipart('Kirim/journal_edit');?> !-->
                            <form method="POST" enctype="multipart/form-data">
                            
                            <input type="file" name="gambar" class="dropify" data-default-file="../assets/img/jurnal/<?php echo $tampil['foto_journal']; ?>">    
                            </center>
                            <br/>
                            <input type="hidden" name="kategori_journal" value="<?php echo $tampil['kategori_journal'] ?>">
                            <input type="hidden" name="gambar_lama" value="<?php echo $tampil['foto_journal'] ?>">
                            <center>
                            <input type="hidden" name="id_journal" value="<?php echo $tampil['id_journal']; ?>">
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" name="nama_journal" id="company" placeholder="<?php echo $tampil['nama_journal'] ?>" class="form-control" value="<?php echo $tampil['nama_journal'] ?>">
                            </div>
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" name="link_journal" id="company" placeholder="<?php echo $tampil['link_journal'] ?>" class="form-control" value="<?php echo $tampil['link_journal']; ?>"></div>
                            </center>                        
                      
                      
                     
                   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button tampilmit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        </div>
                        </div>
                </form>  
                

   <div class="modal fade" id="Modal<?php echo $tampil['id_journal'] ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
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
                             <form method="POST" action="<?php// echo base_url() ?>Kirim/delete_journal/">
                            <input type="hidden" name="id_journal" value="<?php echo $tampil['id_journal'] ?>">

                            <input type="hidden" name="foto_journal" value="<?php echo $tampil['foto_journal'] ?>">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                               
                                <button type="tampilmit" class="btn btn-primary">Yes!</button>
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




       <div class="thumbnail effect6" style="padding-top:10px; height: 200px;  padding-left: 0px; padding-right: 0px; margin-bottom:20px; ">
 
    <div class="container" style="padding: 0px; margin: 0px;">  
        <img src="https://media1.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy-preview.gif" class="image" style="width:100px; height: 140px;" data-echo="../assets/img/jurnal/<?php echo $tampil['foto_journal']; ?>">

  <div class="middle">
    <div class="text" style="padding: 0px; margin: 0px;">
    <div class="row">
        <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#Modals<?php echo $tampil['id_journal'] ?>"><i class="fa fa-pencil-square-o"></i></button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal<?php echo $tampil['id_journal'] ?>"><i class="fa fa-trash-o"></i></button>
    </div>
    </div>

  </div>
   <div class="caption" style="padding-top:0px; margin-top: 3px;">
                <p id="text_judul"><b><?php echo substr($tampil['nama_journal'], 0,30); ?></b></p>
            </div>


</div>
</div>
</center>

</li>


      

               

                






   
<?php
        }
        }
        
        ?>
       
                   </ul>
   <input type="hidden" name="page_order_list" id="page_order_list" />
   
                   </div>
   


                        </div>
   
                        </div>



                             <div class="modal fade" id="tambah<?php echo $val['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="color:#555t" id="mediumModalLabel"><span class="fa fa-plus"></span> Add Journal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

<?php // echo form_open_multipart('Kirim/kirim_journal');?>
                            <form method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                            <center>
                            <input type="file" name="gambar" class="dropify"  required/>                      
                            </center>
                            <br/>
                            <center>
                            <input type="hidden" name="kategori_journal" value="<?php echo $val->id_kategori; ?>">
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" id="company" name="nama_journal" placeholder="Insert Name Journal here" class="form-control" required/></div>
                            <b/>
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" id="company" name="link_journal" placeholder="Insert Link Journal" class="form-control" required/></div>

                            </center>                        
                      
                      
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="tampilmit" class="btn btn-primary" value="upload">Save</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

   

<div class="col-md-12" style="padding-left: 0px;">
                                    <button type="button" class="btn btn-success" style="float:left; margin-left: 0px; margin-bottom: 10px; background-color: #3498db; border-color:white" data-toggle="modal" data-target="#tambah<?php echo $val['id_kategori'] ?>"><b>
                                    <i class="fa fa-plus"></i>    
                                    Add Journal</b></button>
                                </div/>

                              

 <script src="../assets/js/echo.js"></script>
    <script>
  echo.init({
    offset: 100,
    throttle: 250,
    unload: false,
    callback: function (element, op) {
      console.log(element, 'has been', op + 'ed')
    }
  });

  // echo.render(); is also available for non-scroll callbacks
  </script>
              
<script>
$(document).ready(function(){
 $( "#page_list<?php echo $val['id_kategori'] ?>" ).sortable({
  placeholder : "ui-state-highlight",
  update  : function(event, ui)
  {
   var page_id_array = new Array();
   $('#page_list<?php echo $val['id_kategori']   ?> li').each(function(){
    page_id_array.push($(this).attr("id"));
   });
   $.ajax({
    url:"update2.php",
    method:"POST",
    data:{page_id_array:page_id_array},
    success:function(data)
    {
     //   alert('journal Telah tersortir');
    }
   });
  }
 });

});
</script>


   </div>           

<?php } ?>









