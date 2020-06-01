var action = null;

function spawnList(){
    action = getParameter("action");
    console.log(action);
    getJSON("../Data/DB.json", loadList);
}

function getParameter(name){

    var parametersText = window.location.search.substring(1);
    var parameters = {};

    if(parametersText !== ""){
        var parametersListString = parametersText.split("&");

        for(var i=0; i<parametersListString.length; i++){
            var parameterComponents = parametersListString[i].split("=");
            parameters[parameterComponents[0]] = parameterComponents[1];
        }
    }

    return parameters[name];
}

function getJSON(url, callback){

    fetch(url + "?t=" + (new Date).getTime()).then(function(response){
        response.json().then(function(data){
            callback(data);
        });
    });

}

function loadList(data){
    var List = document.querySelector("#lista");
    
    for(index in data){
        data[index].id = index;
        var item = buildItem(data[index]);
        List.appendChild(item);
    }
}

function buildItem(data){
    var tr = document.createElement("tr");

    var td1 = document.createElement("td");
    var img = document.createElement("img");
    var strAux = ".";
    img.src = strAux.concat(data.url);
    img.alt = data.modelo;

    td1.style.width = "10%";
    td1.append(img);

    var td2 = document.createElement("td");
    td2.innerHTML = data.modelo;

    var td3 = document.createElement("td");
    td3.innerHTML = data.marca;

    var td4 = document.createElement("td");
    td4.innerHTML = data.pais;

    var td5 = document.createElement("td");
    td5.innerHTML = data.motor;

    var td6 = document.createElement("td");
    td6.innerHTML = data.decada;

    var td7 = document.createElement("td");
    var button = document.createElement("button");
    button.type = "button";
    button.value = data.id;

    if(action == "delete"){
        button.name = "eliminar";
        button.addEventListener("click", function(){ deleteItem(button)});
        button.innerHTML = "Eliminar";
    }
    else if(action == "modify"){
        button.name = "modificar";
        button.addEventListener("click", function(){ modifyItem(button)});
        button.innerHTML = "Modificar";
    }

    td7.style.width = "15%";
    td7.append(button);

    tr.append(td1);
    tr.append(td2);
    tr.append(td3);
    tr.append(td4);
    tr.append(td5);
    tr.append(td6);
    tr.append(td7);
    return tr
}

function deleteItem(button){
    window.location.href = "../php/delete.php?id=" + button.value;
}

function modifyItem(button){
    window.location.href = "../admin/modify.php?id=" + button.value;
}
