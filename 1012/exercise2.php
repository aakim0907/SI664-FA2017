<?php
  class Dad {
    private $threshold;
    private $count;

    function threshold($num) {
      $this->threshold = $num;
    }

    function areWeThere() {
      $this->count += 1;

      if ($this->count > $this->threshold) {
        echo "BE QUIET!!!";
      } elseif ($this->count % 2 == 1) {
        echo "Almost";
      } else {
        echo "We'll be there soon";
      }
    }
  }

  	$dad = new Dad;
    $dad->threshold(5);
    for ($i=0; $i<7; $i++) {
	    print $dad->areWeThere();
    }

?>