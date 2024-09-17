<?php

namespace App\Http\Controllers;
use App\Models\Visitor;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function countVisitor()
    {
        // Retrieve the current visitor count
        $visitor = Visitor::first();

        // If no visitor data exists, create a new record
        if (!$visitor) {
            $visitor = Visitor::create(['counts' => 1]);
        } else {
            // Increment the visitor count
            $visitor->increment('counts');
        }

        // Return the updated count
        return view('welcome', ['count' => $visitor->counts]);
    }
}
