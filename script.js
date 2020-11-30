//Types js works
var typed = new Typed(".typedelement", {
  strings: ["Web Development", "Application Development", "Digital Marketing"],
  typeSpeed: 50,
  loop: true,
  showCursor: true,
  backDelay: 1000,
  backSpeed: 50,
  smartBackspace: true,

});

//particle.js
particlesJS("particles-js", {
  particles: {
    number: { value: 80, density: { enable: true, value_area: 800 } },
    color: { value: "#ffffff" },
    shape: {
      type: "circle",
      stroke: { width: 0, color: "#000000" },
      polygon: { nb_sides: 5 },
      image: { src: "img/github.svg", width: 100, height: 100 },
    },
    opacity: {
      value: 0.5,
      random: false,
      anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false },
    },
    size: {
      value: 3,
      random: true,
      anim: { enable: false, speed: 40, size_min: 0.1, sync: false },
    },
    line_linked: {
      enable: true,
      distance: 150,
      color: "#ffffff",
      opacity: 0.4,
      width: 1,
    },
    move: {
      enable: true,
      speed: 6,
      direction: "none",
      random: false,
      straight: false,
      out_mode: "out",
      bounce: false,
      attract: { enable: false, rotateX: 600, rotateY: 1200 },
    },
  },
  interactivity: {
    detect_on: "window",
    events: {
      onhover: { enable: true, mode: "grab" },
      onclick: { enable: true, mode: "bubble" },
      resize: true,
    },
    modes: {
      grab: { distance: 227.75220560030692, line_linked: { opacity: 1 } },
      bubble: {
        distance: 143.84349827387805,
        size: 10,
        duration: 2,
        opacity: 8,
        speed: 3,
      },
      repulse: { distance: 200, duration: 0.4 },
      push: { particles_nb: 4 },
      remove: { particles_nb: 2 },
    },
  },
  retina_detect: true,
});

//onscroll navbar
// window.onscroll = () => {
//   const navbar = document.querySelector(".navbar");
//   if (this.scrollY <= 10) {
//     navbar.style.backgroundColor = "Transparent";
//     navbar.style.boxShadow = "0px 0px 0px 0px";
//   }
//   else {
//     navbar.style.backgroundColor = "#000";
//     navbar.style.boxShadow = "0px 2px 20px 0px rgba(255,255,255,0.52)";
//     navbar.style.webkitBoxShadow = "0px 2px 20px 0px rgba(255,255,255,0.52)";
//     navbar.style.mozBoxShadow = "0px 2px 20px 0px rgba(255,255,255,0.52)";
//   }
// };

//Project Div
//Project Div

//Servies
$(".js-tilt").tilt({
  scale: 1.3,
});

$(".typedelement").tilt({
  scale: 1.5,
});



//BRAND TEXT
const target = window.document.getElementsByClassName("brandname")[0];

const flickerLetter = (letter) =>
  `<span style="animation: text-flicker-in-glow ${
    Math.random() * 4
  }s linear both ">${letter}</span>`;

const colorLetter = (letter) =>
  `<span style="color: hsla(${Math.random() * 360},${
    Math.random() * 360
  }, 100%, 1);">${letter}</span>`;

const flickerAndColorText = (text) =>
  text.split("").map(flickerLetter).map(colorLetter).join("");

const neonGlory = (target) =>
  (target.innerHTML = flickerAndColorText(target.textContent));

neonGlory(target);
target.onclick = ({ target }) => neonGlory(target);
//BRAND TEXT

//Loader Effect

//Loader Effect
