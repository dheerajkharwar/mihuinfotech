document.getElementById("contact-form").addEventListener("submit", function(event) {
  var nameInput = document.getElementById("name");
  var emailInput = document.getElementById("email");
  var messageInput = document.getElementById("message");

  var isValid = true;

  if (nameInput.value.trim() === "") {
      nameInput.classList.add("error");
      isValid = false;
  } else {
      nameInput.classList.remove("error");
  }

  if (emailInput.value.trim() === "") {
      emailInput.classList.add("error");
      isValid = false;
  } else {
      emailInput.classList.remove("error");
  }

  if (messageInput.value.trim() === "") {
      messageInput.classList.add("error");
      isValid = false;
  } else {
      messageInput.classList.remove("error");
  }

  if (!isValid) {
      event.preventDefault();
  }
});