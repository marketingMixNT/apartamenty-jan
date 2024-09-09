<?php

namespace App\Livewire\Home;

use Livewire\Component;

class HomeIndex extends Component
{
    public $title = 'Home';
    public $description = 'description home';

    public function render()
    {
        return view('livewire.home.home-index')->layout('components.layouts.app', [
            'title' => $this->title,
            'description' => $this->description,
        ]);
    }
}
