<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    public function pages()
    {
        // $notifications = Notification::all();
        return view('pages.pages');
    }
    public function edit_privacy()
    {
        // $notifications = Notification::all();
        return view('pages.edit_privacy');
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('pages.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $page = Page::findOrFail($id);
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();

        return redirect()->route('pages.pages')->with('success', 'Page updated successfully.');
    }




    public function edit_term()
    {
        // $notifications = Notification::all();
        return view('pages.edit_term');
    }


}

