import { skillIssue, correctCode } from "./functions.js"

/** @param {SubmitEvent} event */
window.loginAdmin = async function loginAdmin(event) {
    event.preventDefault()

    const formData = new FormData(event.target)

    const result = await fetch("../php/login_admin.php", {
        method: "POST",
        credentials: "same-origin",
        body: formData
    }).then(res => res.json());

    if(result.status !== "ok") {
        return skillIssue.fire({
            title: result.message,
            timer: 3000
        })
    }

    window.location.href = result.redirect;
}

window.openEditPopup = async function(id, name, code, image) {
    const idElement = document.getElementById('editNumberId')
    const nameElement = document.getElementById('editNumberName')
    const numberElement = document.getElementById('editNumberNumber')
    const popupElement = document.getElementById('editNumberPopup')
    const popupForm = document.getElementById('editNumberForm')
    const imageInput = document.getElementById('editNumberImg')
    idElement.value = id
    numberElement.value = code
    nameElement.value = name
    imageInput.value = image

    popupForm.setAttribute('hx-target', `#tableItem${id}`)
    popupElement.classList.toggle("hidden")
}

window.closeEditPopup = function() {
    const popupElement = document.getElementById('editNumberPopup')
    popupElement.classList.toggle("hidden")
}


window.openCreatePopup = async function() {
    const popupElement = document.getElementById('createNumberPopup')
    const nameInput = document.getElementById('createNumberName');
    const numberInput = document.getElementById('createNumberNumber')
    const imageInput = document.getElementById('createNumberImg')
    numberInput.value = ""
    nameInput.value = ""
    imageInput.value = ""
    popupElement.classList.toggle("hidden")
}

window.closeCreatePopup = function(scroll = true) {
    const popupElement = document.getElementById('createNumberPopup')
    const talbleBody = document.querySelector(".tableBody");
    if(scroll) {
        talbleBody.scrollTo({behavior: "smooth"}, talbleBody.scrollHeight);
    }
    popupElement.classList.toggle("hidden")
}

if(location.pathname === "/admin/login") {

    const params = new URLSearchParams(location.search);

    if(params.get("reqireLogin") != null && params.get("reqireLogin") == "true") {
        skillIssue.fire({
            title: "Login om toegang te krijgen to deze pagina",
            timer: 3000
        })
        params.delete("reqireLogin");
        history.pushState({}, document.title, location.pathname)
    }
}

window.formLimits = function formLimits(event) {
    if(event.target.value.length >= 8) event.preventDefault()
}