<!-- Modal -->
<div class="modal fade" id="addIntinerario" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">

            <form name = "add_Intinerario" id="add_Intinerario">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Agregar Intinerario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">



                            <div class="form-row">
                                <div class="col"><label>Fecha Inicial</label><input id="FIi" name="FIi" class="form-control" type="date" required></div>
                                <div class="col"><label>Fecha Final</label><input id="FFi" name="FFi" class="form-control" type="date" required></div>
                                <div class="col"></div>
                                <div class="col"></div>
                            </div>

                            <div class="form-row">
                                <div class="col"><label>Origen</label><input id="ORGi" name="ORGi" class="form-control form-control" type="text" required></div>
                                <div class="col"><label>Destino</label><input id="DSTi" name="DSTi" class="form-control form-control" type="text" required></div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col-11"><label>Descripcion</label><textarea id="DESi" name="DESi" class="form-control form-control" required></textarea></div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col"><label>Gasto Solicitado</label><input id="GASi" name="GASi" class="form-control" type="number" style="text-align: right;" required></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                            </div>

                        


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary"  id="GUARDARi">Guardar</button>
                        
                    </div>
                </div>
            </form>            
        </div>
    </div>