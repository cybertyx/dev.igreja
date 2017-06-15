@extends('admin.templates.templateAdmin')
@section('content')
<div id="page-title">
    <h3>
        Serviços Cadastrados
        <small>
            Voçê esta na página de serviços cadastrados que a Pixelsquare presta..
        </small>
    </h3>
</div>

<div id="page-content">

    <div class="example-box">

        <div class="row">
            <table class="table" id="example1">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Empresa Cliente</th>
                        <th>Descrição Testemunho</th>
                        <th>Imagem</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testemunhos as $testemunho)
                    <tr>
                        <td style="width: 50px;">#{{$testemunho->id}}</td>
                        <td style="width: 200px;">{{$testemunho->cliente->nomeEmpresa}}</td>
                        <td style="width: 600px;">{{$testemunho->description}}</td>
                        <td>
                            <a href="">
                                <img src="{{url("uploads/imgclientetestemunho/{$testemunho->image}")}}" alt="" style="width: 50px;" />
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
                                        <a href="{{route('editar.testemunho', $testemunho->id)}}" title="">
                                            <i class="glyph-icon icon-edit mrg5R"></i>
                                            Editar
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="javascript:;" class="font-red" title="">
                                            <i class="glyph-icon icon-remove mrg5R"></i>
                                            Deletar
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
                        <th>Cliente</th>
                        <th>Nome Cliente</th>
                        <th>Empresa Cliente</th>
                        <th>Descrição Testemunho</th>
                        <th>Imagem</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div><!-- #page-content -->





@endsection