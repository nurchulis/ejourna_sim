<div class="container">
  <h2>
Manage Passwords</h2>
  <p>You can edit delete and add user who can access ejournal:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>NO</th>
        <th>Usernmae</th>
        <th style="width: 300px;">Delete User</th>
      </tr>
    </thead>
    <tbody>

<?php 
 $no = 1;
 include "../config/config.php";
$user_ku = mysqli_query($mysqli, "SELECT * FROM admin ORDER BY id_admin ASC");
    foreach ($user_ku as $key=>$ini)
        {
?>


<div class="modal fade" id="Modals<?php echo $ini['id_admin'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Edit Password Admin</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <center>
                            <form method="POST" action="Kirim/kelola_password" enckelola_passwordtype="multipart/form-data">
                            </center>
                            <br/>
                            <center>
                           	<input type="hidden" name="id_admin" value="<?php echo $ini['id_admin'] ?>">
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" name="password" id="company" placeholder="New Password" class="form-control" required></div>
                            </center>                        
                      
                      
                     
                   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="button submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                        </div>
                        </div>
                </form>

<div class="modal fade" id="Modal<?php echo $ini['id_admin'] ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticModalLabel">Peringatan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                Data yang Dihapus tidak bisa dikembalikan lagi!
                                </p>
                            </div>
                            <div class="modal-footer">
                             <form method="POST" action="Kirim/delete_admin/">
                            <input type="hidden" name="id_admin" value="<?php echo $ini['id_admin'] ?>">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                         
                                <button type="submit" class="btn btn-primary">Yakin!</button>
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
	

      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $ini['username']; ?></td>
        <td>
      <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#Modals<?php echo $ini['id_admin'] ?>"><i class="fa fa-pencil-square-o"></i> Change Password</button>
	 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal<?php echo $ini['id_admin'] ?>"><i class="fa fa-trash-o"></i> Delete</button>
        </td>
      </tr>
<?php 
}
?>

    </tbody>
  </table>



<div class="modal fade" id="Modalk" tabindex="-1">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Tambah User Admin</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <center>
                            <form method="POST" action="Kirim/tambah_user" type="multipart/form-data">
                            </center>
                            <br/>
                            <center>
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" name="username" id="company" placeholder="Username" class="form-control" required></div>
                            
                            <div class="form-group"><label for="company" class=" form-control-label"></label><input type="text" name="password" id="company" placeholder="New Password" class="form-control" required></div>
                            </center>                        
	                      
                      
                     
                   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="button submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                        </div>
                        </div>
                </form>


<div class="col-md-12">
<button type="button" data-toggle="modal" data-target="#Modalk" class="btn btn-primary">Add User</button>
</div>
</div>