<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href=".././global.css" />
    <link rel="stylesheet" href="./trogiup.css" />
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
    <form class="tr-gip">
      <header class="rectangle-parent102">
        <div class="frame-child148"></div>
        <a class="a17">16:04</a>
        <div class="frame-parent70">
          <div class="vector-parent19">
            <img
              class="vector-icon64"
              loading="lazy"
              alt=""
              src="./public/vector.svg"
            />

            <img
              class="vector-icon65"
              loading="lazy"
              alt=""
              src="./public/vector-1.svg"
            />
          </div>
          <img
            class="frame-child149"
            loading="lazy"
            alt=""
            src="./public/group-12.svg"
          />
        </div>
      </header>
      <section class="tr-gip-inner">
        <div class="rectangle-parent103">
          <div class="frame-child150"></div>
          <div class="frame-parent71">
            <div class="vector-wrapper9">
              <a href="caidatfn.php">
                <img
                  class="vector-icon66"
                  loading="lazy"
                  alt=""
                  src="./public/vector-21.svg"
                />
              </a>
            </div>
            <a class="h-tr1">HỖ TRỢ</a>
          </div>
          <div class="chng-ti-c-th-gip-g-cho-b-wrapper">
            <div class="chng-ti-c">Chúng tôi có thể giúp gì cho bạn?</div>
          </div>
          <div class="rectangle-parent104">
            <div class="frame-child151"></div>
            <img class="search-icon" alt="" src="./public/vector-35.svg" />

            <input class="frame-input" placeholder="Tìm kiếm..." type="text" />
          </div>
        </div>
      </section>
      <section class="tr-gip-child">
        <div class="frame-parent72">
          <div class="frame-parent73">
            <div class="category-pair-container-parent">
              <div class="category-pair-container">
                <button class="pair-one-container">
                  <div class="pair-one-container-child"></div>
                  <div class="hi-p">Hỏi đáp</div>
                </button>
                <button class="pair-one-container1">
                  <div class="pair-one-container-item"></div>
                  <div class="lin-lc-h">Liên lạc hỗ trợ</div>
                </button>
              </div>
              <div class="pair-two-container">
                <div class="pair-two-container-inner">
                  <div class="popular-icon-parent">
                    <div class="popular-icon"></div>
                    <div class="ph-bin">Phổ biến</div>
                  </div>
                </div>
                <div class="pair-two">
                  <div class="pair-two-child"></div>
                  <div class="chung">Chung</div>
                </div>
                <button class="pair-two1">
                  <div class="pair-two-item"></div>
                  <div class="dch-v">Dịch vụ</div>
                </button>
              </div>
            </div>
            <div class="frame-parent74">
              <div class="rectangle-parent105">
                <div class="frame-child152"></div>
                <div class="cch-qun-l">Cách quản lí KPI ?</div>
                <div class="management-icon-wrapper">
                  <button id="myButton"> <img
                    class="management-icon"
                    alt=""
                    src="./public/vector-34.svg"
                  /></button>
                  
                  
                 
                </div>

              </div>
              <div id="content"class=" qun-l-da-trn-cng-vic-wrapper">
               
              </div>
              <script>
                document.getElementById('myButton').addEventListener('click', function() {
                  event.preventDefault();
var content = document.getElementById('content');
if (content.innerHTML === '') {
content.innerHTML = '<p>Quản lí dựa trên công việc đã được hoàn thành để đánh giá KPI. Công việc được đánh giá trên tiêu chí đã chọn</p>';
} else {
content.innerHTML = '';
}
});
              </script>
            </div>
          </div>
        </div>
      </section>
      
      </div>
    </form>
  </body>
</html>
