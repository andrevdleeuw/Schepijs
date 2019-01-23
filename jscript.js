function homeButton(){
    window.location.href = "index.php";
}

function shopButton(){
    window.location.href = "shop.php";
}

function contactButton(){
    window.location.href = "contact.php";
}

function loginButton(){
    window.location.href = "login.php";
}

//doet alles wat gebeurt als de pagina laadt
function loadPage(){
    
}

window.onload = loadPage();
    
//Hier de js voor het login scherm

function check(form){
    if(form.userid.value == "admin" && form.pswrd.value == "admin"){
        window.open("adminPage.php");
    }
    else{
        alert("Het wachtwoord of de gebruikersnaam is niet correct!")
    }
}

//store pagina laden

function loadStore(categoryVar) {
    if (categoryVar == 1) {
        window.location.href = "store1.php";
    } 
    else if (categoryVar == 2) {
        window.location.href = "store2.php";
    }
}

