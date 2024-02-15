const body = document.querySelector("body");
let menu = document.querySelector("#menu-icon");
let navlist = document.querySelector(".navlist");

const hive = document.querySelector(".hive")
  ? document.querySelector(".hive")
  : null;

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
const about = document.querySelector("#about");
const menu_program_link = document.querySelectorAll(".menu_program_link");

window.addEventListener("resize", deal_with_dropdown);
window.addEventListener("load", deal_with_dropdown);
if (hive) window.addEventListener("load", hive_appear);

function hive_appear() {
  hive.classList.add("hive_opacity");
}

function add_styles() {
  menu_program.classList.add("display_toggle");
  navlist.classList.add("navlist_extend_height");
  about.classList.add("extend_padding");
}

function remove_styles() {
  menu_program.classList.remove("display_toggle");
  navlist.classList.remove("navlist_extend_height");
  about.classList.remove("extend_padding");
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
    about.classList.remove("extend_padding");

    menu_trigger.addEventListener("mouseover", () => {
      if (document.body.offsetWidth > 1200 && !isMenuVisible) {
        menu_program.classList.add("display_toggle");
        navlist.classList.remove("navlist_extend_height");
        about.classList.remove("extend_padding");
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
const reasons_why_container = document.querySelector(".reasons_why")
  ? document.querySelector(".reasons_why")
  : null;
const our_teachers_container = document.querySelector(".our_teachers")
  ? document.querySelector(".our_teachers")
  : null;
const testimonials = document.querySelector(".section_testimonials")
  ? document.querySelector(".section_testimonials")
  : null;
const contact = document.querySelector(".contact-container")
  ? document.querySelector(".contact-container")
  : null;
const offer = document.querySelector(".offer")
  ? document.querySelector(".offer")
  : null;

const reasons_why_btn = document.querySelectorAll(".btn_why")
  ? document.querySelectorAll(".btn_why")
  : null;
const reason_why = document.querySelector(".reason_why")
  ? document.querySelector(".reason_why")
  : null;

const offer_text = document.querySelector(".offer_dynamic")
  ? document.querySelector(".offer_dynamic")
  : null;
let text =
  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, est! Lorem ipsum dolor sit ametconsectetur adipisicing elit. Consequuntur ab voluptatibus distinctio vitae accusamus molestias!";
text = text.split("");
let text_triggered = false;
// scroll animation function
window.addEventListener("scroll", function () {
  // collect value of pixel
  const rect = reasons_why_container
    ? reasons_why_container.getBoundingClientRect()
    : null;
  const rect_2 = our_teachers_container
    ? our_teachers_container.getBoundingClientRect()
    : null;
  const rect_3 = testimonials ? testimonials.getBoundingClientRect() : null;
  const rect_4 = contact ? contact.getBoundingClientRect() : null;
  const rect_5 = offer ? offer.getBoundingClientRect() : null;

  // rect.top = distance form the top; window.pageYOffset = total distance
  const distanceFromTop = rect ? rect.top + window.scrollY : null;
  const distanceFromTop_2 = rect_2 ? rect_2.top + window.scrollY : null;
  const distanceFromTop_3 = rect_3 ? rect_3.top + window.scrollY : null;
  const distanceFromTop_4 = rect_4 ? rect_4.top + window.scrollY : null;
  const distanceFromTop_5 = rect_5 ? rect_5.top + window.scrollY : null;
  //
  if (distanceFromTop) {
    if (
      window.scrollY * 1.7 >= distanceFromTop &&
      this.window.scrollY < distanceFromTop
    ) {
      reasons_why_container.classList.remove("reasons_why_disappear");
    } else {
      reasons_why_container.classList.add("reasons_why_disappear");
    }
  }

  if (distanceFromTop_2) {
    if (
      window.scrollY * 1.45 >= distanceFromTop_2 &&
      this.window.scrollY < distanceFromTop_2
    ) {
      our_teachers_container.classList.remove("reasons_why_disappear");
    } else {
      our_teachers_container.classList.add("reasons_why_disappear");
    }
  }

  if (distanceFromTop_3) {
    if (
      window.scrollY * 1.3 >= distanceFromTop_3 &&
      this.window.scrollY < distanceFromTop_3
    ) {
      testimonials.classList.remove("reasons_why_disappear");
    } else {
      testimonials.classList.add("reasons_why_disappear");
    }
  }

  if (distanceFromTop_4) {
    let contact_multiplier = contact_class_validation ? 4 : 1.225;

    if (
      window.scrollY * contact_multiplier >= distanceFromTop_4 &&
      this.window.scrollY < distanceFromTop_4
    ) {
      contact.classList.remove("reasons_why_disappear");
    } else {
      contact.classList.add("reasons_why_disappear");
    }
  }

  if (distanceFromTop_5) {
    if (
      window.scrollY * 2.75 >= distanceFromTop_5 &&
      this.window.scrollY < distanceFromTop_5
    ) {
      offer.classList.remove("reasons_why_disappear");

      if (!text_triggered) {
        text_triggered = true;
        if (!offer_text.textContent) {
          setTimeout(() => {
            const intervalArticle = setInterval(add, 40);
            let counter = 0;
            function add() {
              offer_text.innerHTML += text[counter];
              counter++;

              if (counter == text.length) {
                clearInterval(intervalArticle);
              }
            }
          }, 1000);
        }
      }
    } else {
      offer.classList.add("reasons_why_disappear");
    }
  }
});
