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
sr.reveal(".hive", { delay: 200, origin: "top" });

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

// reason why section
const reasons_why_container = document.querySelector(".reasons_why");
const reasons_why_btn = document.querySelectorAll(".section_why_hive button");
const reason_why = document.querySelector(".reason_why");

const our_teachers_container = document.querySelector(".our_teachers");
const testimonials = document.querySelector(".section_testimonials");
const contact = document.querySelector(".contact-container");
const offer = document.querySelector(".offer");

// collect value of pixel
const rect = reasons_why_container.getBoundingClientRect();
const rect_2 = our_teachers_container.getBoundingClientRect();
const rect_3 = testimonials.getBoundingClientRect();
const rect_4 = contact.getBoundingClientRect();
const rect_5 = offer.getBoundingClientRect();

// rect.top = distance form the top; window.pageYOffset = total distance
const distanceFromTop = rect.top + window.scrollY;
const distanceFromTop_2 = rect_2.top + window.scrollY;
const distanceFromTop_3 = rect_3.top + window.scrollY;
const distanceFromTop_4 = rect_4.top + window.scrollY;
const distanceFromTop_5 = rect_5.top + window.scrollY;

window.addEventListener("scroll", function () {
  if (
    window.scrollY * 2.5 >= distanceFromTop &&
    this.window.scrollY < distanceFromTop
  ) {
    reasons_why_container.classList.remove("reasons_why_disappear");
    // window.removeEventListener("scroll", arguments.callee);
  }
  if (
    window.scrollY * 2.5 >= distanceFromTop_2 &&
    this.window.scrollY < distanceFromTop_2
  ) {
    our_teachers_container.classList.remove("reasons_why_disappear");
    // window.removeEventListener("scroll", arguments.callee);
  }
  if (
    window.scrollY * 1.5 >= distanceFromTop_3 &&
    this.window.scrollY < distanceFromTop_3
  ) {
    testimonials.classList.remove("reasons_why_disappear");
    // window.removeEventListener("scroll", arguments.callee);
  }
  if (
    window.scrollY * 1.5 >= distanceFromTop_4 &&
    this.window.scrollY < distanceFromTop_4
  ) {
    contact.classList.remove("reasons_why_disappear");
    // window.removeEventListener("scroll", arguments.callee);
  }
  if (
    window.scrollY * 1.5 >= distanceFromTop_5 &&
    this.window.scrollY < distanceFromTop_5
  ) {
    offer.classList.remove("reasons_why_disappear");
    // window.removeEventListener("scroll", arguments.callee);
  }
});

reasons_why_btn.forEach(
  (btn, index) =>
    (btn.onclick = () => {
      if (!reason_why.classList.contains("reason_why_disappear")) {
        reason_why.classList.add("reason_why_disappear");
      }
      setTimeout(() => {
        if (index === 0) {
          reason_why.innerHTML =
            "Online časovi nude fleksibilnost u rasporedu, omogućavajući studentima da usklade svoje studije sa drugim obavezama kao što su posao ili porodične obaveze. Ova fleksibilnost omogućava učenicima da kreiraju personalizovane rutine učenja koje odgovaraju njihovim individualnim potrebama.";
        } else if (index === 1) {
          reason_why.innerHTML =
            "Pristupačnost:</strong> Online časovi eliminišu geografske barijere, omogućavajući studentima iz različitih pozadina i lokacija pristup kvalitetnom obrazovanju. Bez obzira da li se nalaze u ruralnim područjima ili u prometnim urbanim centrima, pojedinci mogu da se bave obrazovnim prilikama bez ograničenja fizičke udaljenosti.";
        } else {
          reason_why.innerHTML =
            "Online časovi pružaju pristup raznovrsnim resursima, uključujući multimedijalne materijale, interaktivne simulacije i virtualne laboratorije. Ova raznovrsnost unapređuje iskustvo učenja nudeći više puteva za istraživanje i razumevanje, prilagođavajući se različitim stilovima učenja.";
        }
        reason_why.classList.remove("reason_why_disappear");
      }, 500);
    })
);
