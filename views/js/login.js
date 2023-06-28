const loginForm = document.querySelector("#loginForm")
loginForm.addEventListener("submit", (e)=>{
   e.preventDefault()
   const email = document.getElementById("email").value
   const password = document.getElementById("password").value
   
   const Users = JSON.parse(localStorage.getItem("users")) ||[]
   const validUsers = Users.find(user => user.email === email && user.password === password)
   if(!validUsers) {
       return alert("Usuario y/o contraseña incorrectos!")
   }

   alert('Bienvenido ${validUser.name}')
   window.location.href = "index.html"
   document.URL = "index.html"
})
