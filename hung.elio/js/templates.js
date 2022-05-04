

const listItemTemplate = templater(o=>`
            <a class=" col-xs-3" href="product_item.php?id=${o.id}">
                <figure class="card soft figure product display-flex flex-column">
                <div class="flex-stretch">
                    <img src="styleguide/images/${o.thumbnail}" alt="">
                </div>
                    <figcaption class="flex-none">
                      <div>${o.name}</div> 
                      <div class="pricefont">&dollar;${o.price.toFixed(2)}</div>
                    </figcaption>
                </figure>
            </a>
`);