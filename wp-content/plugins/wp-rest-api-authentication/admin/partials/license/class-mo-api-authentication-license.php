<?php

class Mo_API_Authentication_Admin_License {
    public static function emit_css() {
        $tick_img = plugin_dir_url(dirname(dirname(__FILE__))) . "images/tick.png";
    }

    public static function mo_api_authentication_licensing_page(){
        self::emit_css();
        ?>
        
        <!-- Important JSForms -->
        <input type="hidden" value="<?php echo esc_attr( mo_api_authentication_is_customer_registered() );?>" id="mo_customer_registered">
        <form style="display:none;" id="loginform"
              action="<?php echo esc_attr( get_option( 'host_name' ) ) . '/moas/login'; ?>"
              target="_blank" method="post">
			<?php wp_nonce_field('mo_api_authentication_goto_login_xecurify','mo_api_authentication_goto_login_fields_xecurify'); ?>			
            <input type="email" name="username" value="<?php echo esc_attr( get_option( 'mo_api_authentication_admin_email' ) ); ?>"/>
            <input type="text" name="redirectUrl"
                   value="<?php echo esc_attr( get_option( 'host_name' ) ) . '/moas/initializepayment'; ?>"/>
            <input type="text" name="requestOrigin" id="requestOrigin"/>
        </form>
        <form style="display:none;" id="viewlicensekeys"
              action="<?php echo esc_attr( get_option( 'host_name' ) ) . '/moas/login'; ?>"
              target="_blank" method="post">
			<?php wp_nonce_field('mo_api_authentication_goto_license_keys','mo_api_authentication_goto_license_keys_fields_xecurify'); ?>			
            <input type="email" name="username" value="<?php echo esc_attr( get_option( 'mo_api_authentication_admin_email' ) ); ?>"/>
            <input type="text" name="redirectUrl"
                   value="<?php echo esc_attr( get_option( 'host_name' ) ) . '/moas/viewlicensekeys'; ?>"/>
        </form>
        <!-- End Important JSForms -->
        <script>
        function mo_show_popup_feature(popup_id){
            document.getElementById(popup_id).style.visibility = "visible";
            document.getElementById(popup_id).style.opacity = "1";
        }
        function mo_hide_popup_feature(popup_id){
            document.getElementById(popup_id).style.opacity = "0";
            document.getElementById(popup_id).style.visibility = "hidden";
        }
        </script>

        <section class="popup-overlay">

        <!-- API Key  -->
          <div id="api-key-authentication" class="mo_api_auth_overlay">
            <div class="mo_api_auth_popup">
              <a href="#" onclick="mo_hide_popup_feature('api-key-authentication')" class="close-btn"></a>
              <br>
              <div class="container">
                  <h2 class="popup-title">API Key Authentication Method</h2>
                  <!-- <hr class="popup-divider"> -->
                  <ul>
                    <li class="mo-api-license-li feature-item">
                        API Key Authentication Method
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Unlimited API Authentication
                    </li>
                    <li class="mo-api-license-li feature-item">
                        User specific API keys (Access to only specific user data)
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Restrict Public Access to WP REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Support for GET, POST, PUT & DELETE methods
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Role based Access to APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Header
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Exclude REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        24/7* Basic Email Support System
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        Basic Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        JWT Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        OAuth 2.0 Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        Authentication from external OAuth 2.0 providers
                    </li>
                </ul>
              </div>
          </div>
        </div>

          <!-- Basic Auth  -->
          <div id="basic-authentication" class="mo_api_auth_overlay">
            <div class="mo_api_auth_popup">
              <a href="#" onclick="mo_hide_popup_feature('basic-authentication')" class="close-btn"></a>
              <br>
              <div class="container">
                  <h2 class="popup-title">Basic Authentication Method</h2>
                  <!-- <hr class="popup-divider"> -->
                  <ul>
                    <li class="mo-api-license-li feature-item">
                        Advanced Basic Authentication Method<br>
                        1. Username : Password <br>
                        2. Client ID : Client Secret <br>
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Unlimited API Authentication
                    </li>
                    <li class="mo-api-license-li feature-item">
                        User specific Client Credentials (Access to only specific user data)
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Authentication using Client Credentials (Without involving original user login credentials)
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Restrict Public Access to WP REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Support for GET, POST, PUT & DELETE methods
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Role based Access to APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Encryption through highly secure HMAC
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Header
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Exclude REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        24/7* Basic Email Support System
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        API Key Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        JWT Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        OAuth 2.0 Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        Authentication from external OAuth 2.0 providers
                    </li>
                </ul>
              </div>
          </div>
        </div>

          <!-- JWT Auth  -->
          <div id="jwt-authentication" class="mo_api_auth_overlay">
            <div class="mo_api_auth_popup">
              <a href="#" onclick="mo_hide_popup_feature('jwt-authentication')" class="close-btn"></a>
              <br>
              <div class="container">
                  <h2 class="popup-title">JWT Authentication Method</h2>
                  <!-- <hr class="popup-divider"> -->
                  <ul>
                    <li class="mo-api-license-li feature-item">
                        JWT Authentication Method
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Unlimited API Authentication
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Signature Validation : HSA & RSA Signing (Very High Security)
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Token Expiry (<span style="font-weight: bold;"><small>It will help you to make JWT token available to limited time period to improve security</small></span>)
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Certificate / Secret upload
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Restrict Public Access to WP REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Support for GET, POST, PUT & DELETE methods
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Role based Access to APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Header
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Exclude REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        24/7* Basic Email Support System
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        API Key Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        Basic Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        OAuth 2.0 Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        Authentication from external OAuth 2.0 providers
                    </li>
                </ul>
              </div>
          </div>
        </div>

        <!-- Oauth 2.0  -->
        <div id="oauth-authentication" class="mo_api_auth_overlay">
            <div class="mo_api_auth_popup">
              <a href="#" onclick="mo_hide_popup_feature('oauth-authentication')" class="close-btn"></a>
              <br>
              <div class="container">
                  <h2 class="popup-title">OAuth 2.0 Authentication Method</h2>
                  <!-- <hr class="popup-divider"> -->
                  <ul>
                    <li class="mo-api-license-li feature-item">
                        OAuth 2.0 Authentication Method<br>
                        1. Password Grant <br>
                        2. Client Credentials Grant <br>
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Unlimited API Authentication
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Access Token & JWT Token support
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Refresh & Revoke Tokens
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Restrict Public Access to WP REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Support for GET, POST, PUT & DELETE methods
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Role based Access to APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Token Expiry 
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Header
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Exclude REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        24/7* Basic Email Support System
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        API Key Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        Basic Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        JWT Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        Authentication from external OAuth 2.0 providers
                    </li>
                </ul>
              </div>
          </div>
        </div>

        <!-- Authentication from an external providers  -->
        <div id="oauth-external-providers-authentication" class="mo_api_auth_overlay">
            <div class="mo_api_auth_popup">
              <a href="#" onclick="mo_hide_popup_feature('oauth-external-providers-authentication')" class="close-btn"></a>
              <br>
              <div class="container">
                  <h2 class="popup-title">Authentication From External OAuth 2.0 Providers</h2>
                  <!-- <hr class="popup-divider"> -->
                  <ul>
                    <li class="mo-api-license-li feature-item">
                        Authentication from external OAuth 2.0 providers <br>(Like Azure, Cognito, Firebase Access Token, Google, Facebook, Keycloak, ADFS etc.) [One at a time]
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Restrict Public Access to WP REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Support for GET, POST, PUT & DELETE methods
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Auto Create Users into WordPress on basis of external OAuth/OIDC providers token
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Role based Access to APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Header
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Exclude REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        24/7* Basic Email Support System
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        API Key Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        Basic Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        JWT Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        OAuth 2.0 Authentication Method
                    </li>
                </ul>
              </div>
          </div>
        </div>

        <!-- OAuth 2.0 + Third Party Auth  -->
        <div id="external-authentication" class="mo_api_auth_overlay">
            <div class="mo_api_auth_popup">
              <a href="#" onclick="mo_hide_popup_feature('external-authentication')" class="close-btn"></a>
              <br>
              <div class="container">
                  <h2 class="popup-title">Authentication From External Providers</h2>
                  <!-- <hr class="popup-divider"> -->
                  <ul>
                    <li class="mo-api-license-li feature-item">
                        Authentication from External Providers which doesn't support any standard (Like Validate from SAML response)
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Unlimited API Authentication
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Restrict Public Access to WP REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Support for GET, POST, PUT & DELETE methods
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Role based Access to APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Token Expiry
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Header
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Exclude REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        24/7* Basic Email Support System
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        API Key Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        Basic Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        JWT Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        OAuth 2.0 Authentication Method
                    </li>
                </ul>
              </div>
          </div>
        </div>

        <!-- Protecting 3rd party plugin or custom APIs  -->
        <div id="protecting-third-party-plugin-authentication" class="mo_api_auth_overlay">
            <div class="mo_api_auth_popup">
              <a href="#" onclick="mo_hide_popup_feature('protecting-third-party-plugin-authentication')" class="close-btn"></a>
              <br>
              <div class="container">
                  <h2 class="popup-title">Protecting 3rd Party Plugin or Custom APIs</h2>
                  <!-- <hr class="popup-divider"> -->
                  <ul>
                    <li class="mo-api-license-li feature-item">
                        Protecting 3rd party plugin or custom APIs (One provider at a time) <br>
                        1. WooCommerce<br>
                        2. BuddyPress<br>
                        3. Gravity Form<br>
                        4. Learndash API Endpoints<br>
                        5. Custom built REST Endpoints in WordPress
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Unlimited API Authentication
                    </li>
                    <li class="mo-api-license-li feature-item">
                        API Key Authentication Method
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Basic Authentication Method
                    </li>
                    <li class="mo-api-license-li feature-item">
                        JWT Authentication Method
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Restrict Public Access to WP REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Support for GET, POST, PUT & DELETE methods
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Role based Access to APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Token Expiry
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Header
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Exclude REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        24/7* Basic Email Support System
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        OAuth 2.0 Authentication Method
                    </li>
                    <li class="mo-api-license-li unsupported-item">
                        Authentication from external OAuth 2.0 providers
                    </li>
                </ul>
              </div>
          </div>
        </div>

        <!-- All Inclusive  -->
        <div id="all-inclusive" class="mo_api_auth_overlay">
            <div class="mo_api_auth_popup">
            <a href="#" onclick="mo_hide_popup_feature('all-inclusive')" class="close-btn"></a>
              <br>
              <div class="container">
                  <h2 class="popup-title">All Inclusive Plan</h2>
                  <!-- <hr class="popup-divider"> -->
                  <ul>
                    <li class="mo-api-license-li feature-item">
                        All Authentication method (One at a time)<br>
                        1. API Key Authentication<br>
                        2. Basic Authentication<br>
                        3. JWT Authentication<br>
                        4. OAuth 2.0 Authentication<br>
                        5. Authentication from external OAuth 2.0 providers [One at a time]<br>
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Protecting 3rd party plugin or custom APIs (One provider at a time) <br>
                        1. WooCommerce<br>
                        2. BuddyPress<br>
                        3. Gravity Form<br>
                        4. Learndash API Endpoints<br>
                        5. Custom built REST Endpoints in WordPress
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Unlimited API Authentication
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Restrict Public Access to WP REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Support for GET, POST, PUT & DELETE methods
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Role based Access to APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Token Expiry
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Custom Header
                    </li>
                    <li class="mo-api-license-li feature-item">
                        Exclude REST APIs
                    </li>
                    <li class="mo-api-license-li feature-item">
                        24/7* Basic Email Support System
                    </li>
                </ul>
              </div>
          </div>
        </div>

        <!-- Contact Form  -->
        <div id="contact-form" class="mo_api_auth_overlay">
            <div class="mo_api_auth_popup">
            <a href="#" onclick="mo_hide_popup_feature('contact-form')" class="close-btn"></a>
              <br>
              <div class="container">
                  <h2 class="popup-title">Request a quote</h2>
                  <!-- <hr class="popup-divider"> -->
                  <p class="mo_api_auth_popup_text">Drop your requirements here, we'd be happy to help you!!</p>
                  <div class="row">
                    <form method="post" action="">
                        <input required type="hidden" name="option" value="mo_api_authentication_license_contact_form" />
                        <?php wp_nonce_field('mo_api_authentication_license_contact_form','mo_api_authentication_license_contact_fields'); ?>
                        <input type="hidden">
                        <input name="email" type="email" id="input-email" placeholder="Email address" required>
                        <input type="tel" name="phone" id="input-phone" placeholder="Phone no." required>
                        <textarea name="query" type="text" id="input-message" placeholder="Enter your external provider with you use-case" required></textarea>
                        <input type="submit" value="Submit" id="input-submit">
                    </form>
                  </div>
              </div>
          </div>
        </div>

          </section>

        <!-- Licensing Table -->
        <div class="mo_api_auth_container_customize">
            <div style="margin-right:20px" class="row">

                <!-- API Key  -->
                <div class="col-xs-12 col-lg-3">
                <div class="card text-xs-center">
                    <div class="card-header">
                    <h3 class="mo_api_auth_display_2"><span class="mo_api_auth_currency">$</span>149<sup style="color: #e0d8d7">*</sup></h3>
                    </div>
                    <div class="mo_api_auth_plan_line"></div>
                    <div class="card-block">
                    <h4 class="card-title"> 
                        API Key Authentication <br> Method
                    </h4>
                    <!-- <ul class="list-group">
                        <li class="list-group-item">Ultimate Features</li>
                        <li class="list-group-item">Responsive Ready</li>
                        <li class="list-group-item">Visual Composer Included</li>
                        <li class="list-group-item">24/7 Support System</li>
                    </ul> --> 
                    <button onclick="upgradeform('wp_rest_api_authentication_custom_api_key_plan')" class="mo_api_auth_btn_upgrade">Upgrade now</button><br>
                    <button onclick="mo_show_popup_feature('api-key-authentication')" class="mo_api_auth_circle_wrapper"><i class="fa fa-plus fa-2x"></i></button>
                    </div>
                </div>
                </div>

                <!-- Basic Auth  -->
                <div class="col-xs-12 col-lg-3">
                <div class="card text-xs-center">
                    <div class="card-header">
                    <h3 class="mo_api_auth_display_2"><span class="mo_api_auth_currency">$</span>149<sup style="color: #e0d8d7">*</sup></h3>
                    </div>
                    <div class="mo_api_auth_plan_line"></div>
                    <div class="card-block">
                    <h4 class="card-title"> 
                        Basic Authentication <br> Method
                    </h4>
                    <button onclick="upgradeform('wp_rest_api_authentication_custom_basic_auth_plan')" class="mo_api_auth_btn_upgrade">Upgrade now</button><br>
                    <button onclick="mo_show_popup_feature('basic-authentication')" class="mo_api_auth_circle_wrapper"><i class="fa fa-plus fa-2x"></i></button>
                    </div>
                </div>
                </div>

                <!-- JWT Auth  -->
                <div class="col-xs-12 col-lg-3">
                <div class="card text-xs-center">
                    <div class="card-header">
                    <h3 class="mo_api_auth_display_2"><span class="mo_api_auth_currency">$</span>199<sup style="color: #e0d8d7">*</sup></h3>
                    </div>
                    <div class="mo_api_auth_plan_line"></div>
                    <div class="card-block">
                    <h4 class="card-title"> 
                        JWT Authentication <br> Method
                    </h4>
                    
                    <button onclick="upgradeform('wp_rest_api_authentication_custom_jwt_plan')" class="mo_api_auth_btn_upgrade">Upgrade now</button><br>
                    <button onclick="mo_show_popup_feature('jwt-authentication')" class="mo_api_auth_circle_wrapper"><i class="fa fa-plus fa-2x"></i></button>
                    </div>
                </div>
                </div>

                <div class="col-xs-12 col-lg-3">

                <div class="card text-xs-center" >
                <div style="width:9em" class="mo_api_auth_popular">Most secure</div>
                    <div class="card-header" >
                    <h3 class="mo_api_auth_display_2"><span class="mo_api_auth_currency">$</span>249<sup style="color: #e0d8d7">*</sup></h3>
                    </div>
                    <div class="mo_api_auth_plan_line"></div>
                    <div class="card-block">
                    <h4 class="card-title"> 
                        OAuth 2.0 Authentication <br> Method 
                    </h4>
                    
                    <button onclick="upgradeform('wp_rest_api_authentication_custom_oauth_auth_plan')" class="mo_api_auth_btn_upgrade">Upgrade now</button><br>
                    <button onclick="mo_show_popup_feature('oauth-authentication')" class="mo_api_auth_circle_wrapper"><i class="fa fa-plus fa-2x"></i></button>
                    </div>
                </div>
                </div>

            </div>
            <br>
            <div style="margin-left:100px;margin-right:100px" class="row">

                <!-- OAuth 2.0 Auth  -->

                <!-- Third Party Auth  -->
                <div class="col-xs-12 col-lg-4">
                <div class="card text-xs-center" >
                    <!-- <div class="" style="color:white">asd</div> -->
                  
                    <div class="card-header">
                    <h3 class="mo_api_auth_display_2"><span class="mo_api_auth_currency">$</span>349<sup style="color: #e0d8d7">*</sup></h3>
                    </div>
                    <div class="mo_api_auth_plan_line"></div>
                    <div class="card-block">
                    <h4 class="card-title"> 
                        Authentication From External<br> OAuth 2.0 Providers
                    </h4>

                    <button onclick="upgradeform('wp_rest_api_authentication_from_external_oauth_provider_plan')" class="mo_api_auth_btn_upgrade">Upgrade now</button><br>
                    <button onclick="mo_show_popup_feature('oauth-external-providers-authentication')" class="mo_api_auth_circle_wrapper"><i class="fa fa-plus fa-2x"></i></button>
                    </div>
                </div>
                </div>

                <!-- OAuth 2.0 + Third Party Auth  -->
                <div class="col-xs-12 col-lg-4">
                <div class="card text-xs-center">
            
                    <div class="card-header">
                    <h3 class="mo_api_auth_display_2"><span class="mo_api_auth_currency">$</span>399<sup style="color: #e0d8d7">*</sup></h3>
                    </div>
                    <div class="mo_api_auth_plan_line"></div>
                    <div class="card-block">
                    <h4 class="card-title"> 
                        Protecting 3rd Party Plugin or <br> Custom APIs 
                    </h4>
                    
                    <button onclick="upgradeform('wp_rest_api_authentication_custom_apis_plan')" class="mo_api_auth_btn_upgrade">Upgrade now</button><br>
                    <button onclick="mo_show_popup_feature('protecting-third-party-plugin-authentication')" class="mo_api_auth_circle_wrapper"><i class="fa fa-plus fa-2x"></i></button>
                    </div>
                </div>
                </div>

                <div class="col-xs-12 col-lg-4">
                <div class="card text-xs-center">
                    <div class="mo_api_auth_popular">Popular</div>
                    <div class="card-header">
                    <h3 class="mo_api_auth_display_2"><span class="mo_api_auth_currency">$</span>449<sup style="color: #e0d8d7">*</sup></h3>
                    </div>
                    <div class="mo_api_auth_plan_line"></div>
                    <div class="card-block">
                    <h4 class="card-title"> 
                        All Inclusive Plan
                    </h4>
                    
                    <br>
                    <button onclick="upgradeform('wp_rest_api_authentication_enterprise_plan')" class="mo_api_auth_btn_upgrade">Upgrade now</button><br>
                    <button onclick="mo_show_popup_feature('all-inclusive')" class="mo_api_auth_circle_wrapper"><i class="fa fa-plus fa-2x"></i></button>
                    </div>
                </div>
                </div>

            </div>
            <br>
    
            <div style="margin-left: 0px;margin-right: 30px;" class="row">
                <div class="mo_api_authentication_support_layout" style="padding-left: 20px;">
                    <br>
                <h4 class="mo-oauth-h2" style="text-align: center;">LICENSING POLICY</h4>
                       <!--  <hr style="background-color:#17a2b8; width: 10%;height: 3px;border-width: 3px;"> -->
                        
                        <p style="font-size: 0.9em;"><span style="color: red;">*</span>Cost applicable for one instance only. Licenses are perpetual and the Support Plan includes 12 months of maintenance (support and version updates). You can renew maintenance after 12 months at 50% of the current license cost.<br></p>

                        <p style="font-size: 0.9em;"><span style="color: red;">*</span>We provide deep discounts on bulk license purchases and pre-production environment licenses. As the no. of licenses increases, the discount percentage also increases. Contact us at <a href="mailto:apisupport@xecurify.com?subject=WP REST API Authentication Plugin - Enquiry">apisupport@xecurify.com</a> for more information.</p>

                        <p style="font-size: 0.9em;"><span style="color: red;">*</span><strong>MultiSite Network Support : </strong>
                            There is an additional cost for the number of subsites in Multisite Network. The Multisite licenses are based on the <b>total number of subsites</b> in your WordPress Network.
                            <br>
                            <br>
                            <strong>Note</strong> : All the data remains within your premises/server. We do not provide the developer license for our paid plugins and the source code is protected. It is strictly prohibited to make any changes in the code without having written permission from miniOrange. There are hooks provided in the plugin which can be used by the developers to extend the plugin's functionality.
                            <br>
                            <br>
                        At miniOrange, we want to ensure you are 100% happy with your purchase. If the premium plugin you purchased is not working as advertised and you've attempted to resolve any issues with our support team, which couldn't get resolved. Please email us at <a href="mailto:info@xecurify.com" target="_blank">info@xecurify.com</a> for any queries regarding the return policy.</p>
           <br>
        </div>
        <br>
            </div>
            
        </div>
        <!-- End Licensing Table -->
        <a  id="mobacktoaccountsetup" style="display:none;" href="<?php echo esc_html( add_query_arg( array( 'tab' => 'account' ), htmlentities( $_SERVER['REQUEST_URI'] ) ) ); ?>">Back</a>
        
        <!-- JSForms Controllers -->
        <script>

            function customplanupgrade() {
                planType = document.getElementById('wp-rest-api-custom-plan-select').value;
                upgradeform(planType);
            }

            function upgradeform(planType) {
                if(planType === "") {
                    location.href = "https://wordpress.org/plugins/wp-rest-api-authentication/";
                    return;
                } else {
                    jQuery('#requestOrigin').val(planType);
                    if(jQuery('#mo_customer_registered').val()==1)
                        jQuery('#loginform').submit();
                    else{
                        location.href = jQuery('#mobacktoaccountsetup').attr('href');
                    }
                }

            }

            function getlicensekeys() {
                // if(jQuery('#mo_customer_registered').val()==1)
                jQuery('#viewlicensekeys').submit();
            }
        </script>
        <!-- End JSForms Controllers -->
        <?php
    }
}