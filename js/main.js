const shape = document.querySelector("#shapes");
const rhcard = document.querySelectorAll(".sec");

var shapeVal = "";

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
  } else if (shapeVal === "cone") {
    document.getElementById("rh-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/cone.png";
    toggleDisplay(rhcard, 1);
  } else if (shapeVal === "capsule") {
    document.getElementById("rh-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/capsule.png";
    toggleDisplay(rhcard, 1);
  } else if (shapeVal === "cylinder") {
    document.getElementById("rh-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/cylinder.png";
    toggleDisplay(rhcard, 1);
  } else if (shapeVal === "cube") {
    document.getElementById("c-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/cube.png";
    toggleDisplay(rhcard, 2);
  } else if (shapeVal === "r-tank") {
    document.getElementById("rt-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/prism.png";
    toggleDisplay(rhcard, 3);
  } else if (shapeVal === "s-cap") {
    document.getElementById("sc-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/cap.png";
    toggleDisplay(rhcard, 4);
  } else if (shapeVal === "c-frustum") {
    document.getElementById("cf-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/conical-frustum.png";
    toggleDisplay(rhcard, 5);
  } else if (shapeVal === "ellipsoid") {
    document.getElementById("e-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/ellipsoid.png";
    toggleDisplay(rhcard, 6);
  } else if (shapeVal === "s-pyramid") {
    document.getElementById("sp-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/square-pyramid.png";
    toggleDisplay(rhcard, 7);
  } else if (shapeVal === "tube") {
    document.getElementById("t-pic").src =
      "https://d26tpo4cm8sb6k.cloudfront.net/img/tube.png";
    toggleDisplay(rhcard, 8);
  }
});
