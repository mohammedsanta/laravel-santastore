
<style>

button,
button::after {
 padding: 16px 20px;
 font-size: 18px;
 background: linear-gradient(45deg, transparent 5%, #ff013c 5%);
 border: 0;
 color: #fff;
 letter-spacing: 3px;
 line-height: 1;
 -webkit-box-shadow: 6px 0px 0px #00e6f6;
         box-shadow: 6px 0px 0px #00e6f6;
 outline: transparent;
 position: relative;
}

button::after {
 --slice-0: inset(50% 50% 50% 50%);
 --slice-1: inset(80% -6px 0 0);
 --slice-2: inset(50% -6px 30% 0);
 --slice-3: inset(10% -6px 85% 0);
 --slice-4: inset(40% -6px 43% 0);
 --slice-5: inset(80% -6px 5% 0);
 content: "HOVER ME";
 display: block;
 position: absolute;
 top: 0;
 left: 0;
 right: 0;
 bottom: 0;
 background: linear-gradient(45deg, transparent 3%, #00e6f6 3%, #00e6f6 5%, #ff013c 5%);
 text-shadow: -3px -3px 0px #f8f005, 3px 3px 0px #00e6f6;
 -webkit-clip-path: var(--slice-0);
         clip-path: var(--slice-0);
}

button:hover::after {
 -webkit-animation: 1s glitch;
         animation: 1s glitch;
 -webkit-animation-timing-function: steps(2, end);
         animation-timing-function: steps(2, end);
}

@-webkit-keyframes glitch {
 0% {
  -webkit-clip-path: var(--slice-1);
          clip-path: var(--slice-1);
  -webkit-transform: translate(-20px, -10px);
          transform: translate(-20px, -10px);
 }

 10% {
  -webkit-clip-path: var(--slice-3);
          clip-path: var(--slice-3);
  -webkit-transform: translate(10px, 10px);
          transform: translate(10px, 10px);
 }

 20% {
  -webkit-clip-path: var(--slice-1);
          clip-path: var(--slice-1);
  -webkit-transform: translate(-10px, 10px);
          transform: translate(-10px, 10px);
 }

 30% {
  -webkit-clip-path: var(--slice-3);
          clip-path: var(--slice-3);
  -webkit-transform: translate(0px, 5px);
          transform: translate(0px, 5px);
 }

 40% {
  -webkit-clip-path: var(--slice-2);
          clip-path: var(--slice-2);
  -webkit-transform: translate(-5px, 0px);
          transform: translate(-5px, 0px);
 }

 50% {
  -webkit-clip-path: var(--slice-3);
          clip-path: var(--slice-3);
  -webkit-transform: translate(5px, 0px);
          transform: translate(5px, 0px);
 }

 60% {
  -webkit-clip-path: var(--slice-4);
          clip-path: var(--slice-4);
  -webkit-transform: translate(5px, 10px);
          transform: translate(5px, 10px);
 }

 70% {
  -webkit-clip-path: var(--slice-2);
          clip-path: var(--slice-2);
  -webkit-transform: translate(-10px, 10px);
          transform: translate(-10px, 10px);
 }

 80% {
  -webkit-clip-path: var(--slice-5);
          clip-path: var(--slice-5);
  -webkit-transform: translate(20px, -10px);
          transform: translate(20px, -10px);
 }

 90% {
  -webkit-clip-path: var(--slice-1);
          clip-path: var(--slice-1);
  -webkit-transform: translate(-10px, 0px);
          transform: translate(-10px, 0px);
 }

 100% {
  -webkit-clip-path: var(--slice-1);
          clip-path: var(--slice-1);
  -webkit-transform: translate(0);
          transform: translate(0);
 }
}

@keyframes glitch {
 0% {
  -webkit-clip-path: var(--slice-1);
          clip-path: var(--slice-1);
  -webkit-transform: translate(-20px, -10px);
          transform: translate(-20px, -10px);
 }

 10% {
  -webkit-clip-path: var(--slice-3);
          clip-path: var(--slice-3);
  -webkit-transform: translate(10px, 10px);
          transform: translate(10px, 10px);
 }

 20% {
  -webkit-clip-path: var(--slice-1);
          clip-path: var(--slice-1);
  -webkit-transform: translate(-10px, 10px);
          transform: translate(-10px, 10px);
 }

 30% {
  -webkit-clip-path: var(--slice-3);
          clip-path: var(--slice-3);
  -webkit-transform: translate(0px, 5px);
          transform: translate(0px, 5px);
 }

 40% {
  -webkit-clip-path: var(--slice-2);
          clip-path: var(--slice-2);
  -webkit-transform: translate(-5px, 0px);
          transform: translate(-5px, 0px);
 }

 50% {
  -webkit-clip-path: var(--slice-3);
          clip-path: var(--slice-3);
  -webkit-transform: translate(5px, 0px);
          transform: translate(5px, 0px);
 }

 60% {
  -webkit-clip-path: var(--slice-4);
          clip-path: var(--slice-4);
  -webkit-transform: translate(5px, 10px);
          transform: translate(5px, 10px);
 }

 70% {
  -webkit-clip-path: var(--slice-2);
          clip-path: var(--slice-2);
  -webkit-transform: translate(-10px, 10px);
          transform: translate(-10px, 10px);
 }

 80% {
  -webkit-clip-path: var(--slice-5);
          clip-path: var(--slice-5);
  -webkit-transform: translate(20px, -10px);
          transform: translate(20px, -10px);
 }

 90% {
  -webkit-clip-path: var(--slice-1);
          clip-path: var(--slice-1);
  -webkit-transform: translate(-10px, 0px);
          transform: translate(-10px, 0px);
 }

 100% {
  -webkit-clip-path: var(--slice-1);
          clip-path: var(--slice-1);
  -webkit-transform: translate(0);
          transform: translate(0);
 }
}


</style>

<a href="{{url()->previous()}}"><button>BACK</button></a>