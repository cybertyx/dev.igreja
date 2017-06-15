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
            Nome:<span class="required"> *</span><!----------------------------------------------------------------------------->
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('nome', null, ['class' => 'parsley-validated', 'placeholder' => 'Nome do Membro'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Foto do Membro:<span class="required"> *</span><!----------------------------------------------------------------------------->
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::file('image', null, ['class' => 'parsley-validated'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Profissão:<span class="required"> *</span><!----------------------------------------------------------------------------->
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('profissao', null, ['class' => 'parsley-validated', 'placeholder' => 'Profissão do Membro'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Facebook:<span class="required"> *</span><!----------------------------------------------------------------------------->
        </label>

    </div>
    <div class="form-input col-md-8">
        {!!Form::text('face', null, ['class' => 'parsley-validated', 'placeholder' => 'Facebook do Membro.'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Twitter:<span class="required"> *</span><!----------------------------------------------------------------------------->
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('twitter', null, ['class' => 'parsley-validated', 'placeholder' => 'Twitter do Membro.'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Google+:<span class="required"> *</span><!----------------------------------------------------------------------------->
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('googlemais', null, ['class' => 'parsley-validated', 'placeholder' => 'Google+ do Membro.'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="" class="label-description">
            <label for="">
                Descrição dos Membros:<span class="required"> *</span><!----------------------------------------------------------------------------->
            </label>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::textarea('description', null, ['class' => 'parsley-validated', 'placeholder' => 'Fale sobre o membro.'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            PHP:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('perc_php', null, ['class' => 'parsley-validated', 'placeholder' => 'Porcentagem da skill. PHP'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            CSS:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('perc_css', null, ['class' => 'parsley-validated', 'placeholder' => 'Porcentagem da skill. CSS'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            HTML:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('perc_html', null, ['class' => 'parsley-validated', 'placeholder' => 'Porcentagem da skill. HTML'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            JQUERY:<span class="required"> *</span>
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('perc_jquery', null, ['class' => 'parsley-validated', 'placeholder' => 'Porcentagem da skill. JQUERY'])!!}
    </div>
</div>