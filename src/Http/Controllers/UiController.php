<?php

namespace ZenCoreSpA\UI\Http\Controllers;

use Illuminate\Contracts\View\View;
use ZenCoreSpA\UI\Http\Requests\UiRequest;

class UiController extends Controller
{
    public function __invoke(UiRequest $request): View
    {
        return view('ui::ui');
    }
}
