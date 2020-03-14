<?php

Route::group([
    "namespace" => "DanceLynx\LynxAdmin\Http\Controllers"
], function ($route) {
    $route->get("admin/index", "IndexsController@index");
});
