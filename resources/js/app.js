new Vue({
    el: '#tableprod',


    created: function () {
        this.getProdutos();
    },
    data () {
        return {
          produtos:[],
          pagination: {  
                    'total': 0,
                    'current_page': 0,
                    'per_page': 0,
                    'last_page': 0,
                    'fron': 0,
                    'to': 0 
                   
          },
          fillproduto:{'id':'','nome_pro':'','descricao_pro':'' },  
          offset: 2,
        }
    console.log('data');   
    },
	computed: {
		isActived: function() {
			return this.pagination.current_page;
		},
		pagesNumber: function() {
			if(!this.pagination.to){
				return [];
			}

			var from = this.pagination.current_page - this.offset; 
			if(from < 1){
				from = 1;
			}

			var to = from + (this.offset * 2); 
			if(to >= this.pagination.last_page){
				to = this.pagination.last_page;
			}

			var pagesArray = [];
			while(from <= to){
				pagesArray.push(from);
				from++;
			}
			return pagesArray;
}
    },
   
    methods:{
        getProdutos: function(page) {
            var urlProdutos= 'tableprod?page='+page;
            axios.get(urlProdutos).then(response=>{
                this.produtos=response.data.prod.data,
                this.pagination=response.data.pagination
            });
            console.log(urlProdutos);
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
            $('#edit').modal('toggle');
            
        });
        console.log(url);

        }, 

       deleteprod:function(id){
        var url='deleteprod/'+ id;
        axios.delete(url).then(response=>{
            this.getProdutos();
            toastr.success('Produto eleminado com sucesso!'); 
        });
        //alert('id'); 
        console.log(url); 
      },
      
      changePage: function(page) {
        this.pagination.current_page = page;
        this.getProdutos(page);
     }
    }
    
  });
 
