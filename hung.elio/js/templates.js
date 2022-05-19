

const listItemTemplate = templater(o=>`
            <a class="col-xs-12 col-md-3" href="product_item.php?id=${o.id}">
                <figure class="card soft figure product display-flex flex-column">
                <div class="flex-stretch">
                    <img src="styleguide/images/${o.thumbnail}" alt="">
                </div>
                    <figcaption class="flex-none">
                      <div>${o.name}</div> 
                      <div class="pricefont">&dollar;${o.price}</div>
                    </figcaption>
                </figure>
            </a>
`);