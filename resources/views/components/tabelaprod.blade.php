@extends('templates.test')

@section('css-view')
@endsection

    
@section('js-view')
@endsection        

@section('conteudo-view')
    
    <div id="tableprod">
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
            <th>@{{produto.id}}</th>
            <td>@{{produto.nome_pro}}</td>
            <td>@{{produto.descricao_pro}}</td>
            <td>
                <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="editprod(produto)">Editar</a>
            </td>
            </tr>
            
        </tbody>
        </table>
        @include('components.modais')
     <div class="col-sm-5">
     <pre>
        @{{ $data }}
     </pre>
     </div> 
       

    </div>
 






@endsection 