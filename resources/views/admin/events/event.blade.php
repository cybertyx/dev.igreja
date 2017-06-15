@extends('admin.templates.templateAdmin')
@section('content')
<div id="page-title">
    <h3>
        Portifolios Cadastrados
        <small>
            Voçê esta na página de Portifolios cadastrados da Pixelsquare.
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
                        <th>Titulo Evento</th>
                        <th>Localização</th>
                        <th>Data Inicial</th>
                        <th>Data Encerramento</th>
                        <th>Publicação</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($eventos as $evento)
                    <tr>
                        <td style="width: 50px;">#{{$evento->id}}</td>
                        <td style="width: 250px;">{{$evento->title}}</td>
                        <td style="width: 250px;">{{$evento->localizacao}}</td>
                        <td style="width: 150px;">{{$evento->dataInicio}}</td>
                        <td style="width: 150px;">{{$evento->dataFinal}}</td>
                        <td style="width: 200px;">
                            @if($evento->published == 1)
                            <p>Publicado</p>
                            @else
                            <p>Não Publicado</p>
                            @endif
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
                                        <a href="{{route('editar.evento', $evento->id)}}" title="">
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
                        <th>Titulo Evento</th>
                        <th>Localização</th>
                        <th>Data Inicial</th>
                        <th>Data Encerramento</th>
                        <th>Publicação</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div><!-- #page-content -->





@endsection