<?php

use App\Livewire\Outputs\ViewOutput;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ViewOutput::class)
        ->assertStatus(200);
});
