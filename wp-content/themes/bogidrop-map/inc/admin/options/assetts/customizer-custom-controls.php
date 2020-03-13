<?php
/**+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*
 * RADIO IMAGE CONTROL
 **+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
if( class_exists( 'WP_Customize_Control' ) ):
class IGthemes_Radio_Image_Control extends WP_Customize_Control {

        public $type = 'radio-image';
        // Enqueue scripts and styles for the custom control.
        public function enqueue() {
            wp_enqueue_script( 'jquery-ui-button' );
        }
        //Render the content on the theme customizer page
        public function render_content() {
            if ( empty( $this->choices ) ) {
                return;
            }
            $name = '_customize-radio-' . $this->id;
            ?>
            <?php if ( ! empty( $this->label ) ) : ?>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <?php endif; ?>
            <?php if ( ! empty( $this->description ) ) : ?>
                <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
            <?php endif; ?>
            <div id="input_<?php echo esc_attr( $this->id ); ?>" class="image">
                <?php foreach ( $this->choices as $value => $label ) : ?>
                    <input class="image-select" type="radio" value="<?php echo esc_attr( $value ); ?>" id="<?php echo $this->id . $value; ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?>>
                        <label for="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>">
                            <img src="<?php echo esc_html( $label ); ?>" alt="<?php echo esc_attr( $value ); ?>" title="<?php echo esc_attr( $value ); ?>">
                        </label>
                    </input>
                <?php endforeach; ?>
            </div>
            <script>jQuery(document).ready(function($) { $( '[id="input_<?php echo esc_attr( $this->id ); ?>"]' ).buttonset(); });</script>
            <?php
        }
    }
/**+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*
 * MORE CONTROL
**+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
class IGthemes_More_Control extends WP_Customize_Control {

    //Render the content on the theme customizer page
    public function render_content() { ?>

            <?php if ( ! empty( $this->label ) ) : ?>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <?php endif; ?>
            <p>
                <?php esc_html_e( 'Bogidope Premium expands the already powerful free version of this theme and gives access to our priority support service.', 'bogidope' ); ?>
            <ul>
                <li><?php esc_html_e( 'More advanced options', 'bogidope' ); ?></li>
                <li><?php esc_html_e( 'Different menu layout', 'bogidope' ); ?></li>
                <li><?php esc_html_e( 'Blog customizer', 'bogidope' ); ?></li>
                <li><?php esc_html_e( 'Shop customizer', 'bogidope' ); ?></li>
                <li><?php esc_html_e( 'Custom fonts', 'bogidope' ); ?></li>
                <li><?php esc_html_e( 'New post and page settings', 'bogidope' ); ?></li>
                <li><?php esc_html_e( 'New advanced widgets', 'bogidope' ); ?></li>
                <li><?php esc_html_e( 'Premium shortcodes', 'bogidope' ); ?></li>
                <li><?php esc_html_e( 'Premium support', 'bogidope' ); ?></li>
                <li><?php esc_html_e( 'Money back guarantee', 'bogidope' ); ?></li>
            </ul>
            <a href="<?php echo esc_url( 'https://iograficathemes.com/theme/bogidope/' ); ?>" target="_blank" class="button-upgrade">
                <?php esc_html_e('view all premium features', 'bogidope'); ?>
            </a>
            </p>
            <span class="customize-control-title"><?php esc_html_e( 'Enjoying the theme?', 'bogidope' ); ?></span>

            <p>
                <?php printf( esc_html__( 'Why not leave us a review on %sWordPress.org%s?  We\'d really appreciate it!', 'bogidope' ), '<a href="https://wordpress.org/themes/bogidope">', '</a>' ); ?>
            </p>

        <?php
    }
}
/**+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*
 * HEADING CONTROL
**+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
class IGthemes_Heading extends WP_Customize_Control {
    public $type = 'heading';
    //Render the content on the theme customizer page
    public function render_content() { ?>

        <?php if ( ! empty( $this->label ) ) : ?>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <?php endif; ?>
        <?php if ( ! empty( $this->description ) ) : ?>
            <span class="customize-control-description"><?php echo $this->description; ?></span>
        <?php endif; ?>
    <?php
    }
}
endif;
