<!DOCTYPE html>
<html lang="en">

<head>
    <title>Codeignite Crud</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h4>User Data
                        <a href="<?php echo site_url('User/create/create') ?>"
                            class="btn btn-primary float-right m-2 btn-sm">Add User</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th colspan="2" class="text-center" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php if(!empty($users)) { foreach($users as $user) {?>
                            <tr>
                            <td><?php echo $user['user_id'] ?></td>
                            <td><?php echo $user['name'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td>
                           <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id'] ?>" class="btn btn-primary">Edit</a>
                           </td>
                            <td>
                           <a  href="<?php echo base_url().'index.php/user/delete/'.$user['user_id'] ?>"class="btn btn-danger">Delete</a>
                            </td>
                            </tr>
                            <?php }} else {?>
                                <tr>
                                    <td colspan="5">Record Not found</td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

</body>

</html>


