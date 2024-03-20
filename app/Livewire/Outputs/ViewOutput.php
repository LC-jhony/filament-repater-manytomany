<?php

namespace App\Livewire\Outputs;

use App\Models\Product;
use Livewire\Component;
use App\Models\OutputProduct;

class ViewOutput extends Component
{
    public $dates;
    public function render()
    {
        // Obtener los días únicos del mes actual
        $days = OutputProduct::selectRaw('DAY(date) as dia')->groupBy('dia')->pluck('dia');

        // Obtener los daysproducts
        $products = Product::all(); // Ajusta según la estructura real de tu modelo Producto

        // Inicializar el kardex con días y daysproducts
        $this->dates = collect();
        foreach ($days as $dia) {
            $fila = ['dia' => $dia];
            foreach ($products as $product) {
                $total = OutputProduct::where('product_id', $product->id)
                    ->whereDay('date', $dia)
                    ->sum('quantity');
                $fila[$product->id] = $total;
            }
            $this->dates->push($fila);
        }
        return view('livewire.outputs.view-output',compact('days', 'products'));
    }
}
