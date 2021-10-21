<?php

/* extension/payment/cardconnect.twig */
class __TwigTemplate_5573d1c029e32f4922357163f2d43785e494c5e03da0cce7b941d6b5620c2a06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\" id=\"li-tab-settings\"><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_settings"]) ? $context["tab_settings"] : null);
        echo "</a></li>
            <li class=\"\" id=\"li-tab-order-status\"><a href=\"#tab-order-status\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_order_status"]) ? $context["tab_order_status"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-settings\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-merchant-id\"><span data-toggle=\"tooltip\" title=\"";
        // line 39
        echo (isset($context["help_merchant_id"]) ? $context["help_merchant_id"] : null);
        echo "\">";
        echo (isset($context["entry_merchant_id"]) ? $context["entry_merchant_id"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_cardconnect_merchant_id\" value=\"";
        // line 41
        echo (isset($context["payment_cardconnect_merchant_id"]) ? $context["payment_cardconnect_merchant_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_merchant_id"]) ? $context["entry_merchant_id"] : null);
        echo "\" id=\"input-cardconnect-merchant-id\" class=\"form-control\" />
                  ";
        // line 42
        if ((isset($context["error_payment_cardconnect_merchant_id"]) ? $context["error_payment_cardconnect_merchant_id"] : null)) {
            // line 43
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_payment_cardconnect_merchant_id"]) ? $context["error_payment_cardconnect_merchant_id"] : null);
            echo "</div>
                  ";
        }
        // line 44
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-api-username\"><span data-toggle=\"tooltip\" title=\"";
        // line 47
        echo (isset($context["help_api_username"]) ? $context["help_api_username"] : null);
        echo "\">";
        echo (isset($context["entry_api_username"]) ? $context["entry_api_username"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"cardconnect_api_username\" value=\"";
        // line 49
        echo (isset($context["cardconnect_api_username"]) ? $context["cardconnect_api_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_api_username"]) ? $context["entry_api_username"] : null);
        echo "\" id=\"input-cardconnect-api-username\" class=\"form-control\" />
                  ";
        // line 50
        if ((isset($context["error_cardconnect_api_username"]) ? $context["error_cardconnect_api_username"] : null)) {
            // line 51
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_cardconnect_api_username"]) ? $context["error_cardconnect_api_username"] : null);
            echo "</div>
                  ";
        }
        // line 52
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-api-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 55
        echo (isset($context["help_api_password"]) ? $context["help_api_password"] : null);
        echo "\">";
        echo (isset($context["entry_api_password"]) ? $context["entry_api_password"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"cardconnect_api_password\" value=\"";
        // line 57
        echo (isset($context["cardconnect_api_password"]) ? $context["cardconnect_api_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_api_password"]) ? $context["entry_api_password"] : null);
        echo "\" id=\"input-cardconnect-api-password\" class=\"form-control\" />
                  ";
        // line 58
        if ((isset($context["error_cardconnect_api_password"]) ? $context["error_cardconnect_api_password"] : null)) {
            // line 59
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_cardconnect_api_password"]) ? $context["error_cardconnect_api_password"] : null);
            echo "</div>
                  ";
        }
        // line 60
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-token\"><span data-toggle=\"tooltip\" title=\"";
        // line 63
        echo (isset($context["help_token"]) ? $context["help_token"] : null);
        echo "\">";
        echo (isset($context["entry_token"]) ? $context["entry_token"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"cardconnect_token\" value=\"";
        // line 65
        echo (isset($context["cardconnect_token"]) ? $context["cardconnect_token"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_token"]) ? $context["entry_token"] : null);
        echo "\" id=\"input-cardconnect-token\" class=\"form-control\" />
                  ";
        // line 66
        if ((isset($context["error_cardconnect_token"]) ? $context["error_cardconnect_token"] : null)) {
            // line 67
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_cardconnect_token"]) ? $context["error_cardconnect_token"] : null);
            echo "</div>
                  ";
        }
        // line 68
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-transaction\"><span data-toggle=\"tooltip\" title=\"";
        // line 71
        echo (isset($context["help_transaction"]) ? $context["help_transaction"] : null);
        echo "\">";
        echo (isset($context["entry_transaction"]) ? $context["entry_transaction"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"cardconnect_transaction\" id=\"input-cardconnect-transaction\" class=\"form-control\">
                    
                    ";
        // line 75
        if (((isset($context["cardconnect_transaction"]) ? $context["cardconnect_transaction"] : null) == "payment")) {
            // line 76
            echo "                    
                    <option value=\"payment\" selected=\"selected\">";
            // line 77
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                    
                    ";
        } else {
            // line 80
            echo "                    
                    <option value=\"payment\">";
            // line 81
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                    
                    ";
        }
        // line 84
        echo "                    ";
        if (((isset($context["cardconnect_transaction"]) ? $context["cardconnect_transaction"] : null) == "authorize")) {
            // line 85
            echo "                    
                    <option value=\"authorize\" selected=\"selected\">";
            // line 86
            echo (isset($context["text_authorize"]) ? $context["text_authorize"] : null);
            echo "</option>
                    
                    ";
        } else {
            // line 89
            echo "                    
                    <option value=\"authorize\">";
            // line 90
            echo (isset($context["text_authorize"]) ? $context["text_authorize"] : null);
            echo "</option>
                    
                    ";
        }
        // line 93
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-site\"><span data-toggle=\"tooltip\" title=\"";
        // line 98
        echo (isset($context["help_site"]) ? $context["help_site"] : null);
        echo "\">";
        echo (isset($context["entry_site"]) ? $context["entry_site"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"cardconnect_site\" value=\"";
        // line 100
        echo (isset($context["cardconnect_site"]) ? $context["cardconnect_site"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_site"]) ? $context["entry_site"] : null);
        echo "\" id=\"input-cardconnect-site\" class=\"form-control\" />
                  ";
        // line 101
        if ((isset($context["error_cardconnect_site"]) ? $context["error_cardconnect_site"] : null)) {
            // line 102
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_cardconnect_site"]) ? $context["error_cardconnect_site"] : null);
            echo "</div>
                  ";
        }
        // line 103
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-environment\">";
        // line 106
        echo (isset($context["entry_environment"]) ? $context["entry_environment"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"cardconnect_environment\" id=\"input-cardconnect-environment\" class=\"form-control\">
                    
                    ";
        // line 110
        if (((isset($context["cardconnect_environment"]) ? $context["cardconnect_environment"] : null) == "live")) {
            // line 111
            echo "                    
                    <option value=\"live\" selected=\"selected\">";
            // line 112
            echo (isset($context["text_live"]) ? $context["text_live"] : null);
            echo "</option>
                    
                    ";
        } else {
            // line 115
            echo "                    
                    <option value=\"live\">";
            // line 116
            echo (isset($context["text_live"]) ? $context["text_live"] : null);
            echo "</option>
                    
                    ";
        }
        // line 119
        echo "                    ";
        if (((isset($context["cardconnect_environment"]) ? $context["cardconnect_environment"] : null) == "test")) {
            // line 120
            echo "                    
                    <option value=\"test\" selected=\"selected\">";
            // line 121
            echo (isset($context["text_test"]) ? $context["text_test"] : null);
            echo "</option>
                    
                    ";
        } else {
            // line 124
            echo "                    
                    <option value=\"test\">";
            // line 125
            echo (isset($context["text_test"]) ? $context["text_test"] : null);
            echo "</option>
                    
                    ";
        }
        // line 128
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-store-cards\"><span data-toggle=\"tooltip\" title=\"";
        // line 133
        echo (isset($context["help_store_cards"]) ? $context["help_store_cards"] : null);
        echo "\">";
        echo (isset($context["entry_store_cards"]) ? $context["entry_store_cards"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"cardconnect_store_cards\" id=\"input-cardconnect-store-cards\" class=\"form-control\">
                    
                    ";
        // line 137
        if ((isset($context["cardconnect_store_cards"]) ? $context["cardconnect_store_cards"] : null)) {
            // line 138
            echo "                      
                    <option value=\"1\" selected=\"selected\">";
            // line 139
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 140
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    
                    ";
        } else {
            // line 143
            echo "                      
                    <option value=\"1\">";
            // line 144
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 145
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    
                    ";
        }
        // line 148
        echo "\t\t\t      
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-echeck\"><span data-toggle=\"tooltip\" title=\"";
        // line 153
        echo (isset($context["help_echeck"]) ? $context["help_echeck"] : null);
        echo "\">";
        echo (isset($context["entry_echeck"]) ? $context["entry_echeck"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"cardconnect_echeck\" id=\"input-cardconnect-echeck\" class=\"form-control\">
                    
                    ";
        // line 157
        if ((isset($context["cardconnect_echeck"]) ? $context["cardconnect_echeck"] : null)) {
            // line 158
            echo "                      
                    <option value=\"1\" selected=\"selected\">";
            // line 159
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 160
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    
                    ";
        } else {
            // line 163
            echo "                      
                    <option value=\"1\">";
            // line 164
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 165
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    
                    ";
        }
        // line 168
        echo "\t\t\t      
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 173
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"cardconnect_total\" value=\"";
        // line 175
        echo (isset($context["cardconnect_total"]) ? $context["cardconnect_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-cardconnect-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-geo-zone\">";
        // line 179
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"cardconnect_geo_zone\" id=\"input-cardconnect-geo-zone\" class=\"form-control\">
                    <option value=\"0\">";
        // line 182
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                    
\t\t\t\t    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 185
            echo "                    ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["cardconnect_geo_zone"]) ? $context["cardconnect_geo_zone"] : null))) {
                // line 186
                echo "\t\t\t\t        
                    <option value=\"";
                // line 187
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                    
\t\t\t\t\t  ";
            } else {
                // line 190
                echo "\t\t\t\t        
                    <option value=\"";
                // line 191
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                    
    \t\t\t      ";
            }
            // line 194
            echo "\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "\t\t\t\t  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-status\">";
        // line 200
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"cardconnect_status\" id=\"input-cardconnect-status\" class=\"form-control\">
                    
                    ";
        // line 204
        if ((isset($context["cardconnect_status"]) ? $context["cardconnect_status"] : null)) {
            // line 205
            echo "                      
                    <option value=\"1\" selected=\"selected\">";
            // line 206
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 207
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    
                    ";
        } else {
            // line 210
            echo "                      
                    <option value=\"1\">";
            // line 211
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 212
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    
                    ";
        }
        // line 215
        echo "\t\t\t      
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-logging\"><span data-toggle=\"tooltip\" title=\"";
        // line 220
        echo (isset($context["help_logging"]) ? $context["help_logging"] : null);
        echo "\">";
        echo (isset($context["entry_logging"]) ? $context["entry_logging"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"cardconnect_logging\" id=\"input-cardconnect-logging\" class=\"form-control\">
                    
                    ";
        // line 224
        if ((isset($context["cardconnect_logging"]) ? $context["cardconnect_logging"] : null)) {
            // line 225
            echo "                      
                    <option value=\"1\" selected=\"selected\">";
            // line 226
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 227
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    
                    ";
        } else {
            // line 230
            echo "                      
                    <option value=\"1\">";
            // line 231
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 232
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    
                    ";
        }
        // line 235
        echo "\t\t\t      
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-sort-order\">";
        // line 240
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"cardconnect_sort_order\" value=\"";
        // line 242
        echo (isset($context["cardconnect_sort_order"]) ? $context["cardconnect_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-cardconnect-sort-order\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-cron-url\"><span data-toggle=\"tooltip\" title=\"";
        // line 246
        echo (isset($context["help_cron_url"]) ? $context["help_cron_url"] : null);
        echo "\">";
        echo (isset($context["entry_cron_url"]) ? $context["entry_cron_url"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"cardconnect_cron_url\" value=\"";
        // line 248
        echo (isset($context["cardconnect_cron_url"]) ? $context["cardconnect_cron_url"] : null);
        echo "\" readonly placeholder=\"";
        echo (isset($context["entry_cron_url"]) ? $context["entry_cron_url"] : null);
        echo "\" id=\"input-cardconnect-cron-url\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-cron-time\"><span data-toggle=\"tooltip\" title=\"";
        // line 252
        echo (isset($context["help_cron_time"]) ? $context["help_cron_time"] : null);
        echo "\">";
        echo (isset($context["entry_cron_time"]) ? $context["entry_cron_time"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"cardconnect_cron_time\" value=\"";
        // line 254
        echo (isset($context["cardconnect_cron_time"]) ? $context["cardconnect_cron_time"] : null);
        echo "\" readonly disabled placeholder=\"";
        echo (isset($context["entry_cron_time"]) ? $context["entry_cron_time"] : null);
        echo "\" id=\"input-cardconnect-cron-time\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-order-status\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-order-status-pending\"><span data-toggle=\"tooltip\" title=\"";
        // line 260
        echo (isset($context["help_order_status_pending"]) ? $context["help_order_status_pending"] : null);
        echo "\">";
        echo (isset($context["entry_order_status_pending"]) ? $context["entry_order_status_pending"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"cardconnect_order_status_id_pending\" id=\"input-cardconnect-order-status-pending\" class=\"form-control\">
                    
                    ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 265
            echo "                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["cardconnect_order_status_id_pending"]) ? $context["cardconnect_order_status_id_pending"] : null))) {
                // line 266
                echo "                        
                    <option value=\"";
                // line 267
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    
                      ";
            } else {
                // line 270
                echo "                        
                    <option value=\"";
                // line 271
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    
                      ";
            }
            // line 274
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cardconnect-order-status-processing\"><span data-toggle=\"tooltip\" title=\"";
        // line 280
        echo (isset($context["help_order_status_processing"]) ? $context["help_order_status_processing"] : null);
        echo "\">";
        echo (isset($context["entry_order_status_processing"]) ? $context["entry_order_status_processing"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"cardconnect_order_status_id_processing\" id=\"input-cardconnect-order-status-processing\" class=\"form-control\">
                    
                    ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 285
            echo "                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["cardconnect_order_status_id_processing"]) ? $context["cardconnect_order_status_id_processing"] : null))) {
                // line 286
                echo "                        
                    <option value=\"";
                // line 287
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    
                      ";
            } else {
                // line 290
                echo "                        
                    <option value=\"";
                // line 291
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    
                      ";
            }
            // line 294
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        echo "                  
                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 306
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/cardconnect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  752 => 306,  739 => 295,  733 => 294,  725 => 291,  722 => 290,  714 => 287,  711 => 286,  708 => 285,  704 => 284,  695 => 280,  688 => 275,  682 => 274,  674 => 271,  671 => 270,  663 => 267,  660 => 266,  657 => 265,  653 => 264,  644 => 260,  633 => 254,  626 => 252,  617 => 248,  610 => 246,  601 => 242,  596 => 240,  589 => 235,  583 => 232,  579 => 231,  576 => 230,  570 => 227,  566 => 226,  563 => 225,  561 => 224,  552 => 220,  545 => 215,  539 => 212,  535 => 211,  532 => 210,  526 => 207,  522 => 206,  519 => 205,  517 => 204,  510 => 200,  503 => 195,  497 => 194,  489 => 191,  486 => 190,  478 => 187,  475 => 186,  472 => 185,  468 => 184,  463 => 182,  457 => 179,  448 => 175,  441 => 173,  434 => 168,  428 => 165,  424 => 164,  421 => 163,  415 => 160,  411 => 159,  408 => 158,  406 => 157,  397 => 153,  390 => 148,  384 => 145,  380 => 144,  377 => 143,  371 => 140,  367 => 139,  364 => 138,  362 => 137,  353 => 133,  346 => 128,  340 => 125,  337 => 124,  331 => 121,  328 => 120,  325 => 119,  319 => 116,  316 => 115,  310 => 112,  307 => 111,  305 => 110,  298 => 106,  293 => 103,  287 => 102,  285 => 101,  279 => 100,  272 => 98,  265 => 93,  259 => 90,  256 => 89,  250 => 86,  247 => 85,  244 => 84,  238 => 81,  235 => 80,  229 => 77,  226 => 76,  224 => 75,  215 => 71,  210 => 68,  204 => 67,  202 => 66,  196 => 65,  189 => 63,  184 => 60,  178 => 59,  176 => 58,  170 => 57,  163 => 55,  158 => 52,  152 => 51,  150 => 50,  144 => 49,  137 => 47,  132 => 44,  126 => 43,  124 => 42,  118 => 41,  111 => 39,  103 => 34,  99 => 33,  94 => 31,  88 => 28,  84 => 26,  76 => 22,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-payment" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-payment" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active" id="li-tab-settings"><a href="#tab-settings" data-toggle="tab">{{ tab_settings }}</a></li>*/
/*             <li class="" id="li-tab-order-status"><a href="#tab-order-status" data-toggle="tab">{{ tab_order_status }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-settings">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-merchant-id"><span data-toggle="tooltip" title="{{ help_merchant_id }}">{{ entry_merchant_id }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="payment_cardconnect_merchant_id" value="{{ payment_cardconnect_merchant_id }}" placeholder="{{ entry_merchant_id }}" id="input-cardconnect-merchant-id" class="form-control" />*/
/*                   {% if error_payment_cardconnect_merchant_id %}*/
/*                   <div class="text-danger">{{ error_payment_cardconnect_merchant_id }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-api-username"><span data-toggle="tooltip" title="{{ help_api_username }}">{{ entry_api_username }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="cardconnect_api_username" value="{{ cardconnect_api_username }}" placeholder="{{ entry_api_username }}" id="input-cardconnect-api-username" class="form-control" />*/
/*                   {% if error_cardconnect_api_username %}*/
/*                   <div class="text-danger">{{ error_cardconnect_api_username }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-api-password"><span data-toggle="tooltip" title="{{ help_api_password }}">{{ entry_api_password }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="cardconnect_api_password" value="{{ cardconnect_api_password }}" placeholder="{{ entry_api_password }}" id="input-cardconnect-api-password" class="form-control" />*/
/*                   {% if error_cardconnect_api_password %}*/
/*                   <div class="text-danger">{{ error_cardconnect_api_password }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-token"><span data-toggle="tooltip" title="{{ help_token }}">{{ entry_token }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="cardconnect_token" value="{{ cardconnect_token }}" placeholder="{{ entry_token }}" id="input-cardconnect-token" class="form-control" />*/
/*                   {% if error_cardconnect_token %}*/
/*                   <div class="text-danger">{{ error_cardconnect_token }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-transaction"><span data-toggle="tooltip" title="{{ help_transaction }}">{{ entry_transaction }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="cardconnect_transaction" id="input-cardconnect-transaction" class="form-control">*/
/*                     */
/*                     {% if cardconnect_transaction == 'payment' %}*/
/*                     */
/*                     <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="payment">{{ text_payment }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% if cardconnect_transaction == 'authorize' %}*/
/*                     */
/*                     <option value="authorize" selected="selected">{{ text_authorize }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="authorize">{{ text_authorize }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-site"><span data-toggle="tooltip" title="{{ help_site }}">{{ entry_site }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="cardconnect_site" value="{{ cardconnect_site }}" placeholder="{{ entry_site }}" id="input-cardconnect-site" class="form-control" />*/
/*                   {% if error_cardconnect_site %}*/
/*                   <div class="text-danger">{{ error_cardconnect_site }}</div>*/
/*                   {% endif %} </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-environment">{{ entry_environment }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="cardconnect_environment" id="input-cardconnect-environment" class="form-control">*/
/*                     */
/*                     {% if cardconnect_environment == 'live' %}*/
/*                     */
/*                     <option value="live" selected="selected">{{ text_live }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="live">{{ text_live }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                     {% if cardconnect_environment == 'test' %}*/
/*                     */
/*                     <option value="test" selected="selected">{{ text_test }}</option>*/
/*                     */
/*                     {% else %}*/
/*                     */
/*                     <option value="test">{{ text_test }}</option>*/
/*                     */
/*                     {% endif %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-store-cards"><span data-toggle="tooltip" title="{{ help_store_cards }}">{{ entry_store_cards }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="cardconnect_store_cards" id="input-cardconnect-store-cards" class="form-control">*/
/*                     */
/*                     {% if cardconnect_store_cards %}*/
/*                       */
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     */
/*                     {% else %}*/
/*                       */
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     */
/*                     {% endif %}*/
/* 			      */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-echeck"><span data-toggle="tooltip" title="{{ help_echeck }}">{{ entry_echeck }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="cardconnect_echeck" id="input-cardconnect-echeck" class="form-control">*/
/*                     */
/*                     {% if cardconnect_echeck %}*/
/*                       */
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     */
/*                     {% else %}*/
/*                       */
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     */
/*                     {% endif %}*/
/* 			      */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-total"><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="cardconnect_total" value="{{ cardconnect_total }}" placeholder="{{ entry_total }}" id="input-cardconnect-total" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-geo-zone">{{ entry_geo_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="cardconnect_geo_zone" id="input-cardconnect-geo-zone" class="form-control">*/
/*                     <option value="0">{{ text_all_zones }}</option>*/
/*                     */
/* 				    {% for geo_zone in geo_zones %}*/
/*                     {% if geo_zone.geo_zone_id == cardconnect_geo_zone %}*/
/* 				        */
/*                     <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                     */
/* 					  {% else %}*/
/* 				        */
/*                     <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                     */
/*     			      {% endif %}*/
/* 				    {% endfor %}*/
/* 				  */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="cardconnect_status" id="input-cardconnect-status" class="form-control">*/
/*                     */
/*                     {% if cardconnect_status %}*/
/*                       */
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     */
/*                     {% else %}*/
/*                       */
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     */
/*                     {% endif %}*/
/* 			      */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-logging"><span data-toggle="tooltip" title="{{ help_logging }}">{{ entry_logging }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="cardconnect_logging" id="input-cardconnect-logging" class="form-control">*/
/*                     */
/*                     {% if cardconnect_logging %}*/
/*                       */
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     */
/*                     {% else %}*/
/*                       */
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     */
/*                     {% endif %}*/
/* 			      */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-sort-order">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="cardconnect_sort_order" value="{{ cardconnect_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-cardconnect-sort-order" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-cron-url"><span data-toggle="tooltip" title="{{ help_cron_url }}">{{ entry_cron_url }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="cardconnect_cron_url" value="{{ cardconnect_cron_url }}" readonly placeholder="{{ entry_cron_url }}" id="input-cardconnect-cron-url" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-cron-time"><span data-toggle="tooltip" title="{{ help_cron_time }}">{{ entry_cron_time }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="cardconnect_cron_time" value="{{ cardconnect_cron_time }}" readonly disabled placeholder="{{ entry_cron_time }}" id="input-cardconnect-cron-time" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-order-status">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-order-status-pending"><span data-toggle="tooltip" title="{{ help_order_status_pending }}">{{ entry_order_status_pending }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="cardconnect_order_status_id_pending" id="input-cardconnect-order-status-pending" class="form-control">*/
/*                     */
/*                     {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == cardconnect_order_status_id_pending %}*/
/*                         */
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     */
/*                       {% else %}*/
/*                         */
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-cardconnect-order-status-processing"><span data-toggle="tooltip" title="{{ help_order_status_processing }}">{{ entry_order_status_processing }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="cardconnect_order_status_id_processing" id="input-cardconnect-order-status-processing" class="form-control">*/
/*                     */
/*                     {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == cardconnect_order_status_id_processing %}*/
/*                         */
/*                     <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     */
/*                       {% else %}*/
/*                         */
/*                     <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
