<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bogidope
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
  }
  .filter-options {
    margin: 2rem;
  }
  .filter-option {
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
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
  }
  .head p {
    border-bottom: 3px solid yellowgreen;
    font-style: oblique;
    font-family: serif;
    text-align: center;
    font-weight: bold;
    font-size: 23px;
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
        <section class="filter-options">
          <div class="head">
            <p>Select from the options below</p>
          </div>
          <div class="filter-option">
            <label class="collapsible">Airline Hubs</label>
            <div class="content">
              <p>Test Content</p>
            </div>
          </div>
          <div class="filter-option">
            <label class="collapsible">Fighters/Bombers</label>
            <div class="content">
              <p>Test Content</p>
            </div>
          </div>
          <div class="filter-option">
            <label class="collapsible">Cargo/Tankers</label>
            <div class="content">
              <p>Test Content</p>
            </div>
          </div>
          <div class="filter-option">
            <label class="collapsible">Others</label>
            <div class="content">
              <p>Test Content</p>
            </div>
          </div>
        </section>
        <section class="filter-apply">
        </section>
      </div>
      <div class="map-show">
        <?php
          $drag = __('Marker1', 'leaflet-map');
          echo do_shortcode('[leaflet-map zoom=7 zoomcontrol doubleClickZoom height=500 scrollwheel]');
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