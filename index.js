let skillIssue = Swal.mixin ({
    toast: true,
    width: "auto",
    title: '<h1 class="swalTitle">Verkeerde code :(</h1>',
    position: 'top-end',
    icon: 'error',
    timer: 1500,
    timerProgressBar: true,
    showConfirmButton: false,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

let correctCode = skillIssue.mixin({
    title: '<h1 class="swalTitle">Correcte code :)</h1>',
    icon: 'success',
    didClose: async () => {
        window.location.href = "video_page.php?redirect=true"
    }
})

let formLimits = (event) => {
    if(event.target.value.length >= 8) event.preventDefault()
}

/** @param {SubmitEvent} event */
async function numberFormSubmit(event) {
    event.preventDefault()

    /** @type {HTMLFormElement} */
    const numberForm = document.getElementById('numberForm')
    
    const formdata = new FormData(numberForm)

    //correctCode.fire()

    const request = await fetch("php/check_number.php", {
        method: "POST",
        body: formdata
    })
}