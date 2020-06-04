<!-- Creazione di una classe ‘Movie’
Dichiarazione delle proprietà della classe
Dichiarazione del costruttore
Dichiarazione di almeno un metodo
Fare poi degli esempi di utilizzo della classe 
istanziando almeno due oggetti e stampando a schermo il valore delle proprietà -->
<?php 
//creazione della classe
class Movies {
    //creazione proprietà della classe
    public $title;
    public $director;
    public $year;
    public $duration;

    //costruttore
    public function __construct($title, $director, $year, $duration) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->duration = $duration;
    }
    //creazione metodolo
    public function howOldIs($currentYear) {
        return $currentYear - $this->year; 
    }
    public function transform($hour) {
        return number_format($this->duration / $hour, 2);
    }
}



?>