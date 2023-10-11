export const skillIssue = Swal.mixin ({
    toast: true,
    width: "auto",
    title: '<h1 class="swalTitle">De code is niet correct</h1>',
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

export const correctCode = skillIssue.mixin({
    title: '<h1 class="swalTitle">De code is correct</h1>',
    icon: 'success',
})