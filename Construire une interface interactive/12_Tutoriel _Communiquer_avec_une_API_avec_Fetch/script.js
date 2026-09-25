const API_URL = 'backend/api.php';

const tableBody = document.querySelector('#table-categories-body');

function chargerCategories() {

    fetch(API_URL)

        .then(response => response.json())

        .then(result => {

            tableBody.innerHTML = '';

            result.data.forEach(categorie => {

                tableBody.insertAdjacentHTML('beforeend', `
                    <tr>
                        <td>${categorie.nom}</td>
                        <td>${categorie.couleur}</td>
                    </tr>
                `);
            });

        });
}

document.addEventListener('DOMContentLoaded', () => {

    chargerCategories();

});