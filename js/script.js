const body = document.querySelector("body");
let menu = document.querySelector("#menu-icon");
let navlist = document.querySelector(".navlist");

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

// custom menu change
const menu_program = document.querySelector("#menu_program");
const menu_trigger = document.querySelector("#menu_trigger");
const cenovnik = document.querySelector("#cenovnik");
const menu_program_link = document.querySelectorAll(".menu_program_link");

window.addEventListener("resize", deal_with_dropdown);
window.addEventListener("load", deal_with_dropdown);

function deal_with_dropdown() {
  if (body.offsetWidth <= 1155) {
    menu_trigger.addEventListener("click", () => {
      menu_program.classList.toggle("display_toggle");
      navlist.classList.toggle("navlist_extend_height");
      cenovnik.classList.toggle("extend_padding");
    });

    document.addEventListener("click", (event) => {
      if (!menu_trigger.contains(event.target)) {
        menu_program.classList.remove("display_toggle");
        navlist.classList.remove("navlist_extend_height");
        cenovnik.classList.remove("extend_padding");
      }
    });
  } else {
    let isMenuVisible = false;

    menu_trigger.addEventListener("mouseover", () => {
      if (document.body.offsetWidth > 1155 && !isMenuVisible) {
        menu_program.classList.add("display_toggle");
        isMenuVisible = true;
      }
    });

    menu_trigger.addEventListener("mouseout", () => {
      if (isMenuVisible) {
        menu_program.classList.remove("display_toggle");
        isMenuVisible = false;
      }
    });
  }
}
