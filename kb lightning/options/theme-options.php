<?php
// create custom plugin settings menu
add_action('admin_menu', 'baw_create_menu');

function baw_create_menu() {

    //create new top-level menu                                                                                 Set Icon here!!
    add_menu_page('Theme Options', 'Theme Settings', 'administrator', 'bawsettings', 'baw_settings_page','dashicons-admin-site',61);

    //call register settings function
    add_action( 'admin_init', 'register_mysettings' );
}


function register_mysettings() {
    //register our settings This is where you add new inputs!! and call them on the front end with echo get_option('$option name');
    register_setting( 'baw-settings-group', 'header_logo' );
    register_setting( 'baw-settings-group', 'header_copy' );
    register_setting( 'baw-settings-group', 'footer_logo' );
    register_setting( 'baw-settings-group', 'footer_copyright' );
    register_setting( 'baw-settings-group', 'cta_content' );
    register_setting( 'baw-settings-group', 'cta_image' );
    register_setting( 'baw-settings-group', 'hcontent_title' );
    register_setting( 'baw-settings-group', 'hcontent' );
    register_setting( 'baw-settings-group', 'hcontact_title' );
    register_setting( 'baw-settings-group', 'hcontact_desc' );
    register_setting( 'baw-settings-group', 'hcontact_phone' );
    register_setting( 'baw-settings-group', 'hcontact_fax' );
    register_setting( 'baw-settings-group', 'hcontact_loc' );
    register_setting( 'baw-settings-group', 'catalog_file' );
}

add_action('admin_enqueue_scripts', 'my_admin_scripts');
 
function my_admin_scripts() {
    if (isset($_GET['page']) && $_GET['page'] == 'bawsettings') {
        wp_enqueue_media();
        wp_register_script('my-admin-js', get_template_directory_uri() .'/options/my-admin.js', array('jquery'));
        wp_enqueue_script('my-admin-js');
        wp_register_script('my-color-js', get_template_directory_uri() .'/options/jscolor/jscolor.js', array('jquery'));
        wp_enqueue_script('my-color-js');
        wp_register_style( 'themestyles', get_template_directory_uri() .'/options/options-styles.css' );
        wp_enqueue_style( 'themestyles' );
        
    }
}


