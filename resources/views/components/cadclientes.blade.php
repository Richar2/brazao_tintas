@extends('templates.test')

@section('css-view')
@endsection

    
@section('js-view')
@endsection        

@section('conteudo-view')
 <div id="box0" class="">
  {!!Form::open(['route'=>'savacli','method'=>'post']) !!}
  
  <div class="titul1"><h1 class="L1">Informações Pessoais</h1></div> 
  
  
  <div id="box1" >
     

     {!! csrf_field() !!}



                     <label class="">Nome
                     <br>  {!!Form::text('nome',null,['class="form1"'=>'input', 'placeholder'=>""])!!} 
                     </label>
                     <label class="">Sobrenome
                     <br>{!!Form::text('sobrenome',null,['class="form1"'=>'input', 'placeholder'=>""])!!} 
                     </label>
                     <label class="">Data de nascimento
                     <br> {!!Form::text('data_nascimento',null,['class="form1"'=>'input', 'placeholder'=>""])!!} 
                     </label>
                     <label class="">CPF
                     <br>   {!!Form::text('sexo',null,['class="form1"'=>'input', 'placeholder'=>"ex:111.111.111-00"])!!} 
                     </label>
                     <label class="">
                     <br>   {!!Form::text('cpf',null,['class="form1"'=>'input', 'placeholder'=>"ex:111.111.111-00"])!!} 
                     </label>
               
                     <label class="">Telefone fixo
                     <br>  {!!Form::text('telefone_fixo',null,['class="form1"'=>'input', 'placeholder'=>"Telefone Fixo"])!!} 
                     </label>
                     <label class="">Telefone Celular
                     <br> {!!Form::text('telefone_cel',null,['class="form1"'=>'input', 'placeholder'=>"Telefone Celular"])!!} 
                     </label>
                  
            
  </div>     
      <div id="box2" class=""> 
           <h1>Endereço</h1>

           <label class="">None do endereço

                        {!!Form::text('nome_endereco',null,['class="form-control"'=>'input', 'placeholder'=>"Ex:casa"])!!} 
           </label>
           <label class="">Seu CEP:
                        {!!Form::text('cep',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="">Endereço:
                        {!!Form::text('endereco',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="">Numero:
                        {!!Form::text('numero',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="">Complemento:
                        {!!Form::text('complemento',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="">Bairro:
                        {!!Form::text('bairro',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="">Cidade:
                        {!!Form::text('cidade',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="">Estado
                        {!!Form::text('estado',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="">Referência:
                        {!!Form::text('referencia',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
           </label>


      </div>
      
      
      <div id="box3" class="">
                     
            <h1>Dados de acesso</h1>
            <label class="">E-mail:
                        {!!Form::text('email',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
            </label>
          <label class="">Confirmar e-mail:
                        {!!Form::text('email',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
            </label> 
            <label class="">Senha:
                        {!!Form::text('senha',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
            </label>
            <label class="">Confirmar senha:
                        {!!Form::text('senha',null,['class="form-control"'=>'input', 'placeholder'=>""])!!} 
            </label> 

      </div>
                        <div class="btn"> 
                        <label >
                           {!!Form::submit('Salvar')!!}         
                        </label>       
                        </div>
      
      {!!Form::close()!!}

</div> 




@endsection 