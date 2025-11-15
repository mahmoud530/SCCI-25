const header = document.getElementById("bars");
const ul = document.getElementById("lists");
const icon = document.getElementById("list_icon");

icon.addEventListener("click", () => {
  if (header.style.height == "10vh") {
    header.style.height = "50vh";
    header.style.transition = "0.2s";
    document.getElementById("nav").style.height = "20%";
    ul.style.display = "flex";
  } else {
    header.style.height = "10vh";
    header.style.transition = "0.2s";
    ul.style.display = "none";
  }
});
