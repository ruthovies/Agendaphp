@extends('layouts.app') <!--Esto sirve para llamar a la plantilla `app.blade.php`-->
@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Catálogo de Pictogramas</h2>

        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Ruta</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pictogramas as $pictograma)
                    <tr>
                        <td>{{ $pictograma->id }}</td>
                        <td>
                            <img src="{{ asset($pictograma->ruta) }}" width="50" alt="Pictograma">
                        </td>
                        <td>{{ $pictograma->ruta }}</td>
                        <td>{{ $pictograma->nombre }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-danger">No hay pictogramas registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <a href="{{ route('agenda.create') }}" class="btn btn-success">Añadir nuevo pictograma</a>
    </div>
@endsection