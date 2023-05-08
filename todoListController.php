<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ListItem;

class todoListController extends Controller
{
    public function index(){
        return view('welcome',['ListItems'=> ListItem::where('is_complete', 0)->get()]);
            }
            
    public function markComplete($id){

        $ListItem = ListItem::find($id);
        $ListItem->is_complete = 1;
        $ListItem->save();

        return redirect('/');
            }
    public function saveItem(Request $request) {
        $newListItem = new ListItem;
        $newListItem->name = $request->ListItem;
        $newListItem->is_complete = 0;
        $newListItem->save();

        return redirect('/');
    }
}
