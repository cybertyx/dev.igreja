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
                        <th>Id</th>
                        <th>FAQ Categoria</th>
                        <th>FAQ Titulo</th>
                        <th>FAQ Descrição</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($faqs as $faq)
                    <tr>
                        <td style="width: 20px;">#{{$faq->id}}</td>
                        <td style="width: 120px;">{{$faq->id_categories}}</td>
                        <td style="width: 130px;">{{$faq->faq_title}}</td>
                        <td style="width: 450px;">{{$faq->faq_description}}</td>
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
                                        <a href="{{route('editar.faq', $faq->id)}}" title="">
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
                        <th>FAQ Categoria</th>
                        <th>FAQ Titulo</th>
                        <th>FAQ Descrição</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div><!-- #page-content -->





@endsection