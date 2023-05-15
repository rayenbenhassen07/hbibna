const observer = new IntersectionObserver(entries => {
entries.forEach(entry => {
    if (entry.isIntersecting) {
    entry.target.classList.add('animated');
        } else {
    entry.target.classList.remove('animated');
        }
    });
});
  
const items = document.querySelectorAll('.item');
items.forEach(item => {
    observer.observe(item);
});