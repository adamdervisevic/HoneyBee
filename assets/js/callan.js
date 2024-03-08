const ul_container = document.querySelector(".ul_callan");
const ul_content = document.querySelector(".ul_callan > ul");
const p_container = document.querySelectorAll(".p_callan");
const p_content = document.querySelectorAll(".p_callan > div");

const arrow = document.querySelectorAll(".arrow");
const arrow_ul = document.querySelector(".arrow_ul");

const arrow_up = `<ion-icon name="chevron-up-outline"></ion-icon>`;
const arrow_down = `<ion-icon name="chevron-down-outline"></ion-icon> `;

p_container.forEach((p, id) => {
  p.onclick = () => {
    p_content.forEach((r, r_id) => {
      if (id != r_id) {
        r.style.display = "none";
        arrow[r_id].innerHTML = arrow_down;
      }
    });

    ul_content.style.display = "none";
    arrow_ul.innerHTML = arrow_down;

    if (p_content[id].style.display == "block") {
      p_content[id].style.display = "none";
      arrow[id].innerHTML = arrow_down;
    } else {
      p_content[id].style.display = "block";
      arrow[id].innerHTML = arrow_up;
    }
  };
});

ul_container.onclick = () => {
  p_content.forEach((r, id) => {
    r.style.display = "none";
    arrow[id].innerHTML = arrow_down;
  });
  if (ul_content.style.display == "block") {
    ul_content.style.display = "none";
    arrow_ul.innerHTML = arrow_down;
  } else {
    ul_content.style.display = "block";
    arrow_ul.innerHTML = arrow_up;
  }
};
