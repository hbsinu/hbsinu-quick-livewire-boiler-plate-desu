<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\ActiveCampaignClient;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ActiveCampaignClientController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = ActiveCampaignClient::class;
    }

    public function index()
    {
        abort_if(Gate::denies('active_campaign_client_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.active-campaign-client.index');
    }

    public function create()
    {
        abort_if(Gate::denies('active_campaign_client_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.active-campaign-client.create');
    }

    public function edit(ActiveCampaignClient $activeCampaignClient)
    {
        abort_if(Gate::denies('active_campaign_client_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.active-campaign-client.edit', compact('activeCampaignClient'));
    }

    public function show(ActiveCampaignClient $activeCampaignClient)
    {
        abort_if(Gate::denies('active_campaign_client_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.active-campaign-client.show', compact('activeCampaignClient'));
    }
}
