
<a href="#"><i class="fa fa-search search_icon" data-toggle="modal" data-target="#exampleModal"></i></a>
 
</i>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog coustom_model_doylog" role="document">
    <div class="modal-content">
      <div class="modal-header custom_modle_header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="searchform">
<input type="search" class="form-control" placeholder="search" value="<?php echo get_search_query() ?>" name="s" id="s" title="search" />

</form>
      </div>
    </div>
  </div>
</div>