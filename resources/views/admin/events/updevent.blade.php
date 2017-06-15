@extends('admin.templates.templateAdmin')
@section('content')
<div id="page-title">
    <h3>
        Editar Evento
        <small style="color: red;">
            <small style="font-size: 20px; color: red;">
                *
            </small>
            ( Campos para Edição do Evento na Igreja. )
        </small>
    </h3>
</div>

<div id="page-content">

    <div class="example-box">
        <div class="example-code">

            {!!Form::model($evento, ['route' => ['update.evento', $evento->id], 'class' => 'col-md-10 center-margin', 'files' => true])!!}
            @include('admin.events.formevent')

            <div class="divider"></div>
            <div class="form-row">
                <div class="form-input col-md-8 col-md-offset-2">
                    <button type="submit" class="btn2 btn-primary2 btn-lg2 col-md-6">Editar Evento</button>
                </div>
            </div>
            {!!Form::close()!!}

        </div>

    </div>

</div><!-- #page-content -->
@endsection