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
            Faq Categoria:<span class="required"> *</span><!----------------------------------------------------------------------------->
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::select('id_categories', $idcategories, null, ['class' => 'parsley-validated'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Titulo Faq:<span class="required"> *</span><!----------------------------------------------------------------------------->
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('faq_title', null, ['class' => 'parsley-validated', 'placeholder' => 'Titulo da Faq'])!!}
    </div>
</div>
<div class="form-row">
    <div class="form-label col-md-2">
        <label for="">
            Descrição da Faq:<span class="required"> *</span><!----------------------------------------------------------------------------->
        </label>
    </div>
    <div class="form-input col-md-8">
        {!!Form::text('faq_description', null, ['class' => 'parsley-validated', 'placeholder' => 'Descrição da Faq.'])!!}
    </div>
</div>
