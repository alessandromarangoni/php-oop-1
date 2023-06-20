<!DOCTYPE html>
<?php
class Movies{
    public $name;
    public $year;
    public $language;
    public $description;
    public function __construct($name, $year, $language, $description)
	{
		$this->name = $name;
		$this->year = $year;
		$this->language = $language;
        $this->description = $description;
	}
    public function getAge() {
        $currentYear = date('Y');
        return 'on screen ' . $currentYear - $this->year . ' years ago';
    }
}

$Spider_Man = new Movies('Spider-Man', 2002 ,'english' ,' After being bitten by a genetically-modified spider,
a shy teenager gains spider-like abilities that he
uses to fight injustice as a masked superhero and face a vengeful enemy')
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <?php echo $Spider_Man -> name ?> <br>
    <?php echo $Spider_Man -> language ?> <br>
    <?php echo $Spider_Man -> description ?> <br>
    <?php echo $Spider_Man -> getAge() ?> <br>


</body>
</html>