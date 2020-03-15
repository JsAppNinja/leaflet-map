<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bogidope Map
 */
?>
<?php
  $args = array(
    'numberposts'		=> -1,
    'post_type'		=> 'unit',
    'orderby' 		=> 'title',
    'order' 		=> 'ASC',
  );
  $myposts = get_posts($args);
?>
<style>
  .map-group {
    flex: 0 0 100%;
    max-width: 100%;
    position: relative;
    width: 100%;
    min-height: 200px;
    margin-left: 0px;
    margin-right: 0px;
  }
  .map-filter {
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
    position: relative;
    width: 100%;
    min-height: 200px;
  }
  .map-show {
    flex: 0 0 66.666666%;
    max-width: 66.666666%;
    position: relative;
    width: 100%;
    min-height: 200px;
    border: 4px black double;
  }
  .filter-options {
    margin: 2rem;
    max-height: 420px;
    overflow-y: auto;
    overflow-x: hidden;
  }
  .views-exposed-widget {
    font-weight: 600;
    font-style: oblique;
  }

  .main-board {
    margin: 0;
    padding: 0;
    border: 1px solid lightgray;
  }
  .collapsible {
    background-color: #0088cc;
    color: white;
    cursor: pointer;
    padding: 2px 12px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
  }
  .active, .collapsible:hover {
    background-color: #0099e6;
  }
  .collapsible:after {
    content: '\02795'; /* Unicode character for "plus" sign (+) */
    font-size: 13px;
    color: white;
    float: right;
    margin-left: 5px;
    margin-top: 2px;
  }
  .active:after {
    content: "\2796"; /* Unicode character for "minus" sign (-) */
  }
  .content {
    margin-bottom: 5px;
    margin-top: -5px;
    border: 1px solid #0099e6;
    padding: 0 18px;
    display: none;
    font-style: normal;
    font-size: 13px;
  }
  .head p {
    border-bottom: 3px solid yellowgreen;
    font-style: oblique;
    font-family: serif;
    text-align: center;
    font-weight: bold;
    font-size: 23px;
  }
  .form-item-field-select-airline-tid label:before {
    position: absolute;
    background-position: left center;
    background-repeat: no-repeat;
    content: '';
    display: block;
    width: 8px;
    height: 20px;
    top: 0;
    right: 0px;
    background-size: contain;
  }
  label {
    position: relative;
    width: 90%;
  }
  .form-item-edit-field-select-airline-tid-391 label:before {
    background-image: url('../wp-content/plugins/leaflet-map/markers/small/bred.png');
  }
  .form-item-edit-field-select-airline-tid-392 label:before {
    background-image: url('../wp-content/plugins/leaflet-map/markers/small/dblue.png');
  }
  .form-item-edit-field-select-airline-tid-393 label:before {
    background-image: url('../wp-content/plugins/leaflet-map/markers/small/purple.png');
  }
  .form-item-edit-field-select-airline-tid-394 label:before {
    background-image: url('../wp-content/plugins/leaflet-map/markers/small/orange.png');
  }
  .form-item-edit-field-select-airline-tid-395 label:before {
    background-image: url('../wp-content/plugins/leaflet-map/markers/small/lblue.png');
  }
  .form-item-edit-field-select-airline-tid-396 label:before {
    background-image: url('../wp-content/plugins/leaflet-map/markers/small/brown.png');
  }
  .branch_category_label {
    display: none;
  }
  .bef-tree-child {
    list-style: none;
    margin-left: 7px;
    font-weight: 600;
    font-style: normal;
    font-size: 1.4rem;
  }
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
    if (is_single()) {
      do_action( 'igthemes_single_post' );
    } else {
      do_action( 'igthemes_loop' );
    }
  ?>
  <div class="container main-board">
    <div class="row map-group">
      <div class="map-filter">
        <form action="/map-page/squadron-map" method="get" id="views-exposed-form-squadron-map-v2-page-1" accept-charset="UTF-8">
          <div class="filter-options views-exposed-form">
            <div class="head">
              <p>Select from the options below</p>
            </div>
            <div id="airline-tid-wrapper" class="views-exposed-widget select_airline_tid">
              <label class="collapsible">Airline Hubs</label>
              <div class="views-widget content">
                <div class="form-item form-type-select form-item-field-select-airline-tid">
                  <div class="form-checkboxes bef-select-as-checkboxes">
                    <div class="bef-checkboxes">
                      <div class="form-item form-type-bef-checkbox form-item-edit-field-select-airline-tid-391 highlight">
                        <input type="checkbox" name="field_select_airline_tid[]" id="edit-field-select-airline-tid-391" value="391">
                        <label class="option" for="edit-field-select-airline-tid-391">American</label>
                      </div>
                      <div class="form-item form-type-bef-checkbox form-item-edit-field-select-airline-tid-392">
                        <input type="checkbox" name="field_select_airline_tid[]" id="edit-field-select-airline-tid-392" value="392">
                        <label class="option" for="edit-field-select-airline-tid-392">Delta</label>
                      </div>
                      <div class="form-item form-type-bef-checkbox form-item-edit-field-select-airline-tid-393">
                        <input type="checkbox" name="field_select_airline_tid[]" id="edit-field-select-airline-tid-393" value="393">
                        <label class="option" for="edit-field-select-airline-tid-393">FedEx</label>
                      </div>
                      <div class="form-item form-type-bef-checkbox form-item-edit-field-select-airline-tid-394">
                        <input type="checkbox" name="field_select_airline_tid[]" id="edit-field-select-airline-tid-394" value="394">
                        <label class="option" for="edit-field-select-airline-tid-394">Southwest</label>
                      </div>
                      <div class="form-item form-type-bef-checkbox form-item-edit-field-select-airline-tid-395">
                        <input type="checkbox" name="field_select_airline_tid[]" id="edit-field-select-airline-tid-395" value="395">
                        <label class="option" for="edit-field-select-airline-tid-395">United</label>
                      </div>
                      <div class="form-item form-type-bef-checkbox form-item-edit-field-select-airline-tid-396">
                        <input type="checkbox" name="field_select_airline_tid[]" id="edit-field-select-airline-tid-396" value="396">
                        <label class="option" for="edit-field-select-airline-tid-396">UPS</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="branch_category-tid-wrapper" class="views-exposed-widget branch_category_tid">
              <label style="display: none;">Category</label>
              <div class="views-widget">
                <div class="form-item form-type-select form-item-field-branch-catagory-tid">
                  <div class="form-checkboxes">
                    <section class="views-exposed-widget">
                      <input type="checkbox" name="field_branch_category_depth1_tid[]" class="branch_category_label" id="edit-field-branch_category_tid-156" value="156">
                      <label class="collapsible">Fighters/Bombers</label>
                      <div class="content">
                        <ul class="bef-tree-child bef-tree-depth-1">
                          <li class="bef-all-none-nested-processed">
                            <div class="form-item form-type-bef-checkbox form-item-edit-field-branch-catagory-tid-157">
                              <input type="checkbox" name="field_branch_catagory_depth2_tid[]" id="edit-field-branch-catagory-tid-157" value="157" class="branch_category_label">
                              <label class="option" for="edit-field-branch-catagory-tid-157">Air Force Reserve</label>
                            </div>
                          <ul class="bef-tree-child bef-tree-depth-2">
                            <li>
                              <input type="checkbox" name="field_branch_catagory_depth3_tid[]" id="edit-field-branch-catagory-tid-158" value="158" class="form-checkboxes">
                              <label class="option" for="edit-field-branch-catagory-tid-158">A-10</label>
                            </li>
                            <li>
                              <input type="checkbox" name="field_branch_catagory_depth3_tid[]" id="edit-field-branch-catagory-tid-159" value="159" class="form-checkboxes">
                              <label class="option" for="edit-field-branch-catagory-tid-159">B-1</label>
                            </li>
                            <li>
                              <input type="checkbox" name="field_branch_catagory_depth3_tid[]" id="edit-field-branch-catagory-tid-160" value="160" class="form-checkboxes">
                              <label class="option" for="edit-field-branch-catagory-tid-160">B-52</label>
                            </li>
                            <li>
                              <input type="checkbox" name="field_branch_catagory_depth3_tid[]" id="edit-field-branch-catagory-tid-161" value="161" class="form-checkboxes">
                              <label class="option" for="edit-field-branch-catagory-tid-161">F-15C</label>
                            </li>
                            <li><input type="checkbox" name="field_branch_catagory_depth3_tid[]" id="edit-field-branch-catagory-tid-162" value="162" class="form-checkboxes">
                              <label class="option" for="edit-field-branch-catagory-tid-162">F-15E</label>
                            </li>
                            <li><input type="checkbox" name="field_branch_catagory_depth3_tid[]" id="edit-field-branch-catagory-tid-163" value="163" class="form-checkboxes">
                              <label class="option" for="edit-field-branch-catagory-tid-163">F-16</label>
                            </li>
                            <li><input type="checkbox" name="field_branch_catagory_depth3_tid[]" id="edit-field-branch-catagory-tid-164" value="164" class="form-checkboxes">
                              <label class="option" for="edit-field-branch-catagory-tid-164">F-22</label>
                            </li>
                            <li><input type="checkbox" name="field_branch_catagory_depth3_tid[]" id="edit-field-branch-catagory-tid-165" value="165" class="form-checkboxes">
                              <label class="option" for="edit-field-branch-catagory-tid-165">F-35</label>
                            </li>
                          </ul>
                        </ul>
                      </div>
                    </section>
                    <section class="views-exposed-widget">
                      <label class="collapsible">Cargo/Tankers</label>
                      <div class="content">
                        <p>Test Content</p>
                      </div>
                    </section>
                    <section class="views-exposed-widget">
                      <label class="collapsible">Others</label>
                      <div class="content">
                        <p>Test Content</p>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
            <section class="views-exposed-widget filter-apply">
            </section>
          </div>
        </form>
      </div>
      <div class="map-show">
        <?php
          $drag = __('Marker1', 'leaflet-map');
          echo do_shortcode('[leaflet-map zoom=12 zoomcontrol doubleClickZoom height=600 scrollwheel]');
          echo do_shortcode(sprintf('[leaflet-marker draggable visible] %s [/leaflet-marker]',
            $drag
          ));
        ?>
      </div>
    </div>
  </div>
</article>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>