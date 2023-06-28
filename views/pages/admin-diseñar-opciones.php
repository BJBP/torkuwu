<!-- admin-diseñar -->
<?php
    if(!isset($_SESSION["id_tipo_usuario"]) || $_SESSION["id_tipo_usuario"] == 2){
        echo '<script>
            window.location = "index.php";
        </script>';
    }
?>
<div class="content-wrapper mt-0">
    <section class="content-header">
        <h1 class="ms-3">
            Administrar Opciones 
        </h1>
        <hr style="height:7px; color: #881515; opacity: 1;">
    </section>
    <section class="content p-3">
        <div class="box">
            <div class="box-header with-border mb-3">
                <h2 class="d-inline me-3">Lista de Opciones</h2>
                <button class="btn btn-agregar" data-target="#modalAgregarOficina">
                    Agregar Opcion
                </button>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                    <thead>
                        <tr>
                            <th style="width:10px">ID</th>
                            <th>Nombre</th>
                            <th>Lista de Valores</th>
                            <th>Fecha de adición</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nombreeeeeeeeeeeeeeee</td>
                            <td>
                                <button class="btn btn-danger btnEditarOficina" idOficina="" data-toggle="modal" data-target="#modalEditarOficina">Ver Lista</button>
                            </td>
                            <td>Fecha de adición</td>
                            <td>
                                <div class="btn-group">    
                                    <button class="btn btn-warning btnEditarOficina" idOficina="" data-toggle="modal" data-target="#modalEditarOficina"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btnEliminarOficina" idOficina=""><i class="fa fa-times"></i></button>
                                </div>  
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Nombre</td>
                            <td>
                                <button class="btn btn-danger btnEditarOficina" idOficina="" data-toggle="modal" data-target="#modalEditarOficina">Ver Lista</button>
                            </td>
                            <td>Fecha de adición</td>
                            <td>
                                <div class="btn-group">    
                                    <button class="btn btn-warning btnEditarOficina" idOficina="" data-toggle="modal" data-target="#modalEditarOficina"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btnEliminarOficina" idOficina=""><i class="fa fa-times"></i></button>
                                </div>  
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Nombre</td>
                            <td>
                                <button class="btn btn-danger btnEditarOficina" idOficina="" data-toggle="modal" data-target="#modalEditarOficina">Ver Lista</button>
                            </td>
                            <td>Fecha de adición</td>
                            <td>
                                <div class="btn-group">    
                                    <button class="btn btn-warning btnEditarOficina" idOficina="" data-toggle="modal" data-target="#modalEditarOficina"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btnEliminarOficina" idOficina=""><i class="fa fa-times"></i></button>
                                </div>  
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Nombre</td>
                            <td>
                                <button class="btn btn-danger btnEditarOficina" idOficina="" data-toggle="modal" data-target="#modalEditarOficina">Ver Lista</button>
                            </td>
                            <td>Fecha de adición</td>
                            <td>
                                <div class="btn-group">    
                                    <button class="btn btn-warning btnEditarOficina" idOficina="" data-toggle="modal" data-target="#modalEditarOficina"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btnEliminarOficina" idOficina=""><i class="fa fa-times"></i></button>
                                </div>  
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
