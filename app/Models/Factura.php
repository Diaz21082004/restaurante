<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    // Especificar los campos que son asignables en masa
    protected $fillable = [
        'pedido_id',
        'total',
    ];

    // Definir la relación con el modelo Pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
