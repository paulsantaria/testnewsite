    
var $burger = document.getElementById('cambia')
var $toggleM = document.getElementById('escucha')
var $action = document.getElementById('action')
var $noScroll = document.getElementById('body')

function ico(){
    $toggleM.classList.toggle('icoanimate')
}
function noScroll(){
    $noScroll.classList.toggle('no-scroll')
}
function menu(){
    $burger.classList.toggle('open');
};
function toAction(){
    $action.classList.toggle('openAction')
}

$toggleM.addEventListener('click', ico)
$toggleM.addEventListener('click', noScroll)
$toggleM.addEventListener('click', menu);
$toggleM.addEventListener('click', toAction);
