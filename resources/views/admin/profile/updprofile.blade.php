@extends('admin.templates.templateAdmin')
@section('content')
<div id="page-content">

    <h3>Editar Membro</h3>
    <p class="font-gray-dark">
        Campos para edição de membros, colaboradores e Administradores.
    </p>

    <div class="example-box">
        <div class="example-code">

            {!!Form::model($membro, ['route' => ['update.membro', $membro->id], 'class' => 'col-md-10 center-margin', 'files' => true])!!}
            @include('admin.membro.formmembro')

            <div class="divider"></div>
            <div class="form-row">
                <div class="form-input col-md-8 col-md-offset-2">
                    <button type="submit" class="btn2 btn-primary2 btn-lg2 col-md-6">Editar Membro</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!-- #page-content -->
@endsection