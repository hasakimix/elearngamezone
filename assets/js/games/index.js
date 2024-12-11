const track = document.querySelector('.carousel-track');
const boxes = Array.from(track.children);
const leftButton = document.getElementById('leftArrow');
const rightButton = document.getElementById('rightArrow');

let currentIndex = Math.floor(boxes.length / 2); // Start with the middle box
const boxWidth = boxes[0].getBoundingClientRect().width;

// Arrange boxes in a row
const setBoxPosition = (box, index) => {
  box.style.left = `${index * boxWidth}px`;
};
boxes.forEach(setBoxPosition);

// Update active box styling
const updateActiveBox = () => {
  boxes.forEach((box, index) => {
    if (index === currentIndex) {
      box.classList.add('active');
    } else {
      box.classList.remove('active');
    }
  });
};

// Move to the target box
const moveToBox = () => {
  const translateValue = currentIndex * boxWidth - boxWidth; // Center the middle box
  track.style.transform = `translateX(-${translateValue}px)`;
  updateActiveBox();
};

// Loop carousel functionality
const loopToStart = () => {
  if (currentIndex === boxes.length) {
    currentIndex = 0;
  } else if (currentIndex === -1) {
    currentIndex = boxes.length - 1;
  }
};

// Event listeners for buttons
leftButton.addEventListener('click', () => {
  currentIndex--;
  loopToStart();
  moveToBox();
});

rightButton.addEventListener('click', () => {
  currentIndex++;
  loopToStart();
  moveToBox();
});


setInterval(autoRotate, 3000); // Rotate every 3 seconds

// Initial setup
moveToBox();
updateActiveBox();
