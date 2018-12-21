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
            <th >{{produto.id}}</th>
            <td >{{produto.nome_pro}}</td>
            <td>Otto</td>
            <td>@mdo</td>
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
            }
        },
        created: function () {
            this.getProdutos();
        },
        methods:{
            getProdutos: function() {
                var urlProdutos= 'coponent_1';
                axios.get(urlProdutos).then(response=>{
                    this.produtos=response.data
                });
            }
        }

    }

</script>