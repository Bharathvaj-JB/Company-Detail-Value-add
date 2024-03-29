function validateForm() {
  var dob = document.getElementById('dob').value;
  var dobMessage = document.getElementById('dobMessage');

  var today = new Date();
  var selectedDate = new Date(dob);

  if (selectedDate <= today) {
      dobMessage.innerHTML = "Date of birth is valid.";
      return true;
  } else {
      dobMessage.innerHTML = "Date of birth is not valid.";
      return false;
  }
}
