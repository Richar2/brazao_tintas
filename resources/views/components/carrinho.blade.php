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
           
            <tr>
            <th></th>
            <td>{{$produtos}}</td>
            <td></td>
            <td>
                <a href="" class="btn btn-danger btn-sm" >Comprar</a>
            </td>
            </tr>
            
        </tbody>
        </table>


@endsection 