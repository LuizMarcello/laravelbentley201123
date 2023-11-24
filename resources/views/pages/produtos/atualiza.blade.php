@extends('index')

@section('content')
    {{-- A variável "findProduto" vem lá do controler, da função
        "atualizarProduto", do compact() --}}

    {{-- Quando acionar o button abaixo, busca a rota com "post" --}}
    <form class="form" method="POST" action="{{ route('atualizar.produto', $findProduto->id) }}">
        {{-- Token: Cross-Site Request Forgery --}}
        {{-- Para evitar o "ataque-de-formulário" --}}
        @csrf
        @method('PUT')
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center
           pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Editar produto</h1>
        </div>
        {{-- É através da tag "name" que é gravado no bd --}}
        {{-- Mesmo nome das colunas no bd --}}
        <div class="mb-3">
            <label class="form-label">Tipo de produto</label>
            <select class="form-select" name="tipodeproduto">
                @foreach ($findProduto as $produto)
                    {{-- <option selected>Selecione uma categoria</option> --}}
                    <option selected>{{ $findProduto->tipodeproduto }}</option>
                    <option value="antena">Antena</option>
                    <option value="groove">Groove</option>
                    <option value="cabo">Cabo</option>
                    <option value="fonte">Fonte</option>
                    <option value="lnb">Lnb</option>
                    <option value="ilnb">Ilnb</option>
                    <option value="modem">Modem</option>
                    <option value="roteador">Roteador</option>
                    <option value="tria">Tria</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Nome</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text" value="{{ isset($findProduto->nome) ? $findProduto->nome : old('nome') }}"
                class="form-control 
             @error('nome') is-invalid @enderror" name="nome">
            @if ($errors->has('nome'))
                <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Valor</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input id="mascara_valor" value="{{ isset($findProduto->valor) ? $findProduto->valor : old('valor') }}"
                class="form-control 
             @error('valor') is-invalid @enderror" name="valor">
            @if ($errors->has('valor'))
                <div class="invalid-feedback">{{ $errors->first('valor') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Banda</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text" value="{{ isset($findProduto->banda) ? $findProduto->banda : old('banda') }}"
                class="form-control 
             @error('banda') is-invalid @enderror" name="banda">
            @if ($errors->has('nome'))
                <div class="invalid-feedback">{{ $errors->first('banda') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Data da nota</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="date" value="{{ isset($findProduto->datanota) ? $findProduto->datanota : old('datanota') }}"
                class="form-control 
             @error('datanota') is-invalid @enderror" name="datanota">
            @if ($errors->has('datanota'))
                <div class="invalid-feedback">{{ $errors->first('datanota') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Marca</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text" value="{{ isset($findProduto->marca) ? $findProduto->marca : old('marca') }}"
                class="form-control 
             @error('marca') is-invalid @enderror" name="marca">
            @if ($errors->has('marca'))
                <div class="invalid-feedback">{{ $errors->first('marca') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Modelo</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text" value="{{ isset($findProduto->modelo) ? $findProduto->modelo : old('modelo') }}"
                class="form-control 
             @error('modelo') is-invalid @enderror" name="modelo">
            @if ($errors->has('modelo'))
                <div class="invalid-feedback">{{ $errors->first('modelo') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Nome</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text" value="{{ isset($findProduto->nome) ? $findProduto->nome : old('nome') }}"
                class="form-control 
             @error('nome') is-invalid @enderror" name="nome">
            @if ($errors->has('nome'))
                <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Nota fiscal</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text" value="{{ isset($findProduto->notafiscal) ? $findProduto->nome : old('notafiscal') }}"
                class="form-control 
             @error('notafiscal') is-invalid @enderror" name="notafiscal">
            @if ($errors->has('notafiscal'))
                <div class="invalid-feedback">{{ $errors->first('notafiscal') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Diâmetro</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text" value="{{ isset($findProduto->diametro) ? $findProduto->nome : old('diametro') }}"
                class="form-control 
             @error('diametro') is-invalid @enderror" name="diametro">
            @if ($errors->has('diametro'))
                <div class="invalid-feedback">{{ $errors->first('diametro') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Situacão</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text" value="{{ isset($findProduto->situacao) ? $findProduto->situacao : old('nsituacaome') }}"
                class="form-control 
             @error('situacao') is-invalid @enderror" name="situacao">
            @if ($errors->has('situacao'))
                <div class="invalid-feedback">{{ $errors->first('situacao') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Observacão</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text"
                value="{{ isset($findProduto->observacao) ? $findProduto->observacao : old('observacao') }}"
                class="form-control 
             @error('observacao') is-invalid @enderror" name="observacao">
            @if ($errors->has('observacao'))
                <div class="invalid-feedback">{{ $errors->first('observacao') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Metros</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text" value="{{ isset($findProduto->metros) ? $findProduto->metros : old('metros') }}"
                class="form-control 
             @error('metros') is-invalid @enderror" name="metros">
            @if ($errors->has('metros'))
                <div class="invalid-feedback">{{ $errors->first('metros') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de cabo</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text"
                value="{{ isset($findProduto->tipodecabo) ? $findProduto->tipodecabo : old('tipodecabo') }}"
                class="form-control 
             @error('tipodecabo') is-invalid @enderror" name="tipodecabo">
            @if ($errors->has('tipodecabo'))
                <div class="invalid-feedback">{{ $errors->first('tipodecabo') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Voltagem</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text" value="{{ isset($findProduto->voltagem) ? $findProduto->voltagem : old('voltagem') }}"
                class="form-control 
             @error('voltagem') is-invalid @enderror" name="voltagem">
            @if ($errors->has('voltagem'))
                <div class="invalid-feedback">{{ $errors->first('voltagem') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Serial</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text" value="{{ isset($findProduto->serial) ? $findProduto->serial : old('serial') }}"
                class="form-control 
             @error('serial') is-invalid @enderror" name="serial">
            @if ($errors->has('serial'))
                <div class="invalid-feedback">{{ $errors->first('serial') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Endererço Mac</label>
            {{-- Se houver alguma alteração nos dados, ele retorna para o formulário o que
                 foi alterado(?), senão retorna o que já estava antes(:) --}}
            <input type="text"
                value="{{ isset($findProduto->macaddress) ? $findProduto->macaddress : old('macaddress') }}"
                class="form-control 
             @error('macaddress') is-invalid @enderror" name="macaddress">
            @if ($errors->has('macaddress'))
                <div class="invalid-feedback">{{ $errors->first('macaddress') }}</div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Gravar</button>
    </form>
@endsection
