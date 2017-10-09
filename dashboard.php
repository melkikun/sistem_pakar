<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widtd=device-widtd, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>MyBiz Bootstrap Theme</title>
        <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
        <meta name="keywords" content="free website templates, free bootstrap tdemes, free template, free bootstrap, free website template">

        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="assets/template/css/flexslider.css">
        <link rel="stylesheet" href="assets/template/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/template/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/template/css/style.css">
        <!-- =======================================================
            Theme Name: MyBiz
            Theme URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-tdeme/
            Autdor: BootstrapMade.com
            Autdor URL: https://bootstrapmade.com
        ======================================================= -->
    </head>
    <body id="top" data-spy="scroll">
        <!--top header-->

        <?php include './header.php';?>

        <!--service-->
        <div id="service">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3">
                        <div class="service-heading">
                            <h2>Proses Input Data</h2> 
                            <p>Centang jenis Kerusakan di bawah ini</p>
                        </div>
                    </div>
                </div>   	
            </div>

            <!--services wrapper-->
            <section>
                <div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-bordered">
                                <tdead>
                                    <tr>
                                        <th rowspan="2" class="text-center" style="vertical-align: middle;" colspan="2">Gejala</th>
                                        <th colspan="13" class="text-center">Centang</th>
                                    </tr>
                                    <tr>
                                        <?php
                                        for ($index = 1; $index <= 13; $index++) {
                                            echo "<td class='text-center'>$index</td>";
                                        }
                                        ?>
                                    </tr>
                                </tdead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td style="width: 300px !important;">Touch Screen bergerak sendiri</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Touch Screen tidak berfungsi sama sekali</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Touch Screen tidak berfungsi sebagian</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>LCD Blank putih</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Muncul bercak di LCD</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Tampilan Warna dari LCD agak buram</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Muncul bintik-bintik hitam/putih di LCD</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Ponsel mati total</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Ponsel cepat panas</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Batrai sangat boros</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Speaker mati</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Suara Speaker tidak jelas</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Volume full tapi suara speaker sangat pelan</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Ponsel mati ketika lepas dari charger</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Ponsel tidak bisa Charging</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Charging susah</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Proses Charging sangat lama</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Muncul bintik-bintik berwarna ketika membuka aplikasi kamera</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Aplikasi kamera tidak dapat dibuka</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Ketika aplikasi kamera dibuka, ponsel melakukan restart</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Ketika aplikasi kamera dibuka, tampilan blank putih/hitam</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Autofokus kamera tidak berfungsi</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Lampu flash redup</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Lampu flash tidak menyala pada aplikasi kamera dan senter</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Port charger/USB agak longgar</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Ponsel tidak dapat terhubung ke PC/Laptop melalui kabel USB</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Simcard tiba-tiba eject</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Simcard tidak terdeteksi</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Muncul tulisan "insert simcard" padahal simcard sudah terpasang dengan baik</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Kartu SD tiba-tiba eject</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>Kartu SD tidak terdeteksi</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Pada saat melakukan panggilan suara kita tidak terdengar</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>Suara tidak keluar ketika digunakan untuk merekam video/audio</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>Signal naik turun/tidak stabil</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>Hanya tampil salah satu signal saja</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>Pada saat signal tampil, ponsel langsung mati</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>Lampu LED mati</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>38</td>
                                        <td>Lampu LED redup</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>Lampu LED menyala lebih dari 1 warna</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td>Ponsel sering restart sendiri</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>41</td>
                                        <td>Signal sering hilang</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>42</td>
                                        <td>Ponsel boot loop</td>
                                        <?php
                                        for ($i = 0; $i < 13; $i++) {
                                            echo "<td><input type='checkbox' class='form-control'></td>";
                                        }
                                        ?>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2" class="text-center">SOLUSI : </th>
                                        <?php
                                        for ($i = 1; $i <= 13; $i++) {
                                            echo "<th class='text-center'>S$i</th>";
                                        }
                                        ?>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-danger btn-block" style="width: 100%;" onclick="go();">Submit</button>
                        </div>
                    </div>
                </div>
            </section>
            <hr/>


        </div>

        <!-- jQuery -->
        <script src="assets/template/js/jquery.min.js"></script>
        <script src="assets/template/js/bootstrap.min.js"></script>
        <script src="assets/template/js/jquery.flexslider.js"></script>
        <script src="assets/template/js/jquery.inview.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/template/js/script.js"></script>
        <script src="assets/template/contactform/contactform.js"></script>
        <script>
                                function go() {
                                    window.location.href = "kesimpulan.php";
                                }
        </script>

    </body>
</html>