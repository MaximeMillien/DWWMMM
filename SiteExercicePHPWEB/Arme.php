<?php ob_start();
?>

<?php 
class Arme{
    private static $id = 1;
    private static $tabid = [];
    private $nom;
    private $degats;

    public function __construct($nom ,$degats){
        $this->nom = $nom;
        $this->degats = $degats;
        self::$id = $this;
        self::$tabid[] = $this; 
    }
    public static function getId(){
        return self::$id;
    }
    //getter
    //setter
}


$arme1 = new Arme("Hache de bucheron" , 100);
$arme2 = new Arme("Couteau" , 70);

?>

<?php 
$content = ob_get_clean();
?>