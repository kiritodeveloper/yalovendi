<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class coroto
 *
 * @package App
 * @property string $first_name
 * @property string $last_name
 * @property string $company_name
 * @property string $email
 * @property string $phone
 * @property string $website
 * @property string $skype
 * @property string $country
 * @property string $coroto_status
*/
class Venta extends Model
{
    

    use SoftDeletes;
    
    protected $fillable = ['descripcion', 'precio' , 'email'];
    
    public static function boot()
    {
        parent::boot();

        Venta::observe(new \App\Observers\UserActionsObserver);
    }

   
    
}
