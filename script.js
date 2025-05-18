function validateForm() {
    const message = document.getElementById("message").value;
    if (message.trim() === "") {
      alert("Please enter a message before submitting.");
      return false;
    }
    return true;
  }