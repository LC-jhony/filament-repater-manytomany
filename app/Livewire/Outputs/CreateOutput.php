<?php

namespace App\Livewire\Outputs;

use App\Models\Output;
use App\Models\Product;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

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
                Card::make('')->schema([
                    Forms\Components\Select::make('user_id')
                        ->searchable()
                        ->options(User::pluck('name', 'id'))
                        ->required()
                        ->native(false),
                    Forms\Components\DatePicker::make('date')
                        ->required(),
                ])->columns(2),
                Section::make('Lista de productos')->schema([
                    Repeater::make('outputproduct')
                        ->label('')
                        ->relationship()
                        ->schema([
                            Forms\Components\Select::make('product_id')
                                ->options(Product::pluck('name', 'id'))
                                ->searchable()
                                ->native(false),
                            forms\Components\TextInput::make('quantity'),
                        ])
                        ->grid(2)
                        ->columns(2),
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
