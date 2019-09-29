/* global method */

var form = document.getElementById("form-search");

function search(text){
		   
          var consulta =   new XMLHttpRequest();
		 
	consulta.onreadystatechange = function() {
		
		if (this.readyState === 4 && this.status === 200) {
		  
		  document.getElementById("txtDigited").innerHTML= this.responseText;
		}
    };
	
     consulta.open("GET", "search.php?str="+text, true);
     consulta.send();	  

}