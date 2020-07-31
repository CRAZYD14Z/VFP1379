    
    <!-- Modal -->
    <div class="modal fade" id="deleteIntinerarioModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar Intinerario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
					<p>¿Seguro que quieres eliminar este registro?</p>
					<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
					<input type="hidden" name="delete_id" id="delete_id">                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning" id="BORRARi">Borrar</button>
                </div>
            </div>
        </div>
    </div>