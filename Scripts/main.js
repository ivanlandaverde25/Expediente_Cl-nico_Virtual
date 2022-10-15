window.addEventListener('DOMContentLoaded', () => {

    console.log(888);
    const btnEnviar = document.getElementById('btn-enviar');

    btnEnviar.addEventListener('click', () => {
        Swal.fire({
            title: 'Error!',
            text: 'Do you want to continue',
            icon: 'error',
            confirmButtonText: 'Cool'
        });
    });
});