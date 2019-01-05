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
         this.fillproduto.descricao_pro=produto.descricao_pro;
         $('#edit').modal('show');
        
        },
      /* updat:function(id){
           var url='updateprod/'+ id;
           axios.put(url, this.fillproduto).then(response=>{
              this.getProdutos();
              this.fillproduto={'id':'','nome_pro':'','descricao_pro':'' };
              $('#edit').modal('toggle');
           });
        },*/
    
      updat:function(id){
          var url='updateprod/'+ id;  
         axios.put(url,  this.fillproduto).then(response=>{
             
            this.getProdutos();
            this.fillproduto={'id':'','nome_pro':'','descricao_pro':'' };
            .catch(error => { $('#edit').modal('toggle'); });
         
        });
         
        }
       
    }
  });


