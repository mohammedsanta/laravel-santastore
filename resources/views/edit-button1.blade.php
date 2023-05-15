<style>

.edit-button {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 12px;
  gap: 2px;
  height: 40px;
  width: 170px;
  border: none;
  background: #a549da3d;
  border-radius: 20px;
  cursor: pointer;
}

.edit-button .lable {
  line-height: 22px;
  font-size: 19px;
  color: #A649DA;
  font-family: sans-serif;
  letter-spacing: 1px;
}

.edit-button:hover {
  background: #a549da62;
}

.edit-button:hover .svg-icon {
  animation: lr 1s linear infinite;
}

@keyframes lr {
  0% {
    transform: translateX(0);
  }

  25% {
    transform: translateX(-1px);
  }

  75% {
    transform: translateX(1px);
  }

  100% {
    transform: translateX(0);
  }
}

</style>

<button class="edit-button">
  <svg class="svg-icon" fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><g stroke="#a649da" stroke-linecap="round" stroke-width="2"><path d="m20 20h-16"></path><path clip-rule="evenodd" d="m14.5858 4.41422c.781-.78105 2.0474-.78105 2.8284 0 .7811.78105.7811 2.04738 0 2.82843l-8.28322 8.28325-3.03046.202.20203-3.0304z" fill-rule="evenodd"></path></g></svg>
  <span class="lable">Edit</span>
</button>