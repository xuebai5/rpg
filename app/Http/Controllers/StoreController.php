<?php

namespace App\Http\Controllers;

use App\Character;
use App\Modules\Trade\Application\Services\StoreService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __construct(StoreService $service)
    {
        $this->middleware('auth');
    }

    public function index(Request $request): View
    {
        /** @var Character $character */
        $character = $request->user()->character;

        return view('trade.store.index', compact('character'));
    }
}
