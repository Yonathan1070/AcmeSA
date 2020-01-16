<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Exception;
use Illuminate\Http\Request;

/**
 * Controlador de Persona
 * @author Yonathan Bohorquez
 * @version 16/01/2020 1.0
 */

class PersonaController extends Controller
{
    /**
     * Metodo que muestra los datos de la persona y los envia a una vista
     *
     * @return Route::view('URI', 'viewName');
     */
    public function inicio()
    {
        $personas = Persona::all();
        return view('personas.inicio', compact('personas'));
    }

    /**
     * Metodo que retorna la vista del formulario de crear persona
     *
     * @return Route::view('URI', 'viewName');
     */
    public function crear()
    {
        return view('personas.crear');
    }

    /**
     * Metodo que realiza la acción de almacenamiento de la persona en la BD
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Route::redirect
     */
    public function guardar(Request $request)
    {
        try {
            Persona::crear($request);
            return redirect()->back()->with('mensaje', 'Persona creada');
        } catch (Exception $ex) {
            return redirect()->back()->withErrors($ex->getMessage())->withInput();
        }
    }

    /**
     * Metodo que retorna el formulario de edición de la persona
     *
     * @param  int  $id
     * @return Route::view('URI', 'viewName');
     */
    public function editar($id)
    {
        $persona = Persona::buscar($id);
        return view('personas.editar', compact('persona'));
    }

    /**
     * Metodo que envia los datos a actualizar en la BD
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Route::redirect
     */
    public function actualizar(Request $request, $id)
    {
        try {
            Persona::actualizar($request, $id);
            return redirect()->route('lista_personas')->with('mensaje', 'Persona Actualizada');
        } catch (Exception $ex) {
            return redirect()->back()->withErrors($ex->getMessage())->withInput();
        }
    }
}
