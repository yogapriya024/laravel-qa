<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
class Question extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'questions';

    protected $fillable =[
        'id',
        'title',
        'slug',
        'body',
        'views',
        'answers',
        'votes',
        'best_answer_id',
        'user_id',
    ];

    public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
