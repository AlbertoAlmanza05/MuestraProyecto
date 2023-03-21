
const login=()=>{
    var correo=document.querySelector("#correo").value;
    var contraseña=document.querySelector("#contraseña").value;

    if (correo.trim()==='' || contraseña.trim()===''){
        Swal.fire({
            icon: 'error',
            title: 'ERROR',
            text: 'Hay Campos Vacíos',
            footer: 'Login'
        })

    }
}