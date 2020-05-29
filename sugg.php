<?php

include("includes/header.php");

?>
<link rel="stylesheet" href="css/contact.css">
</head>
<body>
<div id="root">
    <div role="dialog" id="wpreview" class="page-1" style="">
        <div class="container">
            <div class="images">
                <img src="https://m2.getsitecontrol.com/gallery/stickers/humans/81-376c4585a2e0c8ac2337ab5b9d5b395b.svg" class="image" style="position: absolute; object-fit: contain; object-position: 50% 50%; left: 50%; transform: translateX(-50%) rotate(0deg); top: 32px; width: 368px; height: 214px;">
            </div>
            <div class="body">
                <div class="content no-label">
                    <h1 class="title">SEND US A MESSAGE</h1>
                    <form method="POST" action="thanks.php" class="form valid pristine">
                        <div class="fields">
                            <div class="field text first valid">
                                <input id="name" class="input-text" required="" type="text" name="name" autocomplete="off" placeholder="Full Name">
                            </div>
                            <div class="field email valid">
                                <input id="email" class="input-text" required="" type="email" name="email" autocomplete="off" placeholder="E-mail">
                            </div>
                            <div class="field text valid">
                                <input id="phone" class="input-text" type="text" name="phone" autocomplete="off" placeholder="Phone">
                            </div>
                            <div class="field textarea valid">
                                <textarea id="message" class="input-textarea" name="message" rows="4" placeholder="Your Message" required=""></textarea>
                            </div>
                            <div class="field checkbox last valid">
                                <div id="subscribe" class="input-check">
                                    <label>
                                        <input type="checkbox" name="subscribe" value="subscribe">
                                        <span>Subscribe to our Newsletter</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="buttons">
                            <button type="submit" class="button primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>