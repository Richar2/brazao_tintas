<template>

<form method="POST" v-on:submit.prevent="updat(fillproduto.id)">
<div class="modal fade" id="edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				<h4>Editar</h4>
			</div>
			<div class="modal-body">
				<label for="">Actualizar Tarea</label>
				<input type="text" name="nome_pro" class="form-control" v-model="fillproduto.nome_pro">
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Actualizar">
			</div>
		</div>
	</div>
</div>
</form>











<form method="POST" v-on:submit.prevent="updateprod(fillproduto.id)">
<div class = "modal fade" id="edit">
     <div class="modal-dialog modal-lg">
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
                                      <input type="text" name="descricao_pro" class="form-control"  v-model="fillproduto.descricao_pro" >
                                    </div>
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


</template>




<script>
    import axios from 'axios'

    export default{
        data(){
            return{
                
                fillproduto:{'id':'','nome_pro':'','descricao_pro':'' },  
            }
        },

        methods:{
           
             editprod:function(produto){
             this.fillproduto.id= produto.id;
             this.fillproduto.nome_pro=produto.nome_pro;
             $('#edit').modal('show');
            
            }
        
        }

    }
 
 </script>

