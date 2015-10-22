<?php namespace WhichLicense;

class License extends Model
{
    protected $table = "licenses";

    protected $guarded = ['id'];

    public $timestamps = true;

    public function getUrlAttribute()
    {
        return '/licenses/' . $this->attributes['url'];
    }
}
