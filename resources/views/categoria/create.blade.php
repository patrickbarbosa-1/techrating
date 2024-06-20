@extends('adminlte::page')

@section('content')
    <div class="container text-dark">
        <div class="row justify-content-center  text-dark">
            <div class="col-md-8  text-dark">
                <div class="card mt-5 text-dark ">
                    <div class="card-header">Categoria - CRIAR</div>

                    <div class="card-body text-dark">



                                                @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif





                        <form method="POST" action={{ url('/categoria/create') }}>
                            @csrf

                            <label for="fname">Nome:</label><br>
                            <input type="text" class="form-control" name="nome"><br><br>
                            <input type="submit" class="form-control" value="ENVIAR">

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
