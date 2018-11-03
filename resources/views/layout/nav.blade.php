@section('nav')
<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="active">
                    <a href="{{route('/')}}"><i class="menu-icon fa fa-laptop"></i>Inicio </a>
                </li>
                <li class="">
                    <a href="index.html"><i class="menu-icon fa fa-bar-chart"></i>Empresa </a>
                </li>
                <li class="">
                    <a href="index.html"><i class="menu-icon fa fa-bar-chart"></i>Correo </a>
                </li>
                <li class="">
                    <a href="{{route('lista_dinamica')}}"><i class="menu-icon fa fa-bar-chart"></i>Lista Dinamica</a>
                </li>
                <!-- Reporte CEO -->
                <li><a href="{{ url("/reporte_seo") }}"><i class="menu-icon fa fa-laptop"></i>Reporte CEO </a></li>
                <!-- /Reporte CEO -->
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
@endsection
