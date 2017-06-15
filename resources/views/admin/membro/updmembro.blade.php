@extends('admin.templates.templateAdmin')
@section('content')

<div id="page-content">
    @if(auth()->user()->nivel == 1)
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
    @else
    <h3>O seu nivel de acesso não é permitido nessa área!</h3>
    <p class="font-gray-dark">
        Entre em contato com o Administrador do painel.
    </p>
    @endif
</div><!-- #page-content -->

@endsection