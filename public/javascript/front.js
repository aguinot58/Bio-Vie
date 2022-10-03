function showResponsiveMenu() {
    var menu = document.getElementById("topnav_responsive_menu");
    var icon = document.getElementById("topnav_hamburger_icon");
    var root = document.getElementById("root");
    if (menu.className === "") {
        menu.className = "open";
        icon.className = "open";
        root.style.overflowY = "hidden";
        root.style.overflowX = "hidden";
    } else {
        menu.className = "";                    
        icon.className = "";
        root.style.overflowY = "";
        root.style.overflowX = "";
    }
}

function recup_Data(id, myPage=1, pagination='no') {

    var carteCategorie = document.getElementById(String(id));
    var cartes = document.querySelectorAll(".card-cat");
    let Contenant = document.getElementById("content-ajax");

    // Si la catégorie n'était pas sélectionnée, on lui ajoute une class pour pouvoir modifier le css 
    // et on filtre sur les artisans de la catégorie choisie.
    // Si elle était déjà sélectionnée, on la désélectionne afin de pouvoir réafficher tous les artisans
    if (pagination != 'yes') {
        if (carteCategorie != null) {
            if (carteCategorie.classList.contains("selection-categorie")) {
                carteCategorie.classList.remove("selection-categorie");
                console.log("test");
                myId = "all";
            } else {
                cartes.forEach(function (carte){
                    if (carte.classList.contains("selection-categorie")) {
                        carte.classList.remove("selection-categorie");
                    }
                });
                carteCategorie.classList.add("selection-categorie");
                myId = id;
            }
        } else {
            myId = id;
        }
    } else {
        if (isNaN(id)){
            myId = "all";
        } else {
            myId = id;
        }
    }

    const Params = new URLSearchParams();

    Params.append("page", myPage+"#section-artisans");
    if (myId != 'all') {
        Params.append("categorie", myId);
    }

    fetch("/fetchData" + "?" + Params.toString() + "&?ajax=1", {
        headers: {
            "X-Requested-With": "XMLHttpRequest"
        }
    }).then(response => 
        response.json()
    ).then(data => {
        Contenant.innerHTML = '';
        Contenant.innerHTML = data.content;
    }).catch(e => alert(e));

}
