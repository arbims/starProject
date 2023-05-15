<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class Star extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'description',
        'image',
    ];

    public function setImageAttribute($image){
        if(is_object($image) && $image->isValid()){
            $name_image = uniqid(60).'.'.$image->getClientOriginalExtension();
            if (!Storage::disk('public')->exists('images/star')) {
                mkdir(storage_path('app/public/images/star'), 0777, true);
            }
            ImageManagerStatic::make($image)->fit(600,400)->save(storage_path('app/public')."/images/star/$name_image");
            $this->attributes['image'] = "/images/star/$name_image";
        }
    }

    public function destroyImage() {
        Storage::disk('public')->delete($this->image);
    }
}
