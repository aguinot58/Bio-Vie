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

function recup_Data(id) {

    var myId = "";
    var carteCategorie = document.getElementById(String(id));
    var cartes = document.querySelectorAll(".card-cat");
    //var Page = document.getElementById("page");
    //var myPage = Page.value;
    var myPage= 1;
    let Contenant = document.getElementById("content-ajax");

    // Si la catégorie n'était pas sélectionnée, on lui ajoute une class pour pouvoir modifier le css 
    // et on filtre sur les artisans de la catégorie choisie.
    // Si elle était déjà sélectionnée, on la désélectionne afin de pouvoir réafficher tous les artisans
    if (carteCategorie.classList.contains("selection-categorie")) {
        carteCategorie.classList.remove("selection-categorie");
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

    /*if (myPage==null){
        myPage="1";
    }*/

    const Params = new URLSearchParams();

    if (myId != "all") {
        Params.append("categorie", myId);
    }
    Params.append("page", myPage+"#section-artisans");

    //console.log(myId);
    //console.log(myPage);

    fetch("/fetchData" + "?" + Params.toString() + "&?ajax=1", {
        headers: {
            "X-Requested-With": "XMLHttpRequest"
        }
    }).then(response => 
        response.json()
    ).then(data => {
        //console.log(data);
        Contenant.innerHTML = '';
        Contenant.innerHTML = data.content;
    }).catch(e => alert(e));

}
