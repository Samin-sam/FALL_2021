const name = document.getElementById('name')
const password = document.getElementById('password')
const form = document.getElementById('form1')
const email = document.getElementById('email')
const errorElement = document.getElementById('error')

form1.addEventListener('submit',(e) => {

 let messages = []
 
    if(name.value === '' || name.value == null)
    {
        messages.push('name is required')
    }
    


    if(password.value.length <= 8)
    {
        messages.push('password is too short')
    } 

    if(emailValue === '') {
        messages.push('Email cannot be blank');
    }



    if(messages.length > 0)
    {
         e.preventDefault()
         errorElement.innerText = messages.join(', ')
    }





} )

