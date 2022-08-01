<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/assets/include/styles.css">
    <?php
        include "/assets/include/functions.php";
    ?>
</head>

<body>
    <div class="white" data-0="transform:translate(0,0%);opacity:1" data-100p="transform:translate(0,0%);opacity:1">
        <h1 class="cclub">Computer Club</h1>
        <p class="ccap">Rewriting the rules.</p>
    
        <p class="s4m">Scroll for more.</p>
    </div>
    
    <div class="black" data-0="transform:translate(0,100%); opacity:0.3" data-100p="transform:translate(0,0%);opacity:1">
        <h1 class="blog">Blog</h1>
        <h3 class="ablog">Latest news and activities.</h3>

        <!-- BLOG HIGHLIGHT ONE START-->
        <div class="blog-highlight-one">
            <h4 class="bheader">2022: End of year report.</h4>
            <h5 class="bsubheader">Tough year eh? Same for us.</h5>
            <p class="bintro">This year was a challenging year for everyone.
                Under the Coronavirus pandemic, a lot of clubs and societies' 
                activites are limited due to government restrictions on schools.
                <br> <br>
                Still, we managed to try our best to organize activities for people
                that are interested in what we do. Continue reading to find out more details.
            </p>

            <a href="/blog/2022-review/2022-review.html">
                <p class="blm">( LEARN MORE )</p>
            </a>
        </div>

        <!-- BLOG HIGHLIGHT ONE END -->

        <!-- BLOG HIGHLIGHT TWO START -->
        <div class="blog-highlight-two">
            <h4 class="bheader">The story of the website.</h4>
            <h5 class="bsubheader">The rules behind the design.</h5>
            <p class="bintro">For those that may find the design of the website weird.
                Here are answers for your queries, and our decisions.
                <br><br>
                In this article, we will cover the reasons for our designs, why we decided
                to go with this color / font selection, designing rules we have been following,
                goals we aim to acheive with this website, etc.
            </p>

            <a href="/blog/design/design.html">
                <p class="blm">( LEARN MORE )</p>
            </a>

            <!-- BLOG HIGHLIGHT TWO END -->
        </div> 
        <p class="ds4m">Scroll for more.</p>
    </div>

    <div class="white" data-0="transform:translate(0,100%); opacity:0.3" data-100p="transform:translate(0,0%);opacity:1">
        <h1 class="team">Team</h1>
        <h3 class="ateam">The club's important personnel..</h3>
        
        <div class="tctn">
            <form method="post">
                <input type="submit" id="donald" name="donald">
                <input type="submit" id="markc" name="markc">
                <input type="submit" id="tkt" name="tkt">
                <input type="submit" id="pig" name="pig">
                <input type="submit" id="left" name="left">
                <input type="submit" id="jamie" name="jamie">
            </form>

            <img src="/assets/team.png" id="group">

            <?php
                if (isset($_POST['donald'])) {
                    echo '<style>[class*="namecard"] { display: none; }</style>';
                    echo '<style>[class*="namecard-donald"] { display: unset }</style>';
                } else if (isset($_POST['markc'])) {
                    echo '<style>[class*="namecard"] { display: none; }</style>';
                    echo '<style>[class*="namecard-markc"] { display: unset }</style>';
                } else if (isset($_POST['tkt'])) {
                    echo '<style>[class*="namecard"] { display: none; }</style>';
                    echo '<style>[class*="namecard-tkt"] { display: unset }</style>';
                } else if (isset($_POST['pig'])) {
                    echo '<style>[class*="namecard"] { display: none; }</style>';
                    echo '<style>[class*="namecard-pig"] { display: unset }</style>';
                } else if (isset($_POST['left'])) {
                    echo '<style>[class*="namecard"] { display: none; }</style>';
                    echo '<style>[class*="namecard-left"] { display: unset }</style>';
                } else if (isset($_POST['jamie'])) {
                    echo '<style>[class*="namecard"] { display: none; }</style>';
                    echo '<style>[class*="namecard-jamie"] { display: unset }</style>';
                }
            ?>
        </div>

        <!-- NAMECARD CLASSES START -->
        <div class="namecard-donald">
            <h3 class="namecard-donald-name">Chung Ho Long</h3>
            <h4 class="namecard-donald-class">6E (04)</h4>
            <h4 class="namecard-donald-rank">Chairperson, 2021-22</h4>
            <a href="mailto://sms23030@stmarks.edu.hk">
                <p class="namecard-donald-email">( E-MAIL )</p>
            </a>
        </div>

        <div class="namecard-markc">
            <h3 class="namecard-markc-name">Cheung Chun Yu</h3>
            <h4 class="namecard-markc-class">5A (06)</h4>
            <h4 class="namecard-markc-rank">Committee, 2022-23</h4>
            <a href="mailto://sms24020@stmarks.edu.hk">
                <p class="namecard-markc-email">( E-MAIL )</p>
            </a>
        </div>

        <div class="namecard-tkt">
            <h3 class="namecard-tkt-name">To King To</h3>
            <h4 class="namecard-tkt-class">5C (17)</h4>
            <h4 class="namecard-tkt-rank">Chairperson, 2022-23</h4>
            <a href="mailto://sms24112@stmarks.edu.hk">
                <p class="namecard-tkt-email">( E-MAIL )</p>
            </a>
            <a href="https://github.com/kotnid">
                <p class="namecard-tkt-git">( GITHUB )</p>
            </a>
        </div>

        <div class="namecard-pig">
            <h3 class="namecard-pig-name">Lee Cheuk Long</h3>
            <h4 class="namecard-pig-class">5A (18)</h4>
            <h4 class="namecard-pig-rank">Secretary, 2022-23</h4>
            <a href="mailto://sms24071@stmarks.edu.hk">
                <p class="namecard-pig-email">( E-MAIL )</p>
            </a>
        </div>

        <div class="namecard-left">
            <h3 class="namecard-left-name">Chor Ching Nam</h3>
            <h4 class="namecard-left-class">5D (05)</h4>
            <h4 class="namecard-left-rank">Treasurer, 2022-23</h4>
            <a href="mailto://sms24028@stmarks.edu.hk">
                <p class="namecard-left-email">( E-MAIL )</p>
            </a>
            <a href="https://github.com/CCN0807">
                <p class="namecard-left-git">( GITHUB )</p>
            </a>
        </div>

        <div class="namecard-jamie">
            <h3 class="namecard-jamie-name">Ho Sze Yui</h3>
            <h4 class="namecard-jamie-class">5A (11)</h4>
            <h4 class="namecard-jamie-rank">Committee, 2022-23</h4>
            <a href="mailto://sms24044@stmarks.edu.hk">
                <p class="namecard-jamie-email">( E-MAIL )</p>
            </a>
        </div>
        <!-- NAMECARD CLASSES END -->
        <p class="ps4m">click the people for details. scroll down for more.</p>
    </div>

    <div class="black" data-0="transform:translate(0,100%); opacity:0.3" data-100p="transform:translate(0,0%);opacity:1" style="min-height: 200px">
        <h1 class="tl">Timeline</h1>
        <h3 class="atl">our yearly plan.</h3>

        <img id="arrow" src="/assets/arrow.png">

        <p class="sep22">September 2022: <br>
            Enrollment day <br>
            Annual General Meeting
        </p>

        <p class="oct22">
            October 2022:<br>
            Collaboration with <br>
            green club
        </p>

        <p class="jan23">
            January 2023:<br>
            Collaboration with<br>
            Chinese history club
        </p>

        <p class="mar23">
            march 2023:<br>
            Collaboration with<br>
            ?????????
        </p>

        <p class="may23">
            May 2023:<br>
            ICT day 2023
        </p>

        <p class="ds4m">Scroll for more.</p>
    </div>

    <div class="white" data-0="transform:translate(0,100%); opacity:0.3" data-100p="transform:translate(0,0%);opacity:1">
        <h1 class="joinus">Join us.</h1>
        <h3 class="mtc">make the change happen.</h3>

        <a href="https://instagram.com/sms.computerclub">
            <p class="ig">( INSTAGRAM )</p>
        </a>

        <a href="https://instagram.com/sms.computerclub">
            <p class="discord">( DISCORD )</p>
        </a>

        <a href="mailto://computer-club@stmarks.edu.hk">
            <p class="email">( EMAIL )</p>
        </a>

        <a href="https://github.com/SMSOSS">
            <p class="github">( GITHUB )</p>
        </a>

        <a href="/pages/credits.html">
            <p class="credit">( CREDITS AND THANKS )</p>
        </a>

        <a href="https://smsoss.github.io/smsrt_website/">
            <p class="rtw">( ROBOT TEAM WEBSITE )</p>
        </a>
    </div>

    <script type="text/javascript" src="/assets/include/skrollr.js"></script>
    <script type="text/javascript">
        var s = skrollr.init();
    </script>
</body>
</html>
