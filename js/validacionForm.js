let form = document.getElementById('form')
let usuario = document.getElementById('usuario')
let contraseña = document.getElementById('contraseña')


form.addEventListener('submit', e=>{
    e.preventDefault()
    if(usuario.value === 'usuarioadmin' && contraseña.value === '123456'){
        window.location="/La-Elda-master/seccionesHTML/inventario.php"
    }else{
        alert('Usuario o contraseña incorrecta')
    }
})