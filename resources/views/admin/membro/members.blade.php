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
    @if(auth()->user()->nivel == 1)
    <div class="example-box">

        <div class="row">
            <table class="table" id="example1">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Profissão</th>
                        <th>Nome</th>
                        <th>E-Mail</th>
                        <th>Descrição</th>
                        <th>Face</th>
                        <th>Twit</th>
                        <th>Goo+</th>
                        <th>% PHP</th>
                        <th>% HTML 5</th>
                        <th>% CSS 3</th>
                        <th>% JQUERY</th>
                        <th>Imagem</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                    <tr>
                        <td style="width: 20px;">#{{$member->id}}</td>
                        <td style="width: 50px;">{{$member->profissao}}</td>
                        <td style="width: 160px;">{{$member->name}}</td>
                        <td style="width: 200px;">{{$member->email}}</td>
                        <td style="width: 200px;">{{$member->description}}</td>
                        <td style="width: 10px;">
                            <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="Facebook" href="{{$member->face}}"  data-original-title="Facebook">
                                <i class="glyph-icon icon-facebook"></i>
                            </a>
                        </td>
                        <td style="width: 10px;">
                            <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="Twitter" href="{{$member->twitter}}" data-original-title="Twitter">
                                <i class="glyph-icon icon-tumblr"></i>
                            </a>
                        </td>
                        <td style="width: 10px;">
                            <a class="btn medium radius-all-4 mrg5A ui-state-default tooltip-button" title="Google" href="{{$member->googlemais}}" data-original-title="Google+">
                                <i class="glyph-icon icon-google-plus"></i>
                            </a>

                        </td>
                        <td>{{$member->perc_php}}</td>
                        <td>{{$member->perc_html}}</td>
                        <td>{{$member->perc_css}}</td>
                        <td>{{$member->perc_jquery}}</td>
                        <td>
                            <a href="">
                                <img src="{{url("uploads/imgmembers/{$member->image}")}}" alt="" style="width: 50px;" />
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
                                        <a href="{{route('editar.membro', $member->id)}}" title="">
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
                        <th>Profissão</th>
                        <th>Nome</th>
                        <th>E-Mail</th>
                        <th>Descrição</th>
                        <th>Face</th>
                        <th>Twit</th>
                        <th>Goo+</th>
                        <th>% PHP</th>
                        <th>% HTML 5</th>
                        <th>% CSS 3</th>
                        <th>% JQUERY</th>
                        <th>Imagem</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div><!-- #page-content -->
@else
<h3>O seu nivel de acesso não é permitido nessa área!</h3>
<p class="font-gray-dark">
    Entre em contato com o Administrador do painel.
</p>
@endif
@endsection