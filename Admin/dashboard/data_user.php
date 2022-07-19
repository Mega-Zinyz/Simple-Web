<?php
    include '../config.php';
    $query= "select * from tb_user";
    $result = $connection->query($query);
    ?>
<script>
    function ConfirmDelete()
    {
        var del = confirm("are you sure want to delete this?");
        if (del)
            return true;
        else
            return false;  
    }
</script>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data User</h1>
</div>
<section>
    <div class="container">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Data</button>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=1;
                        $no=1;
                        while ($row = mysqli_fetch_array($result))
                        {
                            echo "<tr class='odd gradex'>";
                            echo "<td>$no</td>";
                            echo "<td>$row[username]</td>";
                            echo "<td>$row[password]</td>";
                            echo "<td>
                                <a href='dashboard.php?dashboard=delete_user&id=$row[id_user]'
                                Onclick='return ConfirmDelete();'>
                                <i class='bi bi-trash'></i></a>&nbsp;&nbsp;
                                <a href='' data-bs-toggle='modal' data-bs-target='#edit$row[id_user]'>
                                <i class='bi bi-pencil-square'></i></a>
                                </td>";
                            echo "</tr>";
                            $i++;
                            $no++;
                    ?>
                        <!-- Modal Edit -->
                        <div class="modal fade" id="edit<?php echo $row['id_user'];?>" tabindex="-1" 
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                        <form action="edit_user.php" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">
                                            <div class="modal_body">
                                                <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>"><br>
                                                <input type="text" name="password" class="form-control" value="<?php echo $row['password']; ?>"><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }   
                ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Tambah User -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="add_user.php" method="POST">
                <div class="modal-body">
                    <input type="text" name="username" class="form-control" placeholder="Username" require><br>
                    <input type="password" name="password" class="form-control" placeholder="Password" require>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>