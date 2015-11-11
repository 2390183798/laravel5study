<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $table = 'articles';
    protected $dates = ['published_at'];
	//
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];


    public function setPublishedAtAttribute($date){
        // 未来日期的当前时间
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

        // 未来日期的0点
//        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now());
    }

    /**
     * add in 2015 11 11
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
