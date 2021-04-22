<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewTransaction extends Component
{
    public $visible = false;
    public $activeTab = 'ADD';

    public function close()
    {
        $this->visible = false;
    }

    public function setActiveTab($value)
    {
        $this->activeTab = $value;
    }

    public function render()
    {
        return view('livewire.new-transaction');
    }
}
