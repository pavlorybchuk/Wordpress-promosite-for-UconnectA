tailwind.config = {
  theme: {
    extend: {
      colors: {
        "uconnect-blue": "#2563eb",
        "uconnect-light": "#dbeafe",
        "uconnect-dark": "#1e40af",
      },
    },
  },
};

window.FontAwesomeConfig = {
  autoReplaceSvg: "nest",
};

const faq_btns = document.querySelectorAll(".faq-btn");
faq_btns.forEach((el) => {
  el.addEventListener("click", () => {
    const content = el.nextElementSibling;
    const icon = el.firstElementChild.lastElementChild;
    if (content.classList.contains("hidden")) {
      content.classList.remove("hidden");
      icon.classList.add("rotate-180");
    } else {
      content.classList.add("hidden");
      icon.classList.remove("rotate-180");
    }
  });
});

let popup_timeout;
function show_popup(popup_text, is_bad = false) {
  const popup_message = document.querySelector("#popup");
  if (popup_timeout) {
    popup_message.classList.add("hide");
    clearTimeout(popup_timeout);
    popup_timeout = 0;
  }
  popup_message.firstElementChild.textContent = popup_text;
  if (is_bad) {
    popup_message.style.setProperty("--border-col", "var(--color-bad)");
  } else {
    popup_message.style.setProperty("--border-col", "var(--color-good)");
  }
  popup_message.classList.remove("hide");
  popup_timeout = setTimeout(() => {
    popup_message.classList.add("hide");
  }, 4000);
}

function validateEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

const page_form = document.querySelector("#page_form");
const sub_btn = document.querySelector("#get_beta");

page_form
  .querySelector("input[type='checkbox']")
  .addEventListener("click", (e) => {
    if (page_form.querySelector("input[type='checkbox']").checked) {
      sub_btn.disabled = false;
      sub_btn.classList.remove("disabled");
    } else {
      sub_btn.disabled = true;
      sub_btn.classList.add("disabled");
    }
  });

page_form.addEventListener("submit", (e) => {
  e.preventDefault();
  const data_inputs = {
    email: page_form.firstElementChild.firstElementChild,
    platform: page_form.querySelector("select"),
  };

  if (validateEmail(data_inputs.email.value)) {
    show_popup(
      "You was successfully added to the beta-testing. Wait for more news and versions on your e-mail box"
    );
  } else {
    show_popup("Invalid email. Please, try again.", true);
  }
});

let lastScroll = 0;
const header = document.querySelector("#header");
window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll > lastScroll && currentScroll > 50) {
    header.classList.add("hide");
  } else {
    header.classList.remove("hide");
  }
  lastScroll = currentScroll;
});
