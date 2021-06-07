<?php
ob_start();
?>

<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Client</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-xl-plus"><i class="fas fa-plus"></i></button>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#modal-xl-edit"><i class="fas fa-pencil-alt"></i></i></button>
                        <button class="btn btn-danger" data-toggle="modal"><i class="fas fa-times"></i></button>
                    </td>

                </tr>

                </tbody>

            </table>
        <!-- /.card-body -->
    </div>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-xl-add"> <i class="fas fa-plus"></i> Ajouter un client </button>

    </div>


    <div class="modal fade" id="modal-xl-plus" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Extra Large Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>One fine body…</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



    <div class="modal fade" id="modal-xl-add" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <form role="form" method="post">

            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">

                    <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        <!-- /.card-body -->
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
?>