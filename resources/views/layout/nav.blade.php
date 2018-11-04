@section('nav')
<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

              <li><a href="{{ url("/") }}"><i class="menu-icon fa fa-laptop"></i>Inicio </a></li>

              <!-- agenets menu -->
              <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Agentes</a>
                <ul class="sub-menu children dropdown-menu">
                  <li><i class="fa fa-bar-chart"></i><a href="{{ url("/empresa") }}">Empresa </a></li>
                  <li><i class="fa fa-bar-chart"></i><a href="index.html">Correo </a></li>
                </ul>
              </li> <!-- /agenets menu -->

              <!-- Reporte CEO -->
              <li><a href="{{ url("/reporte_seo") }}"><i class="menu-icon fa fa-laptop"></i>Reporte CEO </a></li>
              <!-- /Reporte CEO -->




            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
@endsection
