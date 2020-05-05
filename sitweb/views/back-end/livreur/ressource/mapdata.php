

<?php include "../../core/livreurC.php";
 $livreur1C=new livreurC();
 $liste =$livreur1C->afficherlivreur();
 $Bizerte=0;
$benarous=0;
 $benarous=0;
 $beja=0;
 $Gabes=0;
 $Gafsa=0;
 $Kairouan=0;
 $Jenbouda=0;
 $Kasserine=0;
 $Kef=0;
 $Mahdiya=0;
 $Medenine=0;
 $Manouba=0;
 $Monastir=0;
 $Nabeul=0;
 $Sfax=0;
 $SidiBouzid=0;
 $Siliana=0;
 $Sousse=0;
 $Tatouine=0;
 $Tozeur=0;
 $Tunis=0;
 $Zaghouan=0;
 foreach($liste as $row){
if (strcmp($row['secteur'],'Benarous')==0)
{$Ariana=$Ariana+1;}
if (strcmp($row['secteur'],'Beja')==0)
{$beja=$beja+1;}
if (strcmp($row['secteur'],'Ben arous')==0)
{$benarous=$benarous+1;}
if (strcmp($row['secteur'],'Bizerte')==0)
{$Bizerte=$Bizerte+1;}
if (strcmp($row['secteur'],'Gabes')==0)
{$Gabes=$Gabes+1;}           

if (strcmp($row['secteur'],'Gafsa')==0)
{$Gafsa=$Gafsa+1;}

if (strcmp($row['secteur'],'Jenbouda')==0)
{$Jenbouda=$Jenbouda+1;}

if (strcmp($row['secteur'],'Kairouan')==0)
{$Kairouan=$Kairouan+1;}

if (strcmp($row['secteur'],'Kasserine')==0)
{$Kasserine=$Kasserine+1;}

if (strcmp($row['secteur'],'Kef')==0)
{$Kef=$Kef+1;}

if  (strcmp($row['secteur'],'Mahdiya')==0)
{$Mahdiya=$Mahdiya+1;}
if  (strcmp($row['secteur'],'Manouba')==0)
{$Manouba=$Manouba+1;}

if  (strcmp($row['secteur'],'Medenine')==0)
{$Medenine=$Medenine+1;}
if  (strcmp($row['secteur'],'Monastir')==0)
{$Monastir=$Monastir+1;}
if  (strcmp($row['secteur'],'Nabeul')==0)
{$Nabeul=$Nabeul+1;}

if (strcmp($row['secteur'],'Sfax')==0)
{$Sfax=$Sfax+1;}
if (strcmp($row['secteur'],'SidiBouzid')==0)
{$SidiBouzid=$SidiBouzid+1;}
if (strcmp($row['secteur'],'Siliana')==0)
{$Siliana=$Siliana+1;}
if (strcmp($row['secteur'],'Sousse')==0)
{$Sousse=$Sousse+1;}

if (strcmp($row['secteur'],'Tatouine')==0)
{$Tatouine=$Tatouine+1;}
if (strcmp($row['secteur'],'Tozeur')==0)
{$Tozeur=$Tozeur+1;}
if ((strcmp($row['secteur'],'Tunis')==0))
{$Tunis=$Tunis+1;}
if (strcmp($row['secteur'],'Zaghouan')==0)
{$Zaghouan=$Zaghouan+1;}
}
?>
<script>
var simplemaps_countrymap_mapdata={
  main_settings: {
   //General settings
    width: "700", //'700' or 'responsive'
    background_color: "#FFFFFF",
    background_transparent: "yes",
    border_color: "#ffffff",
    
    //State defaults
    state_description: "State description",
    state_color: "#88A4BC",
    state_hover_color: "#3B729F",
    state_url: "",
    border_size: 1.5,
    all_states_inactive: "no",
    all_states_zoomable: "yes",
    
    //Location defaults

    //Label defaults
    label_color: "#d5ddec",
    label_hover_color: "#d5ddec",
    label_size: 22,
    label_font: "Arial",
    hide_labels: "no",
    hide_eastern_labels: "no",
   
    //Zoom settings
    zoom: "yes",
    manual_zoom: "yes",
    back_image: "no",
    initial_back: "no",
    initial_zoom: "-1",
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,
    
    //Popup settings
    popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",
    
    //Advanced settings
    div: "map",
    auto_load: "yes",
    url_new_tab: "no",
    images_directory: "default",
    fade_time: 0.1,
    link_text: "View Website",
    popups: "detect",
    state_image_url: "",
    state_image_position: "",
    location_image_url: ""
  },
  state_specific: {
    TUN101: {
      name: "Tozeur",
      color: "#3219bb",
      hover_color: "#2700ff",
      description: "<?php echo $Tozeur ?>",
      zoomable: "yes"
    },
    TUN102: {
      name: "Manubah",
      color: "#3219bb",
      hover_color: "#2700ff",
      description: "<?php echo $Manouba ?>",
      zoomable: "yes"
    },
    TUN103: {
      name: "Béja",
      color: "#3219bb",
      hover_color: "#2700ff",
      description: "<?php echo $beja ?>",
      zoomable: "yes"
    },
    TUN104: {
      name: "Ben Arous (Tunis Sud)",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $benarous ?> "
    },
    TUN105: {
      name: "Bizerte",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Bizerte ?>"
    },
    TUN106: {
      name: "Jendouba",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Jenbouda ?>"
    },
    TUN107: {
      name: "Nabeul",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Nabeul ?>"
    },
    TUN108: {
      name: "Tunis",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Tunis ?>"
    },
    TUN109: {
      name: "Le Kef",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Kef ?>"
    },
    TUN110: {
      name: "Kassérine",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Kasserine ?>"
    },
    TUN111: {
      name: "Gabès",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Gabes ?>"
    },
    TUN112: {
      name: "Gafsa",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Gafsa ?>"
    },
    TUN113: {
      name: "Sidi Bou Zid",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $SidiBouzid?>"
    },
    TUN114: {
      name: "Sfax",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Sfax?>"
    },
    TUN115: {
      name: "Siliana",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Siliana ?>"
    },
    TUN116: {
      name: "Mahdia",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Mahdiya ?>"
    },
    TUN117: {
      name: "Monastir",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Monastir ?>"
    },
    TUN118: {
      name: "Kairouan",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Kairouan ?>"
    },
    TUN119: {
      name: "Sousse",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Sousse ?>"
    },
    TUN120: {
      name: "Zaghouan",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Zaghouan?>"
    },
    TUN96: {
      name: "Médenine",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Medenine ?>"
    },
    TUN97: {
      name: "Kebili",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "0"
    },
    TUN98: {
      name: "Tataouine",
      color: "#3219bb",
      hover_color: "#2700ff",
      zoomable: "yes",
      description: "<?php echo $Tatouine ?>"
    }
  },
  locations: {
    "0": {
      lat: "36.806112",
      lng: "10.171078",
      name: "Tunis"
    }
  },
  labels: {},
  regions: {}
};
</script>