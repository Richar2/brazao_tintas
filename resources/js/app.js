new Vue({
    el: '#tableprod',


    created: function () {
        this.getProdutos();
    },
    data () {
        return {
          produtos:[],
          fillproduto:{'id':'','nome_pro':'','descricao_pro':'' },  
        }
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
  });


