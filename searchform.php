<?php if( is_search() ) : ?>
<h4 class="search-text"><?php _e('Search Again', 'xtra-starter') ?></h4>
<?php else : ?>
  <h4 class="search-text"><?php _e('Search', 'xtra-starter') ?></h4>
<?php endif; ?>
<form role="search" method="get" id="searchform"
        class="input-group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input type="text" class="form-control" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <span class="input-group-btn">
            <button class="btn btn-default" type="submit">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
</form>
