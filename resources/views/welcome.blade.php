<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="icon" href="assets/back/image/logo1.png">
    <style>
    * {
    text-decoration: none;
    margin: 0px;
    padding: 0px;
    }

    body {
    margin: 0px;
    padding: 0px;
    font-family: 'Open Sans',sans-serif;
    }

    .wrapper {
    width: 1100px;
    margin: auto;
    position: relative;
    }

    .logo a {
    font-size: 40px;
    font-weight: 800;
    float: left;
    font-family: courier;
    color: #364f6b;
    }

    .menu {
    float: right;
    }

    nav {
    width: 100%;
    margin: auto;
    display: flex;
    line-height: 80px;
    position: sticky;
    position: -webkit-sticky; 
    top: 0;
    background: #FFFFFF;
    z-index: 1;
    border-bottom:1px solid #364f6b;
    }

    nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    }

    nav ul li {
    float: left;
    }

    nav ul li a {
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 0px 16px 0px 16px;
    text-decoration: none;
    }

    nav ul li a:hover {
    text-decoration: underline;
    }

    section {
    margin: auto;
    display: flex;
    margin-bottom: 50px;
    }

    .kolom {
    margin-top: 50px;
    margin-bottom: 50px;
    }

    .kolom .deskripsi {
    font-size: 20px;
    font-weight: bold;
    font-family: 'comic sans ms';
    color: #364f6b; 
    }

    h2 {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 45px;
    margin-bottom: 20px;
    color: #364f6b;
    width: 100%;
    line-height: 50px;
    }

    a.tbl-biru {
    background: #3f72af;
    border-radius: 20px;
    margin-top: 20px;
    padding: 15px 20px 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
    }

    a.tbl-biru:hover {
    background: #fc5185;
    text-decoration: none;
    }

    a.tbl-pink {
    background: #fc5185;
    border-radius: 20px;
    margin-top: 20px;
    padding: 15px 20px 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
    }

    a.tbl-pink:hover {
    background: #3f72af;
    text-decoration: none;
    }

    p {
    margin: 10px 0px 10px 0px;
    padding: 10px 0px 10px 0px;
    }

    .tengah {
    text-align: center;
    width: 100%;
    }

    .tutor-list {
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    }

    .kartu-tutor {
    width: 20%;
    margin: 0 auto;
    }

    .kartu-tutor img {
    width: 80%;
    border-radius: 50%;
    }

    .kartu-tutor p {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 25px;
    text-align: center;
    color: #364f6b;
    }

    .partner-list {
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    }

    .kartu-partner {
    width: 20%;
    margin: 0 auto;
    }

    .kartu-partner img {
    width: 150px;
    border-radius: 50%;
    }

    #contact {
    background: #dedede;
    padding:50px 0px 50px 0px; 
    }

    .footer {
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    margin: auto;
    }

    .footer-section {
    width: 20%;
    margin: 0 auto;
    }

    h3 {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 30px;
    margin-bottom: 20px;
    color: #364f6b;
    width: 100%;
    line-height: 50px;
    }

    #copyright {
    text-align: center;
    width: 100%;
    padding: 50px 0px 50px 0px;
    margin-top: 50px;
    }

    @media screen and (max-width: 991.98px) {
    .wrapper {
        width: 90%;
    }

    .logo a {
        display: block;
        width: 100%;
        text-align: center;
    }

    nav .menu {
        width: 100%;
        margin: 0;
    }

    nav .menu ul {
        text-align: center;
        margin: auto;
        line-height: 60px;
    }

    nav .menu ul li {
        display: inline-block;
        float: none;
    }

    section {
        display: block;
    }

    section img {
        display: block;
        width: 100%;
        height: auto;
    }

    .kartu-tutor {
        width: 50%;
    }

    .kartu-partner {
        width: 50%;
    }
}
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>INABA</a></div><img src="assets/img/logo1.png" width="50" height="60">
            <div class="menu">
                <ul>
                    @auth
                    <li><a href=""></a></li>
                    @else
                    <li><a href="login" class="tbl-biru">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- Home -->
    <div class="wrapper">
        <section id="home">
            <img src="https://img.freepik.com/free-vector/illustration-university-graduates_53876-28468.jpg?w=740&t=st=1669782631~exp=1669783231~hmac=9f493eacf2da8531bd007e28e3e35e984a5ac5ef4d0021fbc5db6ce49579a98e"/>
            <div class="kolom">
                <!-- <p class="deskripsi">
                    Pendaftaran Wisuda
                </p> -->
                <h2>Selamat Datang di Sistem Pendaftaran Wisuda</h2>
                <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto minus quae error, voluptates itaque numquam excepturi, quis aspernatur voluptate tenetur quod. Animi numquam quasi aliquam odit ducimus totam, enim nam.</p> -->
            </div>
        </section>
    </div>
</body>
</html>