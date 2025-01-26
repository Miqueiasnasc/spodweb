const previewBox = document.getElementById("preview");
const cssOutput = document.getElementById("css-output");

const inputs = {
  topLeft: document.getElementById("top-left"),
  topRight: document.getElementById("top-right"),
  bottomRight: document.getElementById("bottom-right"),
  bottomLeft: document.getElementById("bottom-left"),
};

function updateBorderRadius() {
  const topLeft = inputs.topLeft.value;
  const topRight = inputs.topRight.value;
  const bottomRight = inputs.bottomRight.value;
  const bottomLeft = inputs.bottomLeft.value;

  const borderRadius = `${topLeft}% ${topRight}% ${bottomRight}% ${bottomLeft}%`;
  previewBox.style.borderRadius = borderRadius;
  cssOutput.textContent = `border-radius: ${borderRadius};`;
}

Object.values(inputs).forEach(input => {
  input.addEventListener("input", updateBorderRadius);
});

// Initialize default values
updateBorderRadius();
