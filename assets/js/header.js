export function initHeader() {
  const body = document.querySelector("body");
  const hamburger = document.querySelector("nav button.hamburger");

  hamburger.addEventListener("click", () => {
    body.classList.toggle("menu");
  });
}
