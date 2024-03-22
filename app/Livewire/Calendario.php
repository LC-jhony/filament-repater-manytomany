<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\OutputProduct;
use App\Models\Product;
use Livewire\Component;

class Calendario extends Component
{
    public $categoriesWithProducts;

    public $dates;

    public $productsByDate;

    public function mount()
    {
        // Obtener todas las categorías con sus productos asociados
        $this->categoriesWithProducts = Category::with('products')->get();

    }

    public function render()
    {
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

        return view('livewire.calendario', [

            'categoriesWithProducts' => $this->categoriesWithProducts,
            'days' => $days,
            'products' => $products,

        ]);
    }
}
