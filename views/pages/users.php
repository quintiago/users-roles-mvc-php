<div class="content-wrapper" style="min-height: 717px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administrar Usuarios</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <button type="button" class="btn btn-success create profile" data-toggle="modal" data-target="#modal-create-users">
                                Crear nuevo usuario
                            </button>
                        </div>
                        <br>
                        <div class="card-body">
                            <table class="table table-bordered table-striped dt-responsive profileboard" width="100%">
                                <thead>
                                    <tr>
                                        <th style="width:10px">#</th>
                                        <th>Nombre</th>
                                        <th>Usuarios</th>
                                        <th>Rol</th>
                                        <th>Foto</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    ?>
                                    <?php
                                    foreach ($users as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo ($key + 1) ?></td>
                                            <td><?php echo $value["name"] ?></td>
                                            <td><?php echo $value["user"] ?></td>
                                            <td><?php echo $value["rol"] ?></td>
                                            <td><?php echo $value["picture"] ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-warning btn-sm">
                                                        <i class="fas fa-pencil-alt text-white"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    <!-- <tr>
                                        <td>1</td>
                                        <td>Hotel Portabelos</td>
                                        <td>Portabelos</td>
                                        <td>Administrador</td>
                                        <td><button class="btn btn-info btn-sm">Activo</button></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-warning btn-sm">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--===========================================================
Modal Create users
============================================================-->
<div class="modal modal-default fade" id="modal-create-users">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="alert alert-success alert-dismissible"> Agregar nuevo usuario</h4>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="text" class="form-control" name="name_profile" placeholder="Nombre">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="text" class="form-control" name="name_user" placeholder="Usuario">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="password" class="form-control" name="pass_user" placeholder="Contraseña">
                    <span class="glyphicon glyphicon-ye-close form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback" bis_skin_checked="1">
                    <div class="btn btn-default btn-file" bis_skin_checked="1">
                        <i class="fas fa-paperclip"></i> Adjuntar Imagen de perfil
                        <input type="file" name="upImgProfile">
                    </div>
                    <img class="previewImgProfile img-fluid py-2" width="200" height="200">
                    <p class="help-block small"> Dimensiones: 480px * 382px | Peso Max. 2MB | Formato: JPG o PNG</p>
                </div>
                <div class="form-group has-feedback">
                    <label>Rol</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>