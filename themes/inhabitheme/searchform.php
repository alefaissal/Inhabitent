<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	
		<span class="icon-search" aria-hidden="true">
			<i class="fa fa-search"></i>
		</span>
		<label>
			<input type="search" class="search-field" placeholder="Type and hit enter" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<button class="search-submit screen-reader-text">
			<span><?php echo esc_html( 'Search' ); ?></span>
		</button>
	
</form>
