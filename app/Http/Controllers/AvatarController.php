<?php

namespace App\Http\Controllers;
use App\Models\UserAvatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function showUploadForm()
    {
        return view('avatar.upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = auth()->user();
        $avatarFile = $request->file('avatar');

        // Store the file in the storage disk
        $filename = $avatarFile->store('avatars', 'public');

        // Update user's avatar in the database
        $user->avatar()->create(['filename' => $filename]);

        return redirect()->route('avatar.index')->with('success', 'Avatar uploaded successfully.');
    }
}
