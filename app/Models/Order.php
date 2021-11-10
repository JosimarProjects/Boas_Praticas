<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //Scopes
    /**
     * @param Builder $query
     * return Builder
     */

     //função deverá começar com scope e iniciar com letra maiuscula
  /*  public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeDelivered($query)
    {
        return $query->where('status', 'delivered');
    }*/

    public function scopePaid($query){
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
        return $this->status == 'pending' ? 'Envio pendente' : 'Produto enviado';
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
