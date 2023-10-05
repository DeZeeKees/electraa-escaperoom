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