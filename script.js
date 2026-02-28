// Maison Itoko JS
console.log("Maison Itoko loaded 🌸");

function increase(btn) {
  let input = btn.parentElement.querySelector("input");
  input.value = parseInt(input.value) + 1;
}

function decrease(btn) {
  let input = btn.parentElement.querySelector("input");
  let value = parseInt(input.value);

  if (value > 1) {
    input.value = value - 1;
  }
}