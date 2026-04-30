<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main {
        padding:20px;
    }

        body{
        font-family: Arial, sans-serif;
        margin: 0;
    background-image: url('https://media.istockphoto.com/id/666604294/id/foto/hutan-dengan-matahari-yang-bagus-dan-lensa-suar-nyata.jpg?s=612x612&w=0&k=20&c=hEZpXu46G8jbtvvF2nroZnA-AHzk0Y1wLIh3Pu28UFs=');
    background-size: cover; /* Gambar menutupi seluruh layar */
    background-position: center; /* Posisi gambar di tengah */
    background-repeat: no-repeat; /* Gambar tidak diulang */
    background-attachment: fixed; /* Gambar tetap saat discroll */
    height: 100vh; /* Mengisi tinggi layar */
    margin: 0; /* Menghilangkan margin default */
    }
        h2 {
        color : white; 
        text-align: center; 
        background: black;
        margin: 0;
        padding: 15px;
    }
        .nav {
            text-align: center;
            background: black;
            padding: 10px;
        }
        .nav a{
            text-decoration: none;
            color: white;
        }
        .head {
            margin: 0px;
        }
        .nav a:hover{
            color: #00bfff;
        }
        .kiri {
            display: flex;
            gap: 30px;
        }
        form {
            margin: 50px;
            text-align:center;
        }
        input {
            border-radius: 8px;
            border: 1px solid black;
        }
        button {
            border-radius: 8px;
            border: 1px solid black;
        }
    </style>

<script>
async function loginUser(event){
    event.preventDefault();

    const username = document.querySelector("[name=username]").value;
    const password = document.querySelector("[name=password]").value;

    const res = await fetch("users.json");
    const data = await res.json();

    const user = data.find(u => u.username === username && u.password === password);

    if(user){
        if(user.role === "admin"){
            window.location.href = "admin.php";
        } else {
            window.location.href = "blog.php";
        }
    } else {
        alert("Username atau password salah");
    }
}
</script>


</head>
<body>
    <div class="tengah">
    <h2>LOGIN</h2>
    <div class="atas">
<form onsubmit="loginUser(event)">
    <input type="text" name="username" placeholder=" username" required>
    <br><br>
    <input type="password" name="password" placeholder=" password" required>
    <br><br>
    <button type="submit" name="login">Login</button>
</form>
</div>
</body>
</html>