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
                        <th>Nome Empresa</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Face</th>
                        <th>Twit</th>
                        <th>Imagem</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td style="width: 50px;">#{{$cliente->id}}</td>
                        <td style="width: 200px;">{{$cliente->nome}}</td>
                        <td style="width: 300px;">{{$cliente->nomeEmpresa}}</td>
                        <td style="width: 250px;">{{$cliente->email}}</td>
                        <td style="width: 150px;">{{$cliente->telefone}}</td>
                        <td style="width: 50px;">
                            <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="Facebook" href="{{$cliente->facebook}}"  data-original-title="Facebook">
                                <i class="glyph-icon icon-facebook"></i>
                            </a>
                        </td>
                        <td style="width: 50px;">
                            <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="Twitter" href="{{$cliente->twitter}}" data-original-title="Twitter">
                                <i class="glyph-icon icon-tumblr"></i>
                            </a>
                        </td>
                        <td>
                            <a href="">
                                <img src="{{url("uploads/imgclientes/{$cliente->imageCli}")}}" alt="" style="width: 50px;" />
                            </a>
                        </td>
                        <td>
                            <div class="dropdown">
                                <a href="javascript:;" title="" class="btn medium bg-blue" data-toggle="dropdown">
                                    <span class="button-content">
                                        <i class="glyph-icon font-size-11 icon-cog"></i>
                                        <i class="glyph-icon font-size-11 icon-chevron-down"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu float-right">

                                    <li>
                                        <a href="{{route('editar.cliente', $cliente->id)}}" title="">
                                            <i class="glyph-icon icon-edit mrg5R"></i>
                                            Editar
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="javascript:;" class="font-red" title="">
                                            <i class="glyph-icon icon-remove mrg5R"></i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Nome Empresa</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Face</th>
                        <th>Twit</th>
                        <th>Imagem</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div><!-- #page-content -->





@endsection