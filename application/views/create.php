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

    <!-- Modal -->
    <div class="modal fade" id="addstudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create'; ?> "  >
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="ok"></div>
                        <ul id="err"></ul>
                        <div class="form-group mb-3">
                            <label for="">User Name</label>
                            <input type="text" class="name form-control" name="name" value="<?php echo set_value('name'); ?>">
                            <?php echo form_error('name'); ?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" class="email form-control" name="email" value="<?php echo set_value('email'); ?>">
                            <?php echo form_error('email'); ?>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary add_student">Save </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Modal End-->

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h4>User Data
                        <a href="#" data-toggle="modal" data-target="#addstudentModal"
                            class="btn btn-primary float-right m-2 btn-sm">Add User</a>
                            <a href="<?php echo site_url('User/list/list') ?>"
                            class="btn btn-danger float-right m-2 btn-sm">View User</a>
                    </h4>
                </div>
                <div class="card-body">



                </div>
            </div>
        </div>
    </div>

</body>

</html>


