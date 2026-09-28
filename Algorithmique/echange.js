let a = 35;
let b = 80;

console.log("Avant :");
console.log("a =", a);
console.log("b =", b);

let temporaire = a;
a = b;
b = temporaire;

console.log("Après :");
console.log("a =", a);
console.log("b =", b);
