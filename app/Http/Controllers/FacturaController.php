<?php

namespace App\Http\Controllers;

use App\Models\Factura; // Asegúrate de importar el modelo
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    // Muestra todas las facturas
    public function index()
    {
        $facturas = Factura::all(); // Obtener todas las facturas
        return view('facturas.index', compact('facturas')); // Retornar la vista
    }

    // Muestra el formulario para crear una nueva factura
    public function create()
    {
        return view('facturas.create'); // Retornar la vista para crear una factura
    }

    // Almacena una nueva factura
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pedido_id' => 'required|exists:pedidos,id',
            'total' => 'required|numeric|min:0',
            // Agrega más validaciones según tus necesidades
        ]);

        Factura::create($validatedData); // Crear una nueva factura

        return redirect()->route('facturas.index')->with('success', 'Factura creada exitosamente.');
    }

    // Muestra una factura específica
    public function show($id)
    {
        $factura = Factura::findOrFail($id); // Obtener la factura
        return view('facturas.show', compact('factura')); // Retornar la vista para mostrar la factura
    }

    // Muestra el formulario para editar una factura
    public function edit($id)
    {
        $factura = Factura::findOrFail($id); // Obtener la factura
        return view('facturas.edit', compact('factura')); // Retornar la vista para editar la factura
    }

    // Actualiza una factura específica
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'pedido_id' => 'required|exists:pedidos,id',
            'total' => 'required|numeric|min:0',
            // Agrega más validaciones según tus necesidades
        ]);

        $factura = Factura::findOrFail($id); // Obtener la factura
        $factura->update($validatedData); // Actualizar la factura

        return redirect()->route('facturas.index')->with('success', 'Factura actualizada exitosamente.');
    }

    // Elimina una factura específica
    public function destroy($id)
    {
        $factura = Factura::findOrFail($id); // Obtener la factura
        $factura->delete(); // Eliminar la factura

        return redirect()->route('facturas.index')->with('success', 'Factura eliminada exitosamente.');
    }
}
