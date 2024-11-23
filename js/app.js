function cambiarFoto() {
    var foto = document.getElementById('familiar');
    var tipoHabitacion = document.getElementById('tipoHabitacion').value;
    switch (tipoHabitacion) {
        case 'familiar':
            foto.src = '../img/familiar.jpg';
            break;
        case 'matrimonial':
            foto.src = '../img/matrimonial.jpg';
            break;
        case 'suite':
            foto.src = '../img/suite.jpg';
            break;
        default:
            foto.src = '../img/default.jpg';
            break;
    }
}