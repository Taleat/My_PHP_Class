// document.addEventListener("DOMContentLoaded", function () {
  // e.preventDefault();
    var chpassword = document.getElementById("changePass");
    var about = document.getElementById("cards");
    var passwordForm = document.getElementById("passwordForm");
    var showGrades = document.getElementById("showGrades");
    var showCourse = document.getElementById("showCourse");
    var showResult = document.getElementById("showResult");

    chpassword.addEventListener("click", function (event) {
      event.preventDefault();
      about.style.display = "none";
    //    passwordForm.style.display = "block";
     passwordForm.style.display = "flex";
    });
//   });
showGrades.addEventListener("click", function (event) {
    event.preventDefault();
    about.style.display = "none";
     passwordForm.style.display = "none";
  });
showCourse.addEventListener("click", function (event) {
    event.preventDefault();
    about.style.display = "none";
     passwordForm.style.display = "none";
  });
showResult.addEventListener("click", function (event) {
    event.preventDefault();
    about.style.display = "none";
     passwordForm.style.display = "none";
  });

  document.querySelectorAll(".links").forEach(link => {
    link.addEventListener("click", () => {
        // link.classList.remove("active");
        removeActiveState();
        link.classList.add("active");
    })
  });
  function removeActiveState(){
    document.querySelectorAll(".links").forEach(link => {
        link.classList.remove("active");
    })
  }