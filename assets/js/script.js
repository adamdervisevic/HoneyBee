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

// const sr = ScrollReveal({
//   distance: "65px",
//   duration: 2600,
//   delay: 450,
//   reset: true,
// });

// sr.reveal(".hero-text", { delay: 200, origin: "top" });
// sr.reveal(".hero-img", { delay: 450, origin: "top" });
// sr.reveal(".icons", { delay: 500, origin: "left" });
// sr.reveal(".hive", { delay: 200, origin: "top" });

// custom menu change
const menu_program = document.querySelector("#menu_program");
const menu_trigger = document.querySelector("#menu_trigger");
const about = document.querySelector("#about");
const menu_program_link = document.querySelectorAll(".menu_program_link");

window.addEventListener("resize", deal_with_dropdown);
window.addEventListener("load", deal_with_dropdown);
// if (hive) window.addEventListener("load", hive_appear);

// function hive_appear() {
//   hive.classList.add("hive_opacity");
// }

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
const hero = document.querySelector(".intersect_point")
  ? document.querySelector(".intersect_point")
  : null;
// const reasons_why_btn = document.querySelectorAll(".btn_why")
//   ? document.querySelectorAll(".btn_why")
//   : null;
// const reason_why = document.querySelector(".reason_why")
//   ? document.querySelector(".reason_why")
//   : null;

const offer_text = document.querySelector(".offer_dynamic")
  ? document.querySelector(".offer_dynamic")
  : null;
let text =
  "✓ Verujemo da ćemo Vam pružiti samo najbolje i da ćete uz nas s lakoćom progovoriti engleski jezik, zato što smo zajedničkim trudom postigli da naša škola ima zavidan broj učenika, a jedina reklama nam je bila preporuka prethodnih polaznika.";
text = text.split("");
let text_triggered = false;
const offer_dynamic_2 = document.querySelector(".offer_dynamic_2");
let text_2 =
  "✓ Akreditovana smo škola Callan metod učenja, koji predstavlja brz, efektivan, efikasan i pre svega zabavan nacin učenja. Ovim programom i timskim radom postići ćemo merljive rezultate i moći ćete s lakoćom da komunicirate na engleskom jeziku.";
text_2 = text_2.split("");

const offer_dynamic_3 = document.querySelector(".offer_dynamic_3");
let text_3 =
  "✓ ONLINE je najbrži i najkomforniji način učenja. Preko besplatne Zoom aplikacije i naše platforme, uvodimo Vas u svet engleskog jezika. Dobićete pristup Callan aplikaciji, gde ćete moci da svakog dana vezbate i sami, uz pažljivo odabrane govorne vežbe.";
text_3 = text_3.split("");

const offer_dynamic_4 = document.querySelector(".offer_dynamic_4");
let text_4 = "Pridružite nam se i uverite se zašto baš HoneyBee.";
text_4 = text_4.split("");

const offer_dynamic_5 = document.querySelector(".offer_dynamic_5");
let text_5 =
  "Koristimo SAMO proverene metode i programe koji su dizajnirani po Vašoj meri.";
text_5 = text_5.split("");

