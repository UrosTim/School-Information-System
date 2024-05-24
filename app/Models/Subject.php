<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description'];

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'student_subject', 'subject_id', 'student_id');
    }
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class, 'teacher_id')->where('role', 'teacher');
    }
    public function reports(): HasMany
    {
        return $this->hasMany(Report::class, 'subject_id');
    }
}
