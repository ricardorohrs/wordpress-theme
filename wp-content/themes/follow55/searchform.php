<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Pesquisar &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit">
        <span class="screen-reader-text">
		    <?php echo _x( 'OK', 'submit button', 'follow55' ); ?>
	    </span>
    </button>
</form>
