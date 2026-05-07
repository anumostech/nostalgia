<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function indexThreshold()
    {
        $threshold = Setting::get('cart_threshold', 0);
        return view('admin.settings.add-threshold', compact('threshold'));
    }

    public function storeThreshold(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        Setting::set('cart_threshold', $request->amount);

        return redirect()->back()->with('success', 'Cart threshold updated successfully!');
    }
}
