<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOTools;
use DB;
use Newsletter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        SEOTools::setTitle('Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists offering professional services. ');
        SEOTools::opengraph()->setUrl('https://www.apexengltd.com/');
        SEOTools::setCanonical('https://www.apexengltd.com/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
        $page_title = "Apex Engineering Limited";
        return view('front.index',compact('page_title'));
    }
    public function contact_us()
    {
        SEOTools::setTitle('Contact Us | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('Contact Apex Engineering | Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists offering professional services. ');
        SEOTools::opengraph()->setUrl('https://www.apexengltd.com/contact-us');
        SEOTools::setCanonical('https://www.apexengltd.com/contact-us');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
        $Content = DB::table('_site_settings')->get();
        $page_title = "Contact Apex Engineering Limited";
        return view('front.contact-us',compact('Content','page_title'));
    }
    public function about_us()
    {
        SEOTools::setTitle('About Us | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('About Apex Engineering Ltd | Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists offering professional services. ');
        SEOTools::opengraph()->setUrl('https://www.apexengltd.com/about-us');
        SEOTools::setCanonical('https://www.apexengltd.com/about-us');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
        $Content = DB::table('abouts')->get();
        $page_title = "About Apex Engineering Limited";
        return view('front.about',compact('Content','page_title'));
    }

    public function company()
    {
        SEOTools::setTitle('The Company | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('The Company Apex Engineering Ltd | Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists offering professional services. ');
        SEOTools::opengraph()->setUrl('https://www.apexengltd.com/the-company');
        SEOTools::setCanonical('https://www.apexengltd.com/the-company');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
        $Content = DB::table('abouts')->get();
        $page_title = "The Company Apex Engineering Limited";
        return view('front.company',compact('Content','page_title'));
    }
    public function services()
    {
        SEOTools::setTitle('Our Services | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('Apex Engineering Limited Services');
        SEOTools::opengraph()->setUrl('https://www.apexengltd.com/services');
        SEOTools::setCanonical('https://www.apexengltd.com/services');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
        $Content = DB::table('categories')->get();
        $page_title = "Apex Engineering Limited Services";
        return view('front.services',compact('Content','page_title'));
    }
    public function services_single($slung)
    {
        $Categories = DB::table('categories')->where('slung',$slung)->get();
        foreach($Categories as $Cat){
            $title = html_entity_decode($Cat->title, ENT_QUOTES, 'UTF-8');
            SEOTools::setTitle(''.$title.' | Apex Engineering Limited | Best Engineering Firm In Somalia');
            SEOTools::setDescription(''.$Cat->meta.'');
            SEOTools::opengraph()->setUrl('https://www.apexengltd.com/services/'.$slung.'');
            SEOTools::setCanonical('https://www.apexengltd.com/'.$slung.'');
            SEOTools::opengraph()->addProperty('type', 'articles');
            SEOTools::twitter()->setSite('@apexengineering');
            SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
            $Content = DB::table('categories')->get();
            $page_title = $title;
            
            return view('front.service',compact('Categories','page_title'));
        }
    }
    public function portfolios()
    {
        $Cases = DB::table('cases')->get();
     
       
            SEOTools::setTitle('Our Portfolio | Apex Engineering Limited | Best Engineering Firm In Somalia');
            SEOTools::setDescription('Apex Engineering Ltd Projects');
            SEOTools::opengraph()->setUrl('https://www.apexengltd.com/portfolio');
            SEOTools::setCanonical('https://www.apexengltd.com/portfolio');
            SEOTools::opengraph()->addProperty('type', 'articles');
            SEOTools::twitter()->setSite('@apexengineering');
            SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
            $page_title = "Our Portfolio Apex Engineering Limited";
            return view('front.portfolios',compact('Cases','page_title'));
        
    }
    public function portfolios_single($slung)
    {
        $Portfolio = DB::table('cases')->where('slung',$slung)->get();
        foreach($Portfolio as $Cat){
            $title = html_entity_decode($Cat->title, ENT_QUOTES, 'UTF-8');
            SEOTools::setTitle(''.$title.' | Apex Engineering Limited | Best Engineering Firm In Somalia');
            SEOTools::setDescription(''.$Cat->meta.'');
            SEOTools::opengraph()->setUrl('https://www.apexengltd.com/services/'.$slung.'');
            SEOTools::setCanonical('https://www.apexengltd.com/'.$slung.'');
            SEOTools::opengraph()->addProperty('type', 'articles');
            SEOTools::twitter()->setSite('@apexengineering');
            SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
            $Content = DB::table('categories')->get();
            $page_title = $title;
            return view('front.portfolio',compact('Portfolio','page_title'));
        }
        
    }
    public function latest_news()
    {
        SEOTools::setTitle('Latest News | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('Latest News | Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists offering professional services. ');
        SEOTools::opengraph()->setUrl('https://www.apexengltd.com/latest-news');
        SEOTools::setCanonical('https://www.apexengltd.com/latest-news');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
        $Blogs = DB::table('blogs')->paginate(12);
        $page_title = "Apex Engineering Limited News";
        return view('front.latest-news',compact('Blogs','page_title'));

    }

    public function latest_new($slung)
    {
        SEOTools::setTitle('Latest News | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('Latest News | Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists offering professional services. ');
        SEOTools::opengraph()->setUrl('https://www.apexengltd.com/latest-news');
        SEOTools::setCanonical('https://www.apexengltd.com/latest-news');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
        $Blogs = DB::table('blogs')->where('slung',$slung)->paginate(12);
        $page_title = "Apex Engineering Limited News";
        return view('front.latest-new',compact('Blogs','page_title'));

    }

    

    public function terms_and_conditions()
    {
        SEOTools::setTitle('Terms and Conditions | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('Apex Engineering Terms and Condition | Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists offering professional services. ');
        SEOTools::opengraph()->setUrl('https://www.apexengltd.com/terms-and-conditions');
        SEOTools::setCanonical('https://www.apexengltd.com/terms-and-conditions');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
        $Copyright = DB::table('terms')->get();
        $page_title = "Apex Engineering Limited";
        return view('front.terms-and-conditions',compact('Copyright','page_title'));
    }
    public function privacy_policy()
    {
        SEOTools::setTitle('Privacy Policy | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('Apex Engineering Ltd Privacy Policy | Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists offering professional services. ');
        SEOTools::opengraph()->setUrl('https://www.apexengltd.com/privacy-policy');
        SEOTools::setCanonical('https://www.apexengltd.com/privacy-policy');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
        $Copyright = DB::table('privacies')->get();
        $page_title = "Apex Engineering Limited";
        return view('front.privacy-policy',compact('Copyright','page_title'));
    }
    public function copyright()
    {
        SEOTools::setTitle('Copyright | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('Copyright Statement | Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists offering professional services. ');
        SEOTools::opengraph()->setUrl('https://www.apexengltd.com/copyright');
        SEOTools::setCanonical('https://www.apexengltd.com/copyright');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/theme/images/logo-2.png');
        $Copyright = DB::table('copyright')->get();
        $page_title = "Apex Engineering Limited";
        return view('front.copyright',compact('Copyright','page_title'));
    }
    

    public function news_letters(Request $request)
    {   
            if ( ! Newsletter::isSubscribed($request->user_email) ) {
                Newsletter::subscribe($request->user_email);
            }
    }


    
    
}
