// const body = document.querySelector("body"),
//       modeToggle = document.querySelector(".mode-toggle"),
//       sidebarToggle = document.querySelector(".sidebar-toggle"),
//       sidebar = document.querySelector("nav");

// modeToggle.addEventListener("click", () => {
//     body.classList.toggle("dark");
// });

// sidebarToggle.addEventListener("click", () =>{
//     sidebar.classList.toggle("close");
// });

const alertPlaceholder = document.getElementById('liveAlertPlaceholder');

const alerta = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper);
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alerta('Nice, you triggered this alert message!', 'success');
  })
}

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
}












var btn = document.querySelector('.container');

function random(number) {
  return Math.floor(Math.random()*(number+1));
}

btn.onclick = function() {
  var rndCol = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';
  document.btn.style.backgroundColor = rndCol;
}


function carregando(){
  setInterval(function () {element.innerHTML = "<div class= spinner-border role= status><span class='visually-hidden'>Loading...</span></div>"}, 1000);console.log(element);

}
