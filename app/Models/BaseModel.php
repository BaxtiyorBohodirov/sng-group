<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class BaseModel extends Model
{
    use HasFactory;

    public  function title()
    {
        return $this->{'title_'.App::getLocale()};
    }
    public  function address()
    {
        return $this->{'address_'.App::getLocale()};
    }
}
