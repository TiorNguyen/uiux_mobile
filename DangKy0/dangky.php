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
  <div class="div">
    <div class="div-2">
      <div class="div-3">16:04</div>
      <div class="div-4">
        <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/37004d9d4ba4a886c8b70b084e52b5b01f808c8e73d0b5a3543b1fd24421dc57?"
          class="img"
        />
        <img
          loading="lazy"
          src="./assets/img/wifii.svg"
          class="img-2"
        />
        <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/f1ac79676ad0b1f110e1b109308eae3c227ab2fece58dd1a2209c283f487f3fa?"
          class="img-3"
        />
      </div>
    </div>
    <div class="div-5">
      <div class="div-6">
        <div class="div-7">
          <i class="fa-solid fa-chevron-left "></i>
        
        </div>
        <div class="div-9">ĐĂNG KÍ</div>
      </div>
      <div class="div-10">Tên đầy đủ</div>
      <input class="div-11" placeholder="Nguyen Van A"></input>
      <div class="div-12">Mật khẩu</div>
      <input type="password" placeholder="**********" class="div-13">
      <div class="div-12">Email </div>
      <input class="div-11" placeholder="example@example.com"></input>
      <div class="div-12">Số điện thoại </div>
      <input class="div-11" placeholder="012345678"></input>
      <div class="div-12">Ngày sinh </div>
      <input type="date" class="div-11" placeholder="dd/mm/yy"></input>
      
        <!-- <div class="div-14">*************</div> -->
       
      </input>
      <div class="div-15">Để tiếp tục, bạn cần đồng ý với 
        <br>
        <span class="div-15_2">chính sách</span> và <span class="div-15_2">điều khoản sử dụng.</span></div>
      <button class="div-16"><a href="../DangKy2/dangky1.php" style="text-decoration: none; color:white">TIẾP TỤC</a></button>
      <div class="div-17">hoặc đăng kí với</div>
      <img
        loading="lazy"
        src="./assets/img/Group99.svg"
        class="img-6"
      />
      <div class="div-18">
        Bạn đã có tài khoản?
        <span style=" color: #2260FF;
        font-family: League Spartan;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;"><a href="../DangNhap/dangnhap.php" style="text-decoration: none; color:blue">Đăng nhập</a></span>
      </div>
    </div>
  </div>
  <style>
    .div {
      height: 100vh;
      border-radius: 30px;
      background-color: #fff;
      display: flex;
      max-width: 360px;
      padding-bottom: 80px;
      flex-direction: column;
    }
    .div-2 {
      background-color: rgba(226, 234, 255, 0.66);
      display: flex;
      width: 100%;
      gap: 20px;
      justify-content: space-between;
      padding: 9px 29px;
    }
    .div-3 {
      color: #000;
      text-transform: capitalize;
      color: #000;

font-family: "League Spartan";
font-size: 13px;
font-style: normal;
font-weight: 500;
line-height: normal;
text-transform: capitalize;
    }
    .div-4 {
      display: flex;
      align-items: start;
      gap: 4px;
    }
    .img {
      aspect-ratio: 1.18;
      object-fit: auto;
      object-position: center;
      width: 13px;
      fill: #000;
      align-self: stretch;
    }
    .img-2 {
      aspect-ratio: 1.69;
      object-fit: auto;
      object-position: center;
      width: 17px;
      stroke-width: 2px;
      stroke: #000;
      /* border-color: rgba(0, 0, 0, 1); */
      /* border-style: solid;
      border-width: 2px; */
    }
    .img-3 {
      aspect-ratio: 1.89;
      object-fit: auto;
      object-position: center;
      width: 17px;
    }
    .div-5 {
      display: flex;
      margin-top: 28px;
      width: 100%;
      flex-direction: column;
      color: #2260ff;
      font-weight: 500;
      padding: 0 30px;
    }
    .div-6 {
      display: flex;
      align-items: start;
      gap: 1px;
      font-weight: 600;
      text-transform: capitalize;
    }
    .div-7 {
      display: flex;
      margin-top: 6px;
      flex-direction: column;
      font-size: 16px;
    }
    .img-4 {
      aspect-ratio: 0.63;
      object-fit: auto;
      object-position: center;
      width: 10px;
      stroke-width: 2px;
      stroke: #2260ff;
      border-color: rgba(34, 96, 255, 1);
      border-style: solid;
      border-width: 2px;
    }
    .div-8 {
      font-family: League Spartan, sans-serif;
      margin-top: 29px;
      color: #2260FF;

font-family: "League Spartan";
font-size: 16px;
font-style: normal;
font-weight: 600;
line-height: normal;
text-transform: capitalize;
    }
    .div-9 {
      text-align: center;
      flex-grow: 1;
      flex-basis: auto;
      font: 20px League Spartan, sans-serif;
      margin-top: 5px;
      /* margin-left: 5px; */
      color: #2260FF;


font-family: "League Spartan";
font-size: 20px;
font-style: normal;
font-weight: 600;
line-height: normal;
text-transform: capitalize;
    }
    .div-10 {
      color: #000;
      margin-top: 36px;
      color: #000;

font-family: "League Spartan";
font-size: 20px;
font-style: normal;
font-weight: 500;
line-height: normal;

    }
    .div-11 {
      border: none;
      border-radius: 13px;
      background-color: #ecf1ff;
      margin-top: 12px;
      align-items: start;
      color: #809cff;
      white-space: nowrap;
      text-transform: lowercase;
      justify-content: center;
      padding: 14px 13px;
      font: 400 20px League Spartan, sans-serif;
      height: 45px;
    }
    .div-12 {
      color: #000;
      margin-top: 18px;
      color: #000;

font-family: "League Spartan";
font-size: 20px;
font-style: normal;
font-weight: 500;
line-height: normal;
    }
    .div-13 {
      border-radius: 13px;
      background-color: #ecf1ff;
      display: flex;
      margin-top: 12px;
      gap: 20px;
      font-size: 20px;
      color: #809cff;
      font-weight: 400;
      white-space: nowrap;
      text-transform: capitalize;
      padding: 14px 13px;
      height: 45px;
      border: none;
    }
    .div-14 {
      font-family: League Spartan, sans-serif;
      flex-grow: 1;
      flex-basis: auto;
      margin: auto 0;
    }
    .img-5 {
      aspect-ratio: 1.23;
      object-fit: auto;
      object-position: center;
      width: 21px;
      stroke-width: 1px;
      stroke: #000;
      border-color: rgba(0, 0, 0, 1);
      border-style: solid;
      border-width: 1px;
    }
    .div-15 {
      text-align: center;
      align-self: center;
      margin-top: 19px;
      color: #2260FF;

/* text-align: right; */
color: #070707;

/* text-align: center; */
font-family: "League Spartan";
font-size: 12px;
font-style: normal;
font-weight: 300;
line-height: normal;
    }
