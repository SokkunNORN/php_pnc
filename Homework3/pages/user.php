

<main class="container pt-5 mt-5 mb-5">
    <a href="?page=addUser.php" title="Add User" class="btn btn-info"><i class="fa fa-plus"></i> Create User</a>
    <hr>

<?php 

    $query = "SELECT * FROM tbl_user order by user_id desc";
    $result = mysqli_query($conn, $query);

?>

    <table class="table table-striped table-bordered" id="user_list">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>City</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $data) { ?>
            <tr>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['position']; ?></td>
                <td><?php echo $data['city']; ?></td>
                <td><?php echo $data['age']; ?></td>
                <td>
                    <a href="?page=updateUser.php&id=<?php echo $data['user_id']; ?>" 
                        class="btn btn-outline-success" title="Edit "><i class="fa fa-edit"></i></a>
                    <a href="?page=deleteUser.php&id=<?php echo $data['user_id']; ?>" 
                        class="btn btn-outline-danger" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php }; ?>
        </tbody>
    </table>
    
</main>