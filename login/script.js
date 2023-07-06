var date = new Date();
const todaydate = document.querySelector('.date');
const todayday = document.querySelector('.day');
const todaytime = document.querySelector('.time');
const noofday = ["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];

function printDate(){
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth()+1;
    var year = date.getFullYear();
    todaydate.innerHTML = day + "/" + month + "/" + year;
}
printDate();

function printDay(){
    var date = new Date();
    var today = date.getDay();
    var day = noofday[today] ;
    todayday.innerHTML = day;

}
printDay();

function printTime(){
    var date = new Date();
    var hour = date.getHours();
    var min = date.getMinutes() ;
    var sec = date.getSeconds();

    if (hour<10){
        hour = "0" + hour;
    }
    if (min<10){
        min = "0"+ min;
    }
    if (sec <10){
        sec = "0"+ sec;
    }
    var time = hour + ":" + min +":"+sec;
    document.querySelector(".time").innerHTML = time;
    setTimeout(printTime,1000);
}
printTime();











// add hovered class to selected list item 
let list = document.querySelectorAll(".sidenav li");
function activeLink(){
    list.forEach((item)=>{
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}
list.forEach(item => item.addEventListener("mouseover", activeLink));



