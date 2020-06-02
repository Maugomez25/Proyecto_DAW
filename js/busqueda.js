function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");        
}

function listaBusqueda(){
    
    getJSON("./Data/DB.json", loadSearch);
}

function loadSearch(data){

    var box = document.getElementById("myDropdown");

    for(i in data){   
        var link = document.createElement("a");
        link.href = "fichatecnica.php?modelo=" + data[i].modelo;
        link.target = "_self";        
        link.innerHTML = data[i].modelo;
        box.appendChild(link);
    }
    
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}