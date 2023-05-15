<style>

button {
  background: transparent;
  color: #fff;
  border: 3px solid #fff;
  border-radius: 50px;
  padding: 0.8rem 2rem;
  font: 18px "Margarine", sans-serif;
  outline: none;
  cursor: pointer;
  position: relative;
  -webkit-transition: 0.2s ease-in-out;
  transition: 0.2s ease-in-out;
  letter-spacing: 2px;
}

.name {
  width: 100%;
  text-align: center;
  padding: 0 0 3rem;
  padding-top: 4rem;
  font: 500 14px "Rubik", sans-serif;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
}

.button-parrot .parrot {
  position: absolute;
  width: 60px;
  text-align: center;
  -webkit-animation: blink 0.8s infinite;
          animation: blink 0.8s infinite;
  color: transparent;
}

.button-parrot .parrot:before {
  content: "Click Me!";
}

.button-parrot .parrot:nth-child(1) {
  top: -30px;
  left: -40px;
  font: 12px/1 "Margarine", sans-serif;
  -webkit-transform: rotate(-20deg);
      -ms-transform: rotate(-20deg);
          transform: rotate(-20deg);
  -webkit-animation-duration: 0.5s;
          animation-duration: 0.5s;
}

.button-parrot .parrot:nth-child(2) {
  font: 12px/1 "Margarine", sans-serif;
  right: -40px;
  top: -20px;
  -webkit-transform: rotate(15deg);
      -ms-transform: rotate(15deg);
          transform: rotate(15deg);
  -webkit-animation-duration: 0.3s;
          animation-duration: 0.3s;
}

.button-parrot .parrot:nth-child(3) {
  font: 16px/1 "Margarine", sans-serif;
  top: -60px;
  left: 15px;
  -webkit-transform: rotate(10deg);
      -ms-transform: rotate(10deg);
          transform: rotate(10deg);
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
}

.button-parrot .parrot:nth-child(4) {
  font: 18px/1 "Margarine", sans-serif;
  top: -70px;
  left: 95px;
  -webkit-transform: rotate(2deg);
      -ms-transform: rotate(2deg);
          transform: rotate(2deg);
  -webkit-animation-duration: 0.7s;
          animation-duration: 0.7s;
}

.button-parrot .parrot:nth-child(5) {
  font: 14px/1 "Margarine", sans-serif;
  top: 80px;
  left: 105px;
  -webkit-transform: rotate(-20deg);
      -ms-transform: rotate(-20deg);
          transform: rotate(-20deg);
  -webkit-animation-duration: 0.8s;
          animation-duration: 0.8s;
}

.button-parrot .parrot:nth-child(6) {
  font: 12px/1 "Margarine", sans-serif;
  top: 80px;
  left: 5px;
  -webkit-transform: rotate(10deg);
      -ms-transform: rotate(10deg);
          transform: rotate(10deg);
  -webkit-animation-duration: 1.2s;
          animation-duration: 1.2s;
}

.button-parrot button:hover .parrot:before {
  content: "Do it!";
  width: 70px;
}

@-webkit-keyframes blink {
  25%, 75% {
    color: transparent;
  }

  40%, 60% {
    color: #fff;
  }
}

@keyframes blink {
  25%, 75% {
    color: transparent;
  }

  40%, 60% {
    color: #fff;
  }
}

</style>

<div class="item button-parrot" style="--bg-color: #2c3e50">
    <button>Click Me!
      <div class="parrot"></div>
      <div class="parrot"></div>
      <div class="parrot"></div>
      <div class="parrot"></div>
      <div class="parrot"></div>
      <div class="parrot"></div>
    </button>
  </div>