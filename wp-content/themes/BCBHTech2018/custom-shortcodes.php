<?php

function shortcode_HelloWorld2() {
  return '<p>Hello World!</p>';
}
add_shortcode('helloworld2', 'shortcode_HelloWorld2');

function heroText($params = array()) {
	// default parameters
  extract(shortcode_atts(array(
    'title' => 'We Are a Digital Marketing Firm',
    'paragraph'  => 'We believe users should always come first',
    'button' => 'Learn About Us'
  ), $params));

  $heroBlock = "<section id='hero'>
            <div class='container'>
                <div class='hero-box'>
                    <h1>$title</h1>
                    <p>$paragraph</p>
                    <a href='#about'>
                        <div class='button hero hvr-shutter-out-horizontal'>$button</div>
                    </a>
                </div>
            </div>
        </section>";

  return $heroBlock;
}

add_shortcode('hero', 'heroText');

function aboutText($params = array()) {
  // default parameters
  extract(shortcode_atts(array(
    'title' => 'About Us',
    'paragraph'  => 'Established in 2013, BCBH Tech has been comprised of talented and passionate experts who specialize in organic search engine optimization, web conversion, and analytics. We pride ourselves on an atmosphere where every person and their ideas are valued and appreciated. We strive to foster an open work environment and empower each other to do our best work. Our abundance of office snacks helps too!'
  ), $params));

  $aboutBlock = "<section id='about'>
            <div class='container'>
                <div class='aboutBoxRight'>
                    <h2><span>01.</span>$title</h2>
                    <p>$paragraph</p>
                </div>
                <div class='aboutBoxLeft'>
                    <div class='aboutBoxImage'>
                        <img src='/wp-content/themes/BCBHTech2018/images/About_Us.png' />
                    </div>
                </div>
            </div>
        </section>";

  return $aboutBlock;
}

add_shortcode('about', 'aboutText');



function websitesText($params = array()) {
  // default parameters
  extract(shortcode_atts(array(
    'title' => 'Our Websites',
    'paragraph'  => 'Website upgrades and maintenance are at the forefront of our daily duties. What makes our products successful is the level of detail and care we give to everything we create.'
  ), $params));

  $websitesBlock = "<section id='websites'>
            <div class='container'>
                <div class='websitesBoxLeft'>
                    <h2><span>02.</span>$title</h2>
                    <p>$paragraph</p>
                </div>
                <div class='websitesBoxRight'>
                    <div class='websitesBoxImage'>
                        <div class='imageBox'>
                            <img src='/wp-content/themes/BCBHTech2018/images/meso_w_bg.png' />
                            <p>Mesothelioma Guide</p>
                        </div>
                        <div class='imageBox'>
                            <img src='/wp-content/themes/BCBHTech2018/images/bcbh_w_bg.png' />
                            <p>BCBH Law</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>";

  return $websitesBlock;
}

add_shortcode('websites', 'websitesText');



function wedoText($params = array()) {
  // default parameters
  extract(shortcode_atts(array(
    'title' => 'What We Do',
    'paragraph'  => 'We are data-driven problem solvers focused on brand awareness and lead generation.',
    'smalltitle1' => 'SEO CONTENT WRITING',
    'smallparagraph1'  => 'We create superb content with strong SEO presence for our users.',
    'smalltitle2' => 'WEB MARKETING',
    'smallparagraph2'  => 'We use inbound marketing to build nationwide relationships.',
    'smalltitle3' => 'WEB DEVELOPMENT & DESIGN',
    'smallparagraph3'  => 'We use development, innovative design and animation to visualize our brands.'
  ), $params));

  $wedoBlock = "<section id='wedo'>
            <div class='container'>
                <div class='wedoTop'>
                    <h2><span>03.</span>$title</h2>
                    <p>$paragraph</p>
                </div>
                <div class='wedoBoxes'>
                    <div class='wedoBox'>
                        <img src='/wp-content/themes/BCBHTech2018/images/content_icon.png' />
                        <h3>$smalltitle1</h3>
                        <p>$smallparagraph1</p>
                    </div>
                    <div class='wedoBox'>
                        <img src='/wp-content/themes/BCBHTech2018/images/marketing_icon.png' />
                        <h3>$smalltitle2</h3>
                        <p>$smallparagraph2</p>
                    </div>
                    <div class='wedoBox'>
                        <img src='/wp-content/themes/BCBHTech2018/images/dev_icon.png' />
                        <h3>$smalltitle3</h3>
                        <p>$smallparagraph3</p>
                    </div>
                </div>
            </div>
        </section>";

  return $wedoBlock;
}

add_shortcode('wedo', 'wedoText');




function contactText($params = array()) {
  // default parameters
  extract(shortcode_atts(array(
    'title' => 'Contact Us',
    'paragraph'  => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and specimen book. since the 1500s, when standard dummy text ever since the 1500s, when an unknown printer took a galley',
    'subheading' => 'Have a question?',
    'contactform' => '[contact-form-7 id="7" title="Contact form 1"]'
  ), $params));

  $contactBlock = "<section id='contact'>
            <div class='container'>
                <div class='contactBoxLeft'>
                    <h2><span>04.</span>$title</h2>
                    <h3>$subheading</h3>
                    <p>$paragraph</p>
                </div>
                <div class='contactBoxRight'>".
                  do_shortcode($contactform)
                ."</div>
            </div>
        </section>";

  return $contactBlock;
}

add_shortcode('contact', 'contactText');


?>