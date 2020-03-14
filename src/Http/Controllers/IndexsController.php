<?php
namespace DanceLynx\LynxAdmin\Http\Controllers;

class IndexsController extends Controller
{
    public function index()
    {
        return view('lynx-admin::indexs.index');
    }
}
