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
            </form>

            <img src="/assets/team.png" id="group">

            <?php
                if (isset($_POST['donald'])) {
                    echo '<style>[class*="namecard"] { display: none; }</style>';
                    echo '<style>[class*="namecard-donald"] { display: unset }</style>';
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
