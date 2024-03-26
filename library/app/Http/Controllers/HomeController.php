<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index() 
    {
        $data = Book::all();
        $category = Category::all();
        return view('home.index', compact('data','category'));
    }

    public function borrow_books($id){
        $data = Book::find($id);

        $book_id = $id;

        $quantity = $data->quantity;

        if($quantity >= '1'){
            if(Auth::id()){

                $user_id = Auth::user()->id;

                $borrow = new Borrow;

                $borrow->book_id = $book_id;
                $borrow->user_id = $user_id;

                $borrow->status = 'Applied';

                $borrow->save();

                return redirect()->back()->with('message','A request is send to admin to borrow this book');


            }
            else{
                return redirect('/login');
            }
        }
        else{
            return redirect()->back()->with('message','Not Enough Book Available');
        }
    }

    public function details(){
        $data = Book::all();

        $category = Category::all();

        return view ('home.details',compact('data','category'));
        
    }


    public function book_history()
    {

        if (Auth::id()){

            $userid = Auth::user()->id;

            $data = Borrow::where('user_id','=',$userid)->get();

            return view('home.book_history',compact('data'));

        }

        return view ('home.book_history');
    }

    public function cancel_request($id)
    {
        $data = Borrow::find($id);

        $data->delete();

        return redirect()->back()->with('message','Book borrow cancel successfully');
    }

    public function explore()
    {
        $data = Book::all();

        $category = Category::all();

        return view ('home.explore',compact('data','category'));
    }

    public function search(Request $request)
    {
        $category = Category::all();

        $search= $request->search;

        $data = Book::where ('title', 'Like', '%'.$search.'%')->get();

        return view ('home.explore',compact('data','category'));
    }

    public function cat_search($id){

        $category = Category::all();
        
        $data = Book::where('category_id',$id)->get();

        return view ('home.explore',compact('data','category'));
    
    }

    public function book_details($id){

        $data = Book::find($id);

        $category = Category::all();

        return view('home.book_details',compact('data','category'));
    }
    
}
