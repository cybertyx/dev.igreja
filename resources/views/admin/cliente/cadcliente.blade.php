@extends('admin.templates.templateAdmin')
@section('content')
<div id="page-content">

    <h3>Cadastrar Clientes</h3>
    <p class="font-gray-dark">
        Campos de preenchimento de clientes.
    </p>

    <div class="example-box">
        <div class="example-code">
            {!!Form::open(['route' => 'store.cliente', 'class' => 'col-md-10 center-margin', 'files' => true])!!}
            @include('admin.cliente.formcliente')
            <div class="divider"></div>
            <div class="form-row">
                <div class="form-input col-md-8 col-md-offset-2">
                    <button type="submit" class="btn2 btn-primary2 btn-lg2 col-md-6">Cadastrar Novo Cliente</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!-- #page-content -->
@endsection