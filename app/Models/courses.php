<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class courses extends Model
{
    use HasFactory;
    protected $primaryKey = 'courseid';
    protected $fillable = ['name', 'description', 'thumbnailpath', 'filepath'];

    public function users()
	{
	    return $this->belongsToMany(User::class)->withTimestamps();
	}
}
