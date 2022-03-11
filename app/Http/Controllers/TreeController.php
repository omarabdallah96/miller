<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
class TreeController extends Controller {
   public function treeView(){       
        $Categorys = Menu::where('parent_id', '=', 0)->get();
        $tree='<ul id="browser" class="filetree"><li class="tree-view"></li>';
        foreach ($Categorys as $Menu) {
             $tree .='<li class="tree-view closed"<a class="tree-name">'.$Menu->name.'</a>';
             if(count($Menu->childs)) {
                $tree .=$this->childView($Menu);
            }
        }
        $tree .='<ul>';
        // return $tree;
        return view('files.treeview',compact('tree'));
    }
    public function childView($Menu){                 
            $source ='<ul>';
            foreach ($Menu->childs as $product) {
                if(count($product->childs)){
                $source .='<li class="tree-view closed"><a class="tree-name">'.$product->name.'</a>';                  
                        $source.= $this->childView($product);
                    }else{
                        $source .='<li class="tree-view"><a class="tree-name">'.$product->name.'</a>';                                 
                        $source .="</li>";
                    }
                                   
            }
            
            $source .="</ul>";
            return $source;
    }    
}