.div-15_2{
  color: #2260FF;
font-family: "League Spartan";
font-size: 12px;
font-style: normal;
font-weight: 500;
line-height: normal;
}
    .div-16 {
      border: none;
      border-radius: 30px;
      background-color: #2260ff;
      align-self: center;
      margin-top: 12px;
      color: #fff;
      text-align: center;
      text-transform: capitalize;
      justify-content: center;
      padding: 13px 50px;
      color: #FFF;

text-align: center;
font-family: "League Spartan";
font-size: 20px;
font-style: normal;
font-weight: 500;
line-height: normal;
text-transform: capitalize;
    }
    .div-17 {
      color: #070707;
      text-align: center;
      align-self: center;
      margin-top: 16px;
      color: #070707;

text-align: center;
font-family: "League Spartan";
font-size: 12px;
font-style: normal;
font-weight: 300;
line-height: normal;
    }
    .img-6 {
      aspect-ratio: 3.45;
      object-fit: auto;
      object-position: center;
      width: 138px;
      align-self: center;
      margin-top: 11px;
      max-width: 100%;
    }
    .div-18 {
      
      text-align: center;
      align-self: center;
      margin-top: 30px;
    color: #070707;

text-align: center;
font-family: "League Spartan";
font-size: 12px;
font-style: normal;
font-weight: 300;
line-height: normal;
    }
  </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>