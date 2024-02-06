const body = document.querySelector("body");
let menu = document.querySelector("#menu-icon");
let navlist = document.querySelector(".navlist");
const hive = document.querySelector(".hive");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navlist.classList.toggle("open");
};

const sr = ScrollReveal({
  distance: "65px",
  duration: 2600,
  delay: 450,
  reset: true,
});

sr.reveal(".hero-text", { delay: 200, origin: "top" });
sr.reveal(".hero-img", { delay: 450, origin: "top" });
sr.reveal(".icons", { delay: 500, origin: "left" });
sr.reveal(".hive", {delay: 200, origin: "top"});

// custom menu change
const menu_program = document.querySelector("#menu_program");
const menu_trigger = document.querySelector("#menu_trigger");
const cenovnik = document.querySelector("#cenovnik");
const menu_program_link = document.querySelectorAll(".menu_program_link");

window.addEventListener("resize", deal_with_dropdown);
window.addEventListener("load", deal_with_dropdown);
window.addEventListener("load", hive_appear);

function hive_appear() {
  hive.classList.add("hive_opacity");
}

function add_styles() {
  menu_program.classList.add("display_toggle");
  navlist.classList.add("navlist_extend_height");
  cenovnik.classList.add("extend_padding");
}

function remove_styles() {
  menu_program.classList.remove("display_toggle");
  navlist.classList.remove("navlist_extend_height");
  cenovnik.classList.remove("extend_padding");
}

function deal_with_dropdown() {
  let isMenuVisible = false;
  if (body.offsetWidth <= 1200) {
    menu_trigger.addEventListener("mouseover", () => {
      add_styles();
      isMenuVisible = true;
    });

    menu_trigger.addEventListener("mouseout", () => {
      if (isMenuVisible) {
        remove_styles();
        isMenuVisible = false;
      }
    });
  } else if (body.offsetWidth > 1200) {
    navlist.classList.remove("navlist_extend_height");
    cenovnik.classList.remove("extend_padding");

    menu_trigger.addEventListener("mouseover", () => {
      if (document.body.offsetWidth > 1200 && !isMenuVisible) {
        menu_program.classList.add("display_toggle");
        navlist.classList.remove("navlist_extend_height");
        cenovnik.classList.remove("extend_padding");
        isMenuVisible = true;
      }
    });

    menu_trigger.addEventListener("mouseout", () => {
      if (isMenuVisible && document.body.offsetWidth > 1200) {
        remove_styles();
        isMenuVisible = false;
      }
    });
  }
}
