const shape = document.querySelector("#shapes");
const rhcard = document.querySelectorAll(".sec");
const container = document.querySelector(".section-container");

var shapeVal = "";
var inpFlag = 0;

var values = new Array();
var units = new Array();

function toggleDisplay(arr, index) {
  for (var i = 0; i < arr.length; i++) {
    if (i === index) {
      arr[i].style.display = "block";
    } else {
      arr[i].style.display = "none";
    }
  }
}

shape.addEventListener("change", () => {
  shapeVal = shape.value;

  if (shapeVal === "sphere") {
    document.getElementById("r-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/ball.png";
    toggleDisplay(rhcard, 0);
    inpFlag = 1;
  } else if (shapeVal === "cone") {
    document.getElementById("rh-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/cone.png";
    toggleDisplay(rhcard, 1);
    inpFlag = 2;
  } else if (shapeVal === "capsule") {
    document.getElementById("rh-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/capsule.png";
    toggleDisplay(rhcard, 1);
    inpFlag = 2;
  } else if (shapeVal === "cylinder") {
    document.getElementById("rh-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/cylinder.png";
    toggleDisplay(rhcard, 1);
    inpFlag = 2;
  } else if (shapeVal === "cube") {
    document.getElementById("c-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/cube.png";
    toggleDisplay(rhcard, 2);
    inpFlag = 1;
  } else if (shapeVal === "r-tank") {
    document.getElementById("rt-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/prism.png";
    toggleDisplay(rhcard, 3);
    inpFlag = 3;
  } else if (shapeVal === "s-cap") {
    document.getElementById("sc-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/cap.png";
    toggleDisplay(rhcard, 4);
    inpFlag = 3;
  } else if (shapeVal === "c-frustum") {
    document.getElementById("cf-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/conical-frustum.png";
    toggleDisplay(rhcard, 5);
    inpFlag = 3;
  } else if (shapeVal === "ellipsoid") {
    document.getElementById("e-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/ellipsoid.png";
    toggleDisplay(rhcard, 6);
    inpFlag = 3;
  } else if (shapeVal === "s-pyramid") {
    document.getElementById("sp-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/square-pyramid.png";
    toggleDisplay(rhcard, 7);
    inpFlag = 2;
  } else if (shapeVal === "tube") {
    document.getElementById("t-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/tube.png";
    toggleDisplay(rhcard, 8);
    inpFlag = 3;
  }
});

container.addEventListener("click", (event) => {
  const isButton = event.target.className;
  if (isButton === "btn-submit") {
    if (inpFlag === 1) {
      values.push();
    }
  }
});

console.log(values[0]);
