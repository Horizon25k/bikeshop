<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Config, Validator;

class CategoryController extends Controller
{
    public function index() {
        $products = Product::all();
        $categories = Category::all(); 
        return view('category/index', compact('products', 'categories'));
    }

    
    public function search(Request $request) {
        $query = $request->q;
        if($query) {
            $categories = Category::where('name', 'like', '%'.$query.'%')
            ->get();
        } else {
            $categories = Category::all();
        }

        $products = Product::all();
        return view('category/index', compact('categories', 'products'));
    }

    public function edit($id = null) {
        if($id) {
            $category = Category::find($id);
        
            return view('category/edit')
            ->with('category', $category);
        } else {
            return view('category/add');
        }   
    }

    public function update(Request $request) {
        $rules = array(
        'name' => 'required',
        );

        $messages = array(
        'required' => 'กรุณากรอกข้อมูล :attribute ให้ครบถ้วน', 'numeric' => 'กรุณากรอกข้อมูล
        :attribute ให้เป็นตัวเลข',
        );

        $id = $request->id;
        $temp = array(
            'name' => $request->name, 
        );

        $validator = Validator::make($temp, $rules, $messages);
        if ($validator->fails()) {
            return redirect('category/edit/'.$id)
            ->withErrors($validator)
            ->withInput();
        }
        
        $category = Category::find($id);
        $category->name = $request->name;
        
        $category->save();
        
        return redirect('category')
        ->with('ok', true)
        ->with('msg', 'บันทึกขอมูลเรียบร้อยแล้ว');
    }

    public function insert(Request $request) {

        $category = new Category();
        $category->name = $request->name;
        $category->save();
        
        return redirect('category')
        ->with('ok', true)
        ->with('msg', 'เพิ่มข้อมูลเรียบร้อยแล้ว ');
    }

    public function remove($id) {
        Category::find($id)->delete();
        return redirect('category')
        ->with('ok', true)
        ->with('msg', 'ลบข้อมูลสําเร็จ');
    }
}