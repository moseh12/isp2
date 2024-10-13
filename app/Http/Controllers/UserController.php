<?php

namespace App\Http\Controllers;

use App\Models\PPPoEUser; // Assuming your model for PPPoE users is named PPPoEUser
use App\Models\HotspotUser; // Assuming you have a model for Hotspot users
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Method to list PPPoE users
    public function pppoeUserList()
    {
        $users = PPPoEUser::all(); // Fetch all PPPoE users
        return view('admin.pppoe_user_list', compact('users')); // Return view with user data
    }

    // Method to list Hotspot users
    public function hotspotUserList()
    {
        $users = HotspotUser::all(); // Fetch all Hotspot users
        return view('admin.hotspot_user_list', compact('users')); // Return view with user data
    }
    public function create()
    {
        // Return the view for creating a new user
        return view('admin.user_create'); // Ensure you have a corresponding Blade view
    }
    // Additional methods for creating, editing, and deleting users
}
