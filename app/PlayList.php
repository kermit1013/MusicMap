<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\PlayList
 *
 * @property array|string|null name
 * @property array|string|null url
 * @property array|string|null user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PlayList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PlayList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PlayList query()
 * @mixin \Eloquent
 */
class PlayList extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'play_list';

    public $fillable = ['name', 'url','user_id'];

    protected $dates = ['deleted_at'];
}
