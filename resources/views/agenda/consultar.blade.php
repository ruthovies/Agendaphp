@extends('layouts.app')

@section('title', 'Formulario consulta agenda')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Formulario</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('agenda.show') }}" method="GET">
                    @csrf

                    <!-- ID_persona -->
                    <div class="mb-3">
                        <label for="id" class="form-label">ID Persona</label>
                        <select name="idpersona" id="idpersona">
                            @foreach ($personas as $persona)
                                <option value="{{ $persona->idpersona }}">{{ $persona->idpersona }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Fecha -->
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" name="fecha" id="fecha" class="form-control" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <!-- Botón de Enviar -->
                        <button type="submit" class="btn btn-success">Mostrar agenda</button>

                        <!-- Botón de Volver -->
                        <a href="{{ route('pictograms.index') }}" class="btn btn-secondary">Volver al Listado</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection