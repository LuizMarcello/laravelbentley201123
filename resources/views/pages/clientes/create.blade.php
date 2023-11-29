@extends('index')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

{{-- COMEÇA AQUI O SELETOR FISICO/JURIDICO --}}
<style>
    #pai div {
        display: none;
    }
</style>

<script>
    //Funções após a leitura do documento
    $(document).ready(function() {
        //Select para mostrar e esconder divs
        $('#fisicaoujuridica').on('change', function() {
            var SelectValue = '.' + $(this).val();
            $('#pai div').hide();
            $(SelectValue).toggle();
        });
    });
    /*  FIM DO SELETOR FISICO/JURIDICO */

    $(document).ready(function() {
        //.celular
        $('.celular').mask('(99) 99999-9999');
        //.phone
        $('.phone').mask('(99) 9999-9999');
        //cep
        $('.cepp').mask('99999-999');
        //.cpf_cnpj
        $('.cpff').mask('999.999.999-99');
        $('.cnpjj').mask('99.999.999/9999-99');
    });
</script>


@section('content')
    {{-- Quando acionar o button abaixo, busca a rota com "post" --}}
    <form class="form" method="POST" action="{{ route('cadastrar.cliente') }}">
        {{-- Token: Cross-Site Request Forgery --}}
        {{-- Para evitar o "ataque-de-formulário" --}}
        @csrf
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center
           pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Adicionar novo cliente</h1>
        </div>
        {{-- É através da tag "name" que é gravado no bd --}}
        {{-- Mesmo nome das colunas no bd --}}
        <div class="mb-3">
            <label class="form-label">Fisica/Juridica</label>
            <select class="form-select" name="tipodeproduto" id="fisicaoujuridica">
                <option selected>Selecione</option>
                <option value="fisica">Pessoa Física</option>
                <option value="juridica">Pessoa Jurídica</option>
            </select>
        </div>

        <div id="pai">

            <div class="mb-3 fisica">
                <label class="form-label">Nome</label>
                <input value="{{ old('nome') }}" class="form-control 
             @error('nome') is-invalid @enderror"
                    name="nome">
                @if ($errors->has('nome'))
                    <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                @endif
            </div>

            <div class="mb-3 juridica">
                <label class="form-label">Razão Social</label>
                <input value="{{ old('razaosocial') }}" class="form-control 
             @error('razaosocial') is-invalid @enderror"
                    name="razaosocial">
                @if ($errors->has('razaosocial'))
                    <div class="invalid-feedback">{{ $errors->first('razaosocial') }}</div>
                @endif
            </div>

            <div class="mb-3 fisica">
                <label class="form-label">CPF</label>
                <input value="{{ old('cpf') }}"
                    class="cpff form-control 
             @error('cpf') is-invalid @enderror" name="cpf"
                    id="cpf">
                @if ($errors->has('cpf'))
                    <div class="invalid-feedback">{{ $errors->first('cpf') }}</div>
                @endif
            </div>

            <div class="mb-3 juridica">
                <label class="form-label">CNPJ</label>
                <input value="{{ old('cnpj') }}"
                    class="cnpjj form-control
             @error('cnpj') is-invalid @enderror" name="cnpj">
                @if ($errors->has('cnpj'))
                    <div class="invalid-feedback">{{ $errors->first('cnpj') }}</div>
                @endif
            </div>

            <div class="mb-3 fisica juridica">
                <label class="form-label">Email</label>
                <input value="{{ old('email') }}" class="form-control 
             @error('email') is-invalid @enderror"
                    name="email">
                @if ($errors->has('email'))
                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                @endif
            </div>


            <div class="mb-3 fisica juridica">
                <label class="form-label">Cep</label>
                <input id="cep" value="{{ old('cep') }}"
                    class="cepp form-control 
             @error('cep') is-invalid @enderror" name="cep">
                @if ($errors->has('cep'))
                    <div class="invalid-feedback">{{ $errors->first('cep') }}</div>
                @endif
            </div>


            <div class="mb-3 fisica juridica">
                <label class="form-label">Cidade</label>
                <input id="endereco" value="{{ old('endereco') }}"
                    class="form-control 
             @error('endereco') is-invalid @enderror" name="endereco">
                @if ($errors->has('endereco'))
                    <div class="invalid-feedback">{{ $errors->first('endereco') }}</div>
                @endif
            </div>
            <div class="mb-3 fisica juridica">
                <label class="form-label">Logradouro</label>
                <input id="logradouro" value="{{ old('logradouro') }}"
                    class="form-control 
             @error('logradouro') is-invalid @enderror" name="logradouro">
                @if ($errors->has('logradouro'))
                    <div class="invalid-feedback">{{ $errors->first('logradouro') }}</div>
                @endif
            </div>

            <div class="mb-3 fisica juridica">
                <label class="form-label">Número</label>
                <input id="numero" value="{{ old('numero') }}"
                    class="form-control 
             @error('numero') is-invalid @enderror" name="numero">
                @if ($errors->has('numero'))
                    <div class="invalid-feedback">{{ $errors->first('numero') }}</div>
                @endif
            </div>

            <div class="mb-3 fisica juridica">
                <label class="form-label">Bairro</label>
                <input id="bairro" value="{{ old('bairro') }}"
                    class="form-control 
             @error('bairro') is-invalid @enderror" name="bairro">
                @if ($errors->has('bairro'))
                    <div class="invalid-feedback">{{ $errors->first('bairro') }}</div>
                @endif
            </div>
        </div>
        <button type="submit" class="btn btn-success">Gravar</button>
    </form>
@endsection
