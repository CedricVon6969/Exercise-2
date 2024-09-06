document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.team-picture');
    const infoDiv = document.getElementById('information');
    
    images.forEach(image => {
        image.addEventListener('click', () => {
            const data = JSON.parse(image.getAttribute('data-information'));
            document.getElementById('name').textContent = `Name: ${data.name}`;
            document.getElementById('contact').textContent = `Contact: ${data.contact}`;
            document.getElementById('food').textContent = `Favorite Food/s: ${data.food}`;
            document.getElementById('age').textContent = `Age: ${data.age}`;
        });
    });
});
