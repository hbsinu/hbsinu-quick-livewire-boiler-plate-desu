@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.activeCampaignClient.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('active_campaign_client_create')
                    <a class="btn btn-indigo" href="{{ route('admin.active-campaign-clients.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.activeCampaignClient.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('active-campaign-client.index')

    </div>
</div>
@endsection