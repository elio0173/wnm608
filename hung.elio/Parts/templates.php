<?php



function productListTemplate($r,$o) {
return $r.<<<HTML

            <div class=" col-xs-4">
                <figure class="figure product">
                    <img src="img/godzilla1991.png" alt="">
                    <figcaption>
                        <div>$o->name</div>
                        <div>&dollar;$o->price</div>
                    </figcaption>
                </figure>
            </div>
          


HTML;
}