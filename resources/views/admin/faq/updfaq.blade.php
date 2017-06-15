@extends('admin.templates.templateAdmin')
@section('content')
<div id="page-content">

    <h3>Editar FAQs</h3>
    <p class="font-gray-dark">
        Campos para edição das dúvidas. (FAQs).
    </p>

    <div class="example-box">
        <div class="example-code">
            {!!Form::model($faqs, ['route' => ['update.faq', $faqs->id], 'class' => 'col-md-10 center-margin'])!!}
            @include('admin.faq.formfaq')
            <div class="divider"></div>
            <div class="form-row">
                <div class="form-input col-md-8 col-md-offset-2">
                    <button type="submit" class="btn2 btn-primary2 btn-lg2 col-md-6">Editar Faq</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!-- #page-content -->
@endsection