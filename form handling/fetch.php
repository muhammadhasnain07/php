<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            <h3 class="text-center mt-3">User's data</h3>
            <table class="table table-bordered table-hover table-striped">

                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Adress</th>
                    <th>Role</th>
                    <th colspan='2' class="text-center">Action</th>
                </tr>

                <?php
                include 'connection.php';

                $query = mysqli_query($con , "SELECT * from register");
                // echo $query;

                foreach($query as $value){
                ?>

                <tr>
                    <td><?php echo $value['id'];?></td>
                    <td><?php echo $value['Name'];?></td>
                    <td><?php echo $value['Email'];?></td>
                    <td><?php echo $value['Password'];?></td>
                    <td><?php echo $value['Address'];?></td>
                    <td><?php echo $value['role'];?></td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?php echo $value['id'];?>">
                            Edit
                        </button>
                    </td>
                    <td>
                        <div class="modal fade" id="edit<?php echo $value['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="code.php" method="post">

                    <input type="hidden" placeholder="Enter your name" class="form-control mt-3" name="id" value='<?php echo $value['id'];?>'>

                    <input type="text" placeholder="Enter your name" class="form-control mt-3" name="name" value='<?php echo $value['Name'];?>'>

                    <input type="email" placeholder="Enter your email" class="form-control mt-3" name="email" value='<?php echo $value['Email'];?>'>

                    <input type="text" placeholder="Enter your password" class="form-control mt-3" name="pass" value='<?php echo $value['Password'];?>'>

                    <input type="text" placeholder="Enter your address" class="form-control mt-3" name="address" value='<?php echo $value['Address'];?>'>

                    <input type="text" placeholder="Enter your role" class="form-control mt-3" name="role" value='<?php echo $value['role'];?>'>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name='update'>Update</button>

                </form>

            </div>
        </div>
    </div>
</div>
                <div class="modal fade" id="delete<?php echo $value['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                Do you really want to delete this data?
                <form action="code.php" method="post">
                <input type="hidden" class="form-control" value='<?php echo $value['id'];?>' name='id'>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name='delete' class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
                </tr>

                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>