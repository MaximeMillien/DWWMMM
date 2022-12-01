<?php ob_start();
$titre = "Maison attribut static";
?>

<?php ob_start();

$titre = "Maison"; 
?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-dark">
      <th scope="row">Active</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class ="table-dark">
      <th scope="row">Default</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-dark">
      <th scope="row">Primary</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-dark">
      <th scope="row">Secondary</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-dark">
      <th scope="row">Success</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-dark">
      <th scope="row">Danger</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    
    


<?php

    class Maison{
        private static $identifiant = 0 ;
        private static $Maison = [];
        private $surface;
        private $dateconstru;
        private $nbrechambre;
        private $ville ;
        private $id ;

        public const Maison = true ;
        public const Appart = false ;



        public function __construct($surface, $dateconstru, $nbrechambre, $ville){

            self::$identifiant++;
            $this->id=self::$identifiant ;
            
            
            $this->surf = $surface;
            $this->date = $dateconstru;
            $this->nbre = $nbrechambre;
            $this->ville = $ville ;
            
            self::$Maison[] = $this;
        }

        public function getid(){
            return $this->id ;
        }


        public function presentation(){
            echo "<b>Identifiant : <b/>" . $this->getid() . "<br/>" ;
            echo "<b>Surface en m2 : </b>" . $this->surf . "<br/>";
            echo "<b>Date de construction : </b>" . $this->date . "<br/>";
            echo "<b>Nombre de chambre : </b>" . $this->nbre . "<br/>";
            echo "<b>Ville : </b> : " . $this->ville . "<br/>" ;
           

            
        }

        public static function getListMaison(){
            return self::$Maison;
        } 
    }

    
$maison1 = new Maison(25, 2013,1, "Dunkerque", Maison::Appart);
$maison2 = new Maison(50, 2015,3, "Gravelines", Maison::Maison);
$maison3 = new Maison(78, 2020,6, "Lille", Maison::Maison);
$maison4 = new Maison(36, 2014,3, "Roubaix", Maison::Appart);
$maison5 = new Maison(120, 1999,8, "Dunkerque", Maison::Maison);
$maison6 = new Maison(200, 1986,10, "Wattrelos", Maison::Maison);
$maison7 = new Maison(45, 2013,2, "Molenbeek", Maison::Appart);


$recupMaison = Maison::getListMaison();

foreach($recupMaison as $value){
    $value->presentation();
    echo "<br/>------------------------------------<br/>";
}
?>

<?php
$content = ob_get_clean();
require "template.php";
?>


</tbody>
</table>