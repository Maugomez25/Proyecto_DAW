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