<?php

namespace App\Http\Livewire;

use App\Models\Resource;

class ResourceAutocomplete extends Autocomplete
{
    protected $listeners = ['valueSelected'];

    public function valueSelected(Resource $resource)
    {
        $this->emitUp('resourceSelected', $resource);
    }

    public function query() {
        return Resource::where('name', 'like', '%'.$this->search.'%')->orderBy('name');
    }
}
