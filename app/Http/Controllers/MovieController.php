<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class MovieController extends Controller
{

    public Function index(){

        $films = [
            [
                'id' => 1,
                'title' => 'Inception',
                'year' => 2010,
                'duration' => 148,
                'genre' => 'Fantascienza/Thriller',
                'director' => 'Christopher Nolan',
                'producer' => 'Christopher Nolan, Emma Thomas',
                'plot' => "Dom Cobb è un ladro esperto nell'arte dell'estrazione: attraverso una tecnologia speciale ruba segreti preziosi dalle menti delle persone mentre sognano. Gli viene offerta la possibilità di tornare alla sua vita precedente in cambio di un ultimo lavoro: l'inception, ovvero l'impianto di un'idea nella mente di qualcuno attraverso diversi livelli di sogno. Con una squadra di specialisti, deve realizzare l'impossibile mentre combatte contro i propri demoni personali che minacciano di far fallire l'intera operazione."
            ],
            [
                'id' => 2,
                'title' => 'Cloud Atlas',
                'year' => 2012,
                'duration' => 172,
                'genre' => 'Drammatico/Fantascienza',
                'director' => 'Lana e Lilly Wachowski, Tom Tykwer',
                'producer' => 'Stefan Arndt, Grant Hill',
                'plot' => 'Sei storie interconnesse si svolgono in diverse epoche, dal 1849 al 2321. Le anime dei personaggi si reincarnano attraverso il tempo, influenzandosi a vicenda in modi inaspettati. Ogni storia esplora temi di libertà, amore e oppressione, mostrando come le azioni di ogni individuo possano ripercuotersi attraverso i secoli con conseguenze imprevedibili.'
            ],
            [
                'id' => 3,
                'title' => 'Donnie Darko',
                'year' => 2001,
                'duration' => 113,
                'genre' => 'Fantascienza/Drammatico',
                'director' => 'Richard Kelly',
                'producer' => 'Sean McKittrick',
                'plot' => 'Donnie Darko, un adolescente problematico, inizia a ricevere visioni apocalittiche da una figura in costume da coniglio chiamata Frank. Mentre cerca di comprendere il significato delle sue visioni, si trova coinvolto in una complessa storia di viaggi nel tempo e universi paralleli che lo porterà a dover fare una scelta cruciale per salvare il mondo.'
            ],
            [
                'id' => 4,
                'title' => 'Enemy',
                'year' => 2013,
                'duration' => 91,
                'genre' => 'Thriller psicologico',
                'director' => 'Denis Villeneuve',
                'producer' => 'M.A. Faura, Niv Fichman',
                'plot' => 'Adam Bell, un professore universitario, scopre di avere un sosia identico e diventa ossessionato dal trovarlo. Mentre indaga sulla vita del suo doppio, le identità dei due uomini cominciano a confondersi in modi inquietanti, portando a una conclusione surreale che mette in discussione la natura stessa della realtà.'
            ],
            [
                'id' => 5,
                'title' => 'Matrix',
                'year' => 1999,
                'duration' => 136,
                'genre' => 'Fantascienza/Azione',
                'director' => 'Lana e Lilly Wachowski',
                'producer' => 'Joel Silver',
                'plot' => 'Thomas Anderson, programmatore di giorno e hacker di nome Neo di notte, scopre che la realtà che conosciamo è in realtà una simulazione computerizzata chiamata Matrix, creata da macchine senzienti per tenere sotto controllo l\'umanità. Unendosi a un gruppo di ribelli guidati da Morpheus, Neo deve accettare il suo ruolo come "l\'Eletto" destinato a liberare l\'umanità, mentre impara a piegare le regole della Matrix e affronta agenti quasi invincibili del sistema.'
            ],
            [
                'id' => 6,
                'title' => 'Memento',
                'year' => 2000,
                'duration' => 113,
                'genre' => 'Thriller/Mistero',
                'director' => 'Christopher Nolan',
                'producer' => 'Jennifer Todd, Suzanne Todd',
                'plot' => 'Leonard Shelby soffre di amnesia anterograda dopo un trauma e non può formare nuovi ricordi. Usando un sistema di fotografie polaroid, appunti e tatuaggi sul corpo, cerca di trovare l\'assassino di sua moglie. La narrazione procede all\'indietro, mostrando gli eventi dal punto di vista confuso del protagonista e rivelando gradualmente una verità scioccante sulla sua ricerca.'
            ],
            [
                'id' => 7,
                'title' => 'Mulholland Drive',
                'year' => 2001,
                'duration' => 147,
                'genre' => 'Thriller/Mistero',
                'director' => 'David Lynch',
                'producer' => 'Mary Sweeney, Alain Sarde',
                'plot' => 'Betty Elms, aspirante attrice, arriva a Hollywood e incontra una donna amnesiaca che si fa chiamare Rita. Mentre cercano di scoprire la vera identità di Rita, si trovano coinvolte in una serie di eventi surreali e inquietanti che sfidano la logica. La realtà si distorce gradualmente, rivelando che nulla è come sembra inizialmente.'
            ],
            [
                'id' => 8,
                'title' => 'Oldboy',
                'year' => 2003,
                'duration' => 120,
                'genre' => 'Thriller/Drammatico',
                'director' => 'Park Chan-wook',
                'producer' => 'Kim Dong-joo',
                'plot' => 'Oh Dae-su viene improvvisamente rapito e tenuto prigioniero per 15 anni senza conoscerne il motivo. Quando viene rilasciato, inizia una violenta ricerca della verità per scoprire chi lo ha imprigionato e perché. La sua quest lo porta a scoprire una terribile verità sul suo passato e un elaborato piano di vendetta di cui è inconsapevolmente parte.'
            ],
            [
                'id' => 9,
                'title' => 'Predestination',
                'year' => 2014,
                'duration' => 97,
                'genre' => 'Fantascienza/Thriller',
                'director' => 'The Spierig Brothers',
                'producer' => 'Paddy McDonald',
                'plot' => 'Un agente temporale intraprende la sua ultima missione cercando di impedire un attentato terroristico. Durante la missione, incontra un misterioso individuo la cui storia complessa è intrecciata con la sua in modi impossibili. La trama si sviluppa attraverso paradossi temporali sempre più complessi, rivelando una verità sorprendente sull\'identità dei personaggi.'
            ],
            [
                'id' => 10,
                'title' => 'Primer',
                'year' => 2004,
                'duration' => 77,
                'genre' => 'Fantascienza',
                'director' => 'Shane Carruth',
                'producer' => 'Shane Carruth',
                'plot' => 'Due ingegneri scoprono accidentalmente il viaggio nel tempo mentre lavorano a un progetto nel loro garage. Inizialmente usano la loro invenzione per guadagnare in borsa, ma presto si trovano intrappolati in un intricato web di timeline parallele, copie di se stessi e paradossi temporali che minacciano di distruggere le loro vite.'
            ]
        ];

        return view('films.index', ['movies' => $films]);
    }




    public function show($id){

        $films = [
            [
                'id' => 1,
                'title' => 'Inception',
                'year' => 2010,
                'duration' => 148,
                'genre' => 'Fantascienza/Thriller',
                'director' => 'Christopher Nolan',
                'producer' => 'Christopher Nolan, Emma Thomas',
                'plot' => "Dom Cobb è un ladro esperto nell'arte dell'estrazione: attraverso una tecnologia speciale ruba segreti preziosi dalle menti delle persone mentre sognano. Gli viene offerta la possibilità di tornare alla sua vita precedente in cambio di un ultimo lavoro: l'inception, ovvero l'impianto di un'idea nella mente di qualcuno attraverso diversi livelli di sogno. Con una squadra di specialisti, deve realizzare l'impossibile mentre combatte contro i propri demoni personali che minacciano di far fallire l'intera operazione."
            ],
            [
                'id' => 2,
                'title' => 'Cloud Atlas',
                'year' => 2012,
                'duration' => 172,
                'genre' => 'Drammatico/Fantascienza',
                'director' => 'Lana e Lilly Wachowski, Tom Tykwer',
                'producer' => 'Stefan Arndt, Grant Hill',
                'plot' => 'Sei storie interconnesse si svolgono in diverse epoche, dal 1849 al 2321. Le anime dei personaggi si reincarnano attraverso il tempo, influenzandosi a vicenda in modi inaspettati. Ogni storia esplora temi di libertà, amore e oppressione, mostrando come le azioni di ogni individuo possano ripercuotersi attraverso i secoli con conseguenze imprevedibili.'
            ],
            [
                'id' => 3,
                'title' => 'Donnie Darko',
                'year' => 2001,
                'duration' => 113,
                'genre' => 'Fantascienza/Drammatico',
                'director' => 'Richard Kelly',
                'producer' => 'Sean McKittrick',
                'plot' => 'Donnie Darko, un adolescente problematico, inizia a ricevere visioni apocalittiche da una figura in costume da coniglio chiamata Frank. Mentre cerca di comprendere il significato delle sue visioni, si trova coinvolto in una complessa storia di viaggi nel tempo e universi paralleli che lo porterà a dover fare una scelta cruciale per salvare il mondo.'
            ],
            [
                'id' => 4,
                'title' => 'Enemy',
                'year' => 2013,
                'duration' => 91,
                'genre' => 'Thriller psicologico',
                'director' => 'Denis Villeneuve',
                'producer' => 'M.A. Faura, Niv Fichman',
                'plot' => 'Adam Bell, un professore universitario, scopre di avere un sosia identico e diventa ossessionato dal trovarlo. Mentre indaga sulla vita del suo doppio, le identità dei due uomini cominciano a confondersi in modi inquietanti, portando a una conclusione surreale che mette in discussione la natura stessa della realtà.'
            ],
            [
                'id' => 5,
                'title' => 'Matrix',
                'year' => 1999,
                'duration' => 136,
                'genre' => 'Fantascienza/Azione',
                'director' => 'Lana e Lilly Wachowski',
                'producer' => 'Joel Silver',
                'plot' => 'Thomas Anderson, programmatore di giorno e hacker di nome Neo di notte, scopre che la realtà che conosciamo è in realtà una simulazione computerizzata chiamata Matrix, creata da macchine senzienti per tenere sotto controllo l\'umanità. Unendosi a un gruppo di ribelli guidati da Morpheus, Neo deve accettare il suo ruolo come "l\'Eletto" destinato a liberare l\'umanità, mentre impara a piegare le regole della Matrix e affronta agenti quasi invincibili del sistema.'
            ],
            [
                'id' => 6,
                'title' => 'Memento',
                'year' => 2000,
                'duration' => 113,
                'genre' => 'Thriller/Mistero',
                'director' => 'Christopher Nolan',
                'producer' => 'Jennifer Todd, Suzanne Todd',
                'plot' => 'Leonard Shelby soffre di amnesia anterograda dopo un trauma e non può formare nuovi ricordi. Usando un sistema di fotografie polaroid, appunti e tatuaggi sul corpo, cerca di trovare l\'assassino di sua moglie. La narrazione procede all\'indietro, mostrando gli eventi dal punto di vista confuso del protagonista e rivelando gradualmente una verità scioccante sulla sua ricerca.'
            ],
            [
                'id' => 7,
                'title' => 'Mulholland Drive',
                'year' => 2001,
                'duration' => 147,
                'genre' => 'Thriller/Mistero',
                'director' => 'David Lynch',
                'producer' => 'Mary Sweeney, Alain Sarde',
                'plot' => 'Betty Elms, aspirante attrice, arriva a Hollywood e incontra una donna amnesiaca che si fa chiamare Rita. Mentre cercano di scoprire la vera identità di Rita, si trovano coinvolte in una serie di eventi surreali e inquietanti che sfidano la logica. La realtà si distorce gradualmente, rivelando che nulla è come sembra inizialmente.'
            ],
            [
                'id' => 8,
                'title' => 'Oldboy',
                'year' => 2003,
                'duration' => 120,
                'genre' => 'Thriller/Drammatico',
                'director' => 'Park Chan-wook',
                'producer' => 'Kim Dong-joo',
                'plot' => 'Oh Dae-su viene improvvisamente rapito e tenuto prigioniero per 15 anni senza conoscerne il motivo. Quando viene rilasciato, inizia una violenta ricerca della verità per scoprire chi lo ha imprigionato e perché. La sua quest lo porta a scoprire una terribile verità sul suo passato e un elaborato piano di vendetta di cui è inconsapevolmente parte.'
            ],
            [
                'id' => 9,
                'title' => 'Predestination',
                'year' => 2014,
                'duration' => 97,
                'genre' => 'Fantascienza/Thriller',
                'director' => 'The Spierig Brothers',
                'producer' => 'Paddy McDonald',
                'plot' => 'Un agente temporale intraprende la sua ultima missione cercando di impedire un attentato terroristico. Durante la missione, incontra un misterioso individuo la cui storia complessa è intrecciata con la sua in modi impossibili. La trama si sviluppa attraverso paradossi temporali sempre più complessi, rivelando una verità sorprendente sull\'identità dei personaggi.'
            ],
            [
                'id' => 10,
                'title' => 'Primer',
                'year' => 2004,
                'duration' => 77,
                'genre' => 'Fantascienza',
                'director' => 'Shane Carruth',
                'producer' => 'Shane Carruth',
                'plot' => 'Due ingegneri scoprono accidentalmente il viaggio nel tempo mentre lavorano a un progetto nel loro garage. Inizialmente usano la loro invenzione per guadagnare in borsa, ma presto si trovano intrappolati in un intricato web di timeline parallele, copie di se stessi e paradossi temporali che minacciano di distruggere le loro vite.'
            ]
        ];

        foreach($films as $film){
            if($film['id'] == $id){
                return view('films.show', ['film' => $film]);
            }
        }

    }
}
