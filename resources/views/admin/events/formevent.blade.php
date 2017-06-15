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
            Publicar:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::checkbox('published', '1')!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Titulo:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('title', null, ['class' => 'parsley-validated', 'placeholder' => 'Titulo do Evento.'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Descrição:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::textarea('descricao', null, ['class' => 'parsley-validated', 'placeholder' => 'Descrição evento.'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Localização:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('localizacao', null, ['class' => 'parsley-validated', 'placeholder' => 'Localização do Evento.'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Link Post (Facebook):<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('linkFacebook', null, ['class' => 'parsley-validated', 'placeholder' => 'Link do Facebook Relacionado ao Evento.'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Link Post (Twitter):<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('linkTwitter', null, ['class' => 'parsley-validated', 'placeholder' => 'Link do Twitter Relacionado ao Evento.'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Imagem:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::file('image', null, ['class' => 'parsley-validated'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Data Inicial:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('dataInicio', null, ['class' => 'fromDate', 'placeholder' => 'Data de Inicio do Evento.'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Data Final:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('dataFinal', null, ['class' => 'toDate', 'placeholder' => 'Data de Final do Evento.'])!!}
    </div>
</div>