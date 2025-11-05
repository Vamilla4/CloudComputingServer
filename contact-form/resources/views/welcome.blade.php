<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Simple Form</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f4f4f4;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
}
.container {
background-color: #fff;
padding: 20px;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0,0,0,0.1);
width: 300px;
}
h2 {
text-align: center;
}
input, textarea {
width: 100%;
padding: 8px;
margin: 8px 0;
border: 1px solid #b4e5e5ff;
border-radius: 4px;
}
button {
width: 100%;
padding: 10px;
background-color: #007bff;
color: white;
border: none;
border-radius: 4px;
cursor: pointer;
}
button:hover {
background-color: #0056b3;
}
</style>
</head>
<body>
<div class="container">
<h2>🐟Form</h2>
<form action="/submit-form" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button type="submit">Submit</button>
</form>

</div>


<script>
const form = document.getElementById('contactForm');
form.addEventListener('submit', (e) => {
e.preventDefault();
const data = {
name: form.name.value,
email: form.email.value,
message: form.message.value
};
console.log('Form data :', data);
alert('Form submitted!  ');
form.reset();
});
</script>
</body>
</html>