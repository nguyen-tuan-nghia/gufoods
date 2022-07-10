<?php

namespace App\Http\Controllers;

use App\Models\intro;
use Illuminate\Http\Request;

class introController extends Controller
{
    public function index()
    {
        $intro = intro::get();
        return view('admin.intro.index')->with(compact('intro'));
    }
    public function create()
    {
        return view('admin.intro.create');
    }
    public function delete($id)
    {
        intro::find($id)->delete();
    }
    public function edit($id)
    {
        $intro = intro::find($id);
        return view('admin.intro.edit')->with(compact('intro'));
    }
    public function store(Request $request)
    {
        $message = [
            'name.required' => 'Bạn chưa nhập tên',
            'content.required' => 'Bạn chưa điền nội dung',
            'slug.required' => 'Bạn chưa điền slug',
            'slug.unique' => 'Slug của bạn đã tồn tại'
        ];
        $request->validate([
            'content' => 'required',
            'name' => 'required',
            'slug' => 'required|unique:intro'
        ], $message);
        intro::create([
            'content' => $request->content,
            'name' => $request->name,
            'slug' => $request->slug
        ]);
        session()->flash('success', 'Thành công');
        return redirect()->back();
    }
    public function update(Request $request,$id)
    {
        $message = [
            'name.required' => 'Bạn chưa nhập tên',
            'content.required' => 'Bạn chưa điền nội dung',
            'slug.required' => 'Bạn chưa điền slug',
            'slug.unique' => 'Slug của bạn đã tồn tại'
        ];
        $request->validate([
            'content' => 'required',
            'name' => 'required',
            'slug' => 'required|unique:intro'
        ], $message);
        $intro=intro::find($id);
        $intro->content = $request->content;
        $intro->name = $request->name;
        $intro->slug = $request->slug;
        $intro->save();
        session()->flash('success', 'Thành công');
        return redirect()->back();
    }
    public function detail($slug)
    {
        $introgg = intro::where('slug',$slug)->first();
        return view('public.intro')->with(compact('introgg'));
    }
}
