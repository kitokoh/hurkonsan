<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Settings;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $settings = Settings::first();
        return view('admin.pages.settings.index', compact('settings'));
    }


    public function footer()
    {
        $settings = Settings::first();
        return view('site.layouts.footer', compact('settings'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function update(Request $request,$id)
    {
        $setting = Settings::all()->first();

        $setting->phone = $request->phone ?? '';
        $setting->phone_other = $request->phone_other;
        $setting->whatsapp = $request->whatsapp;
        $setting->email = $request->email;
        $setting->setTranslations('about',$request->about);
        $setting->address = $request->address;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->instagram = $request->instagram;
        $setting->you_tube = $request->you_tube;

        $update = $setting->update();

        if ($update) {
            return redirect()->route('settings.index')->with('success', 'Başarıyla Güncellendi');
        }
        return back()->with('error', 'Güncellenirken Hata Oluştu');
    }
}
