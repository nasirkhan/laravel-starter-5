<?php

namespace App\Models;

use Auth;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class BaseModel extends Model
{

    use SoftDeletes;


    protected $guarded = [
        'id',
        'updated_at',
        '_token',
        '_method'
    ];

    protected $dates = [
        'deleted_at',
    ];

    protected static function boot() {
        parent::boot();

        // create a event to happen on creating
        static::creating(function($table) {
            $table->created_by = Auth::id();
            $table->created_at = Carbon::now()->toDateTimeString();
        });

        // // create a event to happen on updating
        // static::updating(function($table) {
        //     $table->updated_by = Auth::id();
        // });

        // create a event to happen on saving
        static::saving(function($table) {
            $table->updated_by = Auth::id();
        });

        // create a event to happen on deleting
        static::deleting(function($table) {
            $table->deleted_by = Auth::id();
            $table->save();
        });
    }

    public function setGroupNameAttribute($value) {
        $this->attributes['group_name'] = str_slug($value);
    }

    protected function asDateTime($value) {
        if (starts_with($value, '0000')) {
            return '';
        }

        return parent::asDateTime($value);
    }

    protected function getCreatedAtAttribute($timestamp) {
        return (!starts_with($timestamp, '0000')) ? $this->asDateTime($timestamp) : '';
    }


}
