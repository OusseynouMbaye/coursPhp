var tableau = [2, 4, 6, 26, 18];

//console.log(tableau);
if (verifytableIsAllPair(tableau) === true) {
    return console.log("tableau contient  que des chiffres pair");
} else {
    return console.log("tableau ne contient pas que des chiffres pair");
}

//verifytableIsAllPair(tableau);
function verifytableIsAllPair(table) {

    for (var i = 0; i <= table.length - 1; i++) {
        if (table[i] % 2 !== 0) {
            return false
        }
        
    }
    return true;
}