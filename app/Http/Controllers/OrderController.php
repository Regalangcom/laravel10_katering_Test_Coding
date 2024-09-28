<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
        ]);

        Order::create([
            'user_id' => auth()->id(),
            'menu_id' => $request->menu_id,
        ]);

        return back()->with('success', 'Order placed successfully!');
    }
}
