var place = null;
var selected = null;
var atribute = null;

function displayMarca(marca){   
    selected = marca;
    atribute = 'marca';
    if(place != null){
        while (place.lastElementChild) {
            place.removeChild(place.lastElementChild);
        }
    }    
    switch(marca){
        case 'Porsche': case 'Nissan': case 'BMW':
            place = document.querySelector("#list1");
            break;
        case 'Subaru': case 'Toyota': case 'Ford':
            place = document.querySelector("#list2");
            break;
        case 'Aston Martin': case 'Ferrari': case 'Jaguar':
            place = document.querySelector("#list3");
            break;
        default: break;
    }
    execute();            
}

function displayPais(pais){   
    selected = pais;
    atribute = 'pais';
    if(place != null){
        while (place.lastElementChild) {
            place.removeChild(place.lastElementChild);
        }
    }    
    switch(pais){
        case 'Alemania': case 'Japon': case 'UK':
            place = document.querySelector("#list1");
            break;
        case 'Italia': case 'USA':
            place = document.querySelector("#list2");
            break;
        default: break;
    }
    execute();                 
}

function displayMotor(motor){   
    selected = motor;
    atribute = 'motor';
    if(place != null){
        while (place.lastElementChild) {
            place.removeChild(place.lastElementChild);
        }
    }    
    place = document.querySelector("#list1");
    execute();                 
}

function displayDec(decada){   
    selected = decada;
    atribute = 'decada';
    if(place != null){
        while (place.lastElementChild) {
            place.removeChild(place.lastElementChild);
        }
    }    
    place = document.querySelector("#list1");
    getJSON("./Data/DB.json", loadList);                  
}

function execute(){
    grayImages();
    getJSON("./Data/DB.json", loadList); 
}

function loadList(data){
    var carros = [];
    for(i in data){
        if(data[i][atribute] == selected)
            carros.push(data[i]);
    }

    for(i in carros){
        var row = document.createElement("div");
        row.className = "row";

        var link = document.createElement("a");
        link.href = "./index.html?modelo=" + carros[i].modelo;
        link.target = "_self";
        link.className = "column";

        var container = document.createElement("div");
        container.className = "container";

        var image = document.createElement("img");
        image.src = carros[i].url;
        image.alt = carros[i].modelo; 
        image.className = "image";       
        container.appendChild(image);

        var middle = document.createElement("div");
        middle.className = "middle";
        var text = document.createElement("div");
        text.className = "text";
        text.innerHTML = "Click para ver ficha técnica.";

        middle.appendChild(text);
        container.appendChild(middle);
        link.appendChild(container);
        row.appendChild(link);

        var specsDiv = document.createElement("div");
        specsDiv.className = "column";

        var specs = document.createElement("p");
        specs.innerHTML =   "Modelo: " + carros[i].modelo + '<br>';

        if(atribute != 'marca'){
            specs.innerHTML += "Marca: " + carros[i].marca + '<br>';
        }

        if(atribute != 'pais'){
            specs.innerHTML += "País: " + carros[i].pais + '<br>';
        }

        if(atribute != 'motor'){
            specs.innerHTML += "Motor: " + carros[i].motor + ' cilindros<br>';
        }

        if(atribute != 'decada'){
            specs.innerHTML += "Década: " + carros[i].decada + "s";
        }

        specsDiv.appendChild(specs);
        row.appendChild(specsDiv);
        place.appendChild(row);
    }
}

function grayImages(){
    var imgs = document.getElementsByTagName("img");

    for(i in imgs){
        if(imgs[i].alt == selected){
            imgs[i].className = "";
        }
        else{
            imgs[i].className = "notselected";
        }
    }
}

