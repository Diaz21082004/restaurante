<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Mostrar todos los menús
    public function index()
    {
        $menus = Menu::all();
        return view('vista.index', compact('menus')); // Vista ubicada en views/vista/index.blade.php
    }

    // Mostrar formulario para crear un nuevo menú
    public function create()
    {
        return view('vista.create');
    }

    // Guardar un nuevo menú en la base de datos
    public function store(Request $request)
    {
        // Validar todos los campos, incluyendo 'categoria'
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'ingredientes' => 'required',
            'categoria' => 'required' // Agregando la validación para 'categoria'
        ]);

        // Guardar el menú en la base de datos
        Menu::create($request->all());

        return redirect()->route('menus.index')->with('success', 'Menú creado con éxito.');
    }

    // Mostrar un menú específico
    public function show($id)
    {
        $menu = Menu::find($id);
        return view('vista.show', compact('menu'));
    }

    // Mostrar formulario para editar un menú
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('vista.edit', compact('menu'));
    }

    // Actualizar un menú en la base de datos
    public function update(Request $request, $id)
    {
        // Validar todos los campos, incluyendo 'categoria'
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'ingredientes' => 'required',
            'categoria' => 'required' // Agregando la validación para 'categoria'
        ]);

        // Actualizar el menú
        $menu = Menu::find($id);
        $menu->update($request->all());

        return redirect()->route('menus.index')->with('success', 'Menú actualizado con éxito.');
    }

    // Eliminar un menú
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menú eliminado con éxito.');
    }
}
