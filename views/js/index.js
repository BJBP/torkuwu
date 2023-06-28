const user = JSON.parse(localStorage.getItem("logn_success")) || false
if(!user) {
    window.location.href ='login.html'
    document.URL = "index.html"

}

const logout = document.querySelector("#logout")

logout.addEventListener("click", () =>{
    alert('Hasta pronto!')
    localStorage.removeItem('login_success')
    window.location.href = 'login.html'
    document.URL = "login.html"

})