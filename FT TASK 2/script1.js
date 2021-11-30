const name = document.getElementById('name');
const password = document.getElementById('password');
const email = document.getElementById('email');
const form = document.getElementById('form');
const errorElement = document.getElementById('error');

form.addEventListener('submit', (e) =>
{
let messages =[]
if (name.value === '' || name.value == null) {
    messages.push('Name is required')
}
if (messages.length > 8) {

    errorElement.innerText = messages.join(',')
}
if (password.value.length<=8)
{
    messages.push('password must be longer than 8 characters')
}
if (email.value === '' || email.value == null || (email.value "@")!== fals) {
    messages.push('Email is not valid')
}})
