// Darkmode-Lightmode
const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");
let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}
let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}
modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});
sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})

// todolist
let checkboxes = document.querySelectorAll("input[type='checkbox']");
checkboxes.forEach(function (checkbox) {
	checkbox.addEventListener("click", checkboxHandler);
});
function checkboxHandler() {
	if (this.checked === true) {
		this.closest(".checkbox-group").classList.add("checked");
	} else {
		this.closest(".checkbox-group").classList.remove("checked");
	}
}
// In progress task
window.onload = function () {
    if (
      document.querySelectorAll(".progress").length > 0 &&
      document.querySelectorAll(".progress [data-progress]").length > 0
    ) {
      // Get all elements with 'data-progress' attribute and run the 'AnimateProgress' funcion with each one
      document
        .querySelectorAll(".progress [data-progress]")
        .forEach((x) => AnimateProgress(x));
    }
  };
  
  function AnimateProgress(el) {
    // Get the element that came as parameter and add the class 'animated-progress' on it
    el.className = "animate-progress";
    // Set the attribute 'style' of this element with the custom attribute '--animate-progress' and the value of 'data-progress' as the width value
    el.setAttribute(
      "style",
      `--animate-progress:${el.getAttribute("data-progress")}%;`
    );
    // After this the CSS make its magic
  }
  
