<?php

namespace App\Http\Controllers\Admin\User;

use Auth;
use Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.user.index')
              ->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required|min:3|max:50',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6|max:50|confirmed',
      ]);

      $user = new User();

      $user->name = strtolower($request->name);
      $user->email = $request->email;
      $user->password = bcrypt($request->password);
      $user->verefication_token = str_random(60);

      if ($user->save()) {
        Session::flash('success', 'User create successfully.');
      }

      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('admin.user.edit')
              ->with('user', User::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $user = User::find($id);

      $this->validate($request, [
          'name' => 'required|min:3|max:50',
          'email' => 'required|email|unique:users,email,' . $user->id,
      ]);

      $user->name = strtolower($request->name);
      $user->email = $request->email;
      if ($user->email == $request->email) {
          $user->verefication_token = "";
      } else {
          $user->verefication_token = str_random(60);
          $user->verified = User::UNVERIFY;
      }

      if ($user->save()) {
        Session::flash('success', 'User update successfully.');
      }

      return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::find($id);

      if ($user->delete()) {
        Session::flash('success', 'User delete successfully.');
      }

      return redirect()->back();
    }

    public function verify($id)
    {
        $user = User::find($id);

        $user->verified = User::VERIFY;
        $user->verefication_token = "";

        if ($user->save()) {
          Session::flash('success', 'Successfully change to user permissions.');
        }

        return redirect()->back();
    }

    public function unverify($id)
    {
        $user = User::find($id);

        $user->verified = User::UNVERIFY;
        $user->verefication_token = "";

        if ($user->save()) {
          Session::flash('success', 'Successfully change to user permissions.');
        }

        return redirect()->back();
    }

    public function active($id)
    {
        $user = User::find($id);

        $user->status = User::ACTIVE;

        if ($user->save()) {
          Session::flash('success', 'Successfully change to user permissions.');
        }

        return redirect()->back();
    }

    public function deactive($id)
    {
        $user = User::find($id);

        $user->status = User::DEACTIVE;

        if ($user->save()) {
          Session::flash('success', 'Successfully change to user permissions.');
        }

        return redirect()->back();
    }

    public function admin($id)
    {
        $user = User::find($id);

        $user->is_admin = user::ADMIN;

        if ($user->save()) {
          Session::flash('success', 'Successfully change to user permissions.');
        }

        return redirect()->back();
    }

    public function regular($id)
    {
        $user = User::find($id);

        $user->is_admin = user::REGULAR;

        if ($user->save()) {
          Session::flash('success', 'Successfully change to user permissions.');
        }

        return redirect()->back();
    }

    public function setting()
    {
        return view('admin.user.setting');
    }

    public function changePass(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, [
            'old_password' => 'required|min:6|max:50',
            'password' => 'required|min:6|max:50|confirmed',
            'password_confirmation' => 'required',
        ]);

        if (Hash::check($request->old_password, $user->password)) {
            $user->password = bcrypt($request->password);
        } else {
            Session::flash('info', 'Whoops! Something went wrong!');
            return redirect()->back();
        }

        if ($user->save()) {
          Session::flash('success', 'Successfully change your password.');
        }

        return redirect()->route('user.index');
    }
}
