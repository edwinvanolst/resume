<!doctype html><html lang="en"><head><meta charset="utf-8"><?php

$name = 'Edwin van Olst';
$meta['author'] = $name;
$meta['description'] = 'My resume';
$title = $name;

echo '<title>'.$title.'</title>';

foreach ($meta as $key => $value) {
  echo '<meta name="'.$key.'" content="'.$value.'">';
}

echo '<style>';
require_once 'css/structure.css';
require_once 'css/base.css';
require_once 'css/dark.css';
echo '</style>';

echo '</head>';
echo '<body>';

echo '<div id="resume">';

echo '<header>';
echo '<img id="picture" src="">';
echo '<a class="button contrast-button" title="Contrast">Contrast</a>';
echo '<a class="button">Print</a>';
echo '<a class="button">Print</a>';
//echo '<button class="button" id="print-button">Print</button>';
//echo '<button class="button" id="theme-button">Theme</button>';
echo '<h1>'.$name.'</h1>';
echo '<ul>';
echo '<li class="icon icon-print">25 januari 1986 (32)</li>';
echo '<li class="icon icon-map">Turnhout, Belgie</li>';
echo '</ul>';
echo '</header>';

echo '<main>';

echo '<article>';

echo '<p>';
echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis est ornare, suscipit urna nec, mollis felis. Phasellus condimentum orci at leo vestibulum ultricies. Proin ultricies urna ac magna consequat, et viverra turpis cursus. Aliquam mollis ligula id placerat aliquet. Nulla eget tempus ex. Aenean tincidunt purus quis ex condimentum aliquet a nec augue. Donec consequat odio vitae egestas laoreet. Sed sed magna ac mauris volutpat gravida nec eu sem. In eu nisi sed tellus congue iaculis. Nam rutrum nec ante ac imperdiet. Duis pretium augue fermentum, auctor odio eget, aliquet dui.';
echo '</p>';

echo '<h2>History</h2>';
echo '<table>';
echo '<tr>';
echo '<td>2015 - 18</td>';
echo '<td>Natra Malle</td>';
echo '<td>Operator/Heftrucker</td>';
echo '</tr>';
echo '<tr>';
echo '<td>2014 - 15</td>';
echo '<td>Astra Sweets Turnhout</td>';
echo '<td>Machine Operator</td>';
echo '</tr>';
echo '<tr>';
echo '<td>2012 - 13</td>';
echo '<td>Armour Vosselaar</td>';
echo '<td>Magento Developer</td>';
echo '</tr>';
echo '<tr>';
echo '<td>2006 - 12</td>';
echo '<td>Horeca</td>';
echo '</tr>';
echo '</table>';
echo '<h2>Education</h2>';
echo '<table>';
echo '<tr>';
echo '<td>2017 - Nu</td>';
echo '<td>EduKempen</td>';
echo '<td>Netwerktechnicus</td>';
echo '</tr>';
echo '<tr>';
echo '<td>2008 - 12</td>';
echo '<td>KH Leuven</td>';
echo '<td>Toegepaste Informatica  </td>';
echo '</tr>';
echo '<tr>';
echo '<td>1996 - 06</td>';
echo '<td>Secundair Onderwijs</td>';
echo '<td>Humane Wetenschappen</td>';
echo '</tr>';
echo '</table>';


echo '</article>';

echo '<aside>';

echo '<h3>Language</h3>';
echo '<ul id="contact">';
echo '<li>Dutch<span>Vloeiend</span></li>';
echo '<li>English<span>Vloeiend</span></li>';
echo '<li>French<span>Basis</span></li>';
echo '</ul>';

echo '<h3>Contact</h3>';
echo '<ul id="contact">';
echo '<li class="icon icon-phone">0477 76 45 30</li>';
echo '<li class="icon icon-email"><a href="mailto:edwinvanolst@me.com">edwinvanolst@me.com</a></li>';
echo '<li  class="icon icon-message" id="message-button">Message Form</li>';
echo '</ul>';

echo '<h3>Hobbies</h3>';
echo '<ul>';
echo '<li>Computers</li>';
echo '<li>Electronics</li>';
echo '<li>Programming</li>';
echo '</ul>';

echo '<h3>This resume</h3>';
echo '<ul>';
echo '<li>Built with PHP &amp; JavaScript</li>';
echo '<li>Runs on Docker</li>';
echo '<li>Uses MariaDB</li>';
echo '<li>Source: <a href="github.com">GitHub</a></li>';
echo '<li></li>';
echo '</ul>';

echo '</aside>';

echo '<div id="message-form">';
echo '</div>';

echo '</main>';

echo '</div>';

echo '<script>';
require_once 'js/message.js';
require_once 'js/theme.js';
echo '</script>';

?></body></html>
  
