<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    //table - companies
    protected $table ='companies';
    //custom primary key
 protected $primaryKey ='company_id';
  public $incrementing =false;
 public $timestamps =false;
 //default values
 //protected  $attributes =[
  //   'active'=>true
 //]; 
    
}