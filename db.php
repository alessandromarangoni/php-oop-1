<?php
class Movie{
    public $name;
    public $year;
    public $language;
    public $genre;
    public $description;
    public function __construct($name, $year, $language, $description,$genre)
	{
		$this->name = $name;
		$this->year = $year;
		$this->language = $language;
        $this->description = $description;
        $this->genre[] = $genre;
	}
    public function getAge() {
        $currentYear = date('Y');
        return 'on screen ' . $currentYear - $this->year . ' years ago';
    }
}

$Spider_Man = new Movie('Spider-Man', 2002 ,'english' ,' After being bitten by a genetically-modified spider,
a shy teenager gains spider-like abilities that he
uses to fight injustice as a masked superhero and face a vengeful enemy', ['action', 'superhero']);

$Tre_Uomini_e_una_gamba = new Movie('Tre Uomini e una Gamba', 1997, 'Italiano' , 'Aldo, Giovanni e Giacomo 
partono per raggiungere le loro famiglie in vacanza in Puglia.
Aldo e Giovanni sono sposati con due sorelle, Giacomo è fidanzato con la terza e il loro matrimonio si 
celebrerà due giorni dopo proprio in Puglia.
I tre lavorano in un negozio di proprietà del suocero, un arricchito,
volgare e arrogante, che da sempre li tiranneggia sia sul lavoro che in famiglia; 
Aldo, Giovanni e Giacomo non hanno mai reagito alle angherie del vecchio, sia per la loro 
innata codardia, sia per timore di perdere il lavoro.
I tre oltre al lavoro, si frequentano di rado e non si 
trovano particolarmente simpatici.', ['commedia']);

$Scar_face = new Movie ('Scarface', 1983, 'english','In 1980 Miami, a determined Cuban immigrant takes over a drug cartel and succumbs to greed. After getting a green card in exchange for assassinating a Cuban government official, Tony Montana (Pacino) stakes a claim on the drug trade in Miami.',['noir', 'drammatico', 'gangster', 'thriller']);
$Modern_Times = new Movie('Modern Times',1936 , 'English', 'Modern Times is a 1936 American part-talkie satirical romantic black comedy film written and directed by Charlie Chaplin in which his iconic Little Tramp character, his last performance as the character, struggles to survive in the modern, industrialized world.', ['comedy' , 'sentimental', 'mute']);
$Movies_Array = [$Spider_Man, $Tre_Uomini_e_una_gamba, $Scar_face, $Modern_Times]
?>