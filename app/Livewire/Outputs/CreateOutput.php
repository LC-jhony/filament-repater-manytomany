<?php

namespace App\Livewire\Outputs;

use Filament\Forms;
use App\Models\User;
use App\Models\Output;
use App\Models\Product;
use Filament\Forms\Get;
use Livewire\Component;
use Filament\Forms\Form;
use Filament\Forms\Components\Card;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\Section;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Concerns\InteractsWithForms;

class CreateOutput extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make('')
                    ->schema([Forms\Components\Select::make('user_id')->searchable()->options(User::pluck('name', 'id'))->required()->native(false),
                     Forms\Components\DatePicker::make('date')->required()])
                    ->columns(2),
                Section::make('Lista de productos')->schema([
                    Repeater::make('outputproduct')
                        ->label('')
                        ->relationship()
                        ->schema([
                            Forms\Components\Select::make('product_id')->options(Product::pluck('name', 'id'))->searchable()->native(false), 
                        forms\Components\TextInput::make('quantity'),
                        Forms\Components\DatePicker::make('date')
                        ->required()                      
                                             ])
                        
                        // ->grid(2)
                        ->columns(3),
                ]),
            ])
            ->statePath('data')
            ->model(Output::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $record = Output::create($data);

        $this->form->model($record)->saveRelationships();
        foreach ($record['outputproduct'] as $item) {
            $product = Product::find($item['product_id']);
            $product->quantity -= $item['quantity'];
            $product->save();
        }
        
        $this->reset();
        
    }

    public function render(): View
    {
        return view('livewire.outputs.create-output', [
            'products' => Product::all(),
        ]);
    }
}
