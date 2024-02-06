<?php
/**
 * Class: Plugin_Name_DisplaySettings
 */

 if ( ! defined ( 'ABSPATH') ) {
    exit;
}


//Init the Class
if (! class_exists('Plugin_Name_DisplaySettings')) {

    final class Plugin_Name_DisplaySettings {
       /**
        * Member Variable
        *
        * @var instance
        */
       private static $instance;

       /**
        *  Initiator
        */
       public static function get_instance() {
           if ( ! isset( self::$instance ) ) {
               self::$instance = new self();
           }
           return self::$instance;
       }

       /**
        * Constructor
        */
       public function __construct() {

       }


       /**
        * General Settings Section
        */
       public function plugin_name_settings_general() {
        
        ?>
        <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3 ">
            <div class="px-4 sm:px-0">
                <h2 class="text-lg font-medium leading-7">
                General Settings
                </h2>

                <p class="mt-1 text-primaryGray/75">
                Configure how you want to configure the General Settings.
                </p>
            </div>

            <div class="md:col-span-2">
                <div class="form-section-wrapper ">
                    <div class="form-section">
                        <div class="toggle-field-wrapper form-group">
                            <div class="toggle-field-text">
                                <label for="affiliation_protocol_enabled">Allow New Custom 2</label>
                                <p class="form-text">Do you want to allow new custom settings?</p>
                            </div>
                            <label class="switch">
                                <input type="checkbox" name="plugin_name_custom2" value="1" <?php checked(get_option('plugin_name_custom2'), 1); ?>>
                                <span class="slider"></span>
                            </label>
                        </div>


                        <div class="toggle-field-wrapper form-group">
                            <div class="toggle-field-text">
                                <label for="affiliation_protocol_auto_approve_affiliations">Checkbox On Off</label>
                                <p class="form-text">Do you want to automatically approve new affiliate signups? If disabled, you will need to manually approve each affiliate signup.</p>
                            </div>
                            <label class="switch">
                                <input type="checkbox" name="plugin_name_checkbox" value="1" <?php checked(get_option('plugin_name_checkbox'), 1); ?>>
                                <span class="slider"></span>
                            </label>
                        </div>

                        <p class="font-medium -mb-2">
                            DISABLED TEXT
                        </p>
                        <div class="clipboard contained" data-controller="clipboard">
                            <span data-clipboard-target="source" data-controller="">https://gloriousmotive.com/</span>
                        </div>
                        <p class="text-primaryGray/75 pt-2">
                            Here There is no Input.
                        </p>


                        <div class="form-group">
                            <label for="plugin_name_name">
                                Name
                            </label>
                            <div class="form-control-wrapper ">
                                <input class="form-control" type="text" name="plugin_name_name" value="<?php echo esc_attr(get_option('plugin_name_name')); ?>">
                            </div>
                            <p class="form-text">plugin_name_name.</p>
                        </div>


                        <div class="form-group">
                            <label for="plugin_name_email">
                                Email
                            </label>
                            <div class="form-control-wrapper ">
                                <input class="form-control" type="text" name="plugin_name_email" value="<?php echo esc_attr(get_option('plugin_name_email')); ?>">
                            </div>
                            <p class="form-text">plugin_name_email.</p>
                        </div>



                        <div class="form-group">
                            <label for="plugin_name_textarea">Description</label>
                            <div class="form-control-wrapper ">
                                <textarea class="form-control" name="plugin_name_textarea"><?php echo esc_textarea(get_option('plugin_name_textarea'));  ?></textarea>
                            </div>
                            <p class="form-text">plugin_name_textarea.</p>
                        </div>


                        <div class="form-group">
                            <label for="plugin_name_url">URL</label>
                            <div class="form-control-wrapper ">
                                <input class="form-control" type="url" name="plugin_name_url" value="<?php echo esc_url(get_option('plugin_name_url')); ?>" id="plugin_name_url">
                            </div>
                            <p class="form-text">plugin_name_url.</p>
                        </div>



                        <div class="form-group">
                            <label for="plugin_name_radio">Radio</label>
                            <div class="flex-0 form-radio-buttons-group form-group">
                                <div class="form-control-wrapper ">
                                    <input type="radio" value="Percentage" name="plugin_name_radio" <?php checked(get_option('plugin_name_radio'), 'Percentage'); ?>>
                                    <label for="affiliation_protocol_percentage_based_true">
                                        <span>Percentage</span>
                                    </label>
                                    <input type="radio" value="Flat Rate" name="plugin_name_radio" <?php checked(get_option('plugin_name_radio'), 'Flat Rate'); ?>>
                                    <label for="affiliation_protocol_percentage_based_false">
                                        <span>Flat Rate</span>
                                    </label>
                                </div>
                            </div>
                            <p class="form-text">plugin_name_radio.</p>
                        </div>



                        <div class="grid grid-cols-2 space-x-4">
                            <div class="form-group">
                                <label for="affiliation_protocol_referrer_type">Referrer Type</label>
                                <div class="form-control-wrapper ">
                                    <select data-controller="select" data-action="change->select#change" class="form-control" name="affiliation_protocol[referrer_type]" id="affiliation_protocol_referrer_type">
                                        <option value="first">First</option>
                                        <option selected="selected" value="last">Last</option>
                                    </select>
                                </div>
                                <p class="form-text">Should the first or last referrer be credited?</p>
                            </div>
                            <div class="form-group">
                                <label for="plugin_name_dropdown">plugin_name_dropdown</label>
                                <div class="form-control-wrapper ">
                                    <select class="form-control" name="plugin_name_dropdown" id="plugin_name_dropdown">
                                        <option value="yes" <?php echo selected(get_option("plugin_name_dropdown"), "yes"); ?>>Yes</option>
                                        <option value="no" <?php echo selected(get_option("plugin_name_dropdown"), "no"); ?>>No</option>
                                    </select>
                                </div>
                                <p class="form-text">plugin_name_dropdown?</p>
                            </div>
                        </div>

                        

                        <div class="form-group !mb-0">
                            <label>
                                <span class="translation_missing" title="translation missing: en.shared.form_section.commission">Commission</span>
                            </label>
                            <div class="flex">
                                <div class="flex-1 form-group hidden" data-controller="input-dependent" data-input-dependent-input-name-value="affiliation_protocol[percentage_based]">
                                    <div class="form-control-wrapper ">
                                        <input suffix="%" step="any" class="form-control" type="number" name="affiliation_protocol[percent_commission]" id="affiliation_protocol_percent_commission">
                                        <span class="form-control-suffix">%</span>
                                    </div>
                                </div>
                                <div class="flex-1 form-group" data-controller="input-dependent" data-input-dependent-input-name-value="affiliation_protocol[percentage_based]" data-input-dependent-reverse-value="true">
                                    <div class="form-control-wrapper ">
                                        <span class="form-control-prefix">$</span>
                                        <input label="false" include_error_feedback_for="amount_commission" wrapper_options="class flex-1 data {:controller=>&quot;input-dependent&quot;, :input_dependent_input_name_value=>&quot;affiliation_protocol[percentage_based]&quot;, :input_dependent_reverse_value=>true}" step="any" class="form-control" type="number" value="0.0" name="affiliation_protocol[amount_commission_dollars]" id="affiliation_protocol_amount_commission_dollars">
                                        <span class="form-control-suffix">USD</span>
                                    </div>
                                </div>
                                <div class="flex-0 ml-6 form-radio-buttons-group form-group">
                                    <div class="form-control-wrapper ">
                                        <input type="radio" value="Percentage" name="plugin_name_radio222" <?php checked(get_option('plugin_name_radio'), 'Percentage'); ?>>
                                        <label for="affiliation_protocol_percentage_based_true">
                                            <span>Percentage</span>
                                        </label>
                                        <input type="radio" value="Flat Rate" name="plugin_name_radio222" <?php checked(get_option('plugin_name_radio'), 'Flat Rate'); ?>>
                                        <label for="affiliation_protocol_percentage_based_false">
                                            <span>Flat Rate</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <?php
       }


       /**
        * Other Settings Section
        */
        public function plugin_name_settings_others() {
            ?>
            <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3 mt-10">
                <div class="px-4 sm:px-0">
                    <h2 class="text-lg font-medium leading-7">
                    Affiliate Signups
                    </h2>

                    <p class="mt-1 text-primaryGray/75">
                    Configure how affiliates signup and get approved to promote products in your store.
                    </p>
                </div>

                <div class="md:col-span-2">
                    <div class="form-section-wrapper ">
                        <div class="form-section">
                            <div class="toggle-field-wrapper form-group">
                                <div class="toggle-field-text">
                                    <label for="affiliation_protocol_enabled">Allow New Affiliate Signups</label>
                                    <p class="form-text">Do you want to allow new affiliates to signup?</p>
                                </div>
                                <div class="toggle-field" data-controller="toggle-field">
                                    <input data-toggle-field-target="hiddenInput" autocomplete="off" type="hidden" value="false" name="affiliation_protocol[enabled]" id="affiliation_protocol_enabled">
                                    <button type="button" data-toggle-field-target="button" data-action="toggle-field#click" class="off">
                                        <span></span>
                                    </button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="affiliation_protocol_description">Program Description</label>
                                <div class="form-control-wrapper ">
                                    <textarea class="form-control" name="affiliation_protocol[description]" id="affiliation_protocol_description"></textarea>
                                </div>
                                <p class="form-text">Let affiliates know any specifics about your program and what to expect from being an affiliate. This is shown to affiliates when they sign up for your affiliate program.</p>
                            </div>

                            <div class="toggle-field-wrapper form-group">
                                <div class="toggle-field-text">
                                    <label for="affiliation_protocol_auto_approve_affiliations">Auto Approve New Affiliates</label>
                                    <p class="form-text">Do you want to automatically approve new affiliate signups? If disabled, you will need to manually approve each affiliate signup.</p>
                                </div>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                                
                                
                            </div>

                            <p class="font-medium -mb-2">
                                Signup URL
                            </p>

                            <div class="clipboard contained" data-controller="clipboard">
                                <span data-clipboard-target="source" data-controller="">https://affiliates.surecart.com/join/gloriousmotive</span>
                                <button type="button" data-action="clipboard#copy">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" role="img" class="icon h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" role="img" class="text-primary icon h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                    </svg>

                                </button>
                            </div>

                            <p class="text-primaryGray/75 pt-2">
                                This is where you will send affiliates to signup for your affiliate program.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

    }//final class


}
