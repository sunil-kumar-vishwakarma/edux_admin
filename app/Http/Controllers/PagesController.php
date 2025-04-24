<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    public function editPrivacy()
    {
        $page = Page::where('slug', 'privacy-policy')->firstOrFail();
        return view('pages.edit_privacy', compact('page'));
    }

    public function updatePrivacy(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $page = Page::findOrFail($id);
        $page->title = $request->input('title');
        $page->content = $request->input('content');
        $page->save();

        return redirect()->route('pages.edit_privacy')->with('success', 'Privacy Policy updated successfully!');
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('pages.edit', compact('page'));
    }

    public function edit_term()
    {
        return view('pages.edit_term');
    }
}
