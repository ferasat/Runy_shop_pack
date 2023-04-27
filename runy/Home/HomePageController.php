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
        SEOTools::setCanonical('https://codecasts.com.br/lesson');
        SEOTools::opengraph()->addProperty('type', 'shop');
        SEOTools::twitter()->setSite('@aminferasat');
        SEOTools::jsonLd()->addImage(setting_site()->site_logo);

        return view('HomeView::index' );
    }



}
