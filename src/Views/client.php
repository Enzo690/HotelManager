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
            <table id="dataTable" class="table table-bordered table-hover">
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
            <form id="formAdd" method="post">

            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">

                    <div class="form-group">
                        <label for="newEmail">Adresse email</label>
                        <input name="email" type="email" class="form-control" id="newEmail" placeholder="Email">
                    </div>
                        <div class="form-group">
                            <label for="newNom">Nom</label>
                            <input name="nom" id="newNom" type="text" class="form-control" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label for="newPreNom">Prenom</label>
                            <input name="prenom" id="newPreNom" type="text" class="form-control" placeholder="Prenom">
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
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