function baw_settings_page() {
?>

<div class="wrap">
<h2>Global Theme Settings</h2>
<div class="tab-holder">
    <div class="tab active" target="o-header">
    Header
    </div>
    <div class="tab" target="o-home">
    Home
    </div>
    <div class="tab" target="o-cat">
    Catalog
    </div>
    <div class="tab" target="o-footer">
    Footer
    </div>
</div>
<div class="o-divider"></div>
<form method="post" action="options.php">
    <?php settings_fields( 'baw-settings-group' ); ?>
    <?php do_settings_sections( 'baw-settings-group' ); ?>
<!--     


		SAMPLE FIELDS

        <div class="option-holder o-full">
            <label>New Option</label>
            <input type="text" name="new_option_name" value="" />
        </div>

        <div class="option-holder o-third">
            <label>New Option</label>
            <input type="text" name="new_option_name" value="" />
        </div>

        <div class="option-holder o-third">
            <label>New Option</label>
            <input type="text" name="new_option_name" value="" />
        </div>

        <div class="option-holder o-third">
            <label>New Option</label>
            <input type="text" name="new_option_name" value="" />
        </div>

        <div class="option-holder o-full">
            <label>Text Area Option</label>
            <textarea name="option_2"><?php echo get_option('option_2'); ?></textarea>
        </div>

        <div class="option-holder o-half">
            <label>Text Area Option</label>
            <textarea name="option_5"><?php echo get_option('option_5'); ?></textarea>
        </div>

        <div class="option-holder o-half">
            <label>Text Area Option</label>
            <textarea name="option_6"><?php echo get_option('option_6'); ?></textarea>
        </div>



        <div class="o-divider"></div> 

        <div class="o-mini-header">
            This is a page section header
        </div>

        <div class="option-holder o-full">
            <label for="upload_image">Image Upload Option 1</label>
            <input class="upload_image" type="text" id="opt_3" name="option_3" value="<?php echo get_option('option_3'); ?>" /> 
            <input  class="button upload_image_button" target="opt_3" type="button" value="Upload Image" />
            <div class="o-comment">
                This is the text for a comment
            </div>
        </div>

        <div class="option-holder o-full">
            <label for="upload_image">Image Upload Option 2</label>
            <div class="o-img-holder">
                <img class="o-img" src="<?php echo get_option('option_4'); ?>">
            </div>
            <input class="upload_image" type="text" id="opt_4" name="option_4" value="<?php echo get_option('option_4'); ?>" /> 
            <input  class="button upload_image_button" target="opt_4" type="button" value="Upload Image" />
            <div class="o-comment">
                This is the text for a comment
            </div>
        </div>
            -->




    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- header section -->
    <div class="o-section o-header">
        <div class="section-desc">
            These are the setting for the Header.
        </div><!-- description of page -->
        <div class="option-holder o-full">
            <label for="upload_image">Header Logo</label>
            <div class="o-img-holder">
                <img class="o-img" src="<?php echo get_option('header_logo'); ?>">
            </div>
            <input class="upload_image" type="text" id="head_logo" name="header_logo" value="<?php echo get_option('header_logo'); ?>" /> 
            <input  class="button upload_image_button" target="head_logo" type="button" value="Upload Image" />
        </div>

       <div class="option-holder o-full">
            <label>Header Copy</label>
            <?php $content = get_option('header_copy'); ?>
            <?php wp_editor( $content, 'header_copy', $settings = array() ); ?> 
        </div>


    </div>
    




    <!-- Home section -->
    <div class="o-section hide o-home">
        <div class="section-desc">
            These are the setting for the Home page.
        </div><!-- description of page -->


        <div class="option-holder o-full">
            <label>Home Title</label>
            <input type="text" name="hcontent_title" value="<?php echo get_option('hcontent_title'); ?>" />
        </div>
        <div class="option-holder o-full">
            <label>Home Content</label>
            <?php $contenth = get_option('hcontent'); ?>
            <?php wp_editor( $contenth, 'hcontent', $settings = array('wpautop' => false) ); ?> 
        </div>

        <div class="o-divider"></div> 
        
       <div class="option-holder o-full">
            <label></label>
            <?php $contentcta = get_option('cta_content'); ?>
            <?php wp_editor( $contentcta, 'cta_content', $settings = array() ); ?> 
        </div>

        <div class="option-holder o-full">
            <label for="upload_image">CTA background image</label>
            <div class="o-img-holder">
                <img class="o-img" src="<?php echo get_option('cta_image'); ?>">
            </div>
            <input class="upload_image" type="text" id="cta_img" name="cta_image" value="<?php echo get_option('cta_image'); ?>" /> 
            <input  class="button upload_image_button" target="cta_img" type="button" value="Upload Image" />
        </div>

        <div class="o-divider"></div> 

        <div class="o-mini-header">
           Contact Section
        </div>

        <div class="option-holder o-full">
            <label>Contact Section Title</label>
            <input type="text" name="hcontact_title" value="<?php echo get_option('hcontact_title'); ?>" />
        </div>

         <div class="option-holder o-full">
            <label>Contact Section Text</label>
            <textarea name="hcontact_desc"><?php echo get_option('hcontact_desc'); ?></textarea>
        </div>

        <div class="option-holder o-full">
            <label><i class="fa fa-phone"></i> Phone</label>
            <input type="text" name="hcontact_phone" value="<?php echo get_option('hcontact_phone'); ?>" />
        </div>

        <div class="option-holder o-full">
            <label><i class="fa fa-fax"></i> Fax</label>
            <input type="text" name="hcontact_fax" value="<?php echo get_option('hcontact_fax'); ?>" />
        </div>

        <div class="option-holder o-full">
            <label><i class="fa fa-map-marker"></i> Location</label>
            <input type="text" name="hcontact_loc" value="<?php echo get_option('hcontact_loc'); ?>" />
        </div>

    </div>

        <!-- CATALOG SECTION  -->

    <div class="o-section hide o-cat">
        <div class="section-desc">
            These are the setting for the Catalog.
        </div><!-- description of page -->
        <div class="option-holder o-full">
            <label for="upload_image">Full Catalog PDF file</label>
            <input class="upload_image" type="text" id="cat_file" name="catalog_file" value="<?php echo get_option('catalog_file'); ?>" /> 
            <input  class="button upload_image_button" target="cat_file" type="button" value="Upload file" />
        </div>



    </div>




    <!-- footer section -->
    <div class="o-section hide o-footer">
        <div class="section-desc">
            These are the setting for the Footer.
        </div><!-- description of page -->

       <div class="option-holder o-full">
            <label for="upload_image">Footer Logo</label>
            <div class="o-img-holder">
                <img class="o-img" src="<?php echo get_option('footer_logo'); ?>">
            </div>
            <input class="upload_image" type="text" id="foot_logo" name="footer_logo" value="<?php echo get_option('footer_logo'); ?>" /> 
            <input  class="button upload_image_button" target="foot_logo" type="button" value="Upload Image" />
        </div>
        <div class="option-holder o-full">
            <label>Copyright</label>
            <input type="text" name="footer_copyright" value="<?php echo get_option('footer_copyright'); ?>" />
        </div>
    </div>


    
    <div class="submit-button">
    <?php submit_button(); ?>
    </div>
</form>
</div>
<?php } ?>