<?php ob_start();
?>

<?php
class Player{
    private static $arme = 1;
    private $nom;
    private $force;
    private $pv ;

    public function __construct($nom , $force , $pv){
        $this->nom = $nom;
        $this->force = $force;
        $this->pv = $pv;
        self::$arme = $this;
    }
    public static function getArme(){
        return self::$arme;
    }
    //getter
    //setter
}


$player1 = new Player("premier" , 500 , 500);
$player2 = new Player("Second" , 50 , 50);
?>
<?php ob_get_clean();?>