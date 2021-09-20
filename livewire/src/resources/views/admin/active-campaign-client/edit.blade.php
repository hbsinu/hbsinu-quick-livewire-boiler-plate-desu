@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.activeCampaignClient.title_singular') }}:
                    {{ trans('cruds.activeCampaignClient.fields.id') }}
                    {{ $activeCampaignClient->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('active-campaign-client.edit', [$activeCampaignClient])
        </div>
    </div>
</div>
@endsection