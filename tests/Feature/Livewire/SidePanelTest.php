<?php

use App\Livewire\SidePanel;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(SidePanel::class)
        ->assertStatus(200);
});
