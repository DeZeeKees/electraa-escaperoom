import { skillIssue, correctCode } from "./functions.js"

window.formLimits = function formLimits(event) {
    if(event.target.value.length >= 8) event.preventDefault()
}

/** @param {SubmitEvent} event */
window.numberFormSubmit = async function numberFormSubmit(event) {
    event.preventDefault()

    /** @type {HTMLFormElement} */
    const numberForm = document.getElementById('numberForm')

    const formdata = new FormData(numberForm)

    const request = await fetch("php/check_number.php", {
        method: "POST",
        body: formdata
    }).then(res => res.json())

    if(request.status === "err") {
        skillIssue.fire();
        return
    }

    correctCode.fire({
        didClose: async () => {
            location.href = `/video?redirect=true&id=${request.id}`
        }
    });
}