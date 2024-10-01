<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; // Usa el alias PDF que añadimos
use App\Models\Factura; // Asegúrate de tener un modelo para las facturas

class PDFController extends Controller
{
    public function generarFacturaPDF($id)
    {
        // Obtener la factura por su ID
        $factura = Factura::findOrFail($id);
        
        // Cargar la vista de facturas y pasar los datos a la vista
        $pdf = PDF::loadView('pdf.factura', compact('factura'));
        
        // Descargar el archivo PDF generado
        return $pdf->download('factura_'.$factura->id.'.pdf');
    }

    public function generarReporteVentas()
    {
        // Obtener todas las facturas (o puedes filtrarlas por rango de fechas u otros criterios)
        $facturas = Factura::all();
        
        // Generar el PDF con la vista que contiene el reporte de ventas
        $pdf = PDF::loadView('pdf.reporte_ventas', compact('facturas'));
        
        // Descargar el PDF
        return $pdf->download('reporte_ventas.pdf');
    }
}