function generate_text(text, id) {
  const intervalArticle = setInterval(add, 20);
  let counter = 0;

  function add() {
    if (id == 1) {
      offer_text.innerHTML += text[counter];
      counter++;
    } else if (id == 2) {
      offer_dynamic_2.innerHTML += text[counter];
      counter++;
    } else if (id == 3) {
      offer_dynamic_3.innerHTML += text[counter];
      counter++;
    } else if (id == 4) {
      offer_dynamic_4.innerHTML += text[counter];
      counter++;
    } else {
      offer_dynamic_5.innerHTML += text[counter];
      counter++;
    }

    if (counter == text.length) {
      clearInterval(intervalArticle);
      if (id == 1) {
        generate_text(text_5, 5);
      } else if (id == 5) {
        generate_text(text_2, 2);
        const c_link = document.createElement("a");
        c_link.href = "callan.php";
        c_link.classList.add("c_link");
        const c_img = document.createElement("img");
        c_img.src = "/assets/img/callan.png";
        c_link.appendChild(c_img);
        offer_dynamic_5.appendChild(c_link);
        c_img.classList.add("c_one");
      } else if (id == 2) {
        generate_text(text_3, 3);
      } else if (id == 3) {
        generate_text(text_4, 4);
      } else {
        return false;
      }
    }
  }
}
// scroll animation function
function animations_management(validated, validated_2) {
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
  const rect_6 = hero ? hero.getBoundingClientRect() : null;
  // rect.top = distance form the top; window.pageYOffset = total distance
  const distanceFromTop = rect ? rect.top + window.scrollY : null;
  const distanceFromTop_2 = rect_2 ? rect_2.top + window.scrollY : null;
  const distanceFromTop_3 = rect_3 ? rect_3.top + window.scrollY : null;
  const distanceFromTop_4 = rect_4 ? rect_4.top + window.scrollY : null;
  const distanceFromTop_5 = rect_5 ? rect_5.top + window.scrollY : null;
  const distanceFromTop_6 = rect_6 ? rect_6.top + window.scrollY : null;

  //
  if (distanceFromTop_6) {
    if (
      window.scrollY * 0.5 >= distanceFromTop_6 ||
      this.window.scrollY < distanceFromTop_6 ||
      validated
    ) {
      if (
        document
          .querySelector(".hero_bee")
          .classList.contains("hero_animate") &&
        validated
      ) {
        document.querySelector(".hero_bee").classList.remove("hero_animate");
      }

      setTimeout(() => {
        document.querySelector(".hero_bee").classList.add("hero_animate");
      }, 150);
    } else {
      document.querySelector(".hero_bee").classList.remove("hero_animate");
    }
  }

  if (distanceFromTop) {
    if (
      window.scrollY * 1.6 >= distanceFromTop &&
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
      (window.scrollY * 2.75 >= distanceFromTop_5 &&
        window.scrollY <= 1512 &&
        window.scrollY >= 312) ||
      validated_2
    ) {
      offer.classList.remove("reasons_why_disappear");

      if (!text_triggered) {
        text_triggered = true;
        if (!offer_text.textContent) {
          // pozovi funkciju
          generate_text(text, 1);
        }
      }
      if (
        document.querySelector(".a_bee").classList.contains("a_animate") &&
        validated_2
      ) {
        document.querySelector(".a_bee").classList.remove("a_animate");
      }

      setTimeout(() => {
        document.querySelector(".a_bee").classList.add("a_animate");
      }, 150);
    } else {
      offer.classList.add("reasons_why_disappear");
      document.querySelector(".a_bee").classList.remove("a_animate");
    }
  }
}

window.addEventListener("load", () => animations_management(false, false));
window.addEventListener("scroll", () => animations_management(false, false));

if (document.querySelector(".hero_bee")) {
  document.querySelector(".hero_bee").onclick = () => {
    if (!document.querySelector(".hero_bee").classList.contains("disabled")) {
      animations_management(true);
      document.querySelector(".hero_bee").classList.add("disabled");
      setTimeout(() => {
        document.querySelector(".hero_bee").classList.remove("disabled");
      }, 4500);
    }
  };
}
if (document.querySelector(".a_bee")) {
  document.querySelector(".a_bee").onclick = () => {
    if (!document.querySelector(".a_bee").classList.contains("disabled")) {
      animations_management(false, true);
      document.querySelector(".a_bee").classList.add("disabled");
      setTimeout(() => {
        document.querySelector(".a_bee").classList.remove("disabled");
      }, 4500);
    }
  };
}
// video skip back - forward
document.addEventListener("DOMContentLoaded", function () {
  const video = document.querySelectorAll("video");

  video.forEach((clip) => {
    // Event listener for arrow key presses
    document.addEventListener("keydown", function (e) {
      if (e.keyCode === 37) {
        // Left arrow key pressed - go back 5 seconds
        clip.currentTime -= 5;
      } else if (e.keyCode === 39) {
        // Right arrow key pressed - skip forward 5 seconds
        clip.currentTime += 5;
      }
    });
  });
});
