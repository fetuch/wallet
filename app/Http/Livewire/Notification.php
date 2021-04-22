<?php

namespace App\Http\Livewire;

use App\Models\Asset;
use App\Models\Transaction;
use Livewire\Component;

class Notification extends Component
{
    public $visible = false;
    public $title = '';
    public $subtitle = '';

    protected $listeners = ['notify' => 'showNotification'];

    public function clear()
    {
        $this->visible = false;
        $this->title = '';
        $this->subtitle = '';
    }

    public function showNotification($payload)
    {
        $this->visible = true;
        $this->title = isset($payload['title']) ? $payload['title'] : '';
        $this->subtitle = isset($payload['subtitle']) ? $payload['subtitle'] : '';
    }

    public function render()
    {
        return view('livewire.notification');
    }
}
