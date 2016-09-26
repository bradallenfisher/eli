<?php
  $item = explode(',', $output);
  if(count($item) === 1) {
    print $item[0];
  } else {
    print "<a class='view-all' href=\"#\">view all</a>";
    print "<div class='departments'>";
    foreach($item as $items) {
      print $items;
      print '<br />';
    }
    print "<a class='hide-all' href=\"#\">hide all</a>";
    print "</div>";

  }