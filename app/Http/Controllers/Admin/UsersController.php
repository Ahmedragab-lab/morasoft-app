<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\storedata;
use App\Models\User;
use App\Repo\UsersInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
class UsersController extends Controller
{
    protected $users;

    public function __construct(UsersInterface $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        return $this->users->index();
    }


    public function create()
    {
        return $this->users->create();
    }

    public function store(storedata $request)
    {
        return $this->users->store( $request);
    }

    public function edit($id)
    {
        return $this->users->edit($id);
    }

    public function update(storedata $request, $id)
    {
        return $this->users->update( $request, $id);
    }

    public function destroy($id)
    {
        return $this->users->destroy($id);
    }
}

