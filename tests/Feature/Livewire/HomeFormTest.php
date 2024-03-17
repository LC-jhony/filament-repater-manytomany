<?php

use App\Livewire\HomeForm;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(HomeForm::class)
        ->assertStatus(200);
});
