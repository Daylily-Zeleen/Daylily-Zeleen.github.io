<?php /* ##########################
[client_email]
[dev_email]
data:image/png;base64,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eIrYhEIAAQQQQAABBBBAgAKcMYAAAggggAACCCCAQIoCFOApYhMKAQQQQAABBBBAAAEKcMYAAggggAACCCCAAAIpClCAp4hNKAQQQAABBBBAAAEEKMAZAwgggAACCCCAAAIIpChAAZ4iNqEQQAABBBBAAAEEEKAAZwwggAACCCCAAAIIIJCiAAV4itiEQgABBBBAAAEEEECAApwxgAACCCCAAAIIIIBAigIU4CliEwoBBBBAAAEEEEAAAQpwxgACCCCAAAIIIIAAAikKUICniE0oBBBAAAEEEEAAAQQowBkDCCCAAAIIIIAAAgikKEABniI2oRBAAAEEEEAAAQQQoABnDCCAAAIIIIAAAgggkKIABXiK2IRCAAEEEEAAAQQQQIACnDGAAAIIIIAAAggggECKAhTgKWITCgEEEEAAAQQQQAABCnDGAAIIIIAAAggggAACKQpQgKeITSgEEEAAAQQQQAABBCjAGQMIIIAAAggggAACCKQoQAGeIjahEEAAAQQQQAABBBCgAGcMIIAAAggggAACCCCQogAFeIrYhEIAAQQQQAABBBBAgAKcMYAAAggggAACCCCAQIoCFOApYhMKAQQQQAABBBBAAAEKcMYAAggggAACCCCAAAIpClCAp4hNKAQQQAABBBBAAAEEKMAZAwgggAACCCCAAAIIpChAAZ4iNqEQQAABBBBAAAEEEKAAZwwggAACCCCAAAIIIJCiAAV4itiEQgABBBBAAAEEEECAApwxgAACCCCAAAIIIIBAigIU4CliEwoBBBBAAAEEEEAAAQpwxgACCCCAAAIIIIAAAikKUICniE0oBBBAAAEEEEAAAQQowBkDCCCAAAIIIIAAAgikKEABniI2oRBAAAEEEEAAAQQQoABnDCCAAAIIIIAAAgggkKIABXiK2IRCAAEEEEAAAQQQQIACnDGAAAIIIIAAAggggECKAhTgKWITCgEEEEAAAQQQQAABCnDGAAIIIIAAAggggAACKQpQgKeITSgEEEAAAQQQQAABBCjAGQMIIIAAAggggAACCKQoQAGeIjahEEAAAQQQQAABBBCgAGcMIIAAAggggAACCCCQogAFeIrYhEIAAQQQQAABBBBAgAKcMYAAAggggAACCCCAQIoCFOApYhMKAQQQQAABBBBAAAEKcMYAAggggAACCCCAAAIpCvx/fpzYfTKOcUQAAAAASUVORK5CYII=
43.207.54.139
June 13, 2025 at 9:53:06 PM GMT+8
-480
[dev_name]
[client_name]
###################################

1. The 2nd and 3rd lines above are the emails read by this PHP script from itself (used below as $lines[1] and $lines[2] respectively). 

2. The 4th line ($lines[3] below) is the data for $DEV_SIGNATURE.

3. The $CLIENT_SIGNATURE is received by this script from itself when second person signs the contract.
*/

$phpName  = basename($_SERVER['PHP_SELF']) ? basename($_SERVER['PHP_SELF']) : 'index.php';
$fileName = substr($phpName , 0, -4);
$htmlName = $fileName.'.html';

// If the filename is (or starts with) "test" or "demo" the PHP file won't delete itself, nor will it redirect to the HTML contract (when one exists)
if ( substr($fileName,0,4) == 'test' || substr($fileName,0,4) == 'demo' ) { 
  $selfDelete = 0; 
}
else { 
  $selfDelete = 1; 
}

$lines = file(__FILE__);

$clientEmail   = format($lines[1]);
$devEmail      = format($lines[2]);
$DEV_SIGNATURE = format($lines[3]);
$devIP         = format($lines[4]);
$devTimestamp  = format($lines[5]);
$devTimeOffset = format($lines[6]);
$devName       = format($lines[7]);
$clientName    = format($lines[8]);

// Trim and ignore [placeholders]
function format($text) {
  $text = trim($text);
  $firstChar = substr($text, 0, 1);
  $lastChar = substr($text, -1, 1);
  if ($firstChar == '[' && $lastChar == ']')
    return '';
  else
    return $text;
}

// Gets the current file URL and replaces the .php extension with .html
function getHtmlUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  $url = substr($url,0,-4) . '.html';
  return $url;
}

/**
The HTML code (and some PHP) is kept in PHP variables like $CONTRACT_HTML, $FOOTER, $CONTRACT_SIGNED_PHP, and $CLIENT_DATE_IP_COMPILED.
**/

// This gets executed when Client signs; 
// the functions are used in $CLIENT_DATE_IP_PHP
$CONTRACT_SIGNED_PHP = '
  $phpName  = basename($_SERVER["PHP_SELF"]) ? basename($_SERVER["PHP_SELF"]) : "index.php";
  $fileName = substr($phpName , 0, -4);
  $htmlName = $fileName.".html";
  $pdfName = $fileName.".pdf";

  // Function to get the client IP address
  function get_client_ip_env() {
    $ipaddress = "";
    if (getenv("HTTP_CLIENT_IP"))
      $ipaddress = getenv("HTTP_CLIENT_IP");
    else if(getenv("HTTP_X_FORWARDED_FOR"))
      $ipaddress = getenv("HTTP_X_FORWARDED_FOR");
    else if(getenv("HTTP_X_FORWARDED"))
      $ipaddress = getenv("HTTP_X_FORWARDED");
    else if(getenv("HTTP_FORWARDED_FOR"))
      $ipaddress = getenv("HTTP_FORWARDED_FOR");
    else if(getenv("HTTP_FORWARDED"))
      $ipaddress = getenv("HTTP_FORWARDED");
    else if(getenv("REMOTE_ADDR"))
      $ipaddress = getenv("REMOTE_ADDR");
    else
      $ipaddress = "UNKNOWN";
    return $ipaddress;
  } 
  // Function to get the client date converted to the same GMT as the dev date
  function get_client_date($receivedOffset) {
      //$receivedOffset comes negative and in minutes, eg: -120 for GMT+2
      $offset = -1 * $receivedOffset / 60; // GMT offset
      $is_DST = FALSE; // observing daylight savings?
      $timezone_name = timezone_name_from_abbr("", $offset * 3600, $is_DST);
      date_default_timezone_set($timezone_name);

      return date("F j, Y") ." at ". date("g:i:s A") ." GMT" . sprintf("%+d", $offset);
  }
  ?>';


