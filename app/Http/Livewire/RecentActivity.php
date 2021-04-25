<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Activitylog\Models\Activity;

class RecentActivity extends Component
{
    public $activities;
    public $perPage = 5;
    public $total;
    public $first;
    public $last;
    public $current;
    public $currentPage = 1;
    public $hasMorePages;

    protected $listeners = ['CurrencyAdded' => 'fetchActivities'];

    public function mount()
    {
        $this->activities = collect();

        $this->fetchActivities();
    }

    public function render()
    {
        return view('livewire.recent-activity');
    }

    public function fetchActivities()
    {
        $paginator = Activity::where('causer_id', auth()->id())->latest()->paginate($this->perPage, $columns = ['*'], $pageName = 'page', $page = $this->currentPage);

        $this->activities = $paginator->items();
        $this->total = $paginator->total();
        $this->first = $paginator->firstItem();
        $this->last = $paginator->lastItem();
        $this->current = $paginator->count();
        $this->currentPage = $paginator->currentPage();
        $this->hasMorePages = $paginator->hasMorePages();
    }

    public function prev()
    {
        $this->currentPage -= 1;

        $this->fetchActivities();
    }

    public function next()
    {
        $this->currentPage += 1;

        $this->fetchActivities();
    }
}
