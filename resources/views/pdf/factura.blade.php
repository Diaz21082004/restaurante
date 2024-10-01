<!DOCTYPE html>
<html>
<head>
    <title>Factura #{{ $factura->id }}</title>
    <style>
        body { font-family: 'Arial', sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; padding: 10px; text-align: left; }
        .header { text-align: center; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h2 class="header">Factura #{{ $factura->id }}</h2>
    <p><strong>Pedido ID:</strong> {{ $factura->pedido_id }}</p>
    <p><strong>Total:</strong> ${{ number_format($factura->total, 2) }}</p>
    <p><strong>Método de Pago:</strong> {{ $factura->metodo_pago }}</p>
    <p><strong>Fecha de Pago:</strong> {{ $factura->fecha_pago }}</p>

    <!-- Puedes agregar más detalles del pedido aquí si es necesario -->
</body>
</html>
