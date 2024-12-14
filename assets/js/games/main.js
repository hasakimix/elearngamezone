document.addEventListener('DOMContentLoaded', function() {
    const backButton = document.querySelector('.back-button');
    if (backButton) {
      backButton.addEventListener('click', function() {
        const url = backButton.getAttribute('data-url');
        window.location.href = url;
      });
    }
  });