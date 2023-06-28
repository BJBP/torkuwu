 const signupForm = document.querySelector("#signupForm")
 signupForm.addEventListener("submit", (e)=>{
    e.preventDefault()
    const name = document.getElementById("name")
    const email = document.getElementById("email")
    const password = document.getElementById("password")
    
    const Users = JSON.parse(localStorage.getItem("users")) ||[]
    const isUserRegistered = Users.find(user => user.email === email)
    if(isUserRegistered){
        return alert("El usuario ya está registrado")
    }

    Users.push({name:name, email: email, password:password})
    localStorage.setItem("users",JSON.stringify(Users))
    alert('Registro Exitoso!')
    window.location.href = "login.html"
    document.URL = "login.html"
})



