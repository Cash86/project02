<?php
if ($dsatz["href"] != null) {
    echo '<div class="blogtitle"><h1><a href="' . $dsatz["href"] . '">' . $dsatz["title"];
    if ($dsatz["datum"] != null) {
        echo ' am ' . $dsatz["datum"] . '</a></h1></div>';
    } else {
        echo '</a></h1></div>';
    }
} else {
    echo '<div class="blogtitle"><h1>' . $dsatz["title"];
    if ($dsatz["datum"] != null) {
        echo ' am ' . $dsatz["datum"] . '</h1></div>';
    } else {
        echo '</h1></div>';
    }
}
if ($dsatz["imgsrc"] == null) {
    echo '<div class="blog">' . $dsatz["description"] . '</div>';
} else {
    echo '<div class="blog">
                <div class="one-third">
                    <img src="' . $dsatz["imgsrc"] . '" alt=""/>
                </div>
                <div class="two-third">
                    ' . $dsatz["description"] . '
                </div>
            </div>';
}
