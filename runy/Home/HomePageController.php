<?php

namespace HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use HomePage\HomePage ;

class HomePageController extends Controller
{

    public function index()
    {
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'میترا هنر';
        $description= 'صنایع دستی اصفهان';
        $breadcrumbs = ["/"=>"خانه"  ];


        return view('HomeView::index' , compact('html_tag_data' , 'title' , 'description' , 'breadcrumbs' ));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(HomePage $homePage)
    {
        //
    }

    public function edit(HomePage $homePage)
    {
        //
    }

    public function update(Request $request, HomePage $homePage)
    {
        //
    }


    public function destroy(HomePage $homePage)
    {
        //
    }
}
