<?php

namespace App\Http\Controllers;

use App\Peripheral;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
  {
    $peripherals = Peripheral::all();
    return view ('pages.peripherals', compact('peripherals'));
  }

  public function show($id)
  {
    $peripheral = Peripheral::findOrFail($id);
    return view ('pages.peripherals-show', compact('peripheral'));
  }

  public function create()
  {
    return view ('pages.peripherals-create');
  }

  public function store(Request $request)
  {
    Peripheral::create($request -> all());
    return redirect() -> route('home-peripherals');
  }
}
