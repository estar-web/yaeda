<nav class="ly_cateNaviWrapper">
    <h2 class="el_cateNaviWrapper_ttl">Category</h2>
    <ul class="ly_cateNaviList">
        <li class="bl_cateNaviList_item">
            <a href="<?php echo home_url(); ?>/faq/" class="el_cateNaviList_item_btn">ALL
                <svg width="10" class="el_cateNaviList_item_btn_arrow" height="10" viewBox="0 0 10 10" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <mask id="path-1-inside-1_2443_2206" fill="white">
                        <path d="M5 0.75L9.24265 4.99265L5 9.23529L0.757355 4.99265L5 0.75Z" />
                    </mask>
                    <path
                        d="M9.24265 4.99265L9.94975 5.69975L10.6569 4.99265L9.94975 4.28554L9.24265 4.99265ZM4.29289 1.45711L8.53554 5.69975L9.94975 4.28554L5.70711 0.0428932L4.29289 1.45711ZM8.53554 4.28554L4.29289 8.52818L5.70711 9.9424L9.94975 5.69975L8.53554 4.28554Z"
                        mask="url(#path-1-inside-1_2443_2206)" />
                </svg>
            </a>
        </li>
        <?php
        $faqTaxonomy_slug = "faq_cat";//タクソノミースラッグ
        $cateTerms = get_terms($faqTaxonomy_slug);
        ?>
        <?php foreach ($cateTerms as $cateTerm): ?>
            <li class="bl_cateNaviList_item">
                <a href="<? echo get_term_link($cateTerm->slug, 'faq_cat'); ?>/"
                    class="el_cateNaviList_item_btn"><?php echo $cateTerm->name ?>
                    <svg width="10" class="el_cateNaviList_item_btn_arrow" height="10" viewBox="0 0 10 10" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1_2443_2206" fill="white">
                            <path d="M5 0.75L9.24265 4.99265L5 9.23529L0.757355 4.99265L5 0.75Z" />
                        </mask>
                        <path
                            d="M9.24265 4.99265L9.94975 5.69975L10.6569 4.99265L9.94975 4.28554L9.24265 4.99265ZM4.29289 1.45711L8.53554 5.69975L9.94975 4.28554L5.70711 0.0428932L4.29289 1.45711ZM8.53554 4.28554L4.29289 8.52818L5.70711 9.9424L9.94975 5.69975L8.53554 4.28554Z"
                            mask="url(#path-1-inside-1_2443_2206)" />
                    </svg>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>