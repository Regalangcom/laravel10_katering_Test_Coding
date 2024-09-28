<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.home');
    }

    /**
     * Display the menu.
     */
    public function menu()
    {
        $menus = MenuModel::all(); // Get all menus
        return view('customer.menu', compact('menus'));
    }

    /**
     * Display the user profile.
     */
    public function profile()
    {
        $user = User::find(Session::get('user_id')); // Get the user by session ID
        return view('customer.profile', compact('user'));
    }

    /**
     * Store a newly created order in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
        ]);

        $menu = MenuModel::findOrFail($request->menu_id);

        // dd($menu->harga
        // Create a new order
        Order::create([
            'user_id' => Auth::id(),
            'menu_id' => $request->menu_id,
            'total_amount' => (float) $menu->harga,
            'status' => 'pending'
        ]);

        return back()->with('success', 'Order placed successfully!');
    }

    /**
     * Show the user's orders (optional).
     */
    public function orders()
    {
        $orders = Order::with('menu.merchants')
            ->where('user_id', Auth::id())
            ->get();

        return view('customer.order', compact('orders'));
    }
}
