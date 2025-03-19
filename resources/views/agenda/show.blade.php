@extends('layouts.app')

@section('title', 'Formulario Agenda')

@section('content')
    @if (!empty($agendas) && $agendas->count())
        <div>
            <ul>
                @foreach ($agendas as $agenda)
                    <li>
                        <img src="{{ asset($agenda->imagen) }}" alt="" width="100" />
                    </li>
                    <li>
                        <p>Hora: {{ $agenda->hora }}</p>

                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            No hay registros disponibles.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endsection