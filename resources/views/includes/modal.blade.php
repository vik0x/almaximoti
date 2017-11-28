<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="row">
                <div class="form-group col-xs-6">
                    <label for="clave">Clave</label>
                    <input type="text" name="clave" v-model="detail.clave" id="clave">
                </div>
                <div class="form-group col-xs-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" v-model="detail.nombre" id="nombre">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-6">
                    <label for="tipo">Tipo de producto</label>
                    <select name="tipo" v-model="detail.tipo" id="tipo">
                        <option value="0">Seleccione una opción...</option>
                        <option v-for="item in {{json_encode($types)}}" :value="item.id" v-text="item.name"></option>
                    </select>
                </div>
                <div class="form-group col-xs-6">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" v-model="detail.active" :checked="detail.active ? 'checked' : ''"> Activo
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <detalle class="table table-hover table-striped"></detalle>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" @click="save">Save changes</button>
      </div>
    </div>
  </div>
</div>