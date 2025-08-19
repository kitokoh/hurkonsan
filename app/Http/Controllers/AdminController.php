<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function loginPage()
    {
        return view('admin.pages.login');
    }

    public function login(Request $request)
    {
        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            request()->session()->regenerate();
            return redirect()->intended('/yonetim');
        } else {

            $error = [
                'email' => 'email hatasi',
                'password' => 'Sifre hatasi',
                'role' => 'Yönetici Yetkiniz alınmıştır'
            ];
            return back()->withInput()->withErrors($error);
        }
    }

    public function list()
    {
        $admins = User::all();
        return view('admin.pages.users.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.pages.users.create');
    }

    public function store(Request $request)
    {
        $admin = new User();

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;

        $admin->save();

        if ($admin) {
            return redirect()->route('admins.create')->with('success', 'Başarıyla Eklendi');
        } else {
            return back()->with('error', 'Hata');
        }
    }

    public function update(Request $request)
    {
        $admin = User::where('id', $request->id)->first();
        $admin->email = $request->email ?? '';
        $admin->password = $request->password ?? '';

        $admin->save();

        if ($admin) {
            return redirect()->route('admins.list')->with('success', 'Başarıyla güncellenedi');
        } else {
            return back()->with('error', 'Güncellenirken Hata Oluştu');
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.pages.users.edit', compact('user'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }
    public function delete_image($id)
    {
        $deleteimage = Product::find($id);

        $deleteimage->image_tecnical =null;
        $deleteimage->update();
        return redirect()->back()->with('success','Teknik Görsel Kaldırıldı');
    }
}
