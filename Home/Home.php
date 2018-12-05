 <?php 
include "config/config.php";
$catagories = mysqli_query($mysqli, "SELECT * FROM kategori ORDER BY urut ASC");
$journal = mysqli_query($mysqli, "SELECT * FROM journal ORDER BY urut ASC");

foreach($catagories as $key=>$val){
    ?>
     <img class="d-flex align-self-center mr-3" src="assets/img/Kategori/<?php echo $val['foto_kategori'] ?>" width="50px" height="50px;" id="star" style="margin: 0px;" alt="Generic placeholder image">
        <h2 style="margin: 4px; padding: 0px; font-family: 'Cinzel-Bold'; font-weight:600 !important;"><?php echo $val['nama_kategori']; ?></h2>
       
        <hr>
         <div class="row">
<?php
     foreach ($journal as $key => $tampil) {
          if ($val['id_kategori'] === $tampil['kategori_journal']){
        ?>
        <div class="col-xs-6 col-sm-3 col-md-2">
               <div class="thumbnail hvr-glow hvr-fade">
                <a href="<?php echo $tampil['link_journal'] ?>" target="blank" style="text-decoration: none">
                  <img src="https://media1.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy-preview.gif" alt="Photo" style="height: 200px; margin-bottom:0" data-echo="http://localhost/ejournal/assets/img/jurnal/<?php echo $tampil['foto_journal'] ?>">
                  <div class="caption">
                     <h5><?php echo $tampil['nama_journal'] ?></h5>
                  </div>
                  </a>
               
                     <?php 
                     if($tampil['label'] == 'teknologi')
                     {
                     ?>
                     <span class="label label-primary">Teknologi</span>
                     <?php 
                     }
                     if ($tampil['label'] == 'keislaman') {
                       ?>
                     <span class="label label-success">Keislaman</span>
                     <?php
                     }
                     if ($tampil['label'] == 'pendidikan') {
                       ?>
                       <span class="label label-danger">Pendidikan</span>
                     <?php
                     }
                     //
                     if ($tampil['label'] == 'security') {
                       ?>
                       <span class="label label-warning">security</span>
                     <?php
                     }
                     if ($tampil['label'] == 'ekonomi') {
                       ?>
                       <span class="label" style="background-color: #e67e22">ekonomi</span>
                     <?php
                     }
                     if ($tampil['label'] == 'sosial') {
                       ?>
                       <span class="label" style="background-color: #1abc9c">Pendidikan</span>
                     <?php
                     }
                     if ($tampil['label'] == 'hukum') {
                       ?>
                       <span class="label" style="background-color: #f39c12">hukum</span>
                     <?php
                     }
                     if ($tampil['label'] == 'dakwah') {
                       ?>
                       <span class="label" style="background-color: #8e44ad">dakwah</span>
                     <?php
                     }
                     if ($tampil['label'] == 'perpustakaan') {
                       ?>
                       <span class="label label-danger">perpustakaan</span>
                     <?php
                     }
                        if ($tampil['label'] == 'psikologi') {
                       ?>
                       <span class="label label-danger">psikologi</span>
                     <?php
                     }

                     if ($tampil['label'] == 'industri') {
                       ?>
                       <span class="label label-danger">Pendidikan</span>
                     <?php
                     }

                     ?>
               </div>

            </div>
          
        <?php 
          }
          
       
     }
     ?>
   </div>
     <?php


}





?>


       

        
