<?php
  
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\User;
use DB;
    
class ChartJSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $users = User::select(DB::raw("COUNT(lara.users.created_at) as count"), DB::raw("MONTHNAME(lara.users.created_at) as month_name"))
                    ->whereYear('lara.users.created_at', date('Y'))
                    ->groupBy()
                    ->pluck('count', 'month_name');
 
        $labels = $users->keys();
        $data = $users->values();
              
        return view('chart', compact('labels', 'data'));
    }
}