<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display settings form
     */
    public function index()
    {
        // Get the first settings record or create a new one
        $settings = Setting::first() ?? new Setting();

        return view('dashboard.settings.index', compact('settings'));
    }

    /**
     * Update settings
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:ico,png|max:1024',
            'opengraph_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Get existing settings or create new
        $settings = Setting::first() ?? new Setting();

        // Prepare data
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ];

        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Delete old logo
            if ($settings->logo && file_exists(public_path($settings->logo))) {
                unlink(public_path($settings->logo));
            }

            $logoName = 'logo_' . time() . '.' . $request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move(public_path('images/settings'), $logoName);
            $data['logo'] = 'images/settings/' . $logoName;
        }

        // Handle favicon upload
        if ($request->hasFile('favicon')) {
            // Delete old favicon
            if ($settings->favicon && file_exists(public_path($settings->favicon))) {
                unlink(public_path($settings->favicon));
            }

            $faviconName = 'favicon_' . time() . '.' . $request->file('favicon')->getClientOriginalExtension();
            $request->file('favicon')->move(public_path('images/settings'), $faviconName);
            $data['favicon'] = 'images/settings/' . $faviconName;
        }

        // Handle opengraph image upload
        if ($request->hasFile('opengraph_image')) {
            // Delete old opengraph image
            if ($settings->opengraph_image && file_exists(public_path($settings->opengraph_image))) {
                unlink(public_path($settings->opengraph_image));
            }

            $ogImageName = 'og_' . time() . '.' . $request->file('opengraph_image')->getClientOriginalExtension();
            $request->file('opengraph_image')->move(public_path('images/settings'), $ogImageName);
            $data['opengraph_image'] = 'images/settings/' . $ogImageName;
        }

        // Update or create settings
        if ($settings->exists) {
            $settings->update($data);
        } else {
            Setting::create($data);
        }

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }
}
