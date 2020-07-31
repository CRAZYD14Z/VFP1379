

    <div class="modal fade" id="editIntinerarioModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form name = "edit_Intinerario" id="edit_Intinerario">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Intinerario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">



                            <div class="form-row">
                                <div class="col"><label>ID</label><input id="eIDi" name="eIDi" class="form-control" readonly></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                            </div>                    

                            <div class="form-row">
                                <div class="col"><label>Fecha Inicial</label><input id="eFIi" name="eFIi" class="form-control" type="date" required></div>
                                <div class="col"><label>Fecha Final</label><input id="eFFi" name="eFFi" class="form-control" type="date" required></div>
                                <div class="col"></div>
                                <div class="col"></div>
                            </div>

                            <div class="form-row">
                                <div class="col"><label>Origen</label><input id="eORGi" name="eORGi" class="form-control form-control" type="text" required></div>
                                <div class="col"><label>Destino</label><input id="eDSTi" name="eDSTi" class="form-control form-control" type="text" required></div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col-11"><label>Descripcion</label><textarea id="eDESi" name="eDESi" class="form-control form-control" required></textarea></div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col"><label>Gasto Solicitado</label><input id="eGASi" name="eGASi" class="form-control" type="number" style="text-align: right;" required></div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col"></div>
                            </div>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="EDITARi">Guardar</button>
                        
                    </div>
                </div>
            </form>            
        </div>
    </div>