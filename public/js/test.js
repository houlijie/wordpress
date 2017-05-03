// 猜数字
var secretNum = prompt('please enter your num between 1 to 50:');
secretNum = parseInt(secretNum);
switch (secretNum) 
{
    case 10:
        document.write('too low');
        break;
    case 20:
        document.write('you\'re close');
        break;
    case 30:
        document.write('congrates! ');
        break;
    default:
        document.write('you\'re to high');
        break;
}
document.write("<br>continue here.....");


$(document).ready(function(){
    // alert('222');
})
document.querySelector('html').onclick = function(){
    // alert('stop poking me!');
}

var myImage = document.querySelector('img');

myImage.onclick = function(){
    var mySrc = myImage.getAttribute('src');
    if(mySrc === 'images/laravel-1.jpg') {
        myImage.setAttribute('src', 'images/lumen.jpg');
    } else {
        myImage.setAttribute('src', 'images/laravel-1.jpg');
    }
}

var myButton = document.querySelector('button');
var myHeading = document.querySelector('h1');
if(!localStorage.getItem('name')){
    setUserName();
} else {
    var storedName = localStorage.getItem('name');
    myHeading.innerHTML = 'Mozila is cool, ' + storedName;
}

myButton.onclick = function(){
    setUserName();
}

function setUserName(){
    var myName = prompt('please enter your name');
    localStorage.setItem('name', myName);
    myHeading.innerHTML = 'Mozila is cool, ' + myName;
}