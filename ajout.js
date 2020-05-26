function controle()
{
	var idproduit= document.getElementById("idproduit").value;
	var inputList = document.getElementsByTagName("input");
  var numChecked = 0;
  var urlImage = document.getElementById("urlImage").value;


  var Libelle=document.getElementById("Libelle").value;
    var description=document.getElementById("description").value;

  var quantite=document.getElementById("quantite").value;
  var description=document.getElementById("description").value;
 // var nom_categorie=document.getElementById("nom_categorie").value;

  if (idproduit=="")
  	{   alert("Merci de remplir le champ idproduit ");
			}
			else if (Libelle=="")
  	{   alert("Merci de remplir le champ Libelle ");
			}
			else if (quantite=="")
  	{   alert("Merci de remplir le champ quantite ");
			}
			else if (description=="")
  	{   alert("Merci de remplir le champ description ");
			}
				else if (urlImage=="")
  	{   alert("Merci de remplir le champ url ");
			}
			
			 if (!isNaN(Libelle))
				{alert("libelle doit etre une chaine de caracteres");}
			if (!isNaN(description))
				{alert("description doit etre une chaine de caracteres");}
  else if (idproduit.length > 4) {
  	alert("la longeur ne doit pas depasser 4 ");
  	}
  	for (var i = 0; i < inputList.length; i++) {
      if (inputList[i].type == "checkbox" && inputList[i].checked) {
          numChecked = numChecked + 1;
          selectedItems+=inputList[i].value+",";
      }
    }
     if (numChecked <2) {
    alert("must check at least 1 box in each checkbox"); 
    
  }

}
