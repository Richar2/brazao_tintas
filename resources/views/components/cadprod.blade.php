@extends('templates.test')

@section('css-view')
@endsection

    
@section('js-view')
@endsection        

@section('conteudo-view')
<div class="panel-body">
   
       {!!Form::open(['route'=>'admin.savacad','method'=>'post']) !!}
             {{ csrf_field() }}
             <label>
               {!!Form::text('nome_pro',null,['class'=>'input', 'placeholder'=>"Nome"])!!} 
            </label>
            <label>
               {!!Form::textarea ('descricao_pro',null,['class'=>'input', 'placeholder'=>"Descrição"])!!} 
            </label>
            <label>
            {!! Form::number('quantidade_pro', null, ['class' => 'form-control', 'placeholder' => "Quantidade"]) !!}
            </label>
            <label>
               {!!Form::text('peso_pro',null,['class'=>'input', 'placeholder'=>"Peso"])!!} 
            </label>
            <label>
               {!!Form::text('altura_pro',null,['class'=>'input', 'placeholder'=>"Altura"])!!} 
            </label>
            <label>
               {!!Form::text('largura_pro',null,['class'=>'input', 'placeholder'=>"Largura"])!!} 
            </label>
            <label>
               {!!Form::text('profundidade_pro',null,['class'=>'input', 'placeholder'=>"Profudidade"])!!} 
            </label>
            <label>
               {!!Form::text('nome_cat',null,['class'=>'input', 'placeholder'=>"Categoria"])!!} 
            </label>
            <label>
            {!! Form::file('image', ['class' => 'form-control']) !!}
            </label>
            <label>
            {!! Form::submit('Enviar Agora', ['class' => 'btn btn-success']); !!}
            </label>
            
       
         {!!Form::close()!!}
   
</div>
@endsection 





















