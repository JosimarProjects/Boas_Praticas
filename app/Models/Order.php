<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * Class Order.
 *
 * @package namespace App\Models;
 */
class Order extends Model implements Transformable
{
    use TransformableTrait;

    use HasFactory;

    protected $fillable = [
        'status',
        'track_code'
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('status', function ($builder) {
            $builder->where('status', '<>', 'cancel');
        });
    }

    //Scopes locais
    /**
     * @param Builder $query
     * return Builder
     */

    //função deverá começar com scope e depois em camelcase iniciar com letra maiuscula

    public function scopePaid($query)
    {
        return $query->where('paid', true);
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    //Acessors
    //função deve começar com get e camelCase e acabar com atrribute
    public function getFormattedStatusAttribute()
    {
        switch ($this->status) {
            case 'pending':
                return 'Envio pendente';
                break;

            case 'delivered':
                return 'Produto enviado';
                break;

            case 'cancel':
                return 'Cancelado';
                break;
        }
    }

    public function getStatusPaidAttribute()
    {
        return $this->paid ? 'Pago' : 'Aguardando Pagamento';
    }

    //Mutators
    //função deve começar com set e camelCase e acabar com atrribute
    public function setTrackCodeAttribute($value)
    {
        $this->attributes['track_code'] = "COD_{$value}";
    }
}
