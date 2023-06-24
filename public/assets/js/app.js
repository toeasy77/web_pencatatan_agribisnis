window.addEventListener("DOMContentLoaded", () => {
  const btnSignUp = document.querySelector(".btn-sign-up");
  const btnSignIn = document.querySelector(".btn-sign-in");
  const bgLogin = document.querySelector(".bg-login");

  btnSignUp.addEventListener("click", function (e) {
    e.preventDefault();
    bgLogin.classList.remove("right-0");
    bgLogin.classList.remove("slide-to-right");
    bgLogin.classList.add("slide-to-left");
  });

  btnSignIn.addEventListener("click", function (e) {
    e.preventDefault();
    bgLogin.classList.add("right-0");
    bgLogin.classList.remove("slide-to-left");
    bgLogin.classList.add("slide-to-right");
  });
});
