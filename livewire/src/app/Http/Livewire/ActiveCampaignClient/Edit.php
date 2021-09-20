<?php

namespace App\Http\Livewire\ActiveCampaignClient;

use App\Models\ActiveCampaignClient;
use Livewire\Component;

class Edit extends Component
{
    public array $listsForFields = [];

    public ActiveCampaignClient $activeCampaignClient;

    public function mount(ActiveCampaignClient $activeCampaignClient)
    {
        $this->activeCampaignClient = $activeCampaignClient;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.active-campaign-client.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->activeCampaignClient->save();

        return redirect()->route('admin.active-campaign-clients.index');
    }

    protected function rules(): array
    {
        return [
            'activeCampaignClient.account_name' => [
                'string',
                'nullable',
            ],
            'activeCampaignClient.account_status' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['account_status'])),
            ],
            'activeCampaignClient.anniversay_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['account_status'] = $this->activeCampaignClient::ACCOUNT_STATUS_RADIO;
    }
}
