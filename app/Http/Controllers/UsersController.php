<?php

namespace DoeSangue\Http\Controllers;

use DoeSangue\User;

class UsersController extends Controller
{
    /**
     * Listar todos Usuários cadastrados.
     *
     * @method index
     *
     * @return array
     */
    public function index()
    {
        return User::all();
    }

    /**
     * @method show
     *
     * @param  [type] $id [description]
     *
     * @return [type] [description]
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }
}
