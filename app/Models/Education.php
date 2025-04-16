<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'institution_name',
        'course_name',
        'location',
        'start_date',
        'end_date',
        'user_id',
    ];
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}


