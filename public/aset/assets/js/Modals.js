const launchButton = document.getElementById("launchButton");
const myModal = new bootstrap.Modal(document.getElementById("staticBackdrop"));

launchButton.addEventListener("click", () => {
    myModal.show();
});