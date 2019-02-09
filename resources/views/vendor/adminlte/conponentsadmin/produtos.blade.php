@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')

    <div id="tableprod">
       
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Quantidade</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="produto in produtos">
            <th>@{{produto.id}}</th>
            <td>@{{produto.nome_pro}}</td>
            <td>@{{produto.descricao_pro}}</td>
            <td></td>
            <td><a href="#" class="btn btn-primary btn-sm" v-on:click.prevent="editprod(produto)">Editar</a>
                <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteprod(produto.id)">Deletar</a>

            </td>
            </tr>
            
        </tbody>
        </table>
       
		<nav>
			<ul class="pagination"  >
				<li v-if="pagination.current_page > 1">
					<a href="#" @click.prevent="changePage(pagination.current_page - 1)">
						<span><<</span>
					</a>
				</li>

				<li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
					<a href="#" @click.prevent="changePage(page)">
						@{{ page }}
					</a>
				</li>

				<li v-if="pagination.current_page < pagination.last_page">
					<a href="#" @click.prevent="changePage(pagination.current_page + 1)">
						<span>>></span>
					</a>
				</li>
			</ul>
</nav>
       
        @include('vendor.adminlte.conponentsadmin.modais')
       

    </div>
 
    <div  class="container">
     <pre>
         @{{ $data }}
     </pre>
    
        </div> 
@stop