<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org">

<head> <?php require_once "fragments/head.php"; ?> </head>

<body>

<header> <?php require_once "fragments/header.php"; ?> </header>

<!--<div class="wrapper">-->
<!--    <main th:include="${view}"></main>-->
<!--        <div class="push"></div>-->
<!--</div>-->

<footer> <?php require_once "fragments/footer.php"; ?> </footer>

<!--<span th:include="fragments/scripts-bundle"></span>-->

<!--<script src="/scripts/snowStorm.js"></script>-->
<!--<script>-->
<!--    //-->
<!--    // customize the snowStorm object-->
<!--    //-->
<!--    snowStorm.autoStart = true; // Whether the snow should start automatically or not.-->
<!--    snowStorm.excludeMobile = true; // Snow is likely to be bad news for mobile phones' CPUs (and batteries.) Enable at your own risk.-->
<!--    snowStorm.flakesMax = 64; // Limit total amount of snow made (falling + sticking)-->
<!--    snowStorm.flakesMaxActive = 64; // Limit amount of snow falling at once (less = lower CPU use)-->
<!--    snowStorm.animationInterval = 40; // Theoretical "miliseconds per frame" measurement. 20 = fast + smooth, but high CPU use. 50 = more conservative, but slower-->
<!--    snowStorm.useGPU = true; // Enable transform-based hardware acceleration, reduce CPU load.-->
<!--    snowStorm.className = null; // CSS class name for further customization on snow elements-->
<!--    snowStorm.flakeBottom = null; // Integer for Y axis snow limit, 0 or null for "full-screen" snow effect-->
<!--    snowStorm.followMouse = false; // Snow movement can respond to the user's mouse-->
<!--    snowStorm.snowColor = '#b7b7dd'; // Don't eat (or use?) yellow snow.-->
<!--    snowStorm.snowCharacter = '&#x2744;'; // &bull; = bullet, &middot; is square on some systems etc.-->
<!--    snowStorm.snowStick = true; // Whether or not snow should "stick" at the bottom. When off, will never collect.-->
<!--    snowStorm.targetElement = null; // element which snow will be appended to (null = document.body) - can be an element ID eg. 'myDiv', or a DOM node reference-->
<!--    snowStorm.useMeltEffect = true; // When recycling fallen snow (or rarely, when falling), have it "melt" and fade out if browser supports it-->
<!--    snowStorm.useTwinkleEffect = false; // Allow snow to randomly "flicker" in and out of view while falling-->
<!--    snowStorm.usePositionFixed = false; // true = snow does not shift vertically when scrolling. May increase CPU load, disabled by default - if enabled, used only where supported-->
<!--    snowStorm.usePixelPosition = false; // Whether to use pixel values for snow top/left vs. percentages. Auto-enabled if body is position:relative or targetElement is specified.-->
<!---->
<!--    // --- less-used bits ----->
<!--    snowStorm.freezeOnBlur = true; // Only snow when the window is in focus (foreground.) Saves CPU.-->
<!--    snowStorm.flakeLeftOffset = 0; // Left margin/gutter space on edge of container (eg. browser window.) Bump up these values if seeing horizontal scrollbars.-->
<!--    snowStorm.flakeRightOffset = 0; // Right margin/gutter space on edge of container-->
<!--    snowStorm.flakeWidth = 32; // Max pixel width reserved for snow element-->
<!--    snowStorm.flakeHeight = 32; // Max pixel height reserved for snow element-->
<!--    snowStorm.vMaxX = 1; // Maximum X velocity range for snow-->
<!--    snowStorm.vMaxY = 2; // Maximum Y velocity range for snow-->
<!--    snowStorm.zIndex = 1000; // CSS stacking order applied to each snowflake-->
<!--</script>-->

</body>
</html>

