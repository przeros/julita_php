//change the background color

document.body.style.backgroundColor = "#e8e8e5";
//menu for small screans

var navLinks = document.getElementById("navLinks");

function showMenu() {
    navLinks.style.right = "0";
}
function hideMenu() {
    navLinks.style.right = "-200px";
}
// add new div before div id=div1 swimteam
document.body.onload = addElement;
function addElement() {

    const newDiv = document.createElement("div");

    const newContent = document.createTextNode("P.S. We love swimming!");
    newDiv.appendChild(newContent);
    console.log(newContent);
    console.log(newDiv);
    const currentDiv = document.getElementById("div1");
    document.body.appendChild(newDiv, currentDiv);
}

function test() {

    let name = document.querySelector("#name").value;
    
    let surname = document.querySelector("#surname").value;
    
    let email = document.querySelector("#email").value;
    var obj = {};
    obj.name = name;
    obj.surname = surname;
    obj.email = email;
    fetch("./odbierz.php", {method: 'POST' ,body: JSON.stringify(obj)})
            .then((response) => console.log(response))
            .catch((err) => {
                console.log(err);
                console.log(obj);
            });
    var Name = document.getElemntById("name");
    localStorage.setItem("name", input.value);
    var Surname = document.getElemntById("surname");
    sessionStorage.setItem("surname", input.value);
}
