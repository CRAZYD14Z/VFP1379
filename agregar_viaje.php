<!DOCTYPE html>
<html>

<?php include('head.php');?>

<body id="page-top">
    <div id="wrapper">
        <?php include('menu.php');?>
        <div id="content-wrapper">
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                <?php include('profile.php');?>                    
                <form name="agregar_viaje" id="agregar_viaje">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Solicitud Gastos de Viaje</h6>
                                    
                                    <div class='col-sm-4 pull-right'>
                                        <div id="custom-search-input">
                                            <div class="input-group col-md-12">
                                                <button class="btn btn-success" type="submit" id="GUARDAR" style="font-size: 12px;">
                                                    Guardar Viaje <i class="fas fa-floppy-o"></i>
                                                </button>                                                
                                            </div>
                                        </div>
                                    </div>                                
                                    
                                </div>
                                
                                <div id="loader"></div><!-- Carga de datos ajax aqui -->
                                <div id="resultados"></div><!-- Carga de datos ajax aqui -->                            

                                <div class="card-body" style="font-size: 12px;">                                                            
                                        <div class="form-row">
                                            <div class="col"><label>Fecha Inicial</label><input id="FI" name="FI" class="form-control" type="date" required></div>
                                            <div class="col"><label>Fecha Final</label><input id="FF" name="FF" class="form-control" type="date" required></div>
                                            <div class="col"></div>
                                            <div class="col"></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col"><label>Origen</label><input id="ORG" name="ORG" class="form-control form-control" type="text" required></div>
                                            <div class="col"><label>Destino</label><input id="DST" name="DST" class="form-control form-control" type="text" required></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-11"><label>Motivo</label><textarea id="MOT" name="MOT" class="form-control form-control" required></textarea></div>
                                        </div>                                        
                                        <div class="form-row">
                                            <div class="col-11"><label>Descripcion</label><textarea id="DES" name="DES" class="form-control form-control" required></textarea></div>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="col"><label>Gasto Solicitado</label><input id="GAS" name="GAS" class="form-control" type="number" style="text-align: right;" readonly required></div>
                                            <div class="col"> <input type="hidden" name="Detalle" id="Detalle"> </div>
                                            <div class="col">
                                            
                                            </div>
                                            <div class="col"></div>
                                        </div>
                                        <hr />                                                                        
                                        <div class="form-row">
                                            <div class="col">
                                                <label><h4>Intinerario</h4></label>&nbsp;
                                                <button class="btn btn-success" type="button" onclick="" style="font-size: 12px;" data-toggle="modal" data-target="#addIntinerario">
                                                    Agregar Intinerario <i class="fas fa-plus"></i>
                                                </button>
                                                <div class="table-responsive" style="font-size: 12px;">
                                                    <table class="table table-striped table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th class="text-center">Origen</th>
                                                                <th class="text-center">Destino</th>
                                                                <th class="text-center">Fecha Arribo</th>
                                                                <th class="text-center">Fecha Partida</th>
                                                                <th class="text-center">Gasto</th>
                                                                <th class="text-center"></th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody id="Intinerario">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2019</span></div>
                </div>
            </footer>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
    
    <!-- Plantilla de insersión -->
    <?php include('add/viajes_int.php');?>
    <!-- Plantilla de edición -->
    <?php include('edit/viajes_int.php');?>
    <!-- Plantilla de borrado -->
    <?php include('delete/viajes_int.php');?>        
    
    <?php include('scripts.php');?>
    <script src="js/agregar_viaje.js"></script>
</body>

</html>