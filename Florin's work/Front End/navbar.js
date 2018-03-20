'use strict'

function showMenu(){
    var menuEl = document.getElementsByClassName('icon')[0];
var dropdownEl = document.getElementsByClassName('basic-navbar-buttons-wrapper')[0];
var backdropEl = document.getElementsByClassName('backdrop')[0];
dropdownEl.className = dropdownEl.className.replace('is-hidden', '');
backdropEl.className = backdropEl.className.replace('is-hidden', '');
    menuEl.className += " is-hidden";

}

function closeMenu(){
    var menuEl = document.getElementsByClassName('icon')[0];
var dropdownEl = document.getElementsByClassName('basic-navbar-buttons-wrapper')[0];
var backdropEl = document.getElementsByClassName('backdrop')[0];
    
menuEl.className = menuEl.className.replace('is-hidden', '');
    dropdownEl.className += " is-hidden";
    backdropEl.className += " is-hidden";
}