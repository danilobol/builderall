<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;


class Client extends Model
{
    use SoftDeletes;

    protected $table = 'clients';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'Id_cities'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function search($filter = null)
    {
        $results = $this->where(function ($query) use($filter) {
            if ($filter){
                $query->where('name','LIKE', "%{$filter}%");
            }
        })->paginate();

        return $results;
    }

}
