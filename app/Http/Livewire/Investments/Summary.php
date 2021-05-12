<?php

namespace App\Http\Livewire\Investments;

use App\Models\Resource;
use Livewire\Component;

class Summary extends Component
{
    public $summary;

    public function submit()
    {
        $this->emitUp('summary-accepted');
    }

    public function render()
    {
        return view('livewire.investments.summary');
    }
}
