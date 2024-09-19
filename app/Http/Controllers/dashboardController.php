<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Visitor;

use Illuminate\Http\Request;

class dashboardController extends Controller
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

        // Return the updated count to be passed to the view
        return $visitor->counts;
    }
    
    public function dashboard() {

        $visitorCount = $this->countVisitor();
        $produks = Produk::with('kategoris')->get();
        return view('dashboard', compact('produks', 'visitorCount') );
    }

  
}
