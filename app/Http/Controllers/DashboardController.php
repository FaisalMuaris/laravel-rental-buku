<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\RentLog;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $bookCount =  Book::count();
        $categoryCount = Category::count();
        $usersCount =  User::count();

        
        $users = RentLog::all();

        return view('dashboard', [
            'book_count' => $bookCount,
            'category_count' => $categoryCount,
            'users_count' => $usersCount,
            'users' => $users,
        ]);
    }
}
