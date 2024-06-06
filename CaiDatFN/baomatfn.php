<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1, width=device-width" />

        <link rel="stylesheet" href=".././global.css" />
        <link rel="stylesheet" href="./baomat.css" />
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
        <div class="bo-mt1">
            <header class="main1">
                <div class="main-item"></div>
                <a class="content2">16:04</a>
                <div class="frame-parent62">
                    <div class="vector-parent17">
                        <img
                            class="vector-icon52"
                            loading="lazy"
                            alt=""
                            src="./public/vector-1.svg"
                        />
                    </div>
                    <img
                        class="frame-child133"
                        loading="lazy"
                        alt=""
                        src="./public/group-12.svg"
                    />
                </div>
            </header>
            <main class="bo-mt-inner">
                <section class="frame-parent63">
                    <div class="frame-parent64">
                        <div class="vector-wrapper5">
                            <a href="caidatfn.php">
                                <img
                                    class="vector-icon53"
                                    loading="lazy"
                                    alt=""
                                    src="./public/vector-2.svg"
                                />
                            </a>
                        </div>
                        <b class="bo-mt2">BẢO MẬT</b>
                    </div>
                    <div class="password-fields">
                        <div class="mt-khu-hin-ti-parent">
                            <div class="mt-khu-hin">Mật khẩu hiện tại :</div>
                            <div class="current-password-input-wrapper">
                              <div>
                                <div class="password-wrapper">
                                  <input
                                      type="password"
                                      id="password"
                                      class="password-input"
                                  />
                                  <button
                                      type="button"
                                      id="togglePassword"
                                      class="toggle-password"
                                  >
                                      Show/Hide
                                  </button>
                              </div>

                              </div>
                              
                          </div>
                          
                            <div class="qun-mt-khu-wrapper">
                                <u class="qun-mt-khu">Quên mật khẩu?</u>
                            </div>
                        </div>
                        <div class="password-field-labels">
                            <div class="mt-khu-mi">Mật khẩu mới :</div>
                            <div class="current-password-input-wrapper">
                              <div>
                                <div class="password-wrapper">
                                  <input
                                      type="password"
                                      id="password"
                                      class="password-input"
                                  />
                                  <button
                                      type="button"
                                      id="togglePassword"
                                      class="toggle-password"
                                  >
                                      Show/Hide
                                  </button>
                              </div>

                              </div>
                  
                          </div>
                        </div>
                        <div class="password-field-labels1">
                            <div class="nhp-li-mt">Nhập lại mật khẩu :</div>
                            <div class="current-password-input-wrapper">
                              <div>
                                <div class="password-wrapper">
                                  <input
                                      type="password"
                                      id="password"
                                      class="password-input"
                                  />
                                  <button
                                      type="button"
                                      id="togglePassword"
                                      class="toggle-password"
                                  >
                                      Show/Hide
                                  </button>
                                  <script>
                                    const togglePassword = document.querySelector('#togglePassword');
                                    const password = document.querySelector('#password');
                                  
                                    togglePassword.addEventListener('click', function (e) {
                                      // toggle the type attribute
                                      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                      password.setAttribute('type', type);
                                      // toggle the text of this label
                                      this.textContent = type === 'password' ? 'Show' : 'Hide';
                                    });
                                  </script>
                                  <script>
                                    const togglePassword1 = document.querySelector('#togglePassword');
                                    const password1 = document.querySelector('#password');
                                  
                                    togglePassword.addEventListener('click', function (e) {
                                      // toggle the type attribute
                                      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                      password.setAttribute('type', type);
                                      // toggle the text of this label
                                      this.textContent = type === 'password' ? 'Show' : 'Hide';
                                    });
                                  </script>
                                  <script>
                                    const togglePassword2 = document.querySelector('#togglePassword');
                                    const password2 = document.querySelector('#password');
                                  
                                    togglePassword.addEventListener('click', function (e) {
                                      // toggle the type attribute
                                      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                      password.setAttribute('type', type);
                                      // toggle the text of this label
                                      this.textContent = type === 'password' ? 'Show' : 'Hide';
                                    });
                                  </script>
                              </div>

                              </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="bo-mt-child">
                <button class="rectangle-parent92">
                    <div class="frame-child137"></div>
                    <div class="xc-nhn2"><a href="caidatfn.php" style="text-decoration: none; color:inherit">XÁC NHẬN</a></div>
                </button>
            </footer>
        </div>
    </body>
</html>
