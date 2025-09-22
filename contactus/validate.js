document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".form-box");

  form.addEventListener("submit", function (e) {
    let isValid = true;
    let messages = [];

    const firstName = form.querySelector("input[name='firstName']").value.trim();
    const lastName = form.querySelector("input[name='lastName']").value.trim();
    const email = form.querySelector("input[name='email']").value.trim();
    const phone = form.querySelector("input[name='phone']").value.trim();
    const message = form.querySelector("textarea[name='message']").value.trim();

    if (firstName === "") {
      isValid = false;
      messages.push("First name is required.");
    }

    if (lastName === "") {
      isValid = false;
      messages.push("Last name is required.");
    }

    if (email === "") {
      isValid = false;
      messages.push("Email is required.");
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      isValid = false;
      messages.push("Invalid email format.");
    }

    if (phone === "") {
      isValid = false;
      messages.push("Phone number is required.");
    } else if (!/^(\+?\d{1,3}[- ]?)?\d{7,15}$/.test(phone)) {
      isValid = false;
      messages.push("Invalid phone number.");
    }

    if (message.length < 10) {
      isValid = false;
      messages.push("Message should be at least 10 characters.");
    }

    if (!isValid) {
      e.preventDefault(); // ❌ Stop submission ONLY when invalid
      alert(messages.join("\n"));
    }
    // ✅ If valid → do NOT prevent submission → PHP will handle database insert
  });
});
