<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
    <div class="container">
        <p class="judul">Register Page</p>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="hidden" name="role">
            <label for="nama">Nis</label>
            <input type="text" name="id" placeholder="Masukan nis anda"><br>

            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukan nama lengkap anda"><br>

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Masukan email anda"><br>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Masukan password anda"><br>

            <label for="nama">Jenis kelamin</label>
            <select name="jenis_kelamin" >
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="nama">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" placeholder="Masukan tempat lahir anda"><br>

            <button type="submit">Login Sekarang</button>
        </form>
        <p class="sudah">Silahkan hubungi walikelas untuk email.</p>
    </div>
</body>
</html>
<style>
    body {
    font-family: Poppins;
    background-color: #F3F4F6;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #FFFFFF;
    padding: 20px;
    border-radius: 8px;
  
    box-shadow: 0  5px 10px rgba(0, 0, 0, 0.1);
    width: 400px;
}

form {
    margin-top: 20px; /* Add some space between title and form */
}

input[type="text"],
input[type="email"],
input[type="password"],select,
input[type="date"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #B9B9BF;
    border-radius: 4px;
   
   
    font-size: 14px;
    font-family: poppins;
   
}

input[type="text"]::placeholder,
input[type="email"]::placeholder,
input[type="password"]::placeholder {
   
    font-family: poppins;
    letter-spacing: 1px;
}

label {
    
    letter-spacing: 0.5px;
    font-size: 14px;
    margin-bottom: 5px;
    display: block;
}

button[type="submit"] {
    background-color: #1D2535;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 20px;
    width: 100%;
    font-family: poppins;
    letter-spacing: 0.5px;

}

.judul {
    color: #222222;
    letter-spacing: 0.5px;
    text-align: left;
    font-size: 20px;
    font-weight: 600;
    margin: 0; /* Remove default margins */
}
.sudah{
    color: #5B5A5B;
    position: relative;
    top: 10px;
}
.silahkan {
    color: #1C2632;
    text-decoration: none;
    font-weight: 600;
}

</style>