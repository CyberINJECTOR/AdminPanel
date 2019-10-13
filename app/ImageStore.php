<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageStore extends Model
{
    protected $filliable = ['path'];

    public function getUrlPathAttribute() {
        return \Storage::url($this->path);
    }
}
