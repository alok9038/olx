<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view("home",[
            "cat"=>Category::where('parent_id',0)->get(),
            "pro"=>Item::paginate(15)]);
    }

    public function singleItem($id){
        $data['product'] = Item::find($id);
        $data['pro'] = Item::where([['id','!=',$id],['category_id',$data['product']->category_id]])->get();
        return view('single',$data);
    }

    public function insert(Request $req){
        if($req->method() == "POST"){
            $req->validate([
                'title' => 'required',
            ]);


            // insert work

            $filename = $req->image->getClientOriginalName();
            $req->image->move(public_path("products"),$filename);

            $i = new item();
            $i->pro_title = $req->title;
            $i->price = $req->price;
            $i->seller_name = $req->seller_name;
            $i->seller_contact = $req->seller_contact;
            $i->category_id = $req->category;
            $i->address = $req->address;
            $i->city = $req->city;
            $i->description = $req->description;
            $i->image = $filename;
            $i->save();
        }

        return view("insertItem",[
            'cat'=> Category::all(),
            'main'=>Category::where('parent_id',0)->get()
        ]);
        //return view('home');
    }

    public function insertCat(Request $req){
        $req->validate([
            'title' => 'required'
        ]);

        $c = new Category();
        $c->title = $req->title;
        $c->parent_id = $req->parent;
        $c->save();

        return redirect()->back();
    }


    public function filter(Request $req,$id){
            return view("filter",["pro"=>Item::where("category_id",$id)->paginate(20)]);
    }

    public function search(Request $req){
        if ($req->search !== ""):
            return view("filter",["pro"=>Item::where("pro_title","LIKE","%$req->search%")->paginate(20)]);
        else:
            return Redirect()->route('homepage');
        endif;
    }
}
