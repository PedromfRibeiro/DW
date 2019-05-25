const Swal = require('sweetalert2');
import 'sweetalert2/src/sweetalert2.scss'

function AniMsg(){
    Swal.fire({
        position: 'center',
        type: 'warning',
        title: 'Email nao verificado! Por favor verifique o seu email!',
        showConfirmButton: false,
        timer: 2000
    });
}
