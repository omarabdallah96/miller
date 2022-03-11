<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Menu extends Model
{
   //menu has childs
   public function childs() {
           return $this->hasMany('App\Menu','parent_id','id') ;
   }
}