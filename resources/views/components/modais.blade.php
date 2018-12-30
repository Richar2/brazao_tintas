        
<form method="POST" v-on:submit.prevent="updat(fillproduto.id)">
<div class="modal fade" id="edit">
	<div class="modal-dialog">
		<div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">
                     <span>&times;</span>
      </button>   
    </div>
    <div class="modal-body">
        <div class="form-group"> 
           <div class="form-row">
             <div class="col-7">
                  <input type="text" name="nome_pro" class="form-control"  v-model="fillproduto.nome_pro">
              </div>
              <div class="col">
                  <input type="text" name="descricao_pro" class="form-control" v-model="fillproduto.descricao_pro">
              </div>
                                
              </div>
        </div>
    
    <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Atualizar">
    </div>
    
    
    </div>
  </div>
</div>  
</form>


