<?php

namespace App\Http\Livewire;

use App\Models\Asset;

class AssetAutocomplete extends Autocomplete
{
    protected $listeners = ['valueSelected'];

    public function valueSelected(Asset $asset)
    {
        $this->emitUp('assetSelected', $asset);
    }

    public function query() {
        return auth()->user()->assets()->where('name', 'like', '%'.$this->search.'%')->orderBy('name');
    }
}
