const checkValidation = () => {
  let valid = true;
  const emailRgx =
    /(?:[a-z0-9!#$%&'*+\x2f=?^_`\x7b-\x7d~\x2d]+(?:\.[a-z0-9!#$%&'*+\x2f=?^_`\x7b-\x7d~\x2d]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9\x2d]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9\x2d]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9\x2d]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
  const subjectInput = document.querySelector(".field-element.subject input");
  const nameInput = document.querySelector(".field-element.name input");
  const emailInput = document.querySelector(".field-element.email input");
  const sourceInput = document.querySelector(".field-element.source select");
  const messageInput = document.querySelector(
    ".field-element.textarea textarea",
  );
  const agreeInput = document.querySelector(".agree input");
  const subjectValidation = document.querySelector(
    ".field-element.subject .validation",
  );
  const nameValidation = document.querySelector(
    ".field-element.name .validation",
  );
  const emailValidation = document.querySelector(
    ".field-element.email .validation",
  );
  // const sourceValidation = document.querySelector(
  //   ".field-element.source .validation",
  // );
  const messageValidation = document.querySelector(
    ".field-element.textarea .validation",
  );
  const agreeValidation = document.querySelector(".agree .validation");

  if (subjectInput.value.length >= 5) {
    subjectValidation.classList.remove("show");
  } else {
    subjectValidation.classList.add("show");
    valid = false;
  }

  if (nameInput.value.length >= 5) {
    nameValidation.classList.remove("show");
  } else {
    nameValidation.classList.add("show");
    valid = false;
  }

  if (emailRgx.test(emailInput.value)) {
    emailValidation.classList.remove("show");
  } else {
    emailValidation.classList.add("show");
    valid = false;
  }

  if (messageInput.value.length >= 20) {
    messageValidation.classList.remove("show");
  } else {
    messageValidation.classList.add("show");
    valid = false;
  }

  if (agreeInput.checked) {
    agreeValidation.classList.remove("show");
  } else {
    agreeValidation.classList.add("show");
    valid = false;
  }

  // if (sourceInput.value) {
  //   sourceValidation.classList.remove("show");
  // } else {
  //   sourceValidation.classList.add("show");
  //   valid = false;
  // }

  const scrolledElement = document.querySelector('.validation.show')

  if (!valid)
    scrolledElement.scrollIntoView({
      behavior: "smooth",
      block: "center",
      inline: "nearest",
    });

  return valid;
};

export function initContact() {
  const form = document.querySelector("form");
  const btn = document.querySelector("form button");
  const sendedElement = document.querySelector(".form .sended");
  const sendedElementSuccess = document.querySelector(".form .sended span.success");
  const sendedElementError = document.querySelector(".form .sended span.error");

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    if (!checkValidation()) return;
    btn.setAttribute('disabled', true)

    const formData = new FormData(form);

    fetch("../../send.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        sendedElement.classList.add("show");
        if(data.success) {
          sendedElementSuccess.classList.add("show");
        } else {
          sendedElementError.classList.add("show");
        }
        sendedElement.scrollIntoView({
          behavior: "smooth",
          block: "center",
          inline: "nearest",
        });
      })
      .catch((error) => {
        sendedElement.classList.add("show");
        sendedElementError.classList.add("show");
        sendedElement.scrollIntoView({
          behavior: "smooth",
          block: "center",
          inline: "nearest",
        });
      });
  });
}
