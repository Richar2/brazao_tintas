@extends('templates.test')

@section('css-view')
@endsection

    
@section('js-view')
@endsection        

@section('conteudo-view')
<div class="panel-body">
   
       {!!Form::open(['route'=>'admin.savacad','method'=>'post']) !!}
             {{ csrf_field() }}
      <div class="form-group row"> 

       
               <label class="col-md-6">Nome do Produto
                    {!!Form::text('nome_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Nome"])!!} 
               </label>
  

               <label class="col-md-2"> Quantidade
                {!! Form::number('quantidade_pro', null, ['class' => 'form-control', 'placeholder' => "Quantidade"]) !!}
               </label>
             
      </div>  
           
         <div class="form-group row"> 
            <label class="col-md-2">Peso
               {!!Form::text('peso_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Peso"])!!} 
            </label>
            <label class="col-md-2">Altura
               {!!Form::text('altura_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Altura"])!!} 
            </label>
            <label class="col-md-2">Largura
               {!!Form::text('largura_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Largura"])!!} 
            </label>
            <label class="col-md-2">Profundidade
               {!!Form::text('profundidade_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Profudidade"])!!} 
            </label>
         </div>
         <div class="form-group row"> 
            <label class="col-md-4">Categoria
               {!!Form::text('nome_cat',null,['class="form-control"'=>'input', 'placeholder'=>"Categoria"])!!} 
            </label>
           
            <label class="col-md-4">Imagens
            {!! Form::file('image', ['class' => 'form-control']) !!}
            </label>
         </div>
            
            <div class="form-group row"> 
              <label class="col-md-8">Descrição do produto
                 {!!Form::textarea ('descricao_pro',null,['class="form-control"'=>'input', 'placeholder'=>"Descrição"])!!} 
              </label> 
            </div>         
           
           
           
          <label>
            {!! Form::submit('Enviar Agora', ['class' => 'btn btn-success']); !!}
            </label>
     
   </div>  
         
         {!!Form::close()!!}
   
</div>
@endsection 





