$CONTRACT_HTML='
  <h1>Contract of work</h1><p>This Contract is made and entered into as of the date set forth below by and between <strong> Alice Williams </strong> (hereinafter referred to as "Developer") and <strong> Bob Smith </strong> (hereinafter referred to as "Client").</p><h2>I. Agreement of parties</h2><p>Client hereby hires Developer to rebuild the current website <strong> bobswebsite.com, </strong> for the estimated total price of <strong> $PRICE. </strong> Developer agrees to provide quality service and to answer to Client\'s requests in a timely manner.</p><p>The payment plan is outlined in section VII of this contract.</p><h2>II. TERM</h2><p>This contract shall commence upon the first payment, as outlined in the payment plan and shall remain effective until the services are completed and delivered.</p><h2>III. Legal matters and copyrights</h2><p>Client hereby guarantees to Developer that any elements of text, graphics, photos, trademarks or other artwork that Client provides for inclusion in the website are either owned by them or that they have the permission to use them.</p><p>Upon receipt of the final payment, the following copyright assignment shall automatically occur:</p><ol><li>Client will own the graphics, virtual elements, text content, photographs, and other data provided, unless someone else owns them.</li><li>Developer owns the HTML markup, CSS and other code and they license it to Client for use on only this project. Developer can reserve the right to display, with Client\'s consent, the work as part of the portfolio.</li></ol><h2>IV. Modifications</h2><p>This contract may be modified by the parties in writing. All notices under this contract must be transmitted in writing by email and will only be effective upon confirmation of receipt.</p><h2>V. Termination</h2><p>Either party may terminate this contract at any time, effective immediately upon notice or mutual agreement.</p><p>In the event of termination, Developer shall be compensated for services performed through the date of termination in one of the following amounts, whichever is greater, together with any additional costs incurred trough and up to the date of cancellation:</p><ol><li class="ql-indent-1">any advanced payment,</li><li class="ql-indent-1">a prorated portion of the fees due, or</li><li class="ql-indent-1">hourly fees for work performed by Developer at the time of the termination.</li></ol><h2>VI. Force majeure</h2><p>Developer shall not be deemed in breach of this contract if they are unable to complete the services or any portion of them due to fire, earthquake, war, labor dispute, illness, internet breaches, or any other technical issues that are beyond their control. In the event of a <em> force majeure, </em> Developer shall give notice to Client of their inability to perform or of any delay in completing the services and shall propose revisions to the schedule for completion.</p><h2>VII. Payment plan</h2><p>Payments shall be made as follows:</p><ul><li>50% of total estimated fee will be required to commence work, after this contract has been approved and signed by both parties.</li><li>50% upon project closure.</li></ul><p>Any extra time required outside the project services mentioned in section I of this contract, will be billed at a rate of <strong> $FEE </strong> per hour.</p>
';


$DEV_SIGNATURE = '<img id="dev_signature" src="' . $DEV_SIGNATURE . '" >';

$CLIENT_SIGNATURE = isset($_POST['client_signature']) ? $_POST['client_signature'] : null;
if (substr( $CLIENT_SIGNATURE, 0, 22 ) === 'data:image/png;base64,') {
    $CLIENT_SIGNATURE = '<img id="hk" src="' . htmlspecialchars($CLIENT_SIGNATURE) . '" >';
} else {
  $CLIENT_SIGNATURE = null;
}

/**
The HTML code (and some PHP) is kept in PHP variables like $CONTRACT_HTML, $FOOTER, $CONTRACT_SIGNED_PHP, and $CLIENT_DATE_IP_COMPILED.
**/

