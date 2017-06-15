<?php include "meta.php"; ?>

<main id="main">
<!--    <div id="menu-left">-->
<!--        <p>-->
<!--            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dui dolor, venenatis id imperdiet rutrum, dignissim quis risus. Nunc volutpat lacinia pharetra. Integer lacinia vel sem nec aliquet. Suspendisse at interdum erat. Phasellus sed nunc sollicitudin, fringilla enim nec, eleifend turpis. Sed non elementum dolor. In ornare, mi sit amet ultrices fermentum, ipsum quam maximus nisl, sed pharetra eros velit gravida leo. Mauris pharetra, orci quis ultricies egestas, felis mauris feugiat orci, in lobortis nisi sapien non ante. Duis pulvinar neque lacus, eget blandit erat commodo ornare. Fusce non volutpat sem. Nulla facilisi. Pellentesque scelerisque dapibus finibus.-->
<!--        </p>-->
<!--    </div>-->
<!---->
<!--    <div id="menu-center">-->
<!--        <p>-->
<!--            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dui dolor, venenatis id imperdiet rutrum, dignissim quis risus. Nunc volutpat lacinia pharetra. Integer lacinia vel sem nec aliquet. Suspendisse at interdum erat. Phasellus sed nunc sollicitudin, fringilla enim nec, eleifend turpis. Sed non elementum dolor. In ornare, mi sit amet ultrices fermentum, ipsum quam maximus nisl, sed pharetra eros velit gravida leo. Mauris pharetra, orci quis ultricies egestas, felis mauris feugiat orci, in lobortis nisi sapien non ante. Duis pulvinar neque lacus, eget blandit erat commodo ornare. Fusce non volutpat sem. Nulla facilisi. Pellentesque scelerisque dapibus finibus.-->
<!--        </p>-->
<!--    </div>-->
<!---->
<!--    <div id="menu-right">-->
<!--        <p>-->
<!--            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dui dolor, venenatis id imperdiet rutrum, dignissim quis risus. Nunc volutpat lacinia pharetra. Integer lacinia vel sem nec aliquet. Suspendisse at interdum erat. Phasellus sed nunc sollicitudin, fringilla enim nec, eleifend turpis. Sed non elementum dolor. In ornare, mi sit amet ultrices fermentum, ipsum quam maximus nisl, sed pharetra eros velit gravida leo. Mauris pharetra, orci quis ultricies egestas, felis mauris feugiat orci, in lobortis nisi sapien non ante. Duis pulvinar neque lacus, eget blandit erat commodo ornare. Fusce non volutpat sem. Nulla facilisi. Pellentesque scelerisque dapibus finibus.-->
<!--        </p>-->
<!--    </div>-->

    <?php foreach($database->execute("Select * FROM topics") as $result): ?>

        Subject: <?= $result['subject'] ?>
        <br>
        Content: <?= $result['content'] ?>
        <br>

    <?php endforeach ?>

</main>





</body>
</html>