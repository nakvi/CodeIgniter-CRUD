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
<div class="container mt-5">
<form method="post" name="editUser" action="<?php echo base_url().'index.php/user/update/'.$user['user_id']; ?> "  >
                    <div class="modal-header">
                        <h5 class="modal-title" >Edit User</h5>

                    </div>
                    <div class="modal-body">
                        <div id="ok"></div>
                        <ul id="err"></ul>
                        <div class="form-group mb-3">
                            <label for="">User Name</label>
                            <input type="text" class="name form-control" name="name" value="<?php echo set_value('name',$user['name']); ?>">
                            <?php echo form_error('name'); ?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" class="email form-control" name="email" value="<?php echo set_value('email',$user['email']); ?>">
                            <?php echo form_error('email'); ?>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary add_student">Update </button>
                    </div>
                </form>
</div>
</body>

</html>


