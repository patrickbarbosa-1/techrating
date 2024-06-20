@extends('adminlte::page')

@section('content')
<!--Card-->
<div class="row mt-3">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">
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
                <div class="small-box bg-dark">
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
        <div class="small-box bg-warning">
        <div class="inner">
            <h3>10</h3>
                <p>Visitas</p>
        </div>
        <div class="icon">
            <i class="ion ion-pie-graph"></i>
        </div>
            <a href="#" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<!--Dashboard-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-dark">
                <div class="card-header ">{{ __('Dashboard') }}</div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @can('is_admin')
                    <div class="alert alert-warning" role="alert">
                        Você é um administrador !
                    </div>
                    @else
                    <div class="alert alert-warning" role="alert">
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
