<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      <!-- ============TITLE============= -->
      <title>Ocean Fortune</title>
  
      <!-- ============HEAD-ICON-LOGO============= -->
      <link rel="icon" type="image/png" href="assets/images/logo.png">
  
      <!-- ============CSS-LINKS============= -->
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/faq.min.css">
      <link rel="stylesheet" href="assets/css/main-mediaquery.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
  
  
  
      <!-- ============FONT-AWESOME-LINKS============= -->
      <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

      

      <!-- ============JAVASCRIPT-LINKS============= -->
      <!-- <script defer src="assets/javascript/navbar.min.js"></script> -->
  </head>
<body>
    <!-- ============SCROLL WATCHER============= -->
    <div class="scroll_watcher"></div>

    <!-- ============GOOGLE-LANGUAGE-TRANSLATOR============= -->
    <section class="google-translator" style="display: block;">
        <div>
            <!-- GTranslate: https://gtranslate.io/ -->
                <style type="text/css">
                <!--
                a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
                a.gflag img {border:0;}
                a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
                #goog-gt-tt {display:none !important;}
                .goog-te-banner-frame {display:none !important;}
                .goog-te-menu-value:hover {text-decoration:none !important;}
                body {top:0 !important;}
                #google_translate_element2 {display:none!important;}
                -->
                .mez{
                    font-family: sans-serif;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    line-height: inherit;
                    color: var(--color-five-white) !important;
                    padding: 10px 15px;
                    box-shadow: 7px 7px 15px 0px #0e101597;
                    transform: translateX(10%);
                    margin-top: 19px;
                    border-radius: 10px;
                    border: none;
                    outline: none;
                    width: 170px;
                    transition: all 0.5s ease-in-out;
                    background: #1F232F;
                    position: absolute;



                }
                .mez:hover{
                    border: 1px solid #9AA0A7;
                }
                
                input, select {
                    width: 100%;
                    height: 44px;
                    background: no-repeat;
                    box-shadow: none;
                    padding: 0.7rem 1rem;
                    border-width: 1px;
                    background: #1F232F;
                    transition: all 0.5s ease-in-out;
                }
                option{
                    
                    /* background-color: red; */
                    /* display: none; */
                    transition: all 0.5s ease-in-out;

                    
                }
                option:hover{
                    background: red;
                }
                </style>
                
                    <select class="mez" onchange="doGTranslate(this);">Select<option value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option><option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option><option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option><option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"><div class="skiptranslate goog-te-gadget" dir="ltr"><div id=":0.targetLanguage"><select class="goog-te-combo" aria-label="Language Translate Widget"><option value="">Select Language</option><option value="ab">Abkhaz</option><option value="ace">Acehnese</option><option value="ach">Acholi</option><option value="aa">Afar</option><option value="af">Afrikaans</option><option value="sq">Albanian</option><option value="alz">Alur</option><option value="am">Amharic</option><option value="ar">Arabic</option><option value="hy">Armenian</option><option value="as">Assamese</option><option value="av">Avar</option><option value="awa">Awadhi</option><option value="ay">Aymara</option><option value="az">Azerbaijani</option><option value="ban">Balinese</option><option value="bal">Baluchi</option><option value="bm">Bambara</option><option value="bci">Baoulé</option><option value="ba">Bashkir</option><option value="eu">Basque</option><option value="btx">Batak Karo</option><option value="bts">Batak Simalungun</option><option value="bbc">Batak Toba</option><option value="be">Belarusian</option><option value="bem">Bemba</option><option value="bn">Bengali</option><option value="bew">Betawi</option><option value="bho">Bhojpuri</option><option value="bik">Bikol</option><option value="bs">Bosnian</option><option value="br">Breton</option><option value="bg">Bulgarian</option><option value="bua">Buryat</option><option value="yue">Cantonese</option><option value="ca">Catalan</option><option value="ceb">Cebuano</option><option value="ch">Chamorro</option><option value="ce">Chechen</option><option value="ny">Chichewa</option><option value="zh-CN">Chinese (Simplified)</option><option value="zh-TW">Chinese (Traditional)</option><option value="chk">Chuukese</option><option value="cv">Chuvash</option><option value="co">Corsican</option><option value="crh">Crimean Tatar</option><option value="hr">Croatian</option><option value="cs">Czech</option><option value="da">Danish</option><option value="fa-AF">Dari</option><option value="dv">Dhivehi</option><option value="din">Dinka</option><option value="doi">Dogri</option><option value="dov">Dombe</option><option value="nl">Dutch</option><option value="dyu">Dyula</option><option value="dz">Dzongkha</option><option value="eo">Esperanto</option><option value="et">Estonian</option><option value="ee">Ewe</option><option value="fo">Faroese</option><option value="fj">Fijian</option><option value="tl">Filipino</option><option value="fi">Finnish</option><option value="fon">Fon</option><option value="fr">French</option><option value="fy">Frisian</option><option value="fur">Friulian</option><option value="ff">Fulani</option><option value="gaa">Ga</option><option value="gl">Galician</option><option value="ka">Georgian</option><option value="de">German</option><option value="el">Greek</option><option value="gn">Guarani</option><option value="gu">Gujarati</option><option value="ht">Haitian Creole</option><option value="cnh">Hakha Chin</option><option value="ha">Hausa</option><option value="haw">Hawaiian</option><option value="iw">Hebrew</option><option value="hil">Hiligaynon</option><option value="hi">Hindi</option><option value="hmn">Hmong</option><option value="hu">Hungarian</option><option value="hrx">Hunsrik</option><option value="iba">Iban</option><option value="is">Icelandic</option><option value="ig">Igbo</option><option value="ilo">Ilocano</option><option value="id">Indonesian</option><option value="ga">Irish</option><option value="it">Italian</option><option value="jam">Jamaican Patois</option><option value="ja">Japanese</option><option value="jw">Javanese</option><option value="kac">Jingpo</option><option value="kl">Kalaallisut</option><option value="kn">Kannada</option><option value="kr">Kanuri</option><option value="pam">Kapampangan</option><option value="kk">Kazakh</option><option value="kha">Khasi</option><option value="km">Khmer</option><option value="cgg">Kiga</option><option value="kg">Kikongo</option><option value="rw">Kinyarwanda</option><option value="ktu">Kituba</option><option value="trp">Kokborok</option><option value="kv">Komi</option><option value="gom">Konkani</option><option value="ko">Korean</option><option value="kri">Krio</option><option value="ku">Kurdish (Kurmanji)</option><option value="ckb">Kurdish (Sorani)</option><option value="ky">Kyrgyz</option><option value="lo">Lao</option><option value="ltg">Latgalian</option><option value="la">Latin</option><option value="lv">Latvian</option><option value="lij">Ligurian</option><option value="li">Limburgish</option><option value="ln">Lingala</option><option value="lt">Lithuanian</option><option value="lmo">Lombard</option><option value="lg">Luganda</option><option value="luo">Luo</option><option value="lb">Luxembourgish</option><option value="mk">Macedonian</option><option value="mad">Madurese</option><option value="mai">Maithili</option><option value="mak">Makassar</option><option value="mg">Malagasy</option><option value="ms">Malay</option><option value="ms-Arab">Malay (Jawi)</option><option value="ml">Malayalam</option><option value="mt">Maltese</option><option value="mam">Mam</option><option value="gv">Manx</option><option value="mi">Maori</option><option value="mr">Marathi</option><option value="mh">Marshallese</option><option value="mwr">Marwadi</option><option value="mfe">Mauritian Creole</option><option value="chm">Meadow Mari</option><option value="mni-Mtei">Meiteilon (Manipuri)</option><option value="min">Minang</option><option value="lus">Mizo</option><option value="mn">Mongolian</option><option value="my">Myanmar (Burmese)</option><option value="nhe">Nahuatl (Eastern Huasteca)</option><option value="ndc-ZW">Ndau</option><option value="nr">Ndebele (South)</option><option value="new">Nepalbhasa (Newari)</option><option value="ne">Nepali</option><option value="bm-Nkoo">NKo</option><option value="no">Norwegian</option><option value="nus">Nuer</option><option value="oc">Occitan</option><option value="or">Odia (Oriya)</option><option value="om">Oromo</option><option value="os">Ossetian</option><option value="pag">Pangasinan</option><option value="pap">Papiamento</option><option value="ps">Pashto</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese (Brazil)</option><option value="pt-PT">Portuguese (Portugal)</option><option value="pa">Punjabi (Gurmukhi)</option><option value="pa-Arab">Punjabi (Shahmukhi)</option><option value="qu">Quechua</option><option value="kek">Qʼeqchiʼ</option><option value="rom">Romani</option><option value="ro">Romanian</option><option value="rn">Rundi</option><option value="ru">Russian</option><option value="se">Sami (North)</option><option value="sm">Samoan</option><option value="sg">Sango</option><option value="sa">Sanskrit</option><option value="sat-Latn">Santali</option><option value="gd">Scots Gaelic</option><option value="nso">Sepedi</option><option value="sr">Serbian</option><option value="st">Sesotho</option><option value="crs">Seychellois Creole</option><option value="shn">Shan</option><option value="sn">Shona</option><option value="scn">Sicilian</option><option value="szl">Silesian</option><option value="sd">Sindhi</option><option value="si">Sinhala</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="so">Somali</option><option value="es">Spanish</option><option value="su">Sundanese</option><option value="sus">Susu</option><option value="sw">Swahili</option><option value="ss">Swati</option><option value="sv">Swedish</option><option value="ty">Tahitian</option><option value="tg">Tajik</option><option value="ber-Latn">Tamazight</option><option value="ber">Tamazight (Tifinagh)</option><option value="ta">Tamil</option><option value="tt">Tatar</option><option value="te">Telugu</option><option value="tet">Tetum</option><option value="th">Thai</option><option value="bo">Tibetan</option><option value="ti">Tigrinya</option><option value="tiv">Tiv</option><option value="tpi">Tok Pisin</option><option value="to">Tongan</option><option value="ts">Tsonga</option><option value="tn">Tswana</option><option value="tcy">Tulu</option><option value="tum">Tumbuka</option><option value="tr">Turkish</option><option value="tk">Turkmen</option><option value="tyv">Tuvan</option><option value="ak">Twi</option><option value="udm">Udmurt</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="ug">Uyghur</option><option value="uz">Uzbek</option><option value="ve">Venda</option><option value="vec">Venetian</option><option value="vi">Vietnamese</option><option value="war">Waray</option><option value="cy">Welsh</option><option value="wo">Wolof</option><option value="xh">Xhosa</option><option value="sah">Yakut</option><option value="yi">Yiddish</option><option value="yo">Yoruba</option><option value="yua">Yucatec Maya</option><option value="zap">Zapotec</option><option value="zu">Zulu</option></select></div>Powered by <span style="white-space:nowrap"><a class="VIpgJd-ZVi9od-l4eHX-hSRGPd" href="https://translate.google.com" target="_blank"><img src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Translate">Translate</a></span></div></div>
                <script type="text/javascript">
                function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
                </script>
                <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
                
                
                <script type="text/javascript">
                /* <![CDATA[ */
                eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
                /* ]]> */
                </script>
            
        </div>     
    </section>
    <!-- ============GOOGLE-LANGUAGE-TRANSLATOR END HERE============= -->




    <!-- ============ DESKTOP-NAVIGATION-BAR============= -->
    <header id="desktop_navbar" class="desktop_navbar">
        <div class="wrapper">
            <nav>
                <div style="z-index: 3; opacity: 0; cursor: pointer; position: absolute; height: 50px; width: 50px; background-color: red;">
                    <input type="checkbox" name="" id="check_nav" style="cursor: pointer;">
                </div>
                    <div class="hamburger" id="hamburger-6">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>

                <div class="logo">
                    <div class="logo_wrapper" onclick="location.href=`index.php`">
                        <img src="assets/images/logo.png" alt="">
                    </div>

                    <div class="logo_name">Ocean Fortune</div>
                </div>

                <ul>
                    <li><a class="links" href="index.php">Home</a></li>
                    <li><a class="links" href="about.php">about us</a></li>            
                    <li><a>support</a>
                        <ul class="sub_menu">
                                <li><a class="links" href="faq.php">faq</a></li>
                                <li><a class="links" href="contact.php">contact us</a></li>
                        </ul>
                    </li>
                    <li><a class="links" href="login.php">Login</a></li>
                    <li><a class="links" href="signup.php">signup</a></li>
                </ul>
            </nav>
        </div>
        
    </header>
    <!-- ============ DESKTOP-NAVIGATION-BAR END HERE============= -->



    <!-- ============ CRYPTO STICKER ============= //--AT THE TOP, BELOW THE NAV BAR--//-->
    <div class="crypto-ticker" style="display: none;">
        <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;">
            <div style="height:40px; padding:0px; margin:0px; width: 100%;">
                <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
            </div>
            <div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                <a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px"></a>
            </div>
        </div>
    </div>

    <!-- ============ MOBILE-NAVIGATION-BAR============= -->
    <section class="mobile_navbar">
      <div class="wrapper">
          <ul>
              <li>
                  <span class="menu_icon">
                      <img src="assets/svg/home-1-svgrepo-com.svg" alt="">
                      <a class="links menu_link" href="index.php">Home</a>
                  </span>
              </li>
  
              <li>
                  <span class="menu_icon"> 
                      <img src="assets/svg/about-svgrepo-com.svg" alt="">
                      <a class="links menu_link" href="about.php">About</a>
                  </span>
              </li> 
  
              <li>
                  <span class="menu_icon">
                      <img src="assets/svg/faq.svg" alt="">
                      <a class="links menu_link" href="faq.php">FAQ</a>
                  </span>
              </li> 
              
              <li>
                  <span class="menu_icon">
                      <img src="assets/svg/phone-support-542.svg" alt="">
                      <a class="links menu_link" href="contact.php">Contact</a>
                  </span>
              </li> 
  
              <li>
                  <span class="menu_icon">
                      <img src="assets/svg/login-svgrepo-com (1).svg" alt="">                  
                      <a class="links menu_link" href="login.php">Login</a>
                  </span>
              </li>
              
              <li>
                  <span class="menu_icon">
                      <img src="assets/svg/registration-svgrepo-com.svg" alt="">
                      <a class="links menu_link" href="signup.php">Signup</a>
                  </span>
              </li>    
          </ul>
      </div>
    </section>
    <!-- ============ MOBILE-NAVIGATION-BAR END HERE============= -->


    
    
    <!-- ============ FAQ MAIN SECTION BEGIN HERE============= -->
     <section class="faq">
        <br>
        <br>
        <header>
            <div class="head_text">HAVE QUESTIONS?</div>
            <div class="dash"></div>
        </header>
        <div class="wrapper">
            <div class="questions_axis">
                <div class="container">
                    <div class="accordion">
                    <h3>General questions</h3>
                      <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false">
                          <span class="accordion-title">
                            Is Ocean Fortune incorporated?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            Ocean Fortune is a legal financial investment company incorporated in Norway.
                          </p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false">
                          <span class="accordion-title">Who is qualified to open an account with Company Name ?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            Any individual (except for persons under the age of 18; as well as citizens of any countries where the Company does not provide their specified services).
                          </p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false">
                          <span class="accordion-title">How do I start investment with Company Name?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            All you need to pass a simple registration. After registration, login into your Company Name account then go to the investment section and open your first deposit.
                          </p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false">
                          <span class="accordion-title">How may I become a client of Company Name?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            You may become a client of Crownkey Limited and it is totally free of charge. All you need is to sign up and fill all required fields..
                          </p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                          <span class="accordion-title">Is it free of charge to open an account?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            Yes, it is totally free of charge.
                          </p>
                        </div>
                      </div>
                      <br>
                      <br>
                      <br>
                      <br>
                      <h3>ACCOUNT QUESTIONS</h3>
                      <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false">
                          <span class="accordion-title">
                            How long does it take to make my client account active?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            Your account will be active immediately after registration.
                          </p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false">
                          <span class="accordion-title">How may I access my account?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            You may log into your account by clicking the link Login and enter your username and password.
                          </p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false">
                          <span class="accordion-title">How can I control my account?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            In order to control your account you need to use navigation menu in the left side of our website.
                          </p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false">
                          <span class="accordion-title">May I change my account details?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            You may change your account details on Profile page.
                          </p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                          <span class="accordion-title">How secure user accounts and personal data?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            All stored data on our servers remains protected via encryption technology all the time. All account related transactions done by our clients are mediated exclusively via secured internet connections.
                          </p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <button id="accordion-button-5" aria-expanded="false">
                          <span class="accordion-title">How many accounts can I open on the site?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            Any client can have only one account. In the event of multiple registrations from your device we have rights to suspend all of your accounts.
                          </p>
                        </div>
                      </div>


                      <br>
                      <br>
                      <br>
                      <br>
                      <h3>DEPOSIT QUESTIONS</h3>
                      <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false">
                          <span class="accordion-title">When the deposit should be activated?
                          </span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            Your deposit should be activated immediately if you use Perfect Money. If you use cryptocurrencies it could be some time which is required for getting confirmations by the cryptocurrency network. For deposits in cryptocurrencies we need at least 1 confirmation. If your deposit hasn't appear in your account for a long time, please contact us.
                          </p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false">
                          <span class="accordion-title">Where can I read about the investment plans?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            You can check all actual investment plans in your member area on Make Deposit page.
                          </p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false">
                          <span class="accordion-title">How can I withdraw my profit?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            In order to withdraw your profit you need to naigate to "cashout" page in your Cabinet. Please input payout amount and choose payment system which you have used for making your deposits.
                          </p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false">
                          <span class="accordion-title">How soon after withdrawal request will the money appear on my payment account?</span>
                          <span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                          <p>
                            Your request will be processed instantly. We do everything possible to reduce awaiting time of our clients.
                        </div>
                      </div>
                  
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                    <script>
                        const $items = $('.accordion button');
                    
                        function toggleAccordion() {
                            const $item = $(this);
                            const itemToggle = $item.attr('aria-expanded');
                    
                            $items.attr('aria-expanded', 'false');
                    
                            if (itemToggle === 'false') {
                                $item.attr('aria-expanded', 'true');
                            }
                        }
                    
                        $items.on('click', toggleAccordion);
                    </script>
                  </div>
            </div>
            <div class="support_axis">
              <div class="wrapper">
                <div class="text">
                  <div class="big_text">
                    <span>support</span>
                    <span>Get in touch to learn more</span>
                  </div>

                  <div class="small_text">
                    We are investing in new technologies and always looking for new innovative products to build within the Company Name brand.
                  </div>
                </div>
                <div class="btn">
                  <a href="contact.php">Get in Touch</a>
                </div>
                <div class="address">
                  <div>
                    <b>Registered Office</b>
                    <span>Elveosen 3, Sandnes, Norway.</span>
                  </div>
                  <div>
                    <b>Support Email</b>
                    <span>support@crownkeylimited.com</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
     </section>


     
    <!-- ============ FOOTER SECTION ============= -->
    <footer class="footer">
      <div class="logo">
          <a href="index.php" class="links" style="display: flex; align-items: center; gap: 20px; text-decoration: none;">
              <div class="logo_wrapper">
                  <img src="assets/images/logo.png" alt="">
              </div>

              <div class="logo_name">Ocean Fortune</div>
          </a>
      </div>
      <div class="wrapper">
          <div class="footer-card">
              <h4>company</h4>
              <ul>
                  <span>
                      We remain true to the same principles on which our company was founded : providing superior services to our clients, putting safety first, creating opportunities for our people.
                  </span>
              </ul>
          </div>
          <div class="footer-card">
              <h4>Quick Links</h4>
              <ul>
                  <li><a class="links" href="index.php">Home</a></li>
                  <li><a class="links" href="faq.php">FAQ</a></li>
                  <li><a class="links" href="contact.php">Contact</a></li>
                  <li><a class="links" href="login.php">Login</a></li>
              </ul>
          </div>
          <div class="footer-card">
              <h4>who we are</h4>
              <ul>
                  <li><a class="links" href="about.php">About</a></li>
                  <li><a class="links" href="#">purposes and values</a></li>
                  

              </ul>
          </div>
          <div class="footer-card">
              <h4>follow us</h4>
              <div class="social-links">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>

              </div>
              <ul>
                  <li><a class="signup links" href="signup.php">Sign up</a></li>

              </ul>

          </div>
      </div>
    </footer>

  
    












    
    <!-- ============ PRELOADER ANIMATION============= -->
    <section class="preloader_animation">
      <div class="wrapper">
          <div class="logo">
              <div class="image_wrapper">
                  <img src="assets/images/logo.png" alt="">
              </div>
          </div>

          <div class="loading_svg">
              <div class="image_wrapper">
                  <img src="assets/svg/bouncing-circles.svg" alt="">
              </div>
          </div>
      </div>
    </section>


    
</body>

    <!-- ============JAVASCRIPT-LINKS============= -->
    <script src="assets/javascript/function.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="assets/javascript/typed.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script src="assets/javascript/node_modules/lodash/lodash.min.js"></script>
</html>