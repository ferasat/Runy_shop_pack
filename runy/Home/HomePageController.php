<?php

namespace HomePage;

use Artesaos\SEOTools\Facades\SEOTools;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use HomePage\HomePage ;

class HomePageController extends Controller
{

    public function index()
    {
        SEOTools::setTitle(setting_site()->site_name);
        SEOTools::setDescription(setting_site()->site_short_description);
        SEOTools::opengraph()->setUrl(setting_site()->site_url);
        SEOTools::setCanonical('https://tarahsite.net.');
        SEOTools::opengraph()->addProperty('type', 'shop');
        SEOTools::twitter()->setSite('@aminferasat');
        SEOTools::jsonLd()->addImage(setting_site()->site_logo);

        $homePage = \HomePage\HomePage::query()->find(1);

        if (isset($_REQUEST['p'])){
            if ($_REQUEST['p'] == '6576'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-HL-2130');
            }
        }

        return view('HomeView::index' , ['owl_carousel'=>true , 'homePage'=>$homePage ]);
    }



}
