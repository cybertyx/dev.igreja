@extends('admin.templates.templateAdmin')
@section('content')
<div id="page-title">
    <h3>
        Clientes Cadastrados
        <small>
            Voçê esta na página de Clientes cadastrados da Pixelsquare.
        </small>
    </h3>
</div>

<div id="page-content">

    <div class="example-box">

        <div class="row">
            <table class="table" id="example1">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($newsletters as $news)
                    <tr>
                        <td style="width: 20px;">#{{$news->id}}</td>
                        <td style="width: 100px;">{{$news->nome}}</td>
                        <td style="width: 250px;">{{$news->email}}</td>
                    </tr>
                    @endforeach


                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div><!-- #page-content -->





@endsection