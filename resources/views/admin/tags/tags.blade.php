@extends('admin.templates.templateAdmin')
@section('content')
<div id="page-title">
    <h3>
        TAGs Cadastradas
        <small>
            Voçê esta na página de TAGs cadastradas.
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
                        <th>TAGs</th>
                        <th>Acão</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                    <tr>
                        <td style="width: 40px;">#{{$tag->id}}</td>
                        <td>{{$tag->tag}}</td>
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
                                        <a href="{{route('editar.tag', $tag->id)}}" title="">
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
                        <th>TAGs</th>
                        <th>Acão</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div><!-- #page-content -->





@endsection