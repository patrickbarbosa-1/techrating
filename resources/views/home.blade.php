@extends('adminlte::page')

@section('content')
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                    ['Post', 'quantidades'],
                    @foreach ($postagens as $postagem)
                        ['{{ $postagem->nome}}','{{$postagem->quantidade}}']
                    @endforeach
                    ]);

                    var options = {
                    title: 'Postagens'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                }
                </script>
<!--Card-->
<div class="row">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $categoria_count }}</h3>
                    <p>Categorias</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
                <a href="{{ url('/categoria') }}" class="small-box-footer">Mais informações  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $postagem_count }}</h3>
                            <p>Postagens</p>
                        </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                        <a href="{{ url('/postagem') }}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $user_count }}</h3>
                    <p>Usuários Registrados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                    <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
            <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
        <div class="inner">
            <h3>10</h3>
                <p>Visitas</p>
        </div>
        <div class="icon">
            <i class="ion ion-pie-graph"></i>
        </div>
            <a href="#" class="small-box-footer">Mais informações<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
<!--Gráfico-->
<div id="piechart" style="width: 450px; height: 250px;"></div>
</div>

<!--Dashboard-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @can('is_admin')
                    <div class="alert alert-success" role="alert">
                        Você é um administrador !
                    </div>
                    @else
                    <div class="alert alert-success" role="alert">
                        Você é um usuário normal !
                    </div>
                    @endcan

                    {{ __('Você estar logado') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
