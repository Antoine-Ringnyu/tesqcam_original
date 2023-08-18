<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Http;

class PhotoController extends Controller
{
    public function index()
    {
        return view('photos.index');
    }

    public function search(Request $request)
    {
        try {
            $request->validate([
                'keyword' => 'required|min:3', // Validation rules for the keyword input
            ]);

            $keyword = $request->input('keyword');
            $accessKey = 'iRiWNXRjv4phEzVmluVxK7s4Me-EHDcTVJaqxoQSunk';

            $response = Http::get("https://api.unsplash.com/search/photos", [
                'query' => $keyword,
                'client_id' => $accessKey
            ]);

            $photos = $response->json()['results'];

            return view('photos.index', compact('photos'));
        } catch (\Exception $e) {
            // Handle the error gracefully
            return view('photos.index')->withErrors(['error' => 'An error occurred while fetching photos. Please try again later.']);
        }
    }


}
