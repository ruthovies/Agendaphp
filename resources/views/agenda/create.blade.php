@extends('layouts.app')

@section('title', 'Formulario Agenda')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <h2>Formulario</h2>
        <form action="{{ route('agenda.store') }}" method="POST">
            @csrf

            <!-- Fecha -->
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control" required>
            </div>

            <!-- Hora -->
            <div class="mb-3">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" name="hora" id="hora" class="form-control" required>
            </div>

            <!-- ID_persona -->
            <div class="mb-3">
                <label for="id" class="form-label">ID Persona</label>
                <select name="idpersona" id="idpersona">
                    @foreach ($personas as $persona)
                        <option value="{{ $persona->idpersona }}">{{ $persona->idpersona }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Seleccionar Imagen -->
            <div class="mb-3">
                <label for="imagen" class="form-label">Selecciona una imagen</label>
                <table>
                    <tr>
                        @foreach($imagenes as $imagen)
                            <td>
                                <div>
                                    <img src="{{ asset($imagen->imagen) }}" alt="{{ $imagen->descripcion }}" width="100"
                                        height="100">
                                    <label for="imagen_seleccionada"> Imagen: {{ $imagen->idimagen }}</label>
                                    <input type="radio" id="idimagen" name="idimagen" value="{{ $imagen->idimagen }}" required>
                                </div>
                        @endforeach
                        </td>
                    </tr>
                </table>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection