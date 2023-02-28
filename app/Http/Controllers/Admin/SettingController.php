<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {


        $setting = Setting::first();
        if ($setting) {
            return view('admin.setting.index', compact('setting'));
        } else {
            return view('admin.setting.create');
        }
    }



    public function store(Request $request)
    {


        $request->validate([

            'website_name' => 'required|string|max:254',
            'website_url' => 'required|string|max:254',
            'meta_keyword' => 'required|string|max:254',
            'meta_description' => 'required|string|max:254',
            'page_title' => 'required|string|max:254',
            'address' => 'required|string|max:254',
            'phone1' => 'required|string|max:254',
            'phone2' => 'required|string|max:254',
            'email1' => 'required|email|max:254',
            'email2' => 'required|email|max:254',
            'facebook' => 'string|max:254',
            'twitter' => 'string|max:254',
            'instagram' => 'string|max:254',
            'youtube' => 'string|max:254',
        ]);

        $setting = Setting::first();

        if ($setting) {

            $setting->update([

                'website_name' => $request->website_name,
                'website_url' => $request->website_url,
                'meta_keyword' => $request->meta_keyword,
                'meta_description' => $request->meta_description,
                'page_title' => $request->page_title,
                'address' => $request->address,
                'phone1' => $request->phone1,
                'phone2' => $request->phone2,
                'email1' => $request->email1,
                'email2' => $request->email2,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,

            ]);

            return redirect()->route('index.setting')->with('message', 'Güncelleme Başarılı');
        } else {

            $setting = Setting::create([
                'website_name' => $request->website_name,
                'website_url' => $request->website_url,
                'meta_keyword' => $request->meta_keyword,
                'meta_description' => $request->meta_description,
                'page_title' => $request->page_title,
                'address' => $request->address,
                'phone1' => $request->phone1,
                'phone2' => $request->phone2,
                'email1' => $request->email1,
                'email2' => $request->email2,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
            ]);

            return redirect()->route('index.setting')->with('message', 'Başarılı Oluşturuldu');
        }
    }
}
