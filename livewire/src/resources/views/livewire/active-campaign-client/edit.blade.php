<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('activeCampaignClient.account_name') ? 'invalid' : '' }}">
        <label class="form-label" for="account_name">{{ trans('cruds.activeCampaignClient.fields.account_name') }}</label>
        <input class="form-control" type="text" name="account_name" id="account_name" wire:model.defer="activeCampaignClient.account_name">
        <div class="validation-message">
            {{ $errors->first('activeCampaignClient.account_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.activeCampaignClient.fields.account_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('activeCampaignClient.account_status') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.activeCampaignClient.fields.account_status') }}</label>
        @foreach($this->listsForFields['account_status'] as $key => $value)
            <label class="radio-label"><input type="radio" name="account_status" wire:model="activeCampaignClient.account_status" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('activeCampaignClient.account_status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.activeCampaignClient.fields.account_status_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('activeCampaignClient.anniversay_date') ? 'invalid' : '' }}">
        <label class="form-label" for="anniversay_date">{{ trans('cruds.activeCampaignClient.fields.anniversay_date') }}</label>
        <x-date-picker class="form-control" wire:model="activeCampaignClient.anniversay_date" id="anniversay_date" name="anniversay_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('activeCampaignClient.anniversay_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.activeCampaignClient.fields.anniversay_date_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.active-campaign-clients.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>