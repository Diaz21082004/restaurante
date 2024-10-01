<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Ventas</title>
    <style>
        body { font-family: 'Arial', sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; padding: 10px; text-align: left; }
        .header { text-align: center; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h2 class="header">Reporte de Ventas</h2>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Pedido ID</th>
                <th>Total</th>
                <th>Método de Pago</th>
                <th>Fecha de Pago</th>
            </tr>
        </thead>
        <tbody>
            @foreach($facturas as $factura)
            <tr>
                <td>{{ $factura->id }}</td>
                <td>{{ $factura->pedido_id }}</td>
                <td>${{ number_format($factura->total, 2) }}</td>
                <td>{{ $factura->metodo_pago }}</td>
                <td>{{ $factura->fecha_pago }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
