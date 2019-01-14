@extends('templates.test')

@section('css-view')
@endsection

    
@section('js-view')
@endsection        

@section('conteudo-view')
 <div id="box0" class="">
  {!!Form::open(['route'=>'savacli','method'=>'post']) !!}
  
  <div class="titol" ><i id="icon1" class="fas fa-user"></i><h1 class="L1">Informações Pessoais</h1></div> 
  
  
  <div id="box1" >
     

     {!! csrf_field() !!}



                     <label class="inpu1">Nome
                     <br>  {!!Form::text('nome',null,['class="form1"'=>'input', 'placeholder'=>""])!!} 
                     </label>
                     <label class="inpu2">(*)Sobrenome
                     <br>{!!Form::text('sobrenome',null,['class="form2"'=>'input', 'placeholder'=>""])!!} 
                     </label>
                     <label class="inpu3">Data de nascimento
                     <br> {!!Form::text('data_nascimento',null,['class="form3"'=>'input', 'placeholder'=>""])!!} 
                     </label>
                     <label class="inpu4">CPF
                     <br>   {!!Form::text('sexo',null,['class="form4"'=>'input', 'placeholder'=>"ex:111.111.111-00"])!!} 
                     </label>
                     <label class="inpu5">
                     <br>   {!!Form::text('cpf',null,['class="form5"'=>'input', 'placeholder'=>"ex:111.111.111-00"])!!} 
                     </label>
               
                     <label class="inpu6">Telefone fixo
                     <br>  {!!Form::text('telefone_fixo',null,['class="form6"'=>'input', 'placeholder'=>"Telefone Fixo"])!!} 
                     </label>
                     <label class="inpu8" >
                     <select  class="form8">
                           <option value="selecionar">selecionar</option>
                           <option value="Feminino">Feminino</option>
                           <option value="Masculino">Masculino</option>
                           
                           </select> 
                     </label> 
                     
                     
                     
                     <label class="inpu7">Telefone Celular
                     <br> {!!Form::text('telefone_cel',null,['class="form7"'=>'input', 'placeholder'=>"Telefone Celular"])!!} 
                     </label>
                     

                  
            
  </div>     
      <div class="titul2"><i id="icon2" class="fas fa-map-marker-alt"></i><h1 class="L2">Endereço de Entrega</h1></div>
  <div id="box2" class=""> 
           
           <label class="ipuntA1">None do endereço<br>

                        {!!Form::text('nome_endereco',null,['class="formA1"'=>'input', 'placeholder'=>"Ex:casa"])!!} 
           </label>
           <label class="ipuntA2">Seu CEP:<br>
                        {!!Form::text('cep',null,['class="formA2"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="ipuntA3">Endereço:<br>
                        {!!Form::text('endereco',null,['class="formA3"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="ipuntA4">Numero:<br>
                        {!!Form::text('numero',null,['class="formA4"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="ipuntA5">Complemento:<br>
                        {!!Form::text('complemento',null,['class="formA5"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="ipuntA6">Bairro:<br>
                        {!!Form::text('bairro',null,['class="formA6"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="ipuntA7">Cidade:<br>
                        {!!Form::text('cidade',null,['class="formA7"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="ipuntA8">Estado<br>
                        {!!Form::text('estado',null,['class="formA8"'=>'input', 'placeholder'=>""])!!} 
           </label>
           <label class="ipuntA9">Referência:<br>
                        {!!Form::text('referencia',null,['class="formA9"'=>'input', 'placeholder'=>""])!!} 
           </label>


      </div>
      
      
      <div class="titul3"><i id="icon3" class="fas fa-lock"></i><h1 class="L3">Dados de acesso</h1></div>
      <div id="box3" class="">
                     
            
            <label class="ipuntB1">E-mail:<br>
                        {!!Form::text('email',null,['class="formB1"'=>'input', 'placeholder'=>""])!!} 
            </label>
          <label class="ipuntB2">Confirmar e-mail:<br>
                        {!!Form::text('email',null,['class="formB2"'=>'input', 'placeholder'=>""])!!} 
            </label> 
            <label class="ipuntB3">Senha:<br>
                        {!!Form::text('senha',null,['class="formB3"'=>'input', 'placeholder'=>""])!!} 
            </label>
            <label class="ipuntB4">Confirmar senha:<br>
                        {!!Form::text('senha',null,['class="formB4"'=>'input', 'placeholder'=>""])!!} 
            </label> 

      </div>
                        <div class="btn"> 
                        <label >
                           {!!Form::submit('Finalizar Cadastro')!!}         
                        </label>       
                        </div>
      
      {!!Form::close()!!}

</div> 




@endsection 