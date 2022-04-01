<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>CSS 3D Rotation Animation Effects</title>
    <link rel="stylesheet" type="text/css" href="https://demo.plantpot.works/assets/css/normalize.css">
    <link rel="stylesheet" href="https://use.typekit.net/opg3wle.css">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <style>
        @charset "utf-8";
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
html {
  font-size: 16px;
}
body {
  font-family: futura-pt, sans-serif;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
}
#container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50%;
  /* height: 100vh; */
  overflow: hidden;
  /* background: linear-gradient(-45deg, #0d0015, #3e0065); */
}
.cube {
  /* position: relative; */
  transform-style: preserve-3d;
  width: 210px;
  height: 210px;
  /* float: left; */
  left:-20%;
  animation: rotation 10s linear infinite;
}
.face {
  position: absolute;
  width: 100%;
  height: 100%;
  border: 1px solid #000;
  font-size: 150px;
  text-align: center;
  line-height: 210px;
  /* background-image: repeating-linear-gradient(0, #000 0, #000 5px, transparent 5px, transparent 65px, #000 65px, #000 70px),
                    repeating-linear-gradient(90deg, #000 0, #000 5px, transparent 5px, transparent 65px, #000 65px, #000 70px); */
}
.top {
  transform: translateY(105px) rotateX(-90deg);
  background-color: #ffde77;
  color:#fff;

}
.bottom {
  transform: translateY(-105px) rotateX(90deg);
  background-color: #905ec5;
  color:#fff;
}
.front {
  transform: translateZ(105px);
  background-color: #debefc;
  color:#fff;

}
.back {
  transform: translateZ(-105px) rotateX(180deg);
  background-color: #1b02aa;
  color:#fff;

}
.left {
  transform: translateX(-105px) rotateY(-90deg);
  background-color: #1b02aa;
  color:#fff;

}
.right {
  transform: translateX(105px) rotateY(90deg);
  background-color:#1b02aa;
  color:#fff;

}
@keyframes rotation {
  0%{
    transform: rotateX(0deg) rotateY(0deg);
  }
  100%{
    transform: rotateX(360deg) rotateY(360deg);
  }
}
    </style>
  </head>
  <body>
    <div id="container">
      <div class="cube">
        <div class="face top">
        <p>1</p>
        </div>
        <div class="face bottom">
        <p>2</p>
        </div>
        <div class="face front">
        <p>3</p>
        </div>
        <div class="face back">
        <p>4</p>
        </div>
        <div class="face left">
        <p>5</p>
        </div>
        <div class="face right">
        <p>6</p>
        </div>
      </div>
    </div>
  </body>
</html>