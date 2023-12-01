<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhóm 3</title>
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/0de6cac444.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="ALL">
        <div class="Top">
            <a href="#"><img src="./images/TOP.jpg" alt=""></a>
        </div>
        <div class="menu-navtop">
            <div class="navtop">
                <div class="navtop-content">
                    <a href="index.php"><div class="trangchu">
                        <i class="fa-solid fa-house"></i>
                        <div class="boxtxt">
                            <span class="top"><b>Trang<br></b></span>
                            <span class="bottom"><b>Chủ</b></span>
                        </div>
                    </div></a>
                    
                    <div class="search-box">
                        <div class="row">
                            <input type="text" id="input-box" placeholder="Bạn cần tìm gì" class="search-box" autocomplete="off">
                            <button class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>

                    <a href="#"><div class="trangchu">
                        <i class="fa-solid fa-question"></i>
                        <div class="boxtxt">
                            <span>Hỏi<br>Đáp</span>
                        </div>
                    </div></a>
                    <a href="login.php"><div class="box-text">
                        <div class="boxtxt">
                        <!-- <i class="fa-regular fa-circle-user"></i> -->
                            <?php
                            if (isset($_SESSION['username'])) {
                                echo "Xin chào, " . $_SESSION['username'] . "! <br>";
                                echo "<a href='logout.php'><b>Đăng xuất</b></a>";
                            } else {
                            echo "<a href='login.php' class='dangnhap'><b>Đăng<br>nhập</b></a>";
                            }
                             ?>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="bottom-navtop">
            <div class="bottom-navtop-content">
                <ul>
                    <li><a href="blackfriday.php"><i class="fa-solid fa-tags"></i>Black Friday 2023</a></li>
                    <li><a href="#"><i class="fa-regular fa-newspaper"></i>Tin tức công nghệ</a></li>
                    <li><a href="#"><i class="fa-solid fa-wallet"></i>Hướng dẫn thanh toán</a></li>
                    <li><a href="#"><i class="fa-solid fa-coins"></i>Hướng dẫn trả góp</a></li>
                    <li><a href="#"><i class="fa-solid fa-user-shield"></i>Chính sách bảo hành</a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="content">
                <div class="left">
                    <div class="left-content">
                        <ul>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "mydatabase";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                            die("Kết nối thất bại: " . $conn->connect_error);
                        }
                        $sql = "SELECT id, category_name FROM categories";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        $categoryName = $row["category_name"];
                        $categoryId = $row["id"];
                        echo "<li><a href='category.php?id=$categoryId'>$categoryName</a></li>";}
                        } else {
                        echo "<li>Không có danh mục nào.</li>";
                        }
                        $conn->close();
                        ?>
                        </ul>
                    </div>
                </div>
                <div class="center">
                    <div class="center-left">
                        <div class="slideshow-container">

                            <div class="mySlides fade">
                              <img src="./images/slideshow/hinh1.jpg" style="width:100%">
                            </div>
                            
                            <div class="mySlides fade">
                              <img src="./images/slideshow/hinh2.jpg" style="width:100%">
                            </div>
                            
                            <div class="mySlides fade">
                              <img src="./images/slideshow/hinh3.jpg" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                <img src="./images/slideshow/hinh4.jpg" style="width:100%">
                              </div>
                            
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>
                            
                            </div>
                            <br>
                            
                            <div style="text-align:center">
                              <span class="dot" onclick="currentSlide(1)"></span> 
                              <span class="dot" onclick="currentSlide(2)"></span> 
                              <span class="dot" onclick="currentSlide(3)"></span> 
                            </div>
                            
                            <script>
                                let slideIndex = 0;
                                const slides = document.getElementsByClassName("mySlides");

                                function showSlides() {
                                    let i;
                                    for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                    }
                                    slideIndex++;
                                    if (slideIndex > slides.length) { slideIndex = 1 }
                                    slides[slideIndex - 1].style.display = "block";
                                    setTimeout(showSlides, 3000);
                                }

                                function plusSlides(n) {
                                slideIndex += n;
                                if (slideIndex > slides.length) { slideIndex = 1 }
                                if (slideIndex < 1) { slideIndex = slides.length }
                                for (let i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                    }
                                slides[slideIndex - 1].style.display = "block";
                                }
                                showSlides();
                            </script>
                    </div>
                </div>    
                <div class="right">
                        <div class="hinh1">
                            <a href="#"><img src="./images/hinh2.jpg"></a>
                        </div>
                        <div class="hinh2">
                            <a href="#"><img src="./images/hinh3.jpg"></a>
                        </div>
                </div>    
            </div>
            <div class="bottom-banner">
                <img src="./images/hinhduoi1.jpg">
                <img src="./images/hinhduoi2.jpg">
                <img src="./images/hinhduoi3.jpg">
                <img src="./images/hinhduoi4.jpg">
            </div>
            <div class="khuyen-mai-top"><h3><b>🔥 PC KHUYẾN MÃI TUẦN NÀY 🔥</b></h3></div>   
            <div class="khuyen-mai">
                <div class="cart">
                    <div class="item-cart">
                        <img src="./images/khuyenmai/hinh1.jpg">
                        <p>PC Gaming Intel i7-13700F/VGA RTX 4060</p>
                        <del>33.500.000<sup>đ</sup></del>
                        <span>32.600.000<sup>đ</sup></span>
                        <a href="pc1.php">Mua ngay</a>
                    </div>
                    <div class="item-cart">
                        <img src="./images/khuyenmai/hinh2.jpg">
                        <p>PC Gaming Intel i5-12400F/VGA RTX 3060</p>
                        <del>22.210.000<sup>đ</sup></del>
                        <span>20.960.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="item-cart">
                        <img src="./images/khuyenmai/hinh3.jpg">
                        <p>PC Gaming Intel i7-13700F/VGA GTX 1660</p>
                        <del>18.880.000<sup>đ</sup></del>
                        <span>16.190.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="item-cart">
                        <img src="./images/khuyenmai/hinh4.jpg">
                        <p>PC Gaming AMD R5-4500/VGA GTX 1660</p>
                        <del>14.240.000<sup>đ</sup></del>
                        <span>12.690.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
            </div>
            <div class="all">
                <a href="#"><h3><b>Laptop Gaming Bán Chạy</b></h3></a>
                <p>|</p>
                <h4><b>Free Ship Cho Mọi Nhà</h4></b>
            </div>
            <div class="all-container">
                <div class="all-content"> 
                    <div class="hinh">
                        <img src="./images/laptopbanchay/hinh1.jpg">
                        <p>Laptop gaming ASUS ROG Zephyrus G15 GA503RS</p>
                        <h5><del>37.300.000<sup>đ</sup></del></h5>
                        <span>35.520.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/laptopbanchay/hinh2.jpg">
                        <p>Laptop gaming MSI GF63 12UC 887VN</p>
                        <h5><del>29.000.000<sup>đ</sup></del></h5>
                        <span>28.888.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/laptopbanchay/hinh3.jpg">
                        <p>Laptop gaming Lenovo Legion 9 16IRX8 83AG0047VN</p>
                        <h5><del>25.900.000<sup>đ</sup></del></h5>
                        <span>24.300.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/laptopbanchay/hinh4.jpg">
                        <p>Laptop gaming Acer Predator Helios Neo PHN16 71 779X</p>
                        <h5><del>42.220.000<sup>đ</sup></del></h5>
                        <span>40.500.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/laptopbanchay/hinh5.jpg">
                        <p>Laptop gaming ASUS TUF A15 FA507NU LP031W</p>
                        <h5><del>39.200.000<sup>đ</sup></del></h5>
                        <span>37.800.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/laptopbanchay/hinh6.jpg">
                        <p>Laptop gaming MSI Stealth GS77 12UHS 250VN</p>
                        <h5><del>119.300.000<sup>đ</sup></del></h5>
                        <span>74.500.000<sup>đ</sup></span> 
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/laptopbanchay/hinh7.jpg">
                        <p>Laptop Gaming MSI Stealth 16 Mercedes AMG A13VG</p>
                        <h5><del>80.000.000<sup>đ</sup></del></h5>
                        <span>77.200.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/laptopbanchay/hinh8.jpg">
                        <p>Laptop gaming MSI Katana 15 B13VEK 252VN</p>
                        <h5><del>33.200.000<sup>đ</sup></del></h5>
                        <span>30.500.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/laptopbanchay/hinh9.jpg">
                        <p>Laptop gaming Lenovo LOQ 15IRH8 82XV00QPVN</p>
                        <h5><del>21.990.000<sup>đ</sup></del></h5>
                        <span>19.990.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/laptopbanchay/hinh10.jpg">
                        <p>Laptop Gaming Acer Aspire 7 A715 42G R05G</p>
                        <h5><del>22.000.000<sup>đ</sup></del></h5>
                        <span>14.200.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
            </div>
            <div class="all">
                <a href="#"><h3><b>Bàn Phím Bán Chạy</b></h3></a>
                <p>|</p>
                <h4><b>Free Ship Cho Mọi Nhà</b></h4>
            </div>
            <div class="all-container">
                <div class="all-content">
                    <div class="hinh">
                        <img src="./images/banphim/hinh1.jpg">
                        <p>Bàn phím cơ DareU EK75 Pro Triple Mode Black Golden</p>
                        <h5><del>1.230.000<sup>đ</sup></del></h5>
                        <span>1.090.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/banphim/hinh2.jpg">
                        <p>Bàn phím cơ Asus ROG Azoth++</p>
                        <h5><del>7.500.000<sup>đ</sup></del></h5>
                        <span>6.990.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/banphim/hinh3.jpg">
                        <p>Bàn phím Razer Blackwidow V4 75% Black Tactile</p>
                        <h5><del>6.120.000<sup>đ</sup></del></h5>
                        <span>5.090.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/banphim/hinh4.jpg">
                        <p>Bàn phím E-Dra EK387L Blue Switch</p>
                        <h5><del>511.000<sup>đ</sup></del></h5>
                        <span>423.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/banphim/hinh5.jpg">
                        <p>Bàn phím E-Dra EK387L RGB Red Switch</p>
                        <h5><del>703.000<sup>đ</sup></del></h5>
                        <span>660.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/banphim/hinh6.jpg">
                        <p>Bàn phím DareU EK87V2 Black Red Switch</p>
                        <h5><del>4.230.000<sup>đ</sup></del></h5>
                        <span>3.990.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/banphim/hinh7.jpg">
                        <p>Bàn phím DareU EK87V2 White Red Switch</p>
                        <h5><del>5.230.000<sup>đ</sup></del></h5>
                        <span>5.000.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/banphim/hinh8.jpg">
                        <p>Bàn phím cơ DareU EK1280 V2 RGB Red Switch</p>
                        <h5><del>6.230.000<sup>đ</sup></del></h5>
                        <span>5.220.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/banphim/hinh9.jpg">
                        <p>Bàn phím Logitech G Pro X TKL Light Speed</p>
                        <h5><del>3.300.000<sup>đ</sup></del></h5>
                        <span>2.120.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/banphim/hinh10.jpg">
                        <p>Bàn phím Logitech Mechanical Gaming G413 SE</p>
                        <h5><del>1.650.000<sup>đ</sup></del></h5>
                        <span>1.200.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
            </div>
            <div class="all">
                <a href="#"><h3><b>Màn Hình Giá Tốt</b></h3></a>
                <p>|</p>
                <h4><b>Free Ship Cho Mọi Nhà</b></h4>
            </div>
            <div class="all-container">
                <div class="all-content">
                    <div class="hinh">
                        <img src="./images/manhinh/hinh1.jpg">
                        <p>Màn hình LCD 24 inch Dahua Pricing DHI-LM24-B200 Full HD</p>
                        <h5><del>2.550.000<sup>đ</sup></del></h5>
                        <span>2.390.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/manhinh/hinh2.jpg">
                        <p>Màn Hình Gaming Samsung Odyssey G4 LS27BG400EEXX HD</p>
                        <h5><del>7.000.000<sup>đ</sup></del></h5>
                        <span>6.300.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/manhinh/hinh3.jpg">
                        <p>Màn hình LCD AOC 27V5/BK/74 | 27", FHD, IPS, 75Hz, 5ms</p>
                        <h5><del>2.520.000<sup>đ</sup></del></h5>
                        <span>2.120.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/manhinh/hinh4.jpg">
                        <p>Màn hình 22 inch VSP VE215 (LE21501) LED Monitor(27", FHD, IPS, 75Hz, 5ms)</p>
                        <h5><del>2.420.000<sup>đ</sup></del></h5>
                        <span>1.990.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/manhinh/hinh5.jpg">
                        <p>Màn hình 27 inch AOC 27B1H2/74 (FHD, IPS, 100Hz, 4ms, phẳng)</p>
                        <h5><del>5.700.000<sup>đ</sup></del></h5>
                        <span>5.720.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/manhinh/hinh6.jpg">
                        <p>Màn hình Philips 27M1N3200Z 27" IPS 165Hz</p>
                        <h5><del>3.550.000<sup>đ</sup></del></h5>
                        <span>3.000.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/manhinh/hinh7.jpg">
                        <p>Màn hình cong ViewSonic VX2718-2KPC-MHD 27" 2K</p>
                        <h5><del>6.250.000<sup>đ</sup></del></h5>
                        <span>5.990.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/manhinh/hinh8.jpg">
                        <p>Màn hình Lenovo Legion Y27-30 27" IPS 165Hz</p>
                        <h5><del>2.120.000<sup>đ</sup></del></h5>
                        <span>1.920.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/manhinh/hinh9.jpg">
                        <p>Màn hình cong MSI PRO MP272C 27" 75Hz</p>
                        <h5><del>3.120.000<sup>đ</sup></del></h5>
                        <span>3.00.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/manhinh/hinh10.jpg">
                        <p>Màn hình MSI PRO MP273 27" IPS 75Hz</p>
                        <h5><del>4.200.000<sup>đ</sup></del></h5>
                        <span>3.390.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
            </div>
            
            <div class="between-content">
                <div class="left">
                    <a href="#"><img src="./images/hinhtrai.jpg"></a>
                </div>
                <div class="right">
                    <div class="top-right">
                        <a href="#"><img src="./images/hinhphai1.jpg"></a>
                    </div>
                    <div class="bottom-right">
                        <a href="#"><img src="./images/hinhphai2.jpg"></a>
                    </div>
                </div>
            </div>
            <div class="all">
                <a href="#"><h3><b>CPU AMD Giá Tốt</b></h3></a>
                <p>|</p>
                <h4><b>Free Ship Cho Mọi Nhà</b></h4>
            </div>
            <div class="all-container">
                <div class="all-content">
                    <div class="hinh">
                        <img src="./images/cpuamd/hinh1.jpg">
                        <p>CPU AMD Ryzen 5 4600G | AM4, Upto 4.20 GHz, 6C/12T, 8MB</p>
                        <h5><del>2,830.000<sup>đ</sup></del></h5>
                        <span>2.600.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/cpuamd/hinh2.jpg">
                        <p>CPU AMD Ryzen 5 5600 | AM4, Upto 4.40 GHz, 6C/12T, 32MB</p>
                        <h5><del>4.000.000<sup>đ</sup></del></h5>
                        <span>3.575.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/cpuamd/hinh3.jpg">
                        <p>CPU AMD Ryzen 5 5500 | AM4, Upto 4.20 GHz, 6C/12T, 16MB</p>
                        <h5><del>2.720.000<sup>đ</sup></del></h5>
                        <span>2.500.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/cpuamd/hinh4.jpg">
                        <p>CPU AMD Ryzen 7 5800X | AM4, Upto 4.70 GHz, 8C/16T, 32MB</p>
                        <h5><del>2.200.000<sup>đ</sup></del></h5>
                        <span>2.070.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/cpuamd/hinh5.jpg">
                        <p>CPU AMD Ryzen 7 5700X | AM4, Upto 4.60 GHz, 8C/16T, 32MB</p>
                        <h5><del>5.000.000<sup>đ</sup></del></h5>
                        <span>4.850.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/cpuamd/hinh6.jpg">
                        <p>Bộ vi xử lý AMD Ryzen 3 3200G / 3.6GHz Boost 4.0GHz / 4 nhân 4 luồng</p>
                        <h5><del>22.830.000<sup>đ</sup></del></h5>
                        <span>12.400.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/cpuamd/hinh7.jpg">
                        <p>Bộ vi xử lý AMD Ryzen 9 5950X / 3.4GHz Boost 4.9GHz / 16 nhân 32 luồng</p>
                        <h5><del>9.600.000<sup>đ</sup></del></h5>
                        <span>9.000.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/cpuamd/hinh8.jpg">
                        <p>Bộ vi xử lý AMD Ryzen 7 7700 / 3.8GHz Boost 5.3GHz / 8 nhân 16 luồng</p>
                        <h5><del>5.830.000<sup>đ</sup></del></h5>
                        <span>5.200.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/cpuamd/hinh9.jpg">
                        <p>Bộ vi xử lý AMD Ryzen 5 7600 / 3.8GHz Boost 5.1GHz / 6 nhân 12 luồng</p>
                        <h5><del>6.230.000<sup>đ</sup></del></h5>
                        <span>5.700.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/cpuamd/hinh10.jpg">
                        <p>Bộ vi xử lý AMD Ryzen 7 7700X / 4.5GHz Boost 5.4GHz / 8 nhân 16 luồng</p>
                        <h5><del>11.290.000<sup>đ</sup></del></h5>
                        <span>9.690.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
            </div>
            <div class="all">
                <a href="#"><h3><b>RAM Giá Tốt</b></h3></a>
                <p>|</p>
                <h4><b>Free Ship Cho Mọi Nhà</b></h4>
            </div>
            <div class="all-container">
                <div class="all-content">
                    <div class="hinh">
                        <img src="./images/ram/hinh1.jpg">
                        <p>Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz (1x 8GB) (KF432C16BB/8)</p>
                        <h5><del>2.830.000<sup>đ</sup></del></h5>
                        <span>2.600.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/ram/hinh2.jpg">
                        <p>Ram GEIL Evo Spear 8GB | DDR4 3200MHz (GSB48GB3200C16BSC)</p>
                        <h5><del>4.000.000<sup>đ</sup></del></h5>
                        <span>3.575.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/ram/hinh3.jpg">
                        <p>Ram DDR4 Adata XPG Spectrix D50 16GB 3200Mhz RGB White</p>
                        <h5><del>2.720.000<sup>đ</sup></del></h5>
                        <span>2.500.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/ram/hinh4.jpg">
                        <p>Ram DDR4 Adata 8GB 3200Mhz XPG Spectrix D50 RGB</p>
                        <h5><del>2.200.000<sup>đ</sup></del></h5>
                        <span>2.070.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/ram/hinh5.jpg">
                        <p>Ram PC GSkill Ripjaws V 8GB DDR4 3600MHz (F4-3600C18S)   </p>
                        <h5><del>5.000.000<sup>đ</sup></del></h5>
                        <span>4.850.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/ram/hinh6.jpg">
                        <p>Ram Corsair Vengeance RS RGB 1x8GB 3600 (CMG8GX4M1D3600C18)</p>
                        <h5><del>1.490.000<sup>đ</sup></del></h5>
                        <span>950.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/ram/hinh7.jpg">
                        <p>Ram Corsair Vengeance LPX 8GB (1x8GB) 3200 (CMK8GX4M1E3200C16)</p>
                        <h5><del>990.000<sup>đ</sup></del></h5>
                        <span>650.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/ram/hinh8.jpg">
                        <p>RAM Corsair Dominator Platinum 64GB (2x32GB) RGB 6000 DDR5</p>
                        <h5><del>12.390.000<sup>đ</sup></del></h5>
                        <span>7.490.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/ram/hinh9.jpg">
                        <p>RAM G.SKILL Ripjaws V 1x8GB 2800 DDR4 (F4-2800C17S-8GVR)</p>
                        <h5><del>1.090.000<sup>đ</sup></del></h5>
                        <span>790.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="hinh">
                        <img src="./images/ram/hinh10.jpg">
                        <p>RAM Kingston Fury Beast 1x8GB 3600 DDR4 RGB (KF436C17BBA/8)</p>
                        <h5><del>1.490.000<sup>đ</sup></del></h5>
                        <span>1.090.000<sup>đ</sup></span>
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
            </div>
            <div class="danh-muc">
                <div class="danh-muc-top"><h3><b>Danh mục sản phẩm</b></h3></div>
                <div class="danh-muc-content">
                    <div class="cpu">
                        <div class="hinh-anh">
                            <a href="cpu.php"><img src="./images/danhmuc/cpu.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="cpu.php">CPU</a>
                        </div>
                    </div>
                    <div class="pc">
                        <div class="hinh-anh">
                            <a href="pcgaming.php"><img src="./images/danhmuc/pc.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="pcgaming.php">PC</a>
                        </div>
                    </div>
                    <div class="man-hinh">
                        <div class="hinh-anh">
                            <a href="manhinh.php"><img src="./images/danhmuc/manhinh.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="manhinh.php">Màn Hình</a>
                        </div>
                    </div>
                    <div class="ban-phim">
                        <div class="hinh-anh">
                            <a href="banphim.php"><img src="./images/danhmuc/banphim.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="banphim.php">Bàn Phím</a>
                        </div>
                    </div>
                    <div class="chuotmaytinh">
                        <div class="hinh-anh">
                            <a href="chuot.php"><img src="./images/danhmuc/chuot.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="chuot.php">Chuột</a>
                        </div>
                    </div>
                    <div class="vga">
                        <div class="hinh-anh">
                            <a href="vga.php"><img src="./images/danhmuc/vga.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="vga.php">VGA</a>
                        </div>
                    </div>
                    <div class="case">
                        <div class="hinh-anh">
                            <a href="case.php"><img src="./images/danhmuc/case.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="case.php">Case</a>
                        </div>
                    </div>
                    <div class="danhmuclaptop">
                        <div class="hinh-anh">
                            <a href="laptopgaming.php"><img src="./images/danhmuc/laptop.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="laptopgaming.php">Laptop</a>
                        </div>
                    </div>
                    <div class="ram">
                        <div class="hinh-anh">
                            <a href="ram.php"><img src="./images/danhmuc/ram.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="ram.php">RAM</a>
                        </div>
                    </div>
                    <div class="mainboard">
                        <div class="hinh-anh">
                            <a href="mainboard.php"><img src="./images/danhmuc/mainboard.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="mainboard.php">MainBoard</a>
                        </div>
                    </div>
                    <div class="tan-nhiet">
                        <div class="hinh-anh">
                            <a href="tannhiet.php"><img src="./images/danhmuc/tannhiet.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="tannhiet.php">Tản Nhiệt</a>
                        </div>
                    </div>
                    <div class="nguon">
                        <div class="hinh-anh">
                            <a href="nguon.php"><img src="./images/danhmuc/nguon.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="nguon.php">Nguồn</a>
                        </div>
                    </div>
                    <div class="ghe">
                        <div class="hinh-anh">
                            <a href="ghe.php"><img src="./images/danhmuc/ghe.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="ghe.php">Ghế</a>
                        </div>
                    </div>
                    <div class="thiet-bi-mang">
                        <div class="hinh-anh">
                            <a href="mang.php"><img src="./images/danhmuc/thietbimang.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="mang.php">Thiết Bị Mạng</a>
                        </div>
                    </div>
                    <div class="tai-nghe">
                        <div class="hinh-anh">
                            <a href="tainghe.php"><img src="./images/danhmuc/tainghe.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="tainghe.php">Tai Nghe</a>
                        </div>
                    </div>
                    <div class="phu-kien">
                        <div class="hinh-anh">
                            <a href="phukien.php"><img src="./images/danhmuc/phukien.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="phukien.php">Phụ Kiện</a>
                        </div>
                    </div>
                    <div class="loa">
                        <div class="hinh-anh">
                            <a href="loa.php"><img src="./images/danhmuc/loa.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="loa.php">Loa</a>
                        </div>
                    </div>
                    <div class="ocung">
                        <div class="hinh-anh">
                            <a href="ocung.hphp"><img src="./images/danhmuc/ocung.jpg" alt=""></a>
                        </div>
                        <div class="ten">
                            <a href="ocung.php">Ổ Cứng</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-top">
            <div class="footer-container">
                <div class="block">
                    <div class="block-content">
                        <div class="block-title">
                            <h4><b>VỀ TRANG WEB</b></h4>
                        </div>
                        <div class="block-bottom">
                            <ul>
                                <li><a href="#">Giới thiệu</a></li>
                            </ul>                           
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-content">
                        <div class="block-title">
                            <h4><b>CHÍNH SÁCH</b></h4>
                        </div>
                        <div class="block-bottom">
                            <ul>
                                <li><a href="#">Chính sách bảo hành</a></li>
                                <li><a href="#">Chính sách giao hàng</a></li>
                                <li><a href="#">Chính sách thanh toán</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-content">
                        <div class="block-title">
                            <h4><b>THÔNG TIN</b></h4>
                        </div>
                        <div class="block-bottom">
                            <ul>
                                <li><a href="#">Hệ thống cửa hàng</a></li>
                                <li><a href="#">Trung tâm bảo hành</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-content">
                        <div class="block-title">
                            <h4><b>HỖ TRỢ KHÁCH HÀNG</b></h4>
                        </div>
                        <div class="block-bottom">
                            <ul>
                                <li><a href="#">Hỏi đáp</a></li>
                                <li><a href="#">Thông tin thanh toán</a></li>
                                <li><a href="#">Phản ánh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="pay">
                        <div class="pay-title">
                            <h4><b>ĐƠN VỊ VẬN CHUYỂN</b></h4>
                        </div>
                        <div class="pay-content">
                            <img src="./images/footer/hinh1.jpg" alt="">
                            <img src="./images/footer/hinh2.jpg" alt="">
                            <img src="./images/footer/hinh3.jpg" alt="">
                            <img src="./images/footer/hinh4.jpg" alt="">
                        </div>
                        <div class="pay-title">
                            <h4><b>CÁCH THỨC THANH TOÁN</b></h4>
                        </div>
                        <div class="pay-content">
                            <img src="./images/footer/hinh5.jpg" alt="">
                            <img src="./images/footer/hinh6.jpg" alt="">
                            <img src="./images/footer/hinh7.jpg" alt="">
                            <img src="./images/footer/hinh8.jpg" alt="">
                            <img src="./images/footer/hinh9.jpg" alt="">
                            <img src="./images/footer/hinh10.jpg" alt="">
                            <img src="./images/footer/hinh11.jpg" alt="">
                            <img src="./images/footer/hinh12.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <script src="main.js"></script>
</body>
</html>