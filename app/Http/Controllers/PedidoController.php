<?php

namespace App\Http\Controllers;

use App\Models\Pedido; // Asegúrate de importar el modelo
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    // Muestra todos los pedidos
    public function index()
    {
        $pedidos = Pedido::all(); // Obtener todos los pedidos
        return view('pedidos.index', compact('pedidos')); // Retornar la vista
    }

    // Muestra el formulario para crear un nuevo pedido
    public function create()
    {
        return view('pedidos.create'); // Retornar la vista para crear un pedido
    }

    // Almacena un nuevo pedido
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'menu_id' => 'required|exists:menus,id',
            'cantidad' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0',
        ]);

        Pedido::create($validatedData); // Crear un nuevo pedido

        return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente.');
    }

    // Muestra un pedido específico
    public function show($id)
    {
        $pedido = Pedido::findOrFail($id); // Obtener el pedido
        return view('pedidos.show', compact('pedido')); // Retornar la vista para mostrar el pedido
    }

    // Muestra el formulario para editar un pedido
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id); // Obtener el pedido
        return view('pedidos.edit', compact('pedido')); // Retornar la vista para editar el pedido
    }

    // Actualiza un pedido específico
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'menu_id' => 'required|exists:menus,id',
            'cantidad' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0',
        ]);

        $pedido = Pedido::findOrFail($id); // Obtener el pedido
        $pedido->update($validatedData); // Actualizar el pedido

        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado exitosamente.');
    }

    // Elimina un pedido específico
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id); // Obtener el pedido
        $pedido->delete(); // Eliminar el pedido

        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado exitosamente.');
    }
}
