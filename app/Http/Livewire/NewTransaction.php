<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewTransaction extends Component
{
    public $activeTab = 'ADD';

    public function setActiveTab($value)
    {
        $this->activeTab = $value;
    }

    public function render()
    {
        return view('livewire.new-transaction');
    }
}
