<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bogidope Map
 */
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
    max-height: 520px;
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
    transition-duration: 5s;
  }
  .head {
    margin-top: -9px;
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
  .branch_category_tid label:before {
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
  .branch_category_tid .content {
    padding-right: 0;
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
  .form-item-edit-field-branch-catagory-tid-157 label:before {
    background-image: url('../wp-content/plugins/leaflet-map/markers/small/lgray.png');
  }
  .form-item-edit-field-branch-catagory-tid-165 label:before {
    background-image: url('../wp-content/plugins/leaflet-map/markers/small/gray.png');
  }
  .form-item-edit-field-branch-catagory-tid-151 label:before {
    background-image: url('../wp-content/plugins/leaflet-map/markers/small/green.png');
  }
  .form-item-edit-field-branch-catagory-tid-144 label:before {
    background-image: url('../wp-content/plugins/leaflet-map/markers/small/dgreen.png');
  }
  .form-item-edit-field-branch-catagory-tid-189 label:before {
    background-image: url('../wp-content/plugins/leaflet-map/markers/small/yellow.png');
  }
  .form-item-edit-field-branch-catagory-tid-173 label:before {
    background-image: url('../wp-content/plugins/leaflet-map/markers/small/pyellow.png');
  }
  .branch_category_label {
    display: none;
  }
  .bef-tree-child {
    list-style: none;
    margin-left: 7px;
    margin-bottom: -4px;
    font-weight: 600;
    font-style: normal;
    font-size: 1.4rem;
  }
  .views-submit-button {
    position: absolute;
    bottom: 0;
    left: 0;
    border-top: solid 1px rgba(29, 33, 39, 0.3);
    width: 100%;
    padding: 15px !important;
    background: #ffffff;
  }
  .views-submit-button input {
    width: 100%;
    border-color: #0088cc #0088cc #006699;
    background-color: #0088cc !important;
  }
  .site-main.full-width {
    max-width: 1600px;
	margin: auto;
  }
</style>
<?php
  $iconsURLs = array(
	  "../wp-content/plugins/leaflet-map/markers/small/bred.png",
	  "../wp-content/plugins/leaflet-map/markers/small/dblue.png",
	  "../wp-content/plugins/leaflet-map/markers/small/purple.png",
	  "../wp-content/plugins/leaflet-map/markers/small/orange.png",
	  "../wp-content/plugins/leaflet-map/markers/small/lblue.png",
	  "../wp-content/plugins/leaflet-map/markers/small/brown.png",
	  "../wp-content/plugins/leaflet-map/markers/small/lgray.png",
	  "../wp-content/plugins/leaflet-map/markers/small/gray.png",
	  "../wp-content/plugins/leaflet-map/markers/small/green.png",
	  "../wp-content/plugins/leaflet-map/markers/small/dgreen.png",
	  "../wp-content/plugins/leaflet-map/markers/small/yellow.png",
	  "../wp-content/plugins/leaflet-map/markers/small/pyellow.png",
  );
  $locations = array(
	  array("american"),
	  array("delta"),
	  array("fedex"),
	  array("southwest"),
	  array("united"),
	  array("ups"),
	  array("a-10", "b-1", "b-52", "f-15c", "f-15e", "f-16", "f-22", "f-35"),
	  array("f-35-air-national-guard-fighters-bombers", "b-2", "a-10-air-national-guard-fighters-bombers", "f-15c-air-national-guard-fighters-bombers", "f-16-air-national-guard-fighters-bombers", "f-22-air-national-guard-fighters-bombers"),
	  array("c-130-air-national-guard", "c-17-air-national-guard", "kc-135-air-national-guard", "kc-46-air-national-guard"),
	  array("kc-46", "kc-135", "c-130", "c-17", "c-5", "kc-10"),
	  array("c-32", "c-40-air-national-guard-other", "c-21", "mc-12", "hh-60-air-national-guard-other", "mq-1-air-national-guard-other", "mq-9-air-national-guard-other", "t-38-air-national-guard-other", "rc-26", "e-8", "cv-22"),
	  array("uv-18", "u-28", "tg-15-16", "t-1", "rq-4", "t-38", "t-41", "t-51-52-53", "t-6", "mq-9", "c-145", "c-40", "e-3", "hh-60", "mq-1")
  );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
    if (is_single()) {
      do_action( 'igthemes_single_post' );
    } else {
      do_action( 'igthemes_loop' );
    }
    global $wp;
    $current_url = home_url( add_query_arg( array(), $wp->request ) );
  ?>
  <div class="container main-board" style="max-width: 1600px;">
    <div class="row map-group">
      <div class="map-filter">
        <form action="<?php echo $current_url ?>" method="post" id="views-squadron-map" accept-charset="UTF-8">
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
                        <input type="checkbox" name="field_select_airline_tid[]" id="edit-field-select-airline-tid-391" value="american">
                        <label class="option" for="edit-field-select-airline-tid-391">American</label>
                      </div>
                      <div class="form-item form-type-bef-checkbox form-item-edit-field-select-airline-tid-392">
                        <input type="checkbox" name="field_select_airline_tid[]" id="edit-field-select-airline-tid-392" value="delta">
                        <label class="option" for="edit-field-select-airline-tid-392">Delta</label>
                      </div>
                      <div class="form-item form-type-bef-checkbox form-item-edit-field-select-airline-tid-393">
                        <input type="checkbox" name="field_select_airline_tid[]" id="edit-field-select-airline-tid-393" value="fedex">
                        <label class="option" for="edit-field-select-airline-tid-393">FedEx</label>
                      </div>
                      <div class="form-item form-type-bef-checkbox form-item-edit-field-select-airline-tid-394">
                        <input type="checkbox" name="field_select_airline_tid[]" id="edit-field-select-airline-tid-394" value="southwest">
                        <label class="option" for="edit-field-select-airline-tid-394">Southwest</label>
                      </div>
                      <div class="form-item form-type-bef-checkbox form-item-edit-field-select-airline-tid-395">
                        <input type="checkbox" name="field_select_airline_tid[]" id="edit-field-select-airline-tid-395" value="united">
                        <label class="option" for="edit-field-select-airline-tid-395">United</label>
                      </div>
                      <div class="form-item form-type-bef-checkbox form-item-edit-field-select-airline-tid-396">
                        <input type="checkbox" name="field_select_airline_tid[]" id="edit-field-select-airline-tid-396" value="ups">
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
                              <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-157" value="157" class="branch_category_label">
                              <label class="option" for="edit-field-branch-catagory-tid-157">Air Force Reserve</label>
                            </div>
                            <ul class="bef-tree-child bef-tree-depth-2">
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-158" value="a-10" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-158">A-10</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-159" value="b-1" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-159">B-1</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-160" value="b-52" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-160">B-52</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-161" value="f-15c" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-161">F-15C</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-162" value="f-15e" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-162">F-15E</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-163" value="f-16" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-163">F-16</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-164" value="f-22" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-164">F-22</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-165" value="f-35" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-165">F-35</label>
                              </li>
                            </ul>
                          </li>
                          <li class="bef-all-none-nested-processed">
                            <div class="form-item form-type-bef-checkbox form-item-edit-field-branch-catagory-tid-165">
                              <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-165" value="165" class="branch_category_label">
                              <label class="option" for="edit-field-branch-catagory-tid-165">Air National Guard</label>
                            </div>
                            <ul class="bef-tree-child bef-tree-depth-2">
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-166" value="f-35-air-national-guard-fighters-bombers" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-166">F-35</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-167" value="b-2" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-167">B-2</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-168" value="a-10-air-national-guard-fighters-bombers" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-168">A-10</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-169" value="f-15c-air-national-guard-fighters-bombers" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-169">F-15C</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-170" value="f-16-air-national-guard-fighters-bombers" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-170">F-16</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-171" value="f-22-air-national-guard-fighters-bombers" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-171">F-22</label>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </section>
                    <section class="views-exposed-widget">
                      <label class="collapsible">Cargo/Tankers</label>
                      <div class="content">
                        <ul class="bef-tree-child bef-tree-depth-1">
                          <li class="bef-all-none-nested-processed">
                            <div class="form-item form-type-bef-checkbox form-item-edit-field-branch-catagory-tid-151">
                              <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-151" value="151" class="branch_category_label">
                              <label class="option" for="edit-field-branch-catagory-tid-151">Air National Guard</label>
                            </div>
                            <ul class="bef-tree-child bef-tree-depth-2">
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-152" value="c-130-air-national-guard" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-152">C-130</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-153" value="c-17-air-national-guard" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-153">C-17</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-154" value="kc-135-air-national-guard" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-154">KC-135</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-155" value="kc-46-air-national-guard" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-155">KC-46</label>
                              </li>
                            </ul>
                          </li>
                          <li class="bef-all-none-nested-processed">
                            <div class="form-item form-type-bef-checkbox form-item-edit-field-branch-catagory-tid-144">
                              <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-144" value="144" class="branch_category_label">
                              <label class="option" for="edit-field-branch-catagory-tid-144">Air Force Reserve</label>
                            </div>
                            <ul class="bef-tree-child bef-tree-depth-2">
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-145" value="kc-46" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-145">KC-46</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-146" value="kc-135" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-146">KC-135</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-147" value="c-130" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-147">C-130</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-148" value="c-17" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-148">C-17</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-149" value="c-5" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-149">C-5</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-150" value="kc-10" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-150">KC-10</label>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </section>
                    <section class="views-exposed-widget">
                      <label class="collapsible">Others</label>
                      <div class="content">
                        <ul class="bef-tree-child bef-tree-depth-1">
                          <li class="bef-all-none-nested-processed">
                            <div class="form-item form-type-bef-checkbox form-item-edit-field-branch-catagory-tid-189">
                              <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-189" value="189" class="branch_category_label">
                              <label class="option" for="edit-field-branch-catagory-tid-189">Air National Guard</label>
                            </div>
                            <ul class="bef-tree-child bef-tree-depth-2">
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-190" value="c-32" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-190">C-32</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-191" value="c-40-air-national-guard-other" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-191">C-40</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-192" value="c-21" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-192">C-21</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-193" value="mc-12" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-193">MC-12</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-194" value="hh-60-air-national-guard-other" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-194">HH-60</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-195" value="mq-1-air-national-guard-other" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-195">MQ-1</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-196" value="mq-9-air-national-guard-other" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-196">MQ-9</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-197" value="t-38-air-national-guard-other" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-197">T-38</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-198" value="rc-26" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-198">RC-26</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-199" value="e-8" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-199">E-8</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-200" value="cv-22" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-200">CV-22</label>
                              </li>
                            </ul>
                          </li>
                          <li class="bef-all-none-nested-processed">
                            <div class="form-item form-type-bef-checkbox form-item-edit-field-branch-catagory-tid-173">
                              <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-173" value="173" class="branch_category_label">
                              <label class="option" for="edit-field-branch-catagory-tid-173">Air Force Reserve</label>
                            </div>
                            <ul class="bef-tree-child bef-tree-depth-2">
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-174" value="uv-18" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-174">UV-18</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-175" value="u-28" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-175">U-28</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-176" value="tg-15-16" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-176">TG-15/16</label>
                              </li>
                              <li>
                                <input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-177" value="t-1" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-177">T-1</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-178" value="rq-4" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-178">RQ-4</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-179" value="t-38" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-179">T-38</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-179" value="t-41" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-179">T-41</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-180" value="t-51-52-53" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-180">T-51/52/53</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-181" value="t-6" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-181">T-6</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-182" value="mq-9" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-182">MQ-9</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-183" value="c-145" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-183">C-145</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-184" value="c-40" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-184">C-40</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-185" value="e-3" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-185">E-3</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-186" value="hh-60" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-186">HH-60</label>
                              </li>
                              <li><input type="checkbox" name="field_branch_catagory_tid[]" id="edit-field-branch-catagory-tid-187" value="mq-1" class="form-checkboxes">
                                <label class="option" for="edit-field-branch-catagory-tid-187">MQ-1</label>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
            <div class="views-exposed-widget views-submit-button">
              <input type="submit" id="edit-submit-squadron-map-v2" name="" value="Apply" class="btn-primary btn form-submit">
            </div>
          </div>
        </form>
      </div>
      <div class="map-show">
        <?php
		  $airlines = array();
		  $branches = array();
		  $indexes = array();
		  foreach( $_POST as $key => $categories) {
			  if ($key == "field_select_airline_tid") {
				  foreach($categories as $key1 => $term1) {
					  array_push($airlines, $term1);
				  }
			  }
			  if ($key == "field_branch_catagory_tid") {
				  foreach($categories as $key2 => $term2) {
					  array_push($branches, $term2);
				  }
			  } 
		  }
		  $markers = array();
		  for ($i=0; $i < count($airlines); $i++) {
			  $airline = $airlines[$i];
			  $args1 = array(
				  'numberposts'	=> -1,
				  'post_type'	=> 'unit',
				  'tax_query' => array(
					array(
					'taxonomy' => 'airline',
					'field' => 'slug',
					'terms' => array($airline))
				  ),
				  'orderby' => 'title',
				  'order' 	=> 'ASC',
			  );
			  $markers1 = get_posts($args1);
		  	  if(!empty($markers1)) {
				  $markers = array_merge($markers, $markers1);
				  for ($j=0; $j < count($locations); $j++) {
					  if (in_array($airline, $locations[$j])) {
						  foreach($markers1 as $element) {
							array_push($indexes, $j);
						  }
						  break;
					  }
				  }
			  }
		  }
		  for ($i=0; $i < count($branches); $i++) {
			  $branch = $branches[$i];
			  $args2 = array(
				  'numberposts'	=> -1,
				  'post_type'	=> 'unit',
				  'tax_query' => array(
					array(
					'taxonomy' => 'branch_category',
					'field' => 'slug',
					'terms' => array($branch))
				  ),
				  'orderby' => 'title',
				  'order' 	=> 'ASC',
			  );
			  $markers2 = get_posts($args2);
		  	  if(!empty($markers2)) {
				  $markers = array_merge($markers, $markers2);
				  for ($j=0; $j < count($locations); $j++) {
					  if (in_array($branch, $locations[$j])) {
						  foreach($markers2 as $element) {
							array_push($indexes, $j);
						  }
						  break;
					  }
				  }
			  }
		  }

		  $variants = array();
		  for ($i = 0; $i < count($markers); $i++) {
			  $marker = $markers[$i];
			  $post_meta = get_post_meta($marker->ID, "wpcf-data");
			  $codes = explode(";", $post_meta[0]);

			  $loc1 = strpos($codes[1], '"');
			  $lat =(double) substr($codes[1], $loc1+1);
			  $loc2 = strpos($codes[3], '"');
			  $lgt =(double) substr($codes[3], $loc2+1);

			  // Get the notes info
			  $loc4 = strpos($codes[7], '"');
			  $local = substr($codes[7], $loc4+1);
			  $local = rtrim($local, '"');
			  
			  $airline_obj = get_the_terms($markers[0]->ID, "airline")[0];
			  $arline = $airline_obj->name;
			  if ($arline != '') {
				  $variants[$i] = array($lat, $lgt, $local, $arline);
			  } else {
				  $aircraft_arry = get_post_meta($marker->ID, "wpcf-aircraft");
				  $aircraft = $aircraft_arry[0];

				  $squadron_obj = get_the_terms($markers[0]->ID, "squadron")[0];
				  $squadron = $squadron_obj->name;

				  $wing_obj = get_the_terms($markers[0]->ID, "wing")[0];
				  $wing = $wing_obj->name;

				  $rated_board = get_post_meta($marker->ID, "wpcf-rated_hiring_board")[0];
				  $upt_interview_board = get_post_meta($marker->ID, "wpcf-upt_interview_board")[0];
				  $upt_app_deadline = get_post_meta($marker->ID, "wpcf-upt_app_deadline")[0];
				  if ($upt_app_deadline != '') $upt_app_deadline = date("D d/m/Y", $upt_app_deadline);

				  $number_recruiter = get_post_meta($marker->ID, "wpcf-recruiter_phone_number")[0];
				  $number_squadron = get_post_meta($marker->ID, "wpcf-squadron_phone_number")[0];
				  $squadron_link = get_post_meta($marker->ID, "wpcf-field_squadron_link_url")[0];
				  $notes = get_post_meta($marker->ID, "wpcf-notes")[0];

				  $variants[$i] = array($lat, $lgt, $local, $aircraft, $wing, $squadron, $rated_board, $upt_interview_board, $upt_app_deadline, $number_recruiter, $number_squadron, $squadron_link, $notes);  
			  }
		  }

          echo do_shortcode('[leaflet-map zoom=8 zoomcontrol doubleClickZoom height=600 scrollwheel fitbounds]');
		  $iconurl = "";
		  for ($i = 0; $i < count($variants); $i++) {

			  $iconIndex = $indexes[$i];
			  $iconurl = $iconsURLs[$iconIndex];

			  $lat = $variants[$i][0];
			  $lgt = $variants[$i][1];
			  $info = "";
			  
			  if (count($variants[$i]) > 4) {
				  $info .= "<b>Location:</b><br>".$variants[$i][2]."<br><b>Aircraft: </b>".$variants[$i][3]."<br>";
				  $info .= "<b>Wing:</b> ".$variants[$i][4]."<br>"."<b>Squadron:</b> ".$variants[$i][5]."<br><br>";
				  $info .= "<b>Rated Hiring Board:</b> ".$variants[$i][6]."<br>";
				  $info .= "<b>UPT App Deadline:</b> ".$variants[$i][8]."<br>";
				  $info .= "<b>UPT Interview Board:</b> ".$variants[$i][7]."<br><br>";
				  $info .= "<b>Squadron Phone:</b> ".$variants[$i][10]."<br>";
				  $info .= "<b>Recruiter Phone:</b> ".$variants[$i][9]."<br>";
				  $info .= "<a href='".$variants[$i][11]."'>Squadron Link</a><br><b>Notes:</b>";
				  $info .= $variants[$i][12];
			  } else {
				  $info .= "<b>Airline: </b>".$variants[$i][3]."<br>";
				  $info .= "<b>Location:</b><br>".$variants[$i][2];
			  }
			  echo do_shortcode(sprintf('[leaflet-marker lat=%s lng=%s iconurl=%s iconsize="15,20" popupanchor="0,-8"] %s [/leaflet-marker]',
            	$lat, $lgt, $iconurl, $info
          	  ));
		  }
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