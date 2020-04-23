<html>
<head>
    
    <title>Tes Covid</title>
    <link  rel="stylesheet" type="text/css" href="Style.css">
    <style>
    body {
        background: url(main_34_35.gif);
        background-repeat: no-repeat;
        background-size:cover;
        margin:0;
        padding:0;
       
    }    
    @media screen and (max-width:680px){
    #maincontent{
    width: auto;
    float: none;
}
    .registration-form .form-icon{
	text-align: center;
    background-color: #5891ff;
    border-radius: 50%;
    font-size: 40px;
    color: black;
    width: 110px;
    height: 150px;
    margin: auto;
    margin-bottom: 50px;
    line-height: 120px;
}
    #sidebar{
    width: auto;
    float: none;
}
}
    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 700px;
        margin: 6rem auto 8.1rem auto;
        width: 800px;
}
    #card-content {
        padding: 30px 70px;
}
    #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 22px;
        padding-top: 13px;
        text-align: center;
}
    .underline-title {
        background: -webkit-linear-gradient(right, #7a110a, #7a110a);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
}

    label {
        font-family: "Raleway", serif;
        font-size: 11pt;
}
    #forgot-pass {
        color: #020f2e;
        font-family: "Raleway", serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
}
    .form {
        align-items: left;
        display: flex;
        flex-direction: column;
}
    .form-border {
        background: -webkit-linear-gradient(right, #456ecc, #456ecc);
        height: 1px;
        width: 100%;
}
    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 15px;
}
    #signup {
    color: #456ecc;
    font-family: "Raleway", serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}

    #submit-btn {
    background: -webkit-linear-gradient(right, #456ecc, #456ecc);
    border: none;
    border-radius: 25px;
    box-shadow: 0px 1px 8px #456ecc;
    cursor: pointer;
    color: white;
    font-family: "serif", serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.35s;
    width: 150px;
}
    #submit-btn:hover {
    box-shadow: 0px 1px 18px #456ecc;
}
    .container{
    width: 500px;
    margin: auto;
}
#copy{
font-family: "Raleway Thin",serif;
color:#0f0f0f;
letter-spacing: 1px;
padding-bottom: 2px;
padding-top: 20px;
text-align: center;
}

    </style>
</head>
<body>
    
        <h1><b></b></h1>
        </br>
        <div id="card"> 
        <div id="card-content">
        <div id="card-title");>
        <div Id="frm">
        <form action="" method="POST">
        <img src="grd_1581592798_91165.jpg"  width="635px" height="210px">
        <table>
                <tr>
                <br></br>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required/></td>
                    </tr>
                    <td>Jenis Kelamin</td>
                        <td>
                            <input type="radio" name="gender" value="L">L
                            <input type="radio" name="gender" value="P">P
                            </td>
                            </tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td><input type="text" name="tempattanggallahir" required/></td>
                        </tr>
                        <td>Usia</td>
                        <td><input type="text" name="usia" required/></td>
                        </tr>
                        <td>Alamat Lengkap</td>
                        <td><input type="text" name="alamat" required/></td>
                        </tr>
                         <td>Apakah Anda batuk?</td>
                        <td><input type="text" name="batuk" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Apakah Anda demam?</td>
                        <td><input type="text" name="demam" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Apakah tenggorokan anda sakit?</td>
                        <td><input type="text" name="pusing" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Apakah Anda merasa letih?</td>
                        <td><input type="text" name="lemas" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Apakah Anda merasa sesak napas?</td>
                        <td><input type="text" name="sesak" placeholder="Ya/Tidak" required/></td>
                        </tr>
                        <td>Suhu Tubuh : </td>
                        <td><input type="text" name="nilai" placeholder="derajat"> <br> <br>
                        <tr>
                        <td>
                        <label><br><br>
                            <input type="submit" name="Submit" value="Submit" id="prn">
                        </label>
                        <label><br><br>
                           <a href="data.php"button type="submit" name="submit">LEBIH LANJUT</button></a>
                        </label>
                         <label>
                           <a href="Covid-19.html"button type="reset" name="reset">BATAL</button></a>
                        </label>
                        </script>
<div id="Submit">
    <?php

    if(isset($_POST['nilai'])) {
      $nama = $_POST['nama'];
      $nilai = $_POST['nilai'];

      if ($nilai >= 37 ){
        echo $nama.", Kemungkinan kamu terinfeksi Corona , SEGERA PERIKSA KE DOKTER!!! ";
      }else{
        echo $nama.", anda NEGATIF CORONA, karena tes yang lain dan suhu tubuh anda normal = ".$nilai;
      }
      }
    ?>
     </div>
        </div>
    </div>
</body>
</html>
  