<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data EJournal</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Assalamualaikum</span> You are succesfully logged in
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


        <div class="col-md-12">
        <div class="col-md-4">
            <div class="card" style="height: 150px; border-radius:3px;" >
            <div class="row">    
            <div style="width: 150px; float: left; border-radius:3px; background-color:#338BF8; height: 149px;">
            <img src="../assets/img/admin/list.svg" width="70px" style="margin: 39px;">
            </div>

            <div style="float: left; margin-top: 40px; margin-left: 30px;">
                <b><h2 class="mb-0" style="color:#338BF8"><span class="count">62</span></h2></b>
               <p style="color:#338BF8; font-size: 14px;">Journal Listed</p>
            </div>
            </div>
        </div>
    </div>
                       
        <div class="col-md-4">
            <div class="card" style="height: 150px; border-radius:3px;" >
            <div class="row">  
            <div style="width: 150px; border-radius:3px; background-color:#E68004; height: 149px;">
            <img src="../assets/img/admin/user-shape.svg" width="70px" style="margin: 39px;">
            </div>

            <div style="float: left; margin-top: 40px; margin-left: 30px;">
                <b><h2 class="mb-0" style="color:#E68004"><span class="count">2</span></h2></b>
               <p style="color:#E68004; font-size: 14px;">Registered User</p>
            </div>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="height: 150px; border-radius:3px;" >
            <div class="row">
            <div style="width: 150px; border-radius:3px; background-color:#69B451; height: 149px;">
                 <img src="../assets/img/admin/four-black-squares.svg" width="70px" style="margin: 39px;">
            
            </div>
               <div style="float: left; margin-top: 40px; margin-left: 30px;">
                <b><h2 class="mb-0" style="color:#69B451" ><span class="count">4</span></h2></b>
               <p style="color:#69B451; font-size: 14px;">Journal Categories</p>
            </div>

            </div>
            </div>
        </div>    
 

<?php 
include "../config/config.php";
$catagories = mysqli_query($mysqli, "SELECT * FROM kategori ORDER BY urut ASC");
$journal = mysqli_query($mysqli, "SELECT * FROM journal");
    foreach ($catagories as $key=>$val)
        {
?>
   <div id="ul_o<?php echo $val['id_kategori'] ?>">   
<?php
     foreach ($journal as $key => $tampil) {
          if ($val['id_kategori'] === $tampil['kategori_journal']){
        ?>

 <li class="my-class" style="display: none"><?php echo $tampil['id_journal'] ?></li>

<?php
        }
}
        ?>


<div class="col-md-4">
            <div class="card" style="height: 150px; border-radius:3px;" >
            <div class="row">  
            <div style="width: 150px; border-radius:3px; background-color:<?php echo $val['color'] ?>; height: 149px;">
            <img src="../assets/img/admin/<?php echo $val['icon'] ?>" width="70px" style="margin: 39px;">
            </div>

            <div style="float: left; margin-top: 40px; margin-left: 30px;">
                <b><h2 class="mb-0" style="color:<?php echo $val['color'] ?>"><span  id="demo<?php echo $val['id_kategori'] ?>" class="count"></span></h2></b>
               <p style="color:<?php echo $val['color'] ?>; font-size: 14px;"><?php echo $val['nama_kategori'] ?></p>
            </div>
            </div>
            </div>
        </div>

       <script>
document.getElementById("demo<?php echo $val['id_kategori'] ?>").innerHTML =document.getElementById("ul_o<?php echo $val['id_kategori'] ?>").getElementsByClassName("my-class").length;
</script>
                 

<?php } ?>



                        

        </div>