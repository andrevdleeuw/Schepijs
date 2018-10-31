function homeButton(){
    window.location.href = "index.php";
}

function shopButton(){
    window.location.href = "shop.php";
}

function contactButton(){
    window.location.href = "contact.php";//contact.php bestaat nog niet
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
