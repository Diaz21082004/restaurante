<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'menu_id', 'cantidad', 'total'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}

