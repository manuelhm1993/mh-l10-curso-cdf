<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /* protected $fillable = [
        'name', 'description', 'categoria', 'slug'
    ]; */

    protected $guarded = []; // Declara los campos protegidos e ignora los permitidos

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
