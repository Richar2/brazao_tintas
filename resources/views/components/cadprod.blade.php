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
               {!!Form::text('username',null,['class'=>'input', 'placeholder'=>"Usuario"])!!} 
            </label>
        
       
         {!!Form::close()!!}
   
</div>
@endsection 





















