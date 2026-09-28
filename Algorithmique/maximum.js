let nombres = [12, 5, 27, 9, 18];

console.log("Tableau :", nombres);

let maximum = nombres[0];

for (let i = 1; i < nombres.length; i++) {
    if (nombres[i] > maximum) {
        maximum = nombres[i];
    }
}

console.log("La plus grande valeur est :", maximum);
