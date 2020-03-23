<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Biographie extends Model
{
protected $fillable = [ 'id_membre', 'description' ];
}