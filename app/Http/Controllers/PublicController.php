<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home()
    {
        $sections = [
            [
                'category' => 'FILMS',
                'title' => 'Scopri la nostra lista dei film',
                'image' => '/media/homeCard/film.jpg',
                'alt' => 'Latest Films',
                'cta_text' => 'GUARDA ORA',
                'link' => route('movies.index'),
                'has_color_border' => false,
                'reverse' => false
            ],
            [
                'category' => 'TV SERIES',
                'title' => 'Guarda le tue serie preferite',
                'image' => '/media/homeCard/serietv.jpg',
                'alt' => 'TV Series',
                'cta_text' => 'ESPLORALE ORA',
                'link' => '#',
                'has_color_border' => false,
                'reverse' => true
            ],
            [
                'category' => 'ACTORS',
                'title' => 'Incontra gli attori più famosi',
                'image' => '/media/homeCard/attori.jpg',
                'alt' => 'Actors',
                'cta_text' => 'VEDI GLI ATTORI',
                'link' => '#',
                'has_color_border' => true,
                'reverse' => false
            ],
            [
                'category' => 'ACTRESSES',
                'title' => 'Incontra le attrici più famose',
                'image' => '/media/homeCard/attrici.jpg',
                'alt' => 'VEDI LE ATTRICI',
                'cta_text' => 'VIEW ACTRESSES',
                'link' => '#',
                'has_color_border' => false,
                'reverse' => true
            ],
            [
                'category' => 'DIRECTORS',
                'title' => 'Il dietro le quinte con i registi',
                'image' => '/media/homeCard/registi.webp',
                'alt' => 'Directors',
                'cta_text' => 'INCONTRA I REGISTI',
                'link' => '#',
                'has_color_border' => true,
                'reverse' => false
            ],
            [
                'category' => 'APP',
                'title' => 'Watch Anywhere',
                'image' => '/media/homeCard/app.jpg',
                'alt' => 'Mobile App',
                'cta_text' => 'DOWNLOAD NOW',
                'link' => '#',
                'has_color_border' => false,
                'reverse' => true
            ],
            [
                'category' => 'SHOP',
                'title' => 'Official Merch',
                'image' => '/media/homeCard/shop.jpg',
                'alt' => 'Shop',
                'cta_text' => 'SHOP NOW',
                'link' => '#',
                'has_color_border' => false,
                'reverse' => false
            ]
        ];

        return view('welcome', compact('sections'));
    }



    public function contact(){
        return view('contact');
    }



    public function contactSubmit(Request $request){
        $title = $request->title;
        $director = $request->director;
        $description = $request->description;

        try{
            Mail::to('luca.2603.lg@gmail.com')->send(new ContactMail($title, $director, $description));
            return redirect(route('homepage'))->with('success', 'La tua richiesta sta viaggiando nei nostri server! Appena valuteremo se inserire il tuo film in piattaforma ti contatteremo.');
        } catch(\Exception $error){
            return redirect()->back()->with('error', 'I nostri server stanno lavorando duramente per gestire tutte richieste. Riprova più tardi.');
        }
    }
}
