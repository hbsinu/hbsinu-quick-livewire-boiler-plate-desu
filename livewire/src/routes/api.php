<?php

use App\Http\Controllers\Api\V1\Admin\ActiveCampaignClientApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Active Campaign Client
    Route::apiResource('active-campaign-clients', ActiveCampaignClientApiController::class);
});
