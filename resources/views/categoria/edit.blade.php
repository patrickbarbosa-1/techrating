@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-dark">
                <div class="card mt-5 text-dark">
                    <div class="card-header text-dark">Categoria - EDITAR</div>

                    <div class="card-body text-black">



                                                @if ($errors->any())
                            <div class="alert alert-danger ">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif





                        <form method="POST" action= "{{ url('/categoria/' . $categoria->id . '/edit') }}">
                            @csrf
                            @method('PUT')
                            <label for="fname">Nome:</label><br>
                            <input type="text" class="form-control"  value="{{ $categoria->nome }}" name="nome"><br><br>
                            <input type="submit" class="form-control" value="ENVIAR">

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
