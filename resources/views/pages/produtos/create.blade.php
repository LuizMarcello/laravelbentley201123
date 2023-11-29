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
        $('#selectcategoria').on('change', function() {
            var SelectValue = '.' + $(this).val();
            $('#pai div').hide();
            $(SelectValue).toggle();
        });
    });
</script>
{{-- FIM DO SELETOR FISICO/JURIDICO --}}

@section('content')
    {{-- Quando acionar o button abaixo, busca a rota com "post" --}}
    <form class="form" method="POST" action="{{ route('cadastrar.produto') }}">
        {{-- Token: Cross-Site Request Forgery --}}
        {{-- Para evitar o "ataque-de-formulário" --}}
        @csrf
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center
           pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Adicionar novo produto</h1>
        </div>

        {{-- É através da tag "name", que é gravado no bd --}}
        {{-- Mesmo nome das colunas no bd --}}
        <div class="mb-3">
            <label class="form-label">Tipo de produto</label>
            <select class="form-select" name="tipodeproduto" id="selectcategoria">
                <option selected>Selecione uma categoria</option>
                <option value="antena">Antena</option>
                <option value="groove">Groove</option>
                <option value="cabo">Cabo</option>
                <option value="fonte">Fonte</option>
                <option value="lnb">Lnb</option>
                <option value="ilnb">Ilnb</option>
                <option value="modem">Modem</option>
                <option value="roteador">Roteador</option>
                <option value="tria">Tria</option>
            </select>
        </div>

        <div id="pai">

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" value="{{ old('nome') }}"
                    class="form-control 
             @error('nome') is-invalid @enderror" name="nome">
                @if ($errors->has('nome'))
                    <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                @endif
            </div>
            <div class="mb-3 modem fonte">
                <label class="form-label">Valor</label>
                <input id="mascara_valor" value="{{ old('valor') }}"
                    class="form-control 
             @error('valor') is-invalid @enderror" name="valor">
                @if ($errors->has('valor'))
                    <div class="invalid-feedback">{{ $errors->first('valor') }}</div>
                @endif
            </div>

            <div class="mb-3 antena groove fonte lnb ilnb modem roteador tria">
                <label class="form-label">Banda</label>
                <input type="text" value="{{ old('banda') }}"
                    class="form-control 
             @error('banda') is-invalid @enderror" name="banda">
                @if ($errors->has('banda'))
                    <div class="invalid-feedback">{{ $errors->first('banda') }}</div>
                @endif
            </div>
            <div class="mb-3 antena groove cabo fonte lnb ilnb modem roteador tria">
                <label class="form-label">Data da nota</label>
                <input type="date" value="{{ old('datanota') }}"
                    class="form-control 
             @error('datanota') is-invalid @enderror" name="datanota">
                @if ($errors->has('datanota'))
                    <div class="invalid-feedback">{{ $errors->first('datanota') }}</div>
                @endif
            </div>
            <div class="mb-3 antena groove cabo fonte lnb ilnb modem roteador tria">
                <label class="form-label">Marca</label>
                <input type="text" value="{{ old('marca') }}"
                    class="form-control 
             @error('marca') is-invalid @enderror" name="marca">
                @if ($errors->has('marca'))
                    <div class="invalid-feedback">{{ $errors->first('marca') }}</div>
                @endif
            </div>
            <div class="mb-3 antena groove fonte lnb ilnb modem roteador tria">
                <label class="form-label">Modelo</label>
                <input type="text" value="{{ old('modelo') }}"
                    class="form-control 
             @error('modelo') is-invalid @enderror" name="modelo">
                @if ($errors->has('modelo'))
                    <div class="invalid-feedback">{{ $errors->first('modelo') }}</div>
                @endif
            </div>
            <div class="mb-3 antena groove cabo fonte lnb ilnb modem roteador tria">
                <label class="form-label">Nota fiscal</label>
                <input type="text" value="{{ old('notafiscal') }}"
                    class="form-control 
             @error('notafiscal') is-invalid @enderror" name="notafiscal">
                @if ($errors->has('notafiscal'))
                    <div class="invalid-feedback">{{ $errors->first('notafiscal') }}</div>
                @endif
            </div>
            <div class="mb-3 antena">
                <label class="form-label">Diametro</label>
                <input type="text" value="{{ old('diametro') }}"
                    class="form-control 
             @error('diametro') is-invalid @enderror" name="diametro">
                @if ($errors->has('diametro'))
                    <div class="invalid-feedback">{{ $errors->first('diametro') }}</div>
                @endif
            </div>
            <div class="mb-3 antena groove cabo fonte lnb ilnb modem roteador tria">
                <label class="form-label">Situacao</label>
                <input type="text" value="{{ old('situacao') }}"
                    class="form-control 
             @error('situacao') is-invalid @enderror" name="situacao">
                @if ($errors->has('situacao'))
                    <div class="invalid-feedback">{{ $errors->first('situacao') }}</div>
                @endif
            </div>
            <div class="mb-3 antena groove cabo fonte lnb ilnb modem roteador tria">
                <label class="form-label">Observação</label>
                <input type="text" value="{{ old('observacao') }}"
                    class="form-control 
             @error('observacao') is-invalid @enderror" name="observacao">
                @if ($errors->has('observacao'))
                    <div class="invalid-feedback">{{ $errors->first('observacao') }}</div>
                @endif
            </div>
            <div class="mb-3 cabo">
                <label class="form-label">Metros</label>
                <input type="text" value="{{ old('metros') }}"
                    class="form-control 
             @error('metros') is-invalid @enderror" name="metros">
                @if ($errors->has('metros'))
                    <div class="invalid-feedback">{{ $errors->first('metros') }}</div>
                @endif
            </div>
            <div class="mb-3 cabo">
                <label class="form-label">Tipo de cabo</label>
                <input type="text" value="{{ old('tipodecabo') }}"
                    class="form-control 
             @error('tipodecabo') is-invalid @enderror" name="tipodecabo">
                @if ($errors->has('tipodecabo'))
                    <div class="invalid-feedback">{{ $errors->first('tipodecabo') }}</div>
                @endif
            </div>
            <div class="mb-3 fonte">
                <label class="form-label">Voltagem</label>
                <input type="text" value="{{ old('voltagem') }}"
                    class="form-control 
             @error('voltagem') is-invalid @enderror" name="voltagem">
                @if ($errors->has('voltagem'))
                    <div class="invalid-feedback">{{ $errors->first('voltagem') }}</div>
                @endif
            </div>
            <div class="mb-3 groove fonte lnb ilnb modem roteador tria">
                <label class="form-label">Serial</label>
                <input type="text" value="{{ old('serial') }}"
                    class="form-control 
             @error('serial') is-invalid @enderror" name="serial">
                @if ($errors->has('serial'))
                    <div class="invalid-feedback">{{ $errors->first('serial') }}</div>
                @endif
            </div>
            <div class="mb-3 modem roteador tria">
                <label class="form-label">Endereço Mac</label>
                <input id="macaddress" type="text" value="{{ old('macaddress') }}"
                    class="form-control
             @error('macaddress') is-invalid @enderror" name="macaddress">
                @if ($errors->has('macaddress'))
                    <div class="invalid-feedback">{{ $errors->first('macaddress') }}</div>
                @endif
            </div>
        </div>
        <button type="submit" class="btn btn-success">Gravar</button>
    </form>
@endsection



{{-- <div class="form-group row">
    <label class="col-form-label col-sm-2" for="macaddress">Endereço Mac</label>
    <div class="col-sm-10">
        <input value="{{ old('macaddress', @$modem->macaddress) }}" type="text" id="macaddress" name="macaddress"
            maxlength="100" class="macaddress form-control @error('macaddress') is-invalid @enderror">
        @error('macaddress')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div> --}}
