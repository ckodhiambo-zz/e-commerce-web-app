<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;

class AddCategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.add-category-component')->layout('layouts.admin-navbar-menu');
    }

    public function insert(Request $request)
    {
        $category = new Category();

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $ext = $file->getClientOriginalExtension();
            //Current time and file extension
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category', $filename);
            $category->attachment = $filename;
            $category->save();
        }


        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->save();


        return back()->with('status',"Category Added Successfully");
    }

}
