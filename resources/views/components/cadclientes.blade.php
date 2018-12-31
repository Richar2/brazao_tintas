@extends('templates.test')

@section('css-view')
@endsection

    
@section('js-view')
@endsection        

@section('conteudo-view')

<div id="box1" class="container">
<h1>Dados Pessoais</h1>
{!!Form::open(['route'=>'admin.savacad','method'=>'post']) !!}
             {{ csrf_field() }}

            <label class="col-md-5">Nome
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
            </label>
            <label class="col-md-5">Sobrenome
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
            </label>
            <label class="col-md-5">Data de nascimento
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
            </label>
            <label class="col-md-5">CPF
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"ex:111.111.111-00"])!!} 
            </label>
            <label class="col-md-5">CPF
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"ex:111.111.111-00"])!!} 
            </label>
            <label class="col-md-5">CPF
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"ex:111.111.111-00"])!!} 
            </label>
            <label class="col-md-4">Telefone-1
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Telefone Fixo"])!!} 
            </label>
            <label class="col-md-4">Telefone-2
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Telefone Celular"])!!} 
            </label>
            <label class="col-md-2">Peso
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Peso"])!!} 
            </label>
            <label class="col-md-2">Peso
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Peso"])!!} 
            </label>
            
    
            {!!Form::close()!!}
   
   </div>

@endsection 