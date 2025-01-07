<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    
    protected $fillable = [
        'id',
        'title',
        'description',
        'address',
        'price_per_night',
        'user_id',
    ];

    /**
     * Relation avec les images de l'annonce
     */
    public function images()
    {
        return $this->hasMany(AnnonceImage::class, 'annonce_id', 'id');
    }

    // pour que je stock l'image dans le storage
    public static function storeImage($file)
    {
        // faut faire une verif pour voir si le fichier est bien une image avant de stocker
        $path = $file->store('public/AnnonceImage');
        return $path;
    }

}
