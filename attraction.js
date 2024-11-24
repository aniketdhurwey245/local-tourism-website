// script.js
function showMoreInfo(attraction) {
    const infoBox = document.getElementById('infoBox');
    let info = '';

    if (attraction === 'fort') {
        info = 'Gwalior Fort is a hilltop fort that offers panoramic views and houses several palaces, temples, and water tanks.';
    } else if (attraction === 'palace') {
        info = 'Jai Vilas Palace features opulent decor and is home to the world\'s largest chandelier.';
    } else if (attraction === 'temple') {
        info = 'The Sas Bahu Temple showcases intricate carvings and is a prime example of 11th-century craftsmanship.';
    }

    infoBox.style.display = 'block';
    infoBox.innerHTML = `<p>${info}</p>`;
}
