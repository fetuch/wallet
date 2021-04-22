<?php

namespace App\Http\Livewire;

use App\Models\Asset;
use App\Models\Transaction;
use Livewire\Component;

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

    protected $listeners = ['CashAdded' => 'fetchActivities'];

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
        $paginator = Transaction::where('user_id', auth()->id())->latest()->paginate($this->perPage, $columns = ['*'], $pageName = 'page', $page = $this->currentPage);
        //dd($paginator);
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
