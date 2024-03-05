<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        $navbarExpanded = true;
        return view('livewire.navbar', compact('navbarExpanded'));
    }
}
