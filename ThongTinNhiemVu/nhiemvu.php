<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./TrangChu.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      </head>
      
</head>
<body>
    <div class="container-fluid " style="padding: 0px; display: flex;
    flex-direction: column;
    height: 100vh;">
        <!-- top bar -->
        <div class="top-bar ">
            <div class="top-bar-box d-flex ">
                <span class="top-bar-time">14:06</span>
                <span class="top-bar-icon" style="display: flex; gap: 4px;">
                    <img src="./assets/img/bar.svg" alt="">
                    <img src="./assets/img/wifi.svg" alt="">
                    <img src="./assets/img/pin.svg" alt="">
                </span>
            </div>
        </div>

        <!-- header  -->
        <div class="header-box">
            <div class="header-content-box ">
            <div class="info-page-header">
                <a href="../TrangChu2/trangchu1.php" style="text-decoration: none;">
                    <span>
                        <i class="fa-solid fa-chevron-left" style="color:  #2260FF;"></i>
                    </span>
                </a>

                <span class="page-name">THÔNG TIN NHIỆM VỤ</span>
            </div>
            </div>
        </div>

        <!-- content top  -->
        <div class="content-top-box">
            <div class="content-top-month">
                THÁNG NĂM <i class="fa-solid fa-chevron-down" style="text-align: center;"></i></div>
            <div class="content-top-slide">
                <div class="container text-center my-3" style="margin: 0px 0px; padding: 0px 0px;">
                    <div class="row mx-auto my-auto justify-content-center">
                        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner " role="listbox">
                                <div class="carousel-item  active" style="width: 310px;">
                                    <span class="carousel-time-item"><span class="carousel-time-number"> 9</span>
                                        <br>
                                        HAI
                                    </span>
                                    <span class="carousel-time-item"><span class="carousel-time-number"> 10</span>
                                        <br>
                                        BA
                                    </span>
                                    <span class="carousel-time-item "><span class="carousel-time-number"> 11</span>
                                        <br>
                                        TƯ
                                    </span>
                                    <span class="carousel-time-item"><span class="carousel-time-number"> 12</span>
                                        <br>
                                        NĂM
                                    </span>
                                    <span class="carousel-time-item"><span class="carousel-time-number"> 13</span>
                                        <br>
                                        SÁU
                                    </span>
                                    <span class="carousel-time-item"><span class="carousel-time-number"> 14</span>
                                        <br>
                                        BẢY
                                    </span>
                                </div>
                                <!-- <div class="carousel-item " style="width: 310px;">
                                    <div class="carousel-item1">2</div>
                                </div> -->
                                <!-- <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="https://via.placeholder.com/700x500.png/DDBEA9/333333?text=2" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">Slide 2</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="https://via.placeholder.com/700x500.png/FFE8D6/333333?text=3" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">Slide 3</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="https://via.placeholder.com/700x500.png/B7B7A4/333333?text=4" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">Slide 4</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="https://via.placeholder.com/700x500.png/A5A58D/333333?text=5" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">Slide 5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="https://via.placeholder.com/700x500.png/6B705C/eeeeee?text=6" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">Slide 6</div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev" style="margin-left: 0px; padding-left: 0px; width: 25px;">
                                <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next" style="margin-right: 0px; padding-right: 0px;width: 25px;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>		
                </div>
            </div>
           
        </div>

        <!-- content bot  -->
        <div class="content-bot-parent">
            <div class="content-bot-box " > 
              <div style="border-top: 1px solid #0c03ff;"></div>
              <div class="row mt-3" >
                <div class="col-4" style="
                color: #2260FF;

                font-family: League Spartan;
                font-size: 17px;
                font-style: normal;
                font-weight: 500;
                line-height: normal;
                ">Thời gian :</div>
                <div class="col-2 content-bot-time content-bot-time-box" > 12:00</div>
                <div class="col-1 content-bot-time">-</div>
                <div class="col-3 content-bot-time content-bot-time-box">15:00</div>
              </div>
              <div class="mt-3" style="border-top: 1px solid #0c03ff; "></div>
            
            <div class="task-name-label" >TÊN CÔNG VIỆC :</div>
            <input placeholder="Học ITSS Bài 3" class="task-name-area"></input>
            <div class="task-name-label" >TIÊU CHÍ :</div>
            <textarea placeholder="Hoàn thành 10 bài tập" class="task-name-area"></textarea>
            <div class="mt-4 mb-4" style="border-top: 1px solid #0c03ff; "></div>
            <div class="task-name-label" >CHÚ Ý :</div>
            <textarea placeholder="Nhập vào chú thích của bạn....." class="task-note-area"></textarea>
            <div class="btn-row">
              <div class="btn2 mt-3  "><a href="../TrangChu2/trangchu1.php" style="text-decoration: none; color:white">XÁC NHẬN</a></div></div>
             </div>
        </div>

        <!-- footer  -->
        <div class="footer-parent">
            <div class="footer-box">
                <span><a href="../TrangChu/trangchu.php"><img src="./assets/img/home.svg" alt=""></a></span>
                <span><a href="../TaoKPIFN/taokpi1fn.php"><img src="./assets/img/add_black.svg" alt=""></a></span>
                <span><a href="../QuanLiKPIFN/quanlykpifn.php"><img src="./assets/img/list.svg" alt="" style="width: 30px;height: 30px;"></a></span>
                <span><a href="../ThongKe/thongke1fn.php"><img src="./assets/img/chart.svg" alt="" style="width: 28px;height: 28px;"></a></span>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>