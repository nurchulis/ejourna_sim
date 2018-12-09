
<?php 
if(($_SESSION['status'] !="login")){
  header("location:?page=Login");
}
?>
<style type="text/css">
  /* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
}
.btn-glyphicon { padding:8px; background:#ffffff; margin-right:4px; }
.icon-btn { padding: 1px 15px 3px 2px; border-radius:50px;}
</style>
<div class="container">
    <div class="row profile" style="background-color: #ecf0f1; padding: 10px;">
    <div class="col-md-3">
      <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
          <img src="http://localhost/ejourna_sim/assets/img/man.png" class="img-responsive" style="width: 70px;" alt="">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
           <?php echo $_SESSION['username']; ?>
          </div>
          <div class="profile-usertitle-job">
            Publisher
          </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="profile-userbuttons" style="margin-bottom: 20px;">
         </div>
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
      
        <div class="profile-usermenu">
          <ul class="nav" style="float: left; background-color: white">
            <li <?php 
       @$ini=$_GET['ambil'];
        if($ini=='publish_home'){
         echo 'class="active"';
        }
        ?> style="float: left;">
              <a href="?page=publish&ambil=publish_home">
              <i class="glyphicon glyphicon-home" ></i>
              Journal Published </a>
            </li>
         <!--   <li <?php 
       @$ini=$_GET['ambil'];
        if($ini=='data_statistik'){
         echo 'class="active"';
        }
         ?> style="float: left;">
              <a href="?page=publish&ambil=data_statistik">
              <i class="glyphicon glyphicon-user"></i>
              Data Statistik </a>
            </li> !-->
            <li <?php 
       @$ini=$_GET['ambil'];
        if($ini=='pengaturan'){
         echo 'class="active"';
        }
         ?> style="float: left;">
              <a href="?page=publish&ambil=pengaturan">
              <i class="glyphicon glyphicon-ok"></i>
              Pengaturan Akun</a>
            </li>
            <li <?php 
        @$ini=$_GET['ambil'];
        if($ini=='logout'){
         echo 'class="active"';
        }
        ?> style="float: left;">
              <a href="?page=publish&ambil=logout">
              <i class="glyphicon glyphicon-flag"></i>
              Keluar/Logout </a>
            </li>
          </ul>
        </div>
        <!-- END MENU -->
      </div>
    </div>
    <div class="col-md-9">
        <?php
        @$ambil=$_GET['ambil'];
        switch ($ambil) {
          case 'pengaturan':
            include "Pengaturan.php";
            break;
          case 'data_statistik':
            include "Data_statistik.php";
            break;
          case 'logout':
             include "Logout.php";
              break;  
            
          default:
            include "List_pubished_journal.php";
            break;
        }

        ?>
    </div>
  </div>
</div>

<br>
<br>

