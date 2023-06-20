<?php
class Movies{
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

$Spider_Man = new Movies('Spider-Man', 2002 ,'english' ,' After being bitten by a genetically-modified spider,
a shy teenager gains spider-like abilities that he
uses to fight injustice as a masked superhero and face a vengeful enemy', ['action', 'superhero'])
?>