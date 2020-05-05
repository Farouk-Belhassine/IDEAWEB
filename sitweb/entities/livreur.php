<?php   class livreur {
   
       //attribut
       private $nom;
       private $prenom; 
       private $cin;
       private $dispo;
       private $secteur;
       private $tel;
       private $date_naiss;
       private $mail;
       private $num_permis;
  
   
        public function __construct($nom,$prenom,$cin,$tel,$secteur,$date_naiss,$mail,$Num_permis,$dispo)                   
       {
           $this->nom = $nom;
           $this->prenom = $prenom;
           $this->cin=$cin;
           $this->dispo = $dispo;
           $this->secteur = $secteur;
           $this->tel = $tel;
           $this->dispo = 0;
           $this->date_naiss = $date_naiss;
           $this->mail = $mail;
           $this->num_permis = $Num_permis;
           
         
       }
   
      

       function getNom() {
           return $this->nom;
       }
   
       function getPrenom() {
           return $this->prenom;
       }
       function getCin() {
        return $this->cin;
    }

       function getDispo() {
           return $this->dispo;
       }
   
       function getSecteur() {
           return $this->secteur;
       }
   
       function getTel() {
           return $this->tel;
       }
   
       function getDate_naiss() {
           return $this->date_naiss;
       }
   
       function getMail() {
           return $this->mail;
       }
   
      
       function getNum_permis() {
           return $this->num_permis;
       }
   

       function setLogin($cin) {
           $this->cin = $cin;
       }
   
       function setNom($nom) {
           $this->nom = $nom;
       }
   
       function setPrenom($prenom) {
           $this->prenom = $prenom;
       }
   
       function setDispo($dispo) {
           $this->dispo = $dispo;
       }
   
       function setSecteur($secteur) {
           $this->secteur = $secteur;
       }
   
       function setTel($tel) {
           $this->tel = $tel;
       }
   
       function setDate_naiss($date_naiss) {
           $this->date_naiss = $date_naiss;
       }
   
       function setMail($mail) {
           $this->mail = $mail;
       }
   
      
   
       
   
       function setNum_permis($num_permis) {
           $this->num_permis = $num_permis;
       }
   
     
 
  
   }
?>