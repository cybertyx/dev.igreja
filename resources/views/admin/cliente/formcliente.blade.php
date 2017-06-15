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
    <div class="form-input col-md-10">
        {!!Form::text('nome', null, ['class' => 'parsley-validated', 'placeholder' => 'Nome do Cliente'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-input col-md-10">
        {!!Form::text('nomeEmpresa', null, ['class' => 'parsley-validated', 'placeholder' => 'Nome da Empresa do Cliente'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-input col-md-10">
        {!!Form::text('email', null, ['class' => 'parsley-validated', 'placeholder' => 'Email do Cliente'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-input col-md-10">
        {!!Form::text('telefone', null, ['class' => 'parsley-validated', 'placeholder' => 'Telefone do Cliente'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-input col-md-10">
        {!!Form::text('facebook', null, ['class' => 'parsley-validated', 'placeholder' => 'Facebook do Cliente.'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-input col-md-10">
        {!!Form::text('twitter', null, ['class' => 'parsley-validated', 'placeholder' => 'Twitter do Cliente.'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-input col-md-10">
        {!!Form::file('imageCli', ['class' => 'parsley-validated'])!!}
    </div>
</div>
