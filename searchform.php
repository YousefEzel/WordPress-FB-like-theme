<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="GET">
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100 input-group md-form form-sm form-2 pl-0">
            <input class="form-control my-0 py-1 lime-border" type="text" placeholder="Search" name="s" value="<?php the_search_query(); ?>">
            <div class="input-group-append">
                <button type="submit" class="input-group-text lime lighten-2" id="basic-text1">
                <i class="fas fa-search text-grey" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
</form>
<style type="text/css">

</style>