const photoInput = document.getElementById("photoInput");
const saveButton = document.querySelector(".save-btn");

// Show file input when 'Change Photo' is clicked
document.getElementById("uploadTrigger").addEventListener("click", () => {
  photoInput.click();
});

// Toggle save button visibility when file is selected
photoInput.addEventListener("change", () => {
  if (photoInput.files.length > 0) {
    saveButton.style.display = "inline-block";
  } else {
    saveButton.style.display = "none";
  }

}
);
