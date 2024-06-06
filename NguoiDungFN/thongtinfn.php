<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1, width=device-width" />

        <link rel="stylesheet" href=".././global.css" />
        <link rel="stylesheet" href="./thongtin.css" />
        <link rel="stylesheet" href="./dangxuat.css" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=League Spartan:wght@200;300;400;500;600;700&display=swap"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap"
        />
    </head>
    <body>
        <div class="thng-tin">
            <header class="rectangle-parent112">
                <div class="frame-child163"></div>
                <a class="a18">16:04</a>
                <div class="frame-parent77">
                    <div class="vector-parent21">
                        <img
                            class="vector-icon73"
                            loading="lazy"
                            alt=""
                            src="./public/vector.svg"
                        />

                        <img
                            class="vector-icon74"
                            loading="lazy"
                            alt=""
                            src="./public/vector-1.svg"
                        />
                    </div>
                    <img
                        class="frame-child164"
                        loading="lazy"
                        alt=""
                        src="./public/group-12.svg"
                    />
                </div>
            </header>
            <section class="thng-tin-inner">
                <div class="frame-parent78">
                    <div class="frame-wrapper38">
                        <div class="frame-parent79">
                            <div class="user-icon-parent">
                                <a href="../TrangChu/trangchu.php">
                                    <img
                                        class="user-icon"
                                        loading="lazy"
                                        alt=""
                                        src="./public/vector-2.svg"
                                    />
                                </a>
                                

                                <a class="thng-tin1">THÔNG TIN</a>
                            </div>
                            <div class="frame-wrapper39">
                                <img
                                    class="frame-child165"
                                    loading="lazy"
                                    alt=""
                                    src="./public/group-621@2x.png"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="display-name">
                        <b class="vinh-nguyn">VINH NGUYỄN</b>
                    </div>
                    <div class="navbar-parent">
                        <div class="navbar">
                            <div class="navbar-items">
                                <a href="../NguoiDungFN/nguoidungfn.php" style="text-decoration: none; color:inherit">
                                    <div class="dropdown-item">
                                        <img
                                            class="dropdown-item-child"
                                            loading="lazy"
                                            alt=""
                                            src="./public/group-30.svg"
                                        />

                                        <div class="dropdown-content">
                                            <div class="thng-tin2">THÔNG TIN</div>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                            <div class="settings-content-parent">
                                <div class="settings-content">
                                    <a href="../CaiDatFN/caidatfn.php" style="text-decoration: none; color:inherit">
                                        <div class="settings-options">
                                            <img
                                                class="settings-options-child"
                                                loading="lazy"
                                                alt=""
                                                src="./public/group-34.svg"
                                            />

                                            <div class="settings-label">
                                                <div class="ci-t2">CÀI ĐẶT</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="../NguoiDungFN/chinhsachfn.php" style="text-decoration: none; color:inherit">
                                    <div class="private-parent">
                                        <img
                                            class="private-icon"
                                            loading="lazy"
                                            alt=""
                                            src="./public/private@2x.png"
                                        />

                                        <div class="chnh-sch-wrapper">
                                            <div class="chnh-sch">CHÍNH SÁCH</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="navbar-items1">
                                <div class="ng-xut">
                                    <img
                                        class="ng-xut-child"
                                        loading="lazy"
                                        alt=""
                                        src="./public/group-36.svg"
                                    />

                                    <div class="ng-xut-wrapper">
                                        <div class="ng-xut1">ĐĂNG XUẤT</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="icon-container-wrapper">
                            <div class="icon-container">
                                <div class="single-icon">
                                    <img
                                        class="standalone-icon"
                                        loading="lazy"
                                        alt=""
                                        src="./public/vector-36.svg"
                                    />
                                </div>
                                <img
                                    class="paired-icons"
                                    loading="lazy"
                                    alt=""
                                    src="./public/vector-36.svg"
                                />

                                <img
                                    class="paired-icons1"
                                    loading="lazy"
                                    alt=""
                                    src="./public/vector-36.svg"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="ng-xut2 hide">
            <section class="ng-xut3">
                <div class="ng-xut-item"></div>
                <div class="ng-xut-container">
                    <a class="ng-xut4">ĐĂNG XUẤT</a>
                </div>
                <div class="bn-c-chc-chn-mun-ng-xu-wrapper">
                    <div class="bn-c-chc">Bạn có chắc chắn muốn đăng xuất?</div>
                </div>
                <div class="hy-parent">
                    <button class="hy">
                        <div class="hy-child"></div>
                        <div class="hy1">hủy</div>
                    </button>
                    <button class="ng-xut5">
                        <div class="ng-xut-inner"></div>
                        <a class="ng-xut6" href="../DangNhap/dangnhap.php">Đăng xuất</a>
                    </button>
                </div>
            </section>
        </div>
        <script>
          document.querySelector(".ng-xut").addEventListener("click", function () {
              var ngXut2 = document.querySelector(".ng-xut2");
              var otherElements = document.querySelectorAll("div:not(.ng-xut):not(.ng-xut2):not(.ng-xut-item):not(.ng-xut-container):not(.bn-c-chc-chn-mun-ng-xu-wrapper):not(.bn-c-chc):not(.hy-parent)");
          
              if (ngXut2.classList.contains("hide")) {
                  ngXut2.classList.remove("hide");
                  otherElements.forEach(function (element) {
                      if (element !== ngXut2) {
                          element.classList.add("dim");
                      }
                  });
              } else {
                  ngXut2.classList.add("hide");
                  otherElements.forEach(function (element) {
                      if (element !== ngXut2) {
                          element.classList.remove("dim");
                      }
                  });
              }
          });
          </script>
    </body>
</html>
