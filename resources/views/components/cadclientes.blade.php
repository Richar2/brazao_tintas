@extends('templates.test')

@section('css-view')
@endsection

    
@section('js-view')
@endsection        

@section('conteudo-view')
<div class="panel-body">
{!!Form::open(['route'=>'admin.savacad','method'=>'post']) !!}
             {{ csrf_field() }}
           
           
            <label class="col-md-2">Nome
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Seu nome aqui"])!!} 
            </label>
            <label class="col-md-2">Sobrenome
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Seu sobrenome aqui"])!!} 
            </label>
            <label class="col-md-2">Data de nascimento
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Data de nascimento"])!!} 
            </label>
            <label class="col-md-2">CPF
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"ex:111.111.111-00"])!!} 
            </label>
            <label class="col-md-2">Telefone-1
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Telefone-1"])!!} 
            </label>
            <label class="col-md-2">Telefone-2
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Telefone-2"])!!} 
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