function headerWithTitle($title) {
  return '<!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <title>' . $title . '</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="robots" content="noindex">
    <link rel="preconnect" href="https://cdn.skypack.dev">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>@import url(https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic) layer(fonts);@import url(https://fonts.googleapis.com/css?family=Arapey) layer(fonts);@import url(https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@75,600;100,400;100,600;100,700;100,800) layer(fonts);@layer reset, accessibility, animated-entrances, forms;@layer from-quill-editor, from-quill-editor-overrides;@layer utility;@layer signatures, buttons;@layer modal;@layer contract-typography;@layer reset{@media print{.noprint{display:none!important}}}@layer reset{*,:after,:before{box-sizing:border-box}body,figure,h1,h2,h3,h4,h5,p,picture{margin:0}h1,h2,h3,h4,h5,h6{font-weight:400}img,picture{display:block;height:auto;max-width:100%}button,input,select,textarea{font:inherit}}@layer colors{:root{--clr-light-hsl:20 80% 98%;--clr-dark-hsl:200 20% 25%;--clr-darker-hsl:200 59% 22%;--clr-primary-hsl:200 75% 30%;--clr-danger-hsl:20 100% 30%;--clr-success-hsl:165 75% 30%;--clr-warning-hsl:36 100% 30%;--clr-blue-500:#136086;--clr-blue-600:#105070;--clr-blue-700:#0d4059;--clr-red-500:#863913;--clr-red-600:#703010;--clr-red-700:#59260d;--clr-green-500:#138669;--clr-green-600:#107058;--clr-green-700:#0d5946;--clr-brown-500:#865813;--clr-brown-600:#704910;--clr-brown-700:#593b0d;--clr-blue-desaturated-500:#395360;--clr-blue-desaturated-600:#263740;--clr-blue-desaturated-700:#131c20;--clr-red-desaturated-500:#604639;--clr-red-desaturated-600:#402f26;--clr-red-desaturated-700:#201713;--clr-green-desaturated-500:#396056;--clr-green-desaturated-600:#264039;--clr-green-desaturated-700:#13201d;--clr-brown-desaturated-500:#605039;--clr-brown-desaturated-600:#403626;--clr-brown-desaturated-700:#201b13}}@layer from-quill-editor{.ql-editor blockquote,.ql-editor h1,.ql-editor h2,.ql-editor h3,.ql-editor h4,.ql-editor h5,.ql-editor h6,.ql-editor ol,.ql-editor p,.ql-editor pre,.ql-editor ul{counter-reset:list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9}.ql-editor ol,.ql-editor ul{padding-left:1.5em}.ql-editor ol>li,.ql-editor ul>li{list-style-type:none}.ql-editor ul>li:before{content:"\2022"}.ql-editor li:before{display:inline-block;white-space:nowrap;width:1.2em}.ql-editor li:not(.ql-direction-rtl):before{margin-left:-1.5em;margin-right:.3em;text-align:right}.ql-editor li.ql-direction-rtl:before{margin-left:.3em;margin-right:-1.5em}.ql-editor ol li:not(.ql-direction-rtl),.ql-editor ul li:not(.ql-direction-rtl){padding-left:1.5em}.ql-editor ol li.ql-direction-rtl,.ql-editor ul li.ql-direction-rtl{padding-right:1.5em}.ql-editor ol li{counter-increment:list-0;counter-reset:list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9}.ql-editor ol li:before{content:counter(list-0,decimal) ". "}.ql-editor ol li.ql-indent-1{counter-increment:list-1}.ql-editor ol li.ql-indent-1:before{content:counter(list-1,lower-alpha) ". "}.ql-editor ol li.ql-indent-1{counter-reset:list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9}.ql-editor ol li.ql-indent-2{counter-increment:list-2}.ql-editor ol li.ql-indent-2:before{content:counter(list-2,lower-roman) ". "}.ql-editor ol li.ql-indent-2{counter-reset:list-3 list-4 list-5 list-6 list-7 list-8 list-9}.ql-editor ol li.ql-indent-3{counter-increment:list-3}.ql-editor ol li.ql-indent-3:before{content:counter(list-3,decimal) ". "}.ql-editor ol li.ql-indent-3{counter-reset:list-4 list-5 list-6 list-7 list-8 list-9}.ql-editor ol li.ql-indent-4{counter-increment:list-4}.ql-editor ol li.ql-indent-4:before{content:counter(list-4,lower-alpha) ". "}.ql-editor ol li.ql-indent-4{counter-reset:list-5 list-6 list-7 list-8 list-9}.ql-editor ol li.ql-indent-5{counter-increment:list-5}.ql-editor ol li.ql-indent-5:before{content:counter(list-5,lower-roman) ". "}.ql-editor ol li.ql-indent-5{counter-reset:list-6 list-7 list-8 list-9}.ql-editor ol li.ql-indent-6{counter-increment:list-6}.ql-editor ol li.ql-indent-6:before{content:counter(list-6,decimal) ". "}.ql-editor ol li.ql-indent-6{counter-reset:list-7 list-8 list-9}.ql-editor ol li.ql-indent-7{counter-increment:list-7}.ql-editor ol li.ql-indent-7:before{content:counter(list-7,lower-alpha) ". "}.ql-editor ol li.ql-indent-7{counter-reset:list-8 list-9}.ql-editor ol li.ql-indent-8{counter-increment:list-8}.ql-editor ol li.ql-indent-8:before{content:counter(list-8,lower-roman) ". "}.ql-editor ol li.ql-indent-8{counter-reset:list-9}.ql-editor ol li.ql-indent-9{counter-increment:list-9}.ql-editor ol li.ql-indent-9:before{content:counter(list-9,decimal) ". "}.ql-editor .ql-indent-1:not(.ql-direction-rtl){padding-left:3em}.ql-editor li.ql-indent-1:not(.ql-direction-rtl){padding-left:4.5em}.ql-editor .ql-indent-1.ql-direction-rtl.ql-align-right{padding-right:3em}.ql-editor li.ql-indent-1.ql-direction-rtl.ql-align-right{padding-right:4.5em}.ql-editor .ql-indent-2:not(.ql-direction-rtl){padding-left:6em}.ql-editor li.ql-indent-2:not(.ql-direction-rtl){padding-left:7.5em}.ql-editor .ql-indent-2.ql-direction-rtl.ql-align-right{padding-right:6em}.ql-editor li.ql-indent-2.ql-direction-rtl.ql-align-right{padding-right:7.5em}.ql-editor .ql-indent-3:not(.ql-direction-rtl){padding-left:9em}.ql-editor li.ql-indent-3:not(.ql-direction-rtl){padding-left:10.5em}.ql-editor .ql-indent-3.ql-direction-rtl.ql-align-right{padding-right:9em}.ql-editor li.ql-indent-3.ql-direction-rtl.ql-align-right{padding-right:10.5em}.ql-editor .ql-indent-4:not(.ql-direction-rtl){padding-left:12em}.ql-editor li.ql-indent-4:not(.ql-direction-rtl){padding-left:13.5em}.ql-editor .ql-indent-4.ql-direction-rtl.ql-align-right{padding-right:12em}.ql-editor li.ql-indent-4.ql-direction-rtl.ql-align-right{padding-right:13.5em}.ql-editor .ql-indent-5:not(.ql-direction-rtl){padding-left:15em}.ql-editor li.ql-indent-5:not(.ql-direction-rtl){padding-left:16.5em}.ql-editor .ql-indent-5.ql-direction-rtl.ql-align-right{padding-right:15em}.ql-editor li.ql-indent-5.ql-direction-rtl.ql-align-right{padding-right:16.5em}.ql-editor .ql-indent-6:not(.ql-direction-rtl){padding-left:18em}.ql-editor li.ql-indent-6:not(.ql-direction-rtl){padding-left:19.5em}.ql-editor .ql-indent-6.ql-direction-rtl.ql-align-right{padding-right:18em}.ql-editor li.ql-indent-6.ql-direction-rtl.ql-align-right{padding-right:19.5em}.ql-editor .ql-indent-7:not(.ql-direction-rtl){padding-left:21em}.ql-editor li.ql-indent-7:not(.ql-direction-rtl){padding-left:22.5em}.ql-editor .ql-indent-7.ql-direction-rtl.ql-align-right{padding-right:21em}.ql-editor li.ql-indent-7.ql-direction-rtl.ql-align-right{padding-right:22.5em}.ql-editor .ql-indent-8:not(.ql-direction-rtl){padding-left:24em}.ql-editor li.ql-indent-8:not(.ql-direction-rtl){padding-left:25.5em}.ql-editor .ql-indent-8.ql-direction-rtl.ql-align-right{padding-right:24em}.ql-editor li.ql-indent-8.ql-direction-rtl.ql-align-right{padding-right:25.5em}.ql-editor .ql-indent-9:not(.ql-direction-rtl){padding-left:27em}.ql-editor li.ql-indent-9:not(.ql-direction-rtl){padding-left:28.5em}.ql-editor .ql-indent-9.ql-direction-rtl.ql-align-right{padding-right:27em}.ql-editor li.ql-indent-9.ql-direction-rtl.ql-align-right{padding-right:28.5em}.ql-editor .ql-align-center{text-align:center}.ql-editor .ql-align-justify{text-align:justify}.ql-editor .ql-align-right{text-align:right}}@layer from-quill-editor-overrides{.ql-editor{padding-block:1.5rem;padding-inline:2rem;padding-inline:clamp(.5rem,2.5vw,3rem);padding-inline:clamp(20px,5vw,35px)}.ql-editor>:where(:not(:first-child)){margin-block-start:var(--flow-space,1.5rem)}.ql-editor :where(ul,ol)>:where(:not(:first-child)){margin-block-start:.25rem}.ql-editor :is(ol,ul){padding:0}.ql-editor>p+:is(ul,ol){margin-block-start:.25rem}}@layer accessibility{:where(:focus-visible){outline:3px solid #000;outline-offset:3px}.sr-only{clip:rect(0,0,0,0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.skip-to-content{background-color:hsl(var(--clr-darker-hsl));border-radius:8px;color:hsl(var(--clr-light-hsl));display:block;left:0;margin-inline:auto;margin:0 auto!important;max-width:max-content;opacity:0;outline-offset:1px;padding:.5em 1em;position:fixed;right:0;text-decoration:none;top:1.5rem;transform:translateY(calc(-100% - 5rem - 1px));transition:transform .25s ease-in;z-index:9999}.skip-to-content:hover{background-color:hsl(var(--clr-light-hsl));color:hsl(var(--clr-darker-hsl))}.skip-to-content:focus{opacity:1;transform:translateY(0)}}@layer accessibility{@media (prefers-reduced-motion:reduce){*,:after,:before{animation-duration:.1ms!important;animation-iteration-count:1!important;scroll-behavior:auto!important;transition-duration:auto!important}.animate{animation:none!important}}}@layer buttons{.button,.ql-html-buttonCancel,.ql-html-buttonOk{align-items:center;appearance:none;-webkit-appearance:none;-moz-appearance:none;background:var(--clr-500);border:none;border-radius:8px;color:#fff;cursor:pointer;display:flex;font-family:Open Sans,sans-serif;font-size:16px;font-weight:400;gap:0;justify-content:center;letter-spacing:.025em;line-height:26px;margin:0;max-width:max-content;overflow:hidden;padding:10px 35px;padding-inline:clamp(20px,5vw,35px);padding-inline:clamp(20px,2vw,35px);text-decoration:none;transition:outline .4s cubic-bezier(.22,1,.36,1);-webkit-user-select:none;user-select:none}.button:hover:not([disabled]),.ql-html-buttonCancel:hover:not([disabled]),.ql-html-buttonOk:hover:not([disabled]){background:var(--clr-600)}.button:active:not([disabled]),.ql-html-buttonCancel:active:not([disabled]),.ql-html-buttonOk:active:not([disabled]){background:var(--clr-700);transform:translate(2px 3px);transform:scale(.975);transition:transform .3s cubic-bezier(.22,1,.36,1),outline .4s cubic-bezier(.22,1,.36,1),background-color .2s linear}.button[disabled],.ql-html-buttonCancel[disabled],.ql-html-buttonOk[disabled]{cursor:default;filter:grayscale(.75) contrast(.75) brightness(.96);transition:all .4s cubic-bezier(.22,1,.36,1)}.button:has(.icon){gap:0;padding:0;place-self:center}.button:has(.icon)>*{align-items:center;align-items:space-evenly;display:inline-flex;display:flex;gap:.5ex;height:100%;justify-content:center;padding:10px 35px;padding-inline:clamp(20px,2.5vw,35px);padding-inline:clamp(20px,min(2.5vw,1.5em),35px)}.button:has(.icon) .icon{background-color:transparent;background-color:rgba(0,0,0,.16);font-size:1.5em;padding-inline:clamp(20px,min(2.5vw,1.5em),24px)}.button:has(.icon) .icon.small-padding{padding-inline:10px}.button,.ql-html-buttonCancel,.ql-html-buttonOk{--clr-500:var(--clr-blue-desaturated-500);--clr-600:var(--clr-blue-desaturated-600);--clr-700:var(--clr-blue-desaturated-700)}.button.primary,.ql-html-buttonOk{--clr-500:var(--clr-blue-500);--clr-600:var(--clr-blue-600);--clr-700:var(--clr-blue-700)}.button.danger{--clr-500:var(--clr-red-500);--clr-600:var(--clr-red-600);--clr-700:var(--clr-red-700)}.button.success{--clr-500:var(--clr-green-desaturated-500);--clr-600:var(--clr-green-desaturated-600);--clr-700:var(--clr-green-desaturated-700)}.button.warning,.ql-html-buttonCancel{--clr-500:var(--clr-red-desaturated-500);--clr-600:var(--clr-red-desaturated-600);--clr-700:var(--clr-red-desaturated-700)}.invert-colors .button{background:var(--clr-600);border:1px solid hsla(0,0%,100%,.1);filter:invert(1) hue-rotate(180deg);outline-color:#fff}.invert-colors .button:hover:not([disabled]){background:var(--clr-700)}.invert-colors .button:active:not([disabled]){background:var(--clr-500)}.invert-colors .button[disabled]{cursor:default;filter:grayscale(.75) contrast(.75) brightness(.96) invert(1) hue-rotate(180deg)}.invert-colors .button>*{background-color:rgba(0,0,0,.16)}.invert-colors .button .icon{background-color:transparent;border-inline-start:1px solid hsla(0,0%,100%,.05)}.size-300.button{border-radius:4px;border-radius:6px;padding:5px 18px}.size-300.button:has(.icon){padding:0}.size-300.button:has(.icon)>*{padding:5px 175px;padding-inline:clamp(10px,min(1.25vw,.75em),17.5px)}.size-300.button:has(.icon) .icon{font-size:1.25rem;padding-block:8px;padding-inline:clamp(10px,min(1.25vw,.75em),12px)}}@layer buttons{@media (width<535px){.button{padding:5px 18px}.button:has(.icon){padding:0}.button:has(.icon)>*{padding:5px 175px;padding-inline:clamp(10px,min(1.25vw,.75em),17.5px)}.button:has(.icon) .icon{font-size:1.25rem;padding-block:8px;padding-inline:clamp(10px,min(1.25vw,.75em),12px)}}}@layer utility{.flexi{align-items:center;display:flex;flex-wrap:wrap;gap:clamp(20px,5vw,35px);justify-content:flex-start}.flow>:where(:not(:first-child)){margin-block-start:var(--flow-space,1em)}.hidden{display:none!important}@media (max-width:30em){.hide-small{display:none!important}}@media (max-width:50em){.hide-medium{display:none!important}}.sr-only{clip:rect(0,0,0,0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.border-top{border-top:1px solid hsl(var(--clr-primary-hsl)/.25);margin-block-start:2rem;margin-block-start:6rem;padding-block-start:2.5rem}.margin-top{margin-block-start:3rem}.d-block{display:blok}}@layer forms{:where(input:is([type=text],[type=email],[type=password]),textarea){appearance:none;background-color:hsl(var(--clr-light-hsl)/.6);background-color:hsl(var(--clr-light-hsl)/1);border:1.5px solid hsl(var(--clr-dark-hsl)/.5);border-radius:.25rem;box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06);color:hsl(var(--clr-dark-hsl)/1);font-size:1rem;font-weight:400;mix-blend-mode:luminosity;outline-offset:0;outline-width:1.5px;padding-block:.35rem;padding-inline:.75rem;position:relative;transition:all .3s cubic-bezier(.22,1,.36,1)}:where(input:is([type=text],[type=email],[type=password]),textarea):focus{background-color:hsl(var(--clr-light-hsl)/1);border:1.5px solid hsl(var(--clr-darker-hsl)/.8);color:hsl(var(--clr-darker-hsl)/1)}:where(input:is([type=text],[type=email],[type=password]),textarea)::placeholder{color:hsl(var(--clr-dark-hsl)/.75)}:where(input:is([type=text],[type=email],[type=password]),textarea):focus::placeholder{color:hsl(var(--clr-dark-hsl)/.75)}label{color:var(--clr-blue-desaturated-700);font-weight:600;letter-spacing:-.0175em}label:has(svg){align-items:center;column-gap:.25em;display:flex;justify-content:center}label:has(svg) svg{color:var(--clr-blue-700);height:1.5rem;width:1.5rem}}@layer contract-typography{:root{--step--2:clamp(0.56rem,calc(0.8rem - 0.51vw),0.69rem);--step--1:clamp(0.75rem,calc(0.9rem - 0.32vw),0.83rem);--step-0:clamp(1.00rem,1rem,1.00rem);--step-1:clamp(1.20rem,calc(1.1rem + 0.51vw),1.33rem);--step-2:clamp(1.44rem,calc(1.18rem + 1.3vw),1.78rem);--step-3:clamp(1.73rem,calc(1.23rem + 2.47vw),2.37rem);--step-4:clamp(2.07rem,calc(1.24rem + 4.18vw),3.16rem);--step-5:clamp(2.49rem,calc(1.16rem + 6.63vw),4.21rem)}#content{background:#fff;margin:2rem 2rem 6rem;margin-inline:0;margin-inline:auto;max-width:calc(100% - 2rem);max-width:100%;padding:0 2em;padding-inline:2rem;width:clamp(10rem,60rem,80rem);width:52em;width:210mm}#content,#main{font-family:Libre Baskerville,serif;font-size:var(--step-0);line-height:1.5;line-height:1.75}h2,h3,h4,h5,h6{margin-block-start:1.75em}h1{border-style:solid;border-width:3px 0 1px;font-family:Arapey,serif;font-size:var(--step-2);font-weight:400;letter-spacing:.15em;margin-block-end:2.5rem;margin-block-start:1rem;padding:.5em 0;position:relative;text-align:center}h1,h2{line-height:1.2em;text-transform:uppercase}h2{font-family:Open Sans Condensed,sans-serif;font-family:Open Sans,sans-serif;font-size:var(--step-1);font-variation-settings:"wdth" 75;font-weight:600;letter-spacing:.025em}h3,h4,h5,h6{font-weight:700}}@layer signatures{.compiled-signatures{display:flex;flex-wrap:wrap;gap:2rem;justify-content:space-around}.compiled-signature{align-items:start;display:grid;font-size:.75em;max-width:min(50%,330px);max-width:clamp(50% - 2rem,348px,100%);min-width:300px;min-width:200px}.compiled-signature img{background:#fff;border:1px solid rgba(3,33,48,.25);margin-block:.15rem}#dev_signature,#hk{display:block;max-width:min(333px,100%);max-width:min(370px,100%)}#dev_signature[src=null]{display:none}.date-ip{font-family:Open Sans Condensed,sans-serif;font-family:Open Sans,sans-serif;font-size:1.2em;font-variation-settings:"wdth" 75;font-weight:400;letter-spacing:.025em;line-height:1.2em}#ui-unsigned{margin:0;margin-block-start:var(--flow-space,1.5rem)}#ui-signed{clear:both}#content>:not(#ui-unsigned,#dev_signature){transition:opacity .3s ease-out}#signature-container{display:grid;gap:1.5rem;place-items:start}@media (min-width:40rem){#signature-container{place-items:end}}#canvas-container{aspect-ratio:188/58.66;background:#fff;isolation:isolate;max-width:100%;position:relative;transition:max-width .4s cubic-bezier(.22,1,.36,1),margin .6s ease-in-out;-webkit-user-select:none;user-select:none;width:100%}#canvas-container:before{border-bottom:2px solid #61594f;content:"";display:block;height:0;inset:70% 7.5% 0 7.5%;opacity:.95;pointer-events:none;position:absolute;z-index:-1}}@layer signatures{@media (max-width:40em){#canvas-container{aspect-ratio:200/80}}}@layer signatures{#generator-signature-pad,#signature-pad{border:2px dashed rgba(3,33,48,.75);box-shadow:inset 0 0 5px 1px #ddd;height:100%;left:0;position:absolute;top:0;width:100%}#signature-controls{align-items:flex-start;display:flex;flex-direction:row;gap:1.5rem;justify-content:center;width:100%}.loading-signed{align-items:center;justify-content:center}@media (min-width:40rem){.loading-signed{justify-content:center}}.loading-signed:not(.hidden){display:flex}.to-go{opacity:1;transform:none;transition:all .2s cubic-bezier(.26,.53,.74,1.48),scale 1s ease-out}.to-go.gone{opacity:0;transform:translateY(-20px)}#canvas-container.just-signed{max-width:333px}@media (min-width:40rem){#canvas-container.just-signed{margin-top:calc(-330px - 2rem)}}#canvas-container.just-signed #signature-pad{border:1px dashed rgba(3,33,48,.25);box-shadow:inset 0 0 2px 1px hsla(0,0%,87%,.25)}#canvas-container.just-signed:before{opacity:0}}@layer modal{.modal{--shadow-color:200 3% 15%;--shadow-strength:5%;--shadow-6:0 -1px 2px 0 hsl(var(--shadow-color)/calc(var(--shadow-strength) + 2%)),0 3px 2px -2px hsl(var(--shadow-color)/calc(var(--shadow-strength) + 3%)),0 7px 5px -2px hsl(var(--shadow-color)/calc(var(--shadow-strength) + 3%)),0 12px 10px -2px hsl(var(--shadow-color)/calc(var(--shadow-strength) + 4%)),0 22px 18px -2px hsl(var(--shadow-color)/calc(var(--shadow-strength) + 5%)),0 41px 33px -2px hsl(var(--shadow-color)/calc(var(--shadow-strength) + 6%)),0 100px 80px -2px hsl(var(--shadow-color)/calc(var(--shadow-strength) + 7%));border:3px solid hsl(var(--shadow-color));border-radius:1.5rem;box-shadow:var(--shadow-6);margin-block-start:auto;max-width:calc(100% - 1rem);padding:0;position:fixed;z-index:999}.modal::backdrop{-webkit-backdrop-filter:blur(4px);backdrop-filter:blur(4px);background-image:linear-gradient(132deg,rgba(31,39,41,.6),rgba(35,41,47,.6));cursor:pointer}.close-button{border-radius:50%;height:32px;margin:1rem 0 0;max-width:32px;padding:0;position:relative;vertical-align:top;width:32px}.close-button:active{background-color:#000;transition:none}.close-button:before{height:2px;width:50%}.close-button:after{height:50%;width:2px}.close-button:after,.close-button:before{background-color:currentColor;content:"";display:block;left:50%;position:absolute;top:50%;transform:translateX(-50%) translateY(-50%) rotate(45deg);transform-origin:center center}.qr-code-container{display:grid;gap:1rem;justify-items:end;margin-block-end:3.5rem;margin-inline:1rem}#generator-qr-code,#qr-code{display:block;image-rendering:pixelated;margin:auto;max-width:90%;width:min(500px,90vw)}}@layer animated-entrances{@media (prefers-reduced-motion:reduce){.animate{animation:none!important}}}@layer animated-entrances{.delay-1{animation-delay:.6s}.delay-2{animation-delay:.7s}.delay-3{animation-delay:.8s}.delay-4{animation-delay:.9s}.delay-5{animation-delay:1s}.delay-6{animation-delay:1.1s}.delay-7{animation-delay:1.2s}.delay-8{animation-delay:1.3s}.delay-9{animation-delay:1.4s}.delay-10{animation-delay:1.5s}.delay-11{animation-delay:1.6s}.delay-12{animation-delay:1.7s}.delay-13{animation-delay:1.8s}.delay-14{animation-delay:1.9s}.delay-15{animation-delay:2s}.delay-16{animation-delay:2.1s}:where(.animate){animation-delay:.5s;animation-duration:.75s;animation-fill-mode:backwards;animation-name:animate-fade;animation-timing-function:cubic-bezier(.26,.53,.74,1.48)}:where(.animate).fade{animation-name:animate-fade;animation-timing-function:ease}:where(.animate).pop{animation-name:animate-pop}:where(.animate).blur{animation-name:animate-blur;animation-timing-function:ease}:where(.animate).glow{animation-name:animate-glow;animation-timing-function:ease}:where(.animate).grow{animation-name:animate-grow}:where(.animate).splat{animation-name:animate-splat}:where(.animate).roll{animation-name:animate-roll}:where(.animate).flip{animation-name:animate-flip;perspective:1000px;transform-style:preserve-3d}:where(.animate).spin{animation-name:animate-spin;perspective:1000px;transform-style:preserve-3d}:where(.animate).slide{animation-name:animate-slide}:where(.animate).drop{animation-name:animate-drop;animation-timing-function:cubic-bezier(.77,.14,.91,1.25)}:where(.animate).drop-up{animation-name:animate-drop-up;animation-timing-function:cubic-bezier(.77,.14,.91,1.25)}}@layer animated-entrances{@media screen{@keyframes animate-fade{0%{opacity:0}to{opacity:1}}@keyframes animate-pop{0%{opacity:0;transform:scale(.5)}to{opacity:1;transform:scale(1)}}@keyframes animate-blur{0%{filter:blur(15px);opacity:0}to{filter:blur(0);opacity:1}}@keyframes animate-glow{0%{filter:brightness(3) saturate(3);opacity:0;transform:scale(.8)}to{filter:brightness(1) saturate(1);opacity:1;transform:scale(1)}}@keyframes animate-grow{0%{opacity:0;transform:scaleY(0);visibility:hidden}to{opacity:1;transform:scale(1)}}@keyframes animate-splat{0%{opacity:0;transform:scale(0) rotate(20deg) translateY(-30px)}70%{opacity:1;transform:scale(1.1) rotate(15deg)}85%{opacity:1;transform:scale(1.1) rotate(15deg) translateY(-10px)}to{opacity:1;transform:scale(1) rotate(0) translate(0)}}@keyframes animate-roll{0%{opacity:0;transform:scale(0) rotate(1turn)}to{opacity:1;transform:scale(1) rotate(0deg)}}@keyframes animate-flip{0%{opacity:0;transform:rotateX(-120deg) scale(.9)}to{opacity:1;transform:rotateX(0deg) scale(1)}}@keyframes animate-spin{0%{opacity:0;transform:rotateY(-120deg) scale(.9)}to{opacity:1;transform:rotateY(0deg) scale(1)}}@keyframes animate-slide{0%{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translate(0)}}@keyframes animate-drop{0%{opacity:0;transform:translateY(-300px) scale(.9,1.1)}95%{opacity:1;transform:translate(0) scale(.9,1.1)}96%{opacity:1;transform:translate(10px) scale(1.2,.9)}97%{opacity:1;transform:translate(-10px) scale(1.2,.9)}98%{opacity:1;transform:translate(5px) scale(1.1,.9)}99%{opacity:1;transform:translate(-5px) scale(1.1,.9)}to{opacity:1;transform:translate(0) scale(1)}}@keyframes animate-drop-up{0%{opacity:0;transform:translateY(300px) scale(.9,1.1)}95%{opacity:1;transform:translate(0) scale(.9,1.1)}96%{opacity:1;transform:translate(-10px) scale(1.2,.9)}97%{opacity:1;transform:translate(10px) scale(1.2,.9)}98%{opacity:1;transform:translate(-5px) scale(1.1,.9)}99%{opacity:1;transform:translate(5px) scale(1.1,.9)}to{opacity:1;transform:translate(0) scale(1)}}}}details{--clr-500:var(--clr-blue-500);--clr-600:var(--clr-blue-600);--clr-700:var(--clr-blue-700);--clr-500-desaturated:var(--clr-blue-desaturated-500);--clr-600-desaturated:var(--clr-blue-desaturated-600);--clr-700-desaturated:var(--clr-blue-desaturated-700);margin-inline-start:-.75rem;margin-inline-start:-.81rem;max-height:1.5em;overflow:hidden;transition:all .4s ease-in-out}@media (width < 535px){details>:not(summary){margin-inline-start:.75rem}}details details{margin-inline-start:0}details[open]{max-height:90vh}details[open] summary{padding-block-end:.5em}@media (width > 360px){details:has(.repeater-item:nth-child(4)){max-height:unset}}@media (width <= 360px){details:has(.repeater-item:nth-child(2)){max-height:unset}}details.danger{--clr-primary-hsl:var(--clr-danger-hsl);--clr-500:var(--clr-red-500);--clr-600:var(--clr-red-600);--clr-700:var(--clr-red-700);--clr-500-desaturated:var(--clr-red-desaturated-500);--clr-600-desaturated:var(--clr-red-desaturated-600);--clr-700-desaturated:var(--clr-red-desaturated-700)}details.success{--clr-primary-hsl:var(--clr-success-hsl);--clr-500:var(--clr-green-500);--clr-600:var(--clr-green-600);--clr-700:var(--clr-green-700);--clr-500-desaturated:var(--clr-green-desaturated-500);--clr-600-desaturated:var(--clr-green-desaturated-600);--clr-700-desaturated:var(--clr-green-desaturated-700)}details.warning{--clr-primary-hsl:var(--clr-warning-hsl);--clr-500:var(--clr-brown-500);--clr-600:var(--clr-brown-600);--clr-700:var(--clr-brown-700);--clr-500-desaturated:var(--clr-brown-desaturated-500);--clr-600-desaturated:var(--clr-brown-desaturated-600);--clr-700-desaturated:var(--clr-brown-desaturated-700)}details>summary{color:var(--clr-500);color:var(--clr-600);cursor:pointer;font-family:inherit;font-size:16px;font-weight:700;letter-spacing:-.025em;line-height:26px;max-width:min-content;transition:outline .4s cubic-bezier(.22,1,.36,1),padding .2s ease-in;-webkit-user-select:auto;user-select:auto;white-space:nowrap}details>summary:hover{background:none;color:var(--clr-700)}details>summary:focus-visible{border-radius:8px;color:#000;outline:none;text-decoration:underline;text-decoration-thickness:2;text-underline-position:under}details>summary:focus-visible::marker{color:inherit}details>summary::marker{color:var(--clr-600-desaturated);color:hsl(var(--clr-primary-hsl)/.8)}details>summary:hover::marker{color:inherit}details>summary:active{transform:scale(.975);transition:transform .3s cubic-bezier(.22,1,.36,1),outline .4s cubic-bezier(.22,1,.36,1),background-color .2s linear}details>.panel{background:hsl(var(--clr-primary-hsl)/.1);border:1.5px solid hsl(var(--clr-primary-hsl)/.075);border-radius:8px;gap:1rem;justify-content:flex-start;padding:.75rem 1rem 1rem;position:relative}details>.panel label{color:var(--clr-700-desaturated);font-weight:600;letter-spacing:-.0175em}details>.panel>p:last-child:not([class]){color:var(--clr-500-desaturated)}.panel>small{text-wrap:balance;display:block;display:grid;font-weight:600;gap:1em;line-height:1.75;opacity:75%}</style>
  </head>
  <body>
  <div id="content" class="ql-editor">
  ';
}

if($CLIENT_SIGNATURE==null) {
  /** 
  ⌛ Waiting for Client to sign: include signature elements and javascript 
  **/

  $HEADER = headerWithTitle('Unsigned Contract');

  $FOOTER = '
  <div id="ui-unsigned">  
    <form method="post" class="noprint" id="signature_form">
        <div id="signature-container">
            <div id="canvas-container">
                <canvas id="signature-pad" class="signature-pad" width="188" height="58.66"></canvas>
            </div>
        </div>
    
        <div class="animate slide">
            <div class="no-print margin-top invert-colors flexi | to-go | animate slide">
                <button id="reset" title="Clear Signature" type="button" class="icon-button button warning">
                    <span class="hide-medium">Clear</span>
                    <span class="icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.454,19.028h-7.01l6.62-6.63a2.935,2.935,0,0,0,.87-2.09,2.844,2.844,0,0,0-.87-2.05l-3.42-3.44a2.93,2.93,0,0,0-4.13.01L3.934,13.4a2.946,2.946,0,0,0,0,4.14l1.48,1.49H3.554a.5.5,0,0,0,0,1h16.9A.5.5,0,0,0,20.454,19.028Zm-7.24-13.5a1.956,1.956,0,0,1,2.73,0l3.42,3.44a1.868,1.868,0,0,1,.57,1.35,1.93,1.93,0,0,1-.57,1.37l-5.64,5.64-6.15-6.16Zm-1.19,13.5h-5.2l-2.18-2.2a1.931,1.931,0,0,1,0-2.72l2.23-2.23,6.15,6.15Z"></path>
                        </svg>
                    </span>
                </button>
    
                <button id="show-modal-qr" type="button" class="open-button | icon-button button">
                    <span class="hide-small">Sign on mobile</span>
                    <span class="icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 16 16" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1h-4v4h4v-4zM6 0v0 6h-6v-6h6zM2 2h2v2h-2zM15 1h-4v4h4v-4zM16 0v0 6h-6v-6h6zM12 2h2v2h-2zM5 11h-4v4h4v-4zM6 10v0 6h-6v-6h6zM2 12h2v2h-2zM7 0h1v1h-1zM8 1h1v1h-1zM7 2h1v1h-1zM8 3h1v1h-1zM7 4h1v1h-1zM8 5h1v1h-1zM7 6h1v1h-1zM7 8h1v1h-1zM8 9h1v1h-1zM7 10h1v1h-1zM8 11h1v1h-1zM7 12h1v1h-1zM8 13h1v1h-1zM7 14h1v1h-1zM8 15h1v1h-1zM15 8h1v1h-1zM1 8h1v1h-1zM2 7h1v1h-1zM0 7h1v1h-1zM4 7h1v1h-1zM5 8h1v1h-1zM6 7h1v1h-1zM9 8h1v1h-1zM10 7h1v1h-1zM11 8h1v1h-1zM12 7h1v1h-1zM13 8h1v1h-1zM14 7h1v1h-1zM15 10h1v1h-1zM9 10h1v1h-1zM10 9h1v1h-1zM11 10h1v1h-1zM13 10h1v1h-1zM14 9h1v1h-1zM15 12h1v1h-1zM9 12h1v1h-1zM10 11h1v1h-1zM12 11h1v1h-1zM13 12h1v1h-1zM14 11h1v1h-1zM15 14h1v1h-1zM10 13h1v1h-1zM11 14h1v1h-1zM12 13h1v1h-1zM13 14h1v1h-1zM10 15h1v1h-1zM12 15h1v1h-1zM14 15h1v1h-1z">
                            </path>
                        </svg>
                    </span>
                </button>
    
                <button id="submit-btn" disabled 
                    style="margin-inline-start: auto;"
                    type="submit" class="icon-button button success">
                    <span>Sign</span>
                    <span class="icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-width="2" d="M2,12 L22,12 M13,3 L22,12 L13,21"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    
        <div class="flow" style="max-width: 330px; margin-inline-start: auto;">
            <h2 class="margin-top loading-signed hidden | animate slide" style="color: var(--clr-green-500); font-weight: 700;">Saving contract…</h2>
            <small class="loading-signed hidden | animate slide delay-16"
                style="font-family: \'Open Sans\'; font-weight: 600; color: var(--clr-blue-700);">
                This shouldn\'t take more than a minute.
            </small>
        </div>
    
        <input type="hidden" id="client_signature" name="client_signature" />
    </form>
    
    
    <dialog class="modal flow" id="modal-qr">
        <div class="qr-code-container">
            <button id="close-modal-qr" class="close-button button" aria-label="close" type="button"></button>
            <canvas id="qr-code"></canvas>
        </div>
    </dialog>
  </div><!--.ui-unsigned-->
  </div> <!-- #content -->
  <script id="contract_script_unsigned" type="module">
  import SignaturePad from "https://cdn.skypack.dev/pin/signature_pad@v4.1.3-nYxPKR50YjQN4V2vbxta/mode=imports,min/optimized/signature_pad.js"
  // 📙 Package Documentation: https://www.skypack.dev/view/signature_pad
  
  signature("#signature-pad")
  
  function signature(selector) {
  
      if (!document.querySelector(selector)) return
  
      const canvas = document.querySelector(selector)
  
      // https://github.com/szimek/signature_pad#options
      const clientSignaturePad = new SignaturePad(canvas, {
          penColor: "hsl(200, 100%, 30%)",
          minDistance: 2,
      })
  
      resizeCanvas()
  
      if (localStorage.getItem("client_signature")) {
          document.querySelector("#submit-btn").disabled = false
          // document.querySelector("#reset").disabled = false
      }
  
  
      // event listeners
  
      // save signature to localStorage on change
      clientSignaturePad.addEventListener("afterUpdateStroke", () => {
          let data = clientSignaturePad.toDataURL("image/png")
  
          document.querySelector("#client_signature").value = data
          localStorage.setItem("client_signature", data)
  
          // ! probably remove these:
          document.querySelector("#submit-btn").disabled = false
          // document.querySelector("#reset").disabled = false
      })
  
      // button to reset signature
      document.querySelector("#reset")?.addEventListener("click", (e) => {
          clientSignaturePad.clear()
          localStorage.removeItem("client_signature")
          document.querySelector("#client_signature").value = null
          document.querySelector("#submit-btn").disabled = true
          // document.querySelector("#reset").disabled = true
      })
  
      // form submit
      document.querySelector("#signature_form").addEventListener("submit", (e) => {
          // e.preventDefault();
          e.target.querySelector(".to-go").classList.add("gone")
  
          e.target.querySelectorAll(".loading-signed").forEach((el) => {
              el.classList.remove("hidden")
          })
  
          e.target.querySelector("#canvas-container").classList.add("just-signed")
  
          e.target.querySelector(".to-go").addEventListener(\'transitionend\', (e) => {
              e.target.classList.add("hidden")
          })
  
          let otherElements = document.querySelectorAll("#content > *:not(#ui-unsigned, #dev_signature)")
          otherElements.forEach(element => {
              // element.style.cssText = `opacity: .5;`
              element.style.opacity = "0.5"
          })
  
      })
      
      window.onresize = resizeCanvas
  
  
      // needed for retina displays
      function resizeCanvas() {
          const ratio = Math.max(window.devicePixelRatio || 1, 1)
          canvas.width = canvas.offsetWidth * ratio
          canvas.height = canvas.offsetHeight * ratio
          canvas.getContext("2d").scale(ratio, ratio)
  
          let data = localStorage.getItem("client_signature");
          if (data) {
              // console.log(data)
              clientSignaturePad.fromDataURL(data)
              // disableResetButtonIfSignatureIsEmpty(data)
              document.querySelector("#client_signature").value = data
          }
      }
  
  }
  </script>
  <script id="qr_code_script" type="module">
  import QRious from "https://cdn.skypack.dev/pin/qrious@v4.0.2-vbPhILY2CQRjQ1N29BGh/mode=imports,min/optimized/qrious.js";
  // 📙 Package Documentation:  https://www.skypack.dev/view/qrious
  
  qrCode("#qr-code")
  
  export default function qrCode(selector) {
      
      if (!document.querySelector(selector)) return
      
      const canvas = document.querySelector(selector)
  
      let qr = new QRious({
          element: canvas,
          value: window.location.href,
          foreground: "hsl(200, 30%, 20%)",
          padding: 0,
          size: 500,
      })
  
      // event listeners
  
      const modal = document.querySelector("#modal-qr")
      const openModal = document.querySelector("#show-modal-qr")
      const closeModal = document.querySelector("#close-modal-qr")
  
      openModal?.addEventListener("click", (e) => {
          if (modal?.open === false)
              modal.showModal()
      })
  
      closeModal?.addEventListener("click", (e) => {
          modal?.close()
      })
  
      // close modal when click events happen outside of it
      modal?.addEventListener("click", (e) => {
          const rect = modal.getBoundingClientRect()
          if (
              e.clientY < rect.top ||
              e.clientY > rect.bottom ||
              e.clientX < rect.left ||
              e.clientX > rect.right
          ) {
              modal.close()
          }
      })
  }
  
  </script>
  </body>
  </html>';
  
  if ( $selfDelete && file_exists($htmlName) ) {
    header('Location: '.$htmlName.'#hk');
    die();
  }

  echo $HEADER;
  echo $CONTRACT_HTML;
  echo $DEV_SIGNATURE;
  eval (' ?>'. $FOOTER .'<?php '); // php variables can be used inside
}
else {
  /** 
  ✅ Contract was just signed: put $CLIENT_SIGNATURE and the other parts in the .html file 
  **/

  $HEADER = headerWithTitle('Signed Contract');

  $DEV_DATE_IP = '
    <div class="date-ip">
      <strong>Signed on:</strong> ' . $devTimestamp . '
      <br><strong>IP address:</strong> '  . $devIP . ' <br>
    </div>';
  $DEV_SIGNATURE .= $DEV_DATE_IP;

  /**
  $CLIENT_DATE_IP_PHP is a string of php code,
  that gets compiled below, in $CLIENT_DATE_IP_COMPILED
  **/
 
  $CLIENT_DATE_IP_PHP = $CONTRACT_SIGNED_PHP. '
    <div id="date-ip" class="date-ip">
      <strong>Signed on:</strong> <?php echo get_client_date($devTimeOffset); ?>
      <br><strong>IP address:</strong> <?php echo get_client_ip_env(); ?><br>
    </div>
  ';

  /** 
  $CLIENT_DATE_IP_COMPILED executes the php code above
  **/
  ob_start(); // https://cgd.io/2008/how-to-execute-php-code-in-a-php-string/
  eval($CLIENT_DATE_IP_PHP);
  $CLIENT_DATE_IP_COMPILED = ob_get_contents();
  ob_end_clean();

  $CLIENT_SIGNATURE .= $CLIENT_DATE_IP_COMPILED;

  // Add names above signatures
  $DEV_SIGNATURE = '<strong>'.$devName.'</strong>' . $DEV_SIGNATURE;
  $CLIENT_SIGNATURE = '<strong>'.$clientName.'</strong>' . $CLIENT_SIGNATURE;

  $FOOTER = '
    <div class="compiled-signatures">
      <div class="compiled-signature">'.$DEV_SIGNATURE. '</div><!--.compiled-signature-->
      <div class="compiled-signature">'.$CLIENT_SIGNATURE.'</div><!--.compiled-signature-->
    </div><!--.compiled-signatures-->
    <div id="ui-signed">  
      <div class="noprint margin-top invert-colors flexi | animate slide delay-3"
           style="justify-content: center;">
          <button class="icon-button button" type="button" onclick="printContract()">
              <span>Print</span>
              <span class="icon">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em"
                      width="1em" xmlns="http://www.w3.org/2000/svg">
                      <path d="M820 436h-40c-4.4 0-8 3.6-8 8v40c0 4.4 3.6 8 8 8h40c4.4 0 8-3.6 8-8v-40c0-4.4-3.6-8-8-8zm32-104H732V120c0-4.4-3.6-8-8-8H300c-4.4 0-8 3.6-8 8v212H172c-44.2 0-80 35.8-80 80v328c0 17.7 14.3 32 32 32h168v132c0 4.4 3.6 8 8 8h424c4.4 0 8-3.6 8-8V772h168c17.7 0 32-14.3 32-32V412c0-44.2-35.8-80-80-80zM360 180h304v152H360V180zm304 664H360V568h304v276zm200-140H732V500H292v204H160V412c0-6.6 5.4-12 12-12h680c6.6 0 12 5.4 12 12v292z">
                      </path>
                  </svg>
              </span>
          </button>
      </div>
    </div><!--.ui-signed-->
  </div> <!--#content-->
  <script id="contract_script_signed">
  function printContract() {
      window.print();
  }
  </script>
  </body>
  </html>';

  $output = $HEADER . $CONTRACT_HTML . $FOOTER;
  file_put_contents($htmlName, $output);

  /** 
  ✉ Email client & dev
  **/
  sendEmails($clientEmail, $devEmail);


  /** 
  ➡ Delete php, redirect to html
  **/
  if ($selfDelete) unlink(__FILE__);
  header('Location: '.$htmlName.'#hk');
  die();
}


// Function to email notifications; gets called when Client signs
function sendEmails($clientEmail, $devEmail)
{
  if ($clientEmail) {
    $headers = "From: " . $devEmail . "\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=ISO-8859-1\r\n";
    $msg = 'The contract was signed. You can <a href="' . getHtmlUrl() . '">view or download this contract from here</a>.';
    mail($clientEmail, 'Contract signed', $msg, $headers);
  }
  if ($devEmail) {
    $headers = "From: " . $clientEmail . "\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=ISO-8859-1\r\n";
    $msg = '<p>A new contract was signed. You can <a href="' . getHtmlUrl() . '">view or download this contract from here</a>.</p>';
    $msg .= 'The contract was signed by: ' . $clientEmail;
    mail($devEmail, 'Contract signed!', $msg, $headers);
  }
}
?>