
  //light and dark mode

  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
    var element = document.body;

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Dark Mode"; 
        moreText.style.display = "none";
        element.classList.toggle("dark-mode");
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Light Mode"; 
        moreText.style.display = "inline";
        element.classList.toggle("dark-mode");
    }
    }
