<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    protected $table= 'contact_informations';
    public $timestamps = false;
    protected $fillable = ['address','phone','hotline','bank_account','fb_link'];
}
