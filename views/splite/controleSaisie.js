function verifa()
{
	var cin=document.getElementById('CIN').value;
	var nom=document.getElementById('nom').value;
	var prenom=document.getElementById('prenom').value;
	var dispo=document.getElementById('dispo').value;
			
		var tel=document.getElementById('tel').value;
			var date_naiss=document.getElementById('date_naiss').value;
			var mail=document.getElementById('mail').value;
			var mdp=document.getElementById('mdp').value;
			var Num_permis=document.getElementById('Num_permis').value;
	if(cin.length!==8)   
	{
		alert("cin doit être 8caractères");
		return false;
	}
	if(nom.length==0)
	{
		alert("nom doit être non vide");
		return false;
	}

if(prenom.length==0)
	{
		alert("prenom doit être non vide");
		return false;
	}


if(dispo.length==0)
	{
		alert("dispo doit être non vide");
		return false;
	}

	
	if(tel.length!==8)
	{
		alert("tel doit être non vide");
		return false;
	}

	if(date_naiss.length==0)
	{
		alert("date_naiss doit être non vide");
		return false;
	}


	if(mail.length==0)
	{
		alert("mail doit être non vide");
		return false;
	}

	if(mdp.length==0)
	{
		alert("mdp doit être non vide");
		return false;
	}
if(Num_permis.length==0)
	{
		alert("Num_permis doit être non vide");
		return false;
	}


	}