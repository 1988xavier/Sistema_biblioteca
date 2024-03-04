<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Libro;
use App\Http\Controllers\LibroController;


class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('index', compact('libros'));
    }

    public function create()
    {
        return view('agregar');
    }



    public function store(Request $request)


    
    

    

    {
        $libro = new Libro();
        $libro->clave = $request->clave;
        $libro->nombre = $request->nombre;
        $libro->autor = $request->autor;
        $libro->fecha_publicacion = $request->fecha_publicacion;
        $libro->editorial = $request->editorial;
        $libro->portada = $request->portada; 
        // Procesar y guardar la portada
        $libro->save();

        return redirect('/');
    }


    // Función para eliminar un libro
    public function eliminar($id)
    {
        $libro = Libro::find($id);
        
        if ($libro) {
            $libro->delete();
            return redirect()->back()->with('success', 'El libro ha sido eliminado exitosamente.');
        } else {
            return redirect()->back()->with('error', 'No se pudo encontrar el libro para eliminar.');
        }
    }

    // Función para editar un libro
    public function editar($id)
    {
        $libro = Libro::findOrFail($id);
        return view('editar_libro', compact('libro'));
    }

    public function actualizar(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->clave = $request->clave;
        $libro->nombre = $request->nombre;
        $libro->autor = $request->autor;
        $libro->fecha_publicacion = $request->fecha_publicacion;
        $libro->editorial = $request->editorial;
        // Actualizar otros campos según sea necesario

        $libro->save();

        return redirect()->route('libro.editar', $libro->id)->with('success', 'Libro actualizado exitosamente.');
    }


    public function listado()
    {
        $libros = Libro::all();
        return view('listado', compact('libros'));
    }


    

}
