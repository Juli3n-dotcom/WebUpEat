const main = document.getElementById('main')

// menu team member
function menuTeamToggle() {
  const toggleMenu = document.querySelector('.member_menu');
  toggleMenu.classList.toggle('active')
  const canVibrate = window.navigator.vibrate
  if (canVibrate) window.navigator.vibrate(100);  

  // toggleMenu.addEventListener('mouseleave', () => {
  //  toggleMenu.classList.remove('active')
  // })

  // if (toggleMenu.classList.contains('active')) {
  //   setTimeout(() => {
  //       toggleMenu.classList.remove('active')
  //   },20000)
  // }

  main.addEventListener('click', () => {
    if (toggleMenu.classList.contains('active')) {
        toggleMenu.classList.remove('active')
  }
  })

  const notifMenu = document.querySelector('.notifications_center');
  if (notifMenu.classList.contains('active')) {
    notifMenu.classList.remove('active')
  }
}

function menuNotifToggle() {
  const notifMenu = document.querySelector('.notifications_center');
  notifMenu.classList.toggle('active')
  const canVibrate = window.navigator.vibrate
  if (canVibrate) window.navigator.vibrate(100);  

  

  // notifMenu.addEventListener('mouseleave', () => {
  //  notifMenu.classList.remove('active')
  // })

  // if (notifMenu.classList.contains('active')) {
  //   setTimeout(() => {
  //       notifMenu.classList.remove('active')
  //   },10000)
  // }

  main.addEventListener('click', () => {
    if (notifMenu.classList.contains('active')) {
        notifMenu.classList.remove('active')
    }
  })

  const toggleMenu = document.querySelector('.member_menu');
  if (toggleMenu.classList.contains('active')) {
    toggleMenu.classList.remove('active')
  }
}

var dataNotif = document.getElementById('notif')

if (dataNotif.hasAttribute('numbers')) {
    console.log(dataNotif)
      // dataNotif.classList.remove('active')
  }


// theme sombre
const themeToggler = document.getElementById('toggle-theme');

themeToggler.addEventListener('click', () => {
  document.body.classList.toggle('dark-theme-variables');

  var metaThemeColor = document.querySelector("meta[name=theme-color]");
  if (metaThemeColor.getAttribute('content') == '#f6f6f9') {
    metaThemeColor.setAttribute("content", "#181a1e");
  } else {
     metaThemeColor.setAttribute("content", "#f6f6f9");
  }
  
  
const canVibrate = window.navigator.vibrate
  if (canVibrate) window.navigator.vibrate(100);
})

let sidebar = document.querySelector('.sidebar');
let menuBtn = document.getElementById('menu-btn');
let sidebarMenuBtn = document.getElementById('sidebar-menu-btn');
let closeMenuBtn = document.getElementById('close-btn');


main.addEventListener('click', () => { 
if (sidebar.classList.contains('active')) {
       sidebar.classList.remove('active');
    }
})



menuBtn.addEventListener('click', () => {
  sidebar.classList.add('active');

  const canVibrate = window.navigator.vibrate
  if (canVibrate) window.navigator.vibrate(100);  
})

closeMenuBtn.addEventListener('click', () => {
  sidebar.classList.remove('active');

  const canVibrate = window.navigator.vibrate
  if (canVibrate) window.navigator.vibrate(100);  
})

sidebarMenuBtn.addEventListener('click', () => {
  sidebar.classList.add('active');

  const canVibrate = window.navigator.vibrate
  if (canVibrate) window.navigator.vibrate(100);  
})


let arrow = document.querySelectorAll(".arrow");
let profilContainer = document.querySelector('.sidebar .profile_content');
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e) => {
    const canVibrate = window.navigator.vibrate
    if (canVibrate) window.navigator.vibrate(100);

     let arrowParent = e.target.parentElement.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
    });
}
    