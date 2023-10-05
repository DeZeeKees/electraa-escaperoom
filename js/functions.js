export const skillIssue = Swal.mixin ({
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

export const correctCode = skillIssue.mixin({
    title: '<h1 class="swalTitle">Correcte code :)</h1>',
    icon: 'success',
    didClose: async () => {
        location.href = "video_page.php?redirect=true"
    }
})