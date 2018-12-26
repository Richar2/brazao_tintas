<template>
    <div class="container">
        <h1>test</h1>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="produto in produtos">
            <th>{{produto.id}}</th>
            <td>{{produto.nome_pro}}</td>
            <td>Otto</td>
            <td>
                <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="editprod(produto)">Editar</a>
            </td>
            </tr>
            
        </tbody>
        </table>



    </div>
</template>






<script>
    import axios from 'axios'

    export default{
        data(){
            return{
                produtos:[],
                fillproduto:{'id':'','nome_pro':'','descricao_pro':'' },  
            }
        },
        created: function () {
            this.getProdutos();
        },
        methods:{
            getProdutos: function() {
                var urlProdutos= 'tableprod';
                axios.get(urlProdutos).then(response=>{
                    this.produtos=response.data
                });
            },
             editprod:function(produto){
             this.fillproduto.id= produto.id;
             this.fillproduto.nome_pro=produto.nome_pro;
             $('#edit').modal('show');
            
            }
        
        }

    }

</script>