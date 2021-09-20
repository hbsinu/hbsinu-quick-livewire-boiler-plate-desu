<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActiveCampaignClient extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const ACCOUNT_STATUS_RADIO = [
        'active'   => 'active',
        'inactive' => 'inactive',
    ];

    public $table = 'active_campaign_clients';

    public $orderable = [
        'id',
        'account_name',
        'account_status',
        'anniversay_date',
    ];

    public $filterable = [
        'id',
        'account_name',
        'account_status',
        'anniversay_date',
    ];

    protected $fillable = [
        'account_name',
        'account_status',
        'anniversay_date',
    ];

    protected $dates = [
        'anniversay_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getAccountStatusLabelAttribute($value)
    {
        return static::ACCOUNT_STATUS_RADIO[$this->account_status] ?? null;
    }

    public function getAnniversayDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setAnniversayDateAttribute($value)
    {
        $this->attributes['anniversay_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
