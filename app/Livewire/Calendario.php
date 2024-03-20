<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use App\Models\OutputProduct;

class Calendario extends Component
{
    public $categoriesWithProducts;

    public function mount()
    {
        // Obtener todas las categorías con sus productos asociados
        $this->categoriesWithProducts = Category::with('products')->get();
    }

    public function render()
    {



        return view('livewire.calendario', [
            'categoriesWithProducts' => $this->categoriesWithProducts,
        ]);
    }
}
