export function initTooltips(tooltips) {
  for (let toolitp of tooltips) {
    toolitp.addEventListener("click", () => {
      toolitp.classList.toggle("active");
    });
  }
}
