@extends('templates.test')

@section('css-view')
@endsection

    
@section('js-view')
@endsection        

@section('conteudo-view')
<div class="panel-body">
   
       {!!Form::open() !!}
             {{ csrf_field() }}
             <label>
               {!!Form::text('nome_pro',null,['class'=>'input', 'placeholder'=>"Nome"])!!} 
            </label>
            <label>
               {!!Form::textarea ('descricao_pro',null,['class'=>'input', 'placeholder'=>"Descrição"])!!} 
            </label>
            <label>
            {!! Form::number('quantidade_pro', null, ['class' => 'form-control', 'placeholder' => 'Quantidade']) !!}
            </label>
            <label>
               {!!Form::text('username',null,['class'=>'input', 'placeholder'=>"Usuario"])!!} 
            </label>
            <label>
               {!!Form::text('username',null,['class'=>'input', 'placeholder'=>"Usuario"])!!} 
            </label>
            <label>
               {!!Form::text('username',null,['class'=>'input', 'placeholder'=>"Usuario"])!!} 
            </label>
            <label>
               {!!Form::text('username',null,['class'=>'input', 'placeholder'=>"Usuario"])!!} 
            </label>
            <label>
               {!!Form::text('username',null,['class'=>'input', 'placeholder'=>"Usuario"])!!} 
            </label>

            {!! Form::number('number', null, ['class' => 'form-control', 'placeholder' => 'Números']) !!}
       
         {!!Form::close()!!}
   
</div>
@endsection 





















