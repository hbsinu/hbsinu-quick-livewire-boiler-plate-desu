@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.activeCampaignClient.title_singular') }}:
                    {{ trans('cruds.activeCampaignClient.fields.id') }}
                    {{ $activeCampaignClient->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.activeCampaignClient.fields.id') }}
                            </th>
                            <td>
                                {{ $activeCampaignClient->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.activeCampaignClient.fields.account_name') }}
                            </th>
                            <td>
                                {{ $activeCampaignClient->account_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.activeCampaignClient.fields.account_status') }}
                            </th>
                            <td>
                                {{ $activeCampaignClient->account_status_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.activeCampaignClient.fields.anniversay_date') }}
                            </th>
                            <td>
                                {{ $activeCampaignClient->anniversay_date }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('active_campaign_client_edit')
                    <a href="{{ route('admin.active-campaign-clients.edit', $activeCampaignClient) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.active-campaign-clients.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection