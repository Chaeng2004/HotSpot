document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');

        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        
    const searchForm = document.querySelector('.search-form form');
    searchForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const from = document.getElementById('from').value;
        const to = document.getElementById('to').value;
        const date = document.getElementById('date').value;
        
        if (!from || !to || !date) {
            alert('Please fill in all fields');
            return;
        }

        alert(`Searching for buses from ${from} to ${to} on ${date}`);
    });
    
    const dateInput = document.getElementById('date');
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('min', today);
    
    const scrollBtn = document.getElementById('scroll-down');
    scrollBtn.addEventListener('click', function() {
        document.querySelector('.hero').scrollIntoView({
            behavior: 'smooth'
        });
    });
});