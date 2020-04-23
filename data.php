<html>
<head>
<style>
    body {
        background: url(33ba21ccda561739ab950d66e5616b82.gif);
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
    color: white;
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
        height: 600px;
        margin: 6rem auto 8.1rem auto;
        width: 1000px;
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
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
}
    #forgot-pass {
        color: #020f2e;
        font-family: "Raleway", sans-serif;
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
    font-family: "Raleway", sans-serif;
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
    font-family: "Raleway SemiBold", sans-serif;
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
font-family: "Raleway Thin", sans-serif;
color:#ffffff;
letter-spacing: 1px;
padding-bottom: 2px;
padding-top: 20px;
text-align: center;
}

    </style>

</head>
<body>
<div id="card"> 
    <div id="card-content">
    <div id="card-title");>
    <div Id="frm">
        <h1><b>Data Tes Covid</b></h1>
        </br>
        <div class="form-icon">
        <span><i class="icon icon-user"></i></span>
        </div> 
<?php
include 'koneksi.php';
$sql = "SELECT * FROM pasien ORDER BY nama";
$res = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_assoc($res)) {
    $Dasis[] = $data;
}
?>
<div class="card">
<div class="card-header">
        <h2 class="card-title"><i class="fas fa-book">
    </div>
    <div class="card-body">
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="row">No</th>
                    <th scope="row">Nama</th>
                    <th scope="row">Id_Pasien</th>
                    <th scope="row">Usia</th>
                    <th scope="row">Alamat</th>
                    <th scope="row">Status</th>
                    <th scope="row">Aksi</th>
                </tr>
            </thead>
        <?php
        $no = 1;
        foreach ($Dasis as $p) { ?>
        <tr>
            <th scope="row"><?= $no?></th>
            <td><?= $p['nama'] ?></th>
            <td><?= $p['id_pasien'] ?></th>
            <td><?= $p['usia'] ?></th>
            <td><?= $p['alamat'] ?></th>
            <td><?= $p['status'] ?></th>
            <td>
                <a href="http://localhost/Project%20Tugas%20Akhir/Covid-19.html" class="badge badge-primary">Back</a>
            </td>
        </tr>
        <?php
            $no++;
        }
        ?>
        
        </table>
    </div>
</div>
</div>
