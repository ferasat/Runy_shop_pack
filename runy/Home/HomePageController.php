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
            }elseif ($_REQUEST['p'] == '6571'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-HL-2240');
            }elseif ($_REQUEST['p'] == '6576'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-HL-2130');
            }elseif ($_REQUEST['p'] == '6578'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-HL-2140');
            }elseif ($_REQUEST['p'] == '6580'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-HL-5240');
            }elseif ($_REQUEST['p'] == '6582'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-HL-5250');
            }elseif ($_REQUEST['p'] == '6584'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-HL-%D8%B1%D9%86%DA%AF%DB%8C');
            }elseif ($_REQUEST['p'] == '6586'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-HL-L8350');
            }elseif ($_REQUEST['p'] == '6588'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-HL-3150');
            }elseif ($_REQUEST['p'] == '6592'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-HL-2365DW-%D9%88-HL-2320D');
            }elseif ($_REQUEST['p'] == '6596'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-HL-1210');
            }elseif ($_REQUEST['p'] == '6599'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-MFC-7340');
            }elseif ($_REQUEST['p'] == '6603'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-HL-1110');
            }elseif ($_REQUEST['p'] == '6642'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-MFC-7360');
            }elseif ($_REQUEST['p'] == '6645'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-MFC-8380');
            }elseif ($_REQUEST['p'] == '6648'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-MFC-7860');
            }elseif ($_REQUEST['p'] == '6652'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-MFC-8310');
            }elseif ($_REQUEST['p'] == '6655'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-Brother-%D9%85%D8%AF%D9%84-MFC-%D8%B1%D9%86%DA%AF%DB%8C');
            }elseif ($_REQUEST['p'] == '6659'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4--%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1%C2%AD-Brother-%D9%85%D8%AF%D9%84--MFC-9330CDW');
            }elseif ($_REQUEST['p'] == '6662'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4--%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1%C2%AD-Brother-%D9%85%D8%AF%D9%84--MFC-1810');
            }elseif ($_REQUEST['p'] == '6665'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4--%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1%C2%AD-Brother-%D9%85%D8%AF%D9%84--MFC-2740DW');
            }elseif ($_REQUEST['p'] == '6668'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4--%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1%C2%AD-Brother-%D9%85%D8%AF%D9%84--MFC-8600CDW');
            }elseif ($_REQUEST['p'] == '6671'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4--%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1%C2%AD-Brother-%D9%85%D8%AF%D9%84--MFC-2700DW');
            }elseif ($_REQUEST['p'] == '6688'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4--%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1%C2%AD-Brother-%D9%85%D8%AF%D9%84-DCP-1510');
            }elseif ($_REQUEST['p'] == '6691'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4--%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1%C2%AD-Brother-%D9%85%D8%AF%D9%84-DCP-2540DW');
            }elseif ($_REQUEST['p'] == '6694'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4--%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1%C2%AD-Brother-%D9%85%D8%AF%D9%84-DCP-7050');
            }elseif ($_REQUEST['p'] == '6697'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4--%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1%C2%AD-Brother-%D9%85%D8%AF%D9%84-DCP-7055');
            }elseif ($_REQUEST['p'] == '6700'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4--%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1%C2%AD-Brother-%D9%85%D8%AF%D9%84-DCP-7030');
            }elseif ($_REQUEST['p'] == '6816'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-brother-%D9%85%D8%AF%D9%84-hl-5200');
            }elseif ($_REQUEST['p'] == '6824'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-brother-%D9%85%D8%AF%D9%84-hl-l6200dw');
            }elseif ($_REQUEST['p'] == '6828'){
                return redirect('https://mortazavistore.ir/post/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B1%DB%8C%D8%B3%D8%AA-%D9%BE%D8%B1%DB%8C%D9%86%D8%AA%D8%B1-brother-%D9%85%D8%AF%D9%84-hl-3270');
            }
        }

        return view('HomeView::index' , ['owl_carousel'=>true , 'homePage'=>$homePage ]);
    }



}
