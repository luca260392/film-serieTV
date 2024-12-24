<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TvSeries;

class TvSeriesFilter extends Component
{
    public $genre = '';
    public $sortField = 'release_year';
    public $sortDirection = 'asc';

    public function setGenre($genre)
    {
        // Se clicchiamo lo stesso genere, lo togliamo
        if ($this->genre === $genre) {
            $this->genre = '';
        } else {
            $this->genre = $genre;
        }

        // Reset dell'ordinamento per forzare il refresh
        $this->sortField = 'release_year';
        $this->sortDirection = $this->sortDirection;
    }

    public function sortByYear($direction)
    {
        $this->sortDirection = $direction;
        $this->sortField = 'release_year';
    }

    public function getFilteredSeries()
    {
        $query = TvSeries::query();

        if ($this->genre) {
            $query->where('genre', $this->genre);
        }

        return $query->orderBy($this->sortField, $this->sortDirection)->get();
    }

    public function render()
    {
        return view('livewire.tv-series-filter', [
            'series' => $this->getFilteredSeries(),
            'genres' => TvSeries::distinct('genre')->pluck('genre'),
        ]);
    }

    public function toggleGenre($genre)
    {
        $this->setGenre($genre);
        $this->dispatch('refresh')->self();
    }

    public function toggleSort($direction)
    {
        $this->sortByYear($direction);
        $this->dispatch('refresh')->self();
    }
}