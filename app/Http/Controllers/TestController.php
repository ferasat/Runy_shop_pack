<?php

namespace App\Http\Controllers;

use App\Models\Taxonomy;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        //dd(catsInPro(5));
        foreach (catsInPro(5) as $tax) {
            if ($tax->item_id == 4) {
                dd('oke1');
            }
        }
        dd(isOrNot_pro(4, 5));
        //dd(isOrNot(1 , 7));
    }
}
