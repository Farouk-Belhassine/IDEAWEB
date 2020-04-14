<?php   class livreur {
   
       //attributs
   
       private $login;
       private $nom;
       private $prenom;
       private $dispo;
       private $secteur;
       private $tel;
       private $date_naiss;
       private $mail;
       private $mdp;
       private $num_permis;
  
   
        public function __construct($login,$nom,$prenom,$tel,$secteur,$date_naiss,$mail,$mdp,$Num_permis,$dispo)                   
       {
           $this->login = $login;
           $this->nom = $nom;
           $this->prenom = $prenom;
           $this->tel = $tel;
           $this->secteur = $secteur;
           $this->dispo = '';
           $this->date_naiss = $date_naiss;
           $this->mail = $mail;

           $this->mdp = $mdp;
           $this->num_permis = $Num_permis;
           $this->dispo = $dispo;
         
       }
   
       function getLogin() {
           return $this->login;
       }

       function getNom() {
           return $this->nom;
       }
   
       function getPrenom() {
           return $this->prenom;
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
   
      

   
       function getMdp() {
           return $this->mdp;
       }
   
       function getNum_permis() {
           return $this->num_permis;
       }
   

       function setLogin($login) {
           $this->login = $login;
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
   
      
   
       function setMdp($mdp) {
           $this->mdp = $mdp;
       }
   
       function setNum_permis($num_permis) {
           $this->num_permis = $num_permis;
       }
   
     
 
  
   }
?>