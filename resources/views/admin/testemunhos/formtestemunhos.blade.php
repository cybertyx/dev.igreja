<div class="form-row">
    <div class="form-input col-md-10">
        @if(session('success'))
        <div class="infobox infobox-close success-bg mrg0A">
            <a href="#" title="Close Message" class="glyph-icon infobox-close icon-remove"></a>
            <div class="bg-green large btn info-icon">
                <i class="glyph-icon icon-ok-sign"></i>
            </div>
            <h4 class="infobox-title">SUCESSO</h4>
            <p style="margin-left: 45px;">{{session('success')}}.</p>
        </div>
        @endif
    </div>

    <div class="form-input col-md-10">
        @if(isset($errors) && count($errors) > 0)
        <div class="infobox infobox-close warning-bg mrg0A">
            <a href="#" title="Close Message" class="glyph-icon infobox-close icon-remove"></a>
            <div class="bg-orange large btn info-icon">
                <i class="glyph-icon icon-warning-sign"></i>
            </div>
            <h4 class="infobox-title">INFORMAÇÕES</h4>
            @foreach($errors->all() as $error)
            <p style="margin-left: 45px;">{{$error}}</p>
            @endforeach
        </div>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Cliente:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::select('cliente_id', $clientes, null, ['class' => 'parsley-validated', 'placeholder' => 'Qual o Cliente'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Nome Empresa Cliente:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::select('empresa_id', $nome_empresa, null, ['class' => 'parsley-validated', 'placeholder' => 'Empresa do Cliente'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Descrição Testemunho Cliente:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::textarea('description', null, ['class' => 'parsley-validated', 'placeholder' => 'Descrição do testemunho do Cliente'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Imagem do Cliente ( Logo, Folder, etc ):<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::file('image', ['class' => 'parsley-validated'])!!}
    </div>
</div>