<?php

class ContactSettings {
        private $contact_settings_options;

        public function __construct() {
            add_action( 'admin_menu', array( $this, 'contact_settings_add_plugin_page' ) );
            add_action( 'admin_init', array( $this, 'contact_settings_page_init' ) );
        }

        public function contact_settings_add_plugin_page() {
            add_menu_page(
                'Contact settings', // page_title
                'Contact settings', // menu_title
                'manage_options', // capability
                'contact-settings', // menu_slug
                array( $this, 'contact_settings_create_admin_page' ), // function
                'dashicons-email', // icon_url
                3 // position
            );
        }

        public function contact_settings_create_admin_page() {
            $this->contact_settings_options = get_option( 'contact_settings_option_name' ); ?>

            <div class="wrap">
                <h2>Contact settings</h2>
                <p></p>
                <?php settings_errors(); ?>

                <form method="post" action="options.php">
                    <?php
                        settings_fields( 'contact_settings_option_group' );
                        do_settings_sections( 'contact-settings-admin' );
                        submit_button();
                    ?>
                </form>
            </div>
        <?php }

        public function contact_settings_page_init() {
            register_setting(
                'contact_settings_option_group', // option_group
                'contact_settings_option_name', // option_name
                array( $this, 'contact_settings_sanitize' ) // sanitize_callback
            );

            add_settings_section(
                'contact_settings_setting_section', // id
                'Settings', // title
                array( $this, 'contact_settings_section_info' ), // callback
                'contact-settings-admin' // page
            );

            add_settings_field(
                'twitter_0', // id
                'Twitter', // title
                array( $this, 'twitter_0_callback' ), // callback
                'contact-settings-admin', // page
                'contact_settings_setting_section' // section
            );

            add_settings_field(
                'facebook_1', // id
                'Facebook', // title
                array( $this, 'facebook_1_callback' ), // callback
                'contact-settings-admin', // page
                'contact_settings_setting_section' // section
            );

            add_settings_field(
                'linkedin_2', // id
                'LinkedIn', // title
                array( $this, 'linkedin_2_callback' ), // callback
                'contact-settings-admin', // page
                'contact_settings_setting_section' // section
            );
        }

        public function contact_settings_sanitize($input) {
            $sanitary_values = array();
            if ( isset( $input['twitter_0'] ) ) {
                $sanitary_values['twitter_0'] = sanitize_text_field( $input['twitter_0'] );
            }

            if ( isset( $input['facebook_1'] ) ) {
                $sanitary_values['facebook_1'] = sanitize_text_field( $input['facebook_1'] );
            }

            if ( isset( $input['linkedin_2'] ) ) {
                $sanitary_values['linkedin_2'] = sanitize_text_field( $input['linkedin_2'] );
            }

            return $sanitary_values;
        }

        public function contact_settings_section_info() {
            
        }

        public function twitter_0_callback() {
            printf(
                '<input class="regular-text" type="text" name="contact_settings_option_name[twitter_0]" id="twitter_0" value="%s">',
                isset( $this->contact_settings_options['twitter_0'] ) ? esc_attr( $this->contact_settings_options['twitter_0']) : ''
            );
        }

        public function facebook_1_callback() {
            printf(
                '<input class="regular-text" type="text" name="contact_settings_option_name[facebook_1]" id="facebook_1" value="%s">',
                isset( $this->contact_settings_options['facebook_1'] ) ? esc_attr( $this->contact_settings_options['facebook_1']) : ''
            );
        }

        public function linkedin_2_callback() {
            printf(
                '<input class="regular-text" type="text" name="contact_settings_option_name[linkedin_2]" id="linkedin_2" value="%s">',
                isset( $this->contact_settings_options['linkedin_2'] ) ? esc_attr( $this->contact_settings_options['linkedin_2']) : ''
            );
        }

    }