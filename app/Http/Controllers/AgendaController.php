<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Imagen;
use App\Models\Persona;

class AgendaController extends Controller
{
    public function create()
    {
        $personas = Persona::all();
        $imagenes = Imagen::all();
        return view('agenda.create', compact('personas', 'imagenes'));
    }

    public function store(Request $request)
    {
        Agenda::create($request->all());
        return redirect('agenda/create')->with('success', 'Se ha agregado satisfactoriamente a la agenda');
    }

    public function show(Request $request)
    {
        # Check if the request has the persona and fecha keys, if not, return empty
        if ($request->idpersona !== null && $request->fecha !== null ){
            $agendas = Agenda::select('imagenes.imagen', 'agenda.fecha', 'agenda.hora')
            ->join('imagenes', 'imagenes.idimagen', '=', 'agenda.idimagen')
            ->where('agenda.idpersona', $request->idpersona)
            ->where('agenda.fecha', $request->fecha)
            ->get();
            return view('agenda.show', compact('agendas'));
        }
        $personas = Persona::all();
        return view('agenda.consultar', compact('personas'));
    }
}
