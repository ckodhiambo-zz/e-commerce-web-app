<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Livewire\Component;

class UpdateCategoryComponent extends Component
{
    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function render(Category $category)
    {
        return view('livewire.admin.update-category-component', compact('category'))->layout('layouts.admin-navbar-menu');
    }

    public function update(Request $request, $id)
    {
        $request->session()->flush();
        $category = Category::find($id);


        if ($request->hasFile('attachment')) {
            $path = 'assets/uploads/category' . $category->attachment;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('attachment');
            $ext = $file->getClientOriginalExtension();
            //Current time and file extension
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category', $filename);
            $category->attachment = $filename;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->update();

        return back()->with('status', "Category Updated Successfully");
    }

    public function destroy(Category $category)
    {
        $category = Category::find($category);
        //TO DO FOR OUR IMAGES
        $category->each->delete();
        return redirect('/admin/dashboard/add-category')->with('status', 'Category Deleted Succesfully');
    }

}
