<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pictogram; // Importa el modelo

class PictogramController extends Controller
{
    public function index()
    {
        $pictogramas = Pictogram::all(); // Obtiene todos los pictogramas
        return view('pictogramas.index', compact('pictogramas'));
    }
}