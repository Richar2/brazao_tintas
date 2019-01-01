@extends('templates.test')

@section('css-view')
@endsection

    
@section('js-view')
@endsection        

@section('conteudo-view')
<div id="box0" class="container">
{!!Form::open(['route'=>'savacli','method'=>'post']) !!}

<div id="box1" class="container">
     <h1>Dados Pessoais</h1>

                     {{ csrf_field() }}



                     <label class="col-md-5">Nome
                        {!!Form::text('nome',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
                     </label>
                     <label class="col-md-5">Sobrenome
                        {!!Form::text('sobrenome',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
                     </label>
                     <label class="col-md-5">Data de nascimento
                        {!!Form::text('data_nascimento',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
                     </label>
                     <label class="col-md-5">Sexo
                        {!!Form::text('sexo',null,['class="form-control"'=>'input', 'placeholder'=>"ex:111.111.111-00"])!!} 
                     </label>
                     <label class="col-md-5">CPF
                        {!!Form::text('cpf',null,['class="form-control"'=>'input', 'placeholder'=>"ex:111.111.111-00"])!!} 
                     </label>
               
                     <label class="col-md-4">Telefone fixo
                        {!!Form::text('telefone_fixo',null,['class="form-control"'=>'input', 'placeholder'=>"Telefone Fixo"])!!} 
                     </label>
                     <label class="col-md-4">Telefone Celular
                        {!!Form::text('telefone_celular',null,['class="form-control"'=>'input', 'placeholder'=>"Telefone Celular"])!!} 
                     </label>
                  
            
</div>     
      <div id="box2" class="container"> 
           <h1>Endereço</h1>

           <label class="col-md-5">None do endereço

                        {!!Form::text('nome_endereco',null,['class="form-control"'=>'input', 'placeholder'=>"Ex:casa"])!!} 
           </label>
           <label class="col-md-5">Seu CEP:
                        {!!Form::text('cep',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="col-md-5">Endereço:
                        {!!Form::text('endereco',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="col-md-5">Numero:
                        {!!Form::text('numero',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="col-md-5">Complemento:
                        {!!Form::text('complemento',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="col-md-5">Bairro:
                        {!!Form::text('bairro',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="col-md-5">Cidade:
                        {!!Form::text('cidade',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="col-md-5">Estado
                        {!!Form::text('estado',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="col-md-5">Referência:
                        {!!Form::text('referencia',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>


      </div>
      
      
      <div id="box3" class="container">
                     
            <h1>Dados de acesso</h1>
            <label class="col-md-5">E-mail:
                        {!!Form::text('email',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
            </label>
            <label class="col-md-5">Confirmar e-mail:
                        {!!Form::text('email',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
            </label> 
            <label class="col-md-5">Senha:
                        {!!Form::text('senha',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
            </label>
            <label class="col-md-5">Confirmar senha:
                        {!!Form::text('senha',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
            </label>             

      </div>
      
                        <label>
                           {!!Form::submit('Salvar')!!}         
                        </label>       
      
      
      {!!Form::close()!!}

</div> 




@endsection 