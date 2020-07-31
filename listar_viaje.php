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
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-4">
                                                
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Solicitud Gastos de Viaje</h6>

                                
                			<div class='col-sm-4 pull-right'>
                				<div id="custom-search-input">
                                    <div class="input-group col-md-12">
                                        <input type="text" class="form-control" placeholder="Buscar"  style="font-size: 12px;" id="q" onkeyup="load(1);" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info" type="button" onclick="load(1);" style="font-size: 12px;">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                			</div>                                
                                
                            </div>
                            
                            <div class="card-body" style="font-size: 12px;">
                                <form>
                                    <div class="form-row">
                                        <div class="col">
                                        
                                			<div id="loader"></div><!-- Carga de datos ajax aqui -->
                                			<div id="resultados"></div><!-- Carga de datos ajax aqui -->
                                			<div class='outer_div'></div><!-- Carga de datos ajax aqui -->                                        
         
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2019</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    
    <?php include('scripts.php');?>
    <script src="js/listar_viaje.js"></script>
    
</body>

</html>