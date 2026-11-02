<?php
class Animal {
    private $name;
    public static $counter = 0;
    public function __construct($new_name)
    {
        $this->name = $new_name;
        self::$counter++;
    }
    public static function animal_counter(){
        echo "Sono stati generati " . self::$counter . " animali! \n";
    }
    public function get_info(){
        echo "Mi chiamo $this->name \n";
    }
}
class Vertebrato extends Animal{
    public $skeleton;
    public function __construct($new_name, $new_skeleton)
    {
        parent::__construct($new_name);
        $this->skeleton = $new_skeleton;
    }
    public function get_info()
    {
        parent::get_info();
        echo "Sono un vertebrato in quanto ho uno scheletro e qui  potete vedere la mia bellissima $this->skeleton \n";        
    }
}
class Invertebrato extends Animal{
    public $esoskeleton;
    public function __construct($new_name, $new_esoskeleton)
    {
        parent::__construct($new_name);
        $this->esoskeleton = $new_esoskeleton;
    }
    public function get_info()
    {
        parent::get_info();
        echo "Sono un invertebrato, infatti non ho lo scheletro bensì un esoscheletro ed eccolo qui! $this->esoskeleton \n";        
    }
}
class Felide extends Vertebrato{
    public $hiding;
    public function __construct($new_name, $new_skeleton, $new_hiding)
    {
        parent::__construct($new_name, $new_skeleton);
        $this->hiding = $new_hiding;
    }

    public function get_info()
    {
        parent::get_info();
        echo "Sono un felide infatti sono bravissimo a mimetizzarmi tramite $this->hiding \n";        
    }
}
class Canide extends Vertebrato{
    public $bite;
    public function __construct($new_name, $new_skeleton, $new_bite)
    {
        parent::__construct($new_name, $new_skeleton);
        $this->bite = $new_bite;
    }
    public function get_info(){
        parent::get_info();
        echo "Sono un canide ed il mio morso ha una potenza pari a $this->bite| \n";
    }
}
class Mollusco extends Invertebrato {
    public $habitat;
    public function __construct($new_name, $new_esoskeleton, $new_habitat)
    {
        parent::__construct($new_name, $new_esoskeleton);
        $this->habitat = $new_habitat;
    }
    public function get_info() {
        parent::get_info();
        echo "Sono un mollusco e il mio habitat naturale è $this->habitat!\n";
    }
}
class Anellide extends Invertebrato {
    public $rings;
    public function __construct($new_name, $new_esoskeleton, $new_rings)
    {
        parent::__construct($new_name, $new_esoskeleton);
        $this->rings = $new_rings;
    }

    public function get_info() {
        parent::get_info();
        echo "Sono un anellide il cui corpo è composto da $this->rings anelli!\n";
    }
}
class Gatto extends Felide{
    public $race;
    public function __construct($new_name, $new_skeleton, $new_hiding, $new_race)
    {
        parent::__construct($new_name, $new_skeleton, $new_hiding);
        $this->race = $new_race;
    }
    public function get_info(){
        parent::get_info();
        echo "Sono un gatto di razza $this->race.\n";
    }
    public function get_owner($owner_name){
        if($owner_name){
            echo "Sono un gatto domestico ed il nome del mio padrone è $owner_name \n";
        } else {
            echo "Sono un gatto randagio e non ho padroni! \n";
        }
    }
}
class Cane extends Canide{
    public $race;
    public function __construct($new_name, $new_skeleton, $new_bite, $new_race)
    {
        parent::__construct($new_name, $new_skeleton, $new_bite);
        $this->race = $new_race;    
    }
    public function get_info(){
        parent::get_info();
        echo "Sono un cane di razza $this->race.\n";
    }
}
$fido = new Cane("Fido", "spina dorsale", "500J", "Cane Corso");
$fido->get_info();
$polpo = new Mollusco("Polpo", "nessun esoscheletro", "mare");
$polpo->get_info();
$lombrico = new Anellide("Lombrico", "nessun esoscheletro", 100);
$lombrico->get_info();