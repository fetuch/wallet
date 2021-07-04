<?php

namespace App\Http\Livewire\Investments;

use App\Models\Resource;
use Livewire\Component;

class BuyCompanyShares extends Component
{
    public $shares = [];
    public $share_quantity;
    public $share = '';
    public $name = '';

    protected $rules = [
        'name' => 'required|string',
        'share' => 'required|exists:resources,id',
        'share_quantity' => 'required|numeric|min:0|not_in:0',
    ];

    public function mount()
    {
        $this->shares = Resource::whereType('precious metal')->orderBy('name')->get();
    }

    public function submit()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.investments.buy-company-shares');
    }
}
