export function initVideo () {
  const images = [...document.querySelectorAll(".element-wrapper img")];

  const createIframe = (id) => {
    const iframe = document.createElement('iframe')
    iframe.src = `https://www.tiktok.com/embed/${id}`;
    iframe.width = 325
    iframe.height = '100%'
    iframe.loading = 'lazy'

    return iframe
  }

  const loadIframe = (image) => {
    if(getCookie('marketing_consent') === 'false') return
    const id = image.dataset.id;
    const container = image.closest(".element-wrapper");
    const iframe = createIframe(id);
    container.textContent = "";
    container.appendChild(iframe);
  }

  for (let image of images) {
    image.addEventListener("click", () => loadIframe(image));
  }

  function getCookie(name) {
    const cookies = document.cookie.split("; ");

    for (let cookie of cookies) {
      const [key, value] = cookie.split("=");

      if (key === name) {
        return value;
      }
    }

    return null;
  }
}