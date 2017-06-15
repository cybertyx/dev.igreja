@extends('admin.templates.templateAdmin')
@section('content')
<div id="page-content">

    <h3>Cadastrar Testemunhos</h3>
    <p class="font-gray-dark">
        Campos de preenchimento de testemunhos.
    </p>

    <div class="example-box">
        <div class="example-code">

            {!!Form::open(['route' => 'create.testemunho', 'class' => 'col-md-10 center-margin', 'files' => true])!!}
            @include('admin.testemunhos.formtestemunhos')

            <div class="divider"></div>
            <div class="form-row">
                <div class="form-input col-md-8 col-md-offset-2">
                    <button type="submit" class="btn2 btn-primary2 btn-lg2 col-md-6">Cadastrar Novo Testemunho</button>
                </div>
            </div>
            {!!Form::close()!!}

        </div>

    </div>

</div><!-- #page-content -->
@endsection