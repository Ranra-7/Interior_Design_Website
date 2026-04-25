document.getElementById("ch1").style.backgroundImage = "url(./Images/Restaurant.jpg)";
document.getElementById("ch2").style.backgroundImage = "url(./Images/office.jpg)";
document.getElementById("ch3").style.backgroundImage = "url(./Images/wellness.jpg)";
document.getElementById("ch4").style.backgroundImage = "url(./Images/Home.jpg)";

const cards = document.querySelectorAll(".ch");
cards.forEach(card =>
{
    const text = card.querySelector(".text-over");

    card.addEventListener("mouseenter", () => {
        text.style.opacity = "1";
        text.style.transform = "scale(3)";
    }
    );
    card.addEventListener("mouseleave", () => {
      text.style.opacity = "0";
      text.style.transform = "scale(1)";
    });
})

document.getElementById("img1").style.backgroundImage = "url(./Images/before1.jpg)";
document.getElementById("img2").style.backgroundImage = "url(./Images/before2.jpg)";
document.getElementById("img3").style.backgroundImage = "url(./Images/before3.jpg)";


const img1 = document.getElementById("img1");
const img2 = document.getElementById("img2");
const img3 = document.getElementById("img3");



img1.onclick = function() {
  if (img1.style.backgroundImage.includes("before1.jpg")) {
    img1.style.backgroundImage = "url(./Images/after1.jpg)";
  } else {
    img1.style.backgroundImage = "url(./Images/before1.jpg)";
  }
};

img2.onclick = function() {
  if (img2.style.backgroundImage.includes("before2.jpg")) {
    img2.style.backgroundImage = "url(./Images/after2.jpg)";
  } else {
    img2.style.backgroundImage = "url(./Images/before2.jpg)";
  }
};

img3.onclick = function() {
  if (img3.style.backgroundImage.includes("before3.jpg")) {
    img3.style.backgroundImage = "url(./Images/after3.jpg)";
  } else {
    img3.style.backgroundImage = "url(./Images/before3.jpg)";
  }
};





