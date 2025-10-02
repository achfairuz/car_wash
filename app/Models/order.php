<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_date',
        'total_amount',
        'status_order',
        'queue',
        'jenis',
        'location',
    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }


    public static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            if ($order->jenis === 'service') {
                $order->queue = self::where('jenis', 'service')->max('queue') + 1;
            } else {
                $order->queue = null;
            }
        });
    }
}
