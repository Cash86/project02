<?php
if ($dsatz["href"] != null) {
    echo '<div class="blogtitle"><h3><a href="' . $dsatz["href"] . '">' . $dsatz["title"];
    if ($dsatz["datum"] != null) {
        echo ' am ' . $dsatz["datum"] . '</a></h3></div>';
    } else {
        echo '</a></h3></div>';
    }
} else {
    echo '<div class="blogtitle"><h3>' . $dsatz["title"];
    if ($dsatz["datum"] != null) {
        echo ' am ' . $dsatz["datum"] . '</h3></div>';
    } else {
        echo '</h3></div>';
    }
}
if ($dsatz["imgsrc"] == null) {
    echo '<div class="blog"><p>' . $dsatz["description"] . '</p></div>';
} else {
    echo '<div class="blog">
                <div class="one-third">
                    <img src="img/' . $dsatz["imgsrc"] . '" alt=""/>
                </div>
                <div class="two-third">
                    <p>' . $dsatz["description"] . '</p>
                </div>
            </div>';
}
