/*  
Author: Kavon Niknafs
File Name: script.js
Date: 07/24/2023
*/

//Hamburger menu function
function hamburger() {
    var menu = document.getElementById("menu-links"); //Identify nav links
    var icon = document.getElementById("icon"); //Identify hamb menu

    if (menu.style.display === "block") {
        menu.style.display = "none";		//display nav
        icon.style.backgroundColor = "#f2938c";	//Color hamb green with white
        icon.style.color = "#fff";
    } else {
        menu.style.display = "block";		//display nav
        icon.style.backgroundColor = "#fff";	//Color hamb white with green
        icon.style.color = "#f2938c";
    }
}

//Phone inputfunction phoneMask() { 
function phoneMask() {
    var num = $(this).val().replace(/\D/g, '');
    $(this).val('(' + num.substring(0, 3) + ') ' + num.substring(3, 6) + '-' + num.substring(6, 10));
}
$('[type="tel"]').keyup(phoneMask);