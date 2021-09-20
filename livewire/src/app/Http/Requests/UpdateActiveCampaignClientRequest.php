<?php

namespace App\Http\Requests;

use App\Models\ActiveCampaignClient;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateActiveCampaignClientRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('active_campaign_client_edit');
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
}
