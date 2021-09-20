<?php

namespace App\Http\Livewire\ActiveCampaignClient;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\ActiveCampaignClient;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use WithSorting;
    use WithConfirmation;

    public int $perPage;

    public array $orderable;

    public string $search = '';

    public array $selected = [];

    public array $paginationOptions;

    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'desc',
        ],
    ];

    public function getSelectedCountProperty()
    {
        return count($this->selected);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function resetSelected()
    {
        $this->selected = [];
    }

    public function mount()
    {
        $this->sortBy            = 'id';
        $this->sortDirection     = 'desc';
        $this->perPage           = 100;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable         = (new ActiveCampaignClient())->orderable;
    }

    public function render()
    {
        $query = ActiveCampaignClient::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $activeCampaignClients = $query->paginate($this->perPage);

        return view('livewire.active-campaign-client.index', compact('query', 'activeCampaignClients', 'activeCampaignClients'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('active_campaign_client_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        ActiveCampaignClient::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(ActiveCampaignClient $activeCampaignClient)
    {
        abort_if(Gate::denies('active_campaign_client_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activeCampaignClient->delete();
    }
}
