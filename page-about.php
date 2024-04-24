<?php 
    get_header();
?>

    <main id="about-us">
        <section class="about-us__fv" id="about-us__fv">
            <img class="is-pc" src="<?php echo get_template_directory_uri()?>/assets/image/AboutUs/FV-PC.jpg" alt="KS GOLF LOUNGEについて">
            <img class="is-sp" src="<?php echo get_template_directory_uri()?>/assets/image/AboutUs/FV-SP.jpg" alt="KS GOLF LOUNGEについて">
            <h1 class="wow fadeInUp">ABOUT US<small>KS GOLF LOUNGEについて</small></h1>
        </section>


        <section class="about-us__concept" id="about-us__concept">
            <div class="container">
                <div class="content">
                    <h2 class="wow fadeInUp">店舗のコンセプト</h2>
                    <p class="wow fadeInUp">
                    当スタジオのコンセプトは「贅沢な瞬間の中での成長」です。<br>
                    私たちは、お客様が心地よい空間で最高のゴルフ体験をしていただくために、指導力、環境面など細部にこだわったサービスを提供しています。
                    </p>
                </div>
                <img class="is-pc wow fadeInUp" src="<?php echo get_template_directory_uri()?>/assets/image/AboutUs/concept-pc.jpg" alt="店舗のコンセプト">
                <img class="is-sp wow fadeInUp" src="<?php echo get_template_directory_uri()?>/assets/image/AboutUs/concept-sp.jpg" alt="店舗のコンセプト">
            </div>
        </section>
        <section class="about-us__electricity" id="about-us__electricity">
            <div class="container">
                <div class="content">
                    <h2 class="wow fadeInUp">太陽光を活用しているSDGsを意識した店舗</h2>
                    <p class="wow fadeInUp">
                        運営会社であるKSエンジニアリングは太陽光システムを取り扱っており、当店舗の電力の一部は太陽光で賄っております。当社だからこそできるSDGsを意識した店舗運営を心がけていきます。
                    </p>
                </div>
                <img class="is-pc wow fadeInUp" src="<?php echo get_template_directory_uri()?>/assets/image/AboutUs/Electricity-PC.jpg"
                    alt="SDGs 電気は太陽光でまかなっているエコ">
                <img class="is-sp wow fadeInUp" src="<?php echo get_template_directory_uri()?>/assets/image/AboutUs/Electricity-SP.jpg"
                    alt="SDGs 電気は太陽光でまかなっているエコ">
                <a href="http://www.kse-corp.jp/" class="main-btn">
                    <span>運営会社について<br class="is-sp"><small>（コーポレートサイトへ）</small></span>
                    <svg width="24" height="12" viewBox="0 0 24 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 6L15.75 10.7631L15.75 1.23686L24 6Z" fill="#F8F8F8" />
                        <rect y="5.5" width="18" height="1" fill="#F8F8F8" />
                    </svg>
                </a>
            </div>
        </section>
        <section class="about-us__feature" id="about-us__feature">
            <div class="container">
                <h2 class="wow fadeInUp">FEATURE<small>KS GOLF LOUNGEの特徴</small></h2>
                <ul>
                    <li>
                        <div class="feature-content">
                            <h3 class="wow fadeInUp">最新機器の導入</h3>
                            <p class="wow fadeInUp">
                                GolfzonのTwo Visionシリーズを最新機器として導入しています。この機器は高精度のセンサーとリアルタイム3Dシミュレーションを組み合わせ、スイングの詳細な解析が可能。豊富なコースデータで実戦感を味わい、ユーザーフレンドリーな操作で初心者から上級者まで楽しみながらスキルアップが可能です。
                            </p>
                        </div>
                        <figure>
                            <img class="wow fadeInUp" src="<?php echo get_template_directory_uri()?>/assets/image/AboutUs/Feature1.jpg" alt="最新機種の話">
                        </figure>
                    </li>
                    <li>
                        <div class="feature-content">
                            <h3 class="wow fadeInUp">人工芝で快適な練習を</h3>
                            <p class="wow fadeInUp">
                                当スタジオでは、快適な人工芝を導入しています。この人工芝は、天然芝に近い感触とグリップ感を提供し、練習の質を高めます。また、ティーの高さを調整可能な機能も備えており、各ユーザーのスイングやプレースタイルに合わせた最適な条件での練習が可能です。これにより、より実戦に近い状況での練習が実現し、スキルアップへとつながります。
                            </p>
                        </div>
                        <figure>
                            <img class="wow fadeInUp" src="<?php echo get_template_directory_uri()?>/assets/image/AboutUs/Feature2.jpg" alt="最新機種の話">
                        </figure>
                    </li>
                    <li>
                        <div class="feature-content">
                            <h3 class="wow fadeInUp">ストレスなく練習できる<br>こだわりの空調。</h3>
                            <p class="wow fadeInUp">
                            練習に集中できるよう細部にまでこだわった空間を提供しています。色調は落ち着いたトーンでリラックス効果を高め、空調は快適な温度を保ちます。また、広々とした打席は自由な動きを可能にし、隣の打席との距離も適切に設計されています。これらの工夫により、お客様は最高の練習環境でストレスなくスキルアップに専念できます。
                            </p>
                        </div>
                        <figure>
                            <img class="wow fadeInUp" src="<?php echo get_template_directory_uri()?>/assets/image/AboutUs/Feature3.jpg" alt="最新機種の話">
                        </figure>
                    </li>         
                </ul>
            </div>
        </section>
    </main>

<?php
    get_footer(); 
?>