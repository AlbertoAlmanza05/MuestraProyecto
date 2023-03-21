const registarUsuario=()=>{
    var nombre=document.querySelector("#nombres").value;
    var apellido=document.querySelector("#apellidos").value;
    var genero=document.querySelector("#genero").value;
    var tipoUsuario=document.querySelector("#tipoUsuario").value;
    var tipoFormacio=document.querySelector("#tipoFormacion").value;
    var programa=document.querySelector("#programa").value;
    var telefono=document.querySelector("#telefono").value;
    var correo=document.querySelector("#correo").value;
    var contraseña=document.querySelector("#contraseña").value;

    if(nombre.trim()==='' ||
        apellido.trim()==='' ||
        genero.trim()==='' ||
        tipoUsuario.trim()==='' ||
        tipoFormacio.trim()==='' ||
        programa.trim()==='' ||
        telefono.trim()==='' ||
        correo.trim()==='' ||
        contraseña.trim()===''){
        Swal.fire({
            icon: 'error',
            title: 'ERROR',
            text: 'Hay Campos Vacíos',
            footer: 'Registrarse'
        })
    }else{
        alert("cuenta creada")
    }
}