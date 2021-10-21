<?php

/* extension/shipping/ups.twig */
class __TwigTemplate_57fb6b442e0f12c006ee763156b4bb4ff8311fb89713bcb4f7131eaa70be4a77 extends Twig_Template
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
        <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-key\"><span data-toggle=\"tooltip\" title=\"";
        // line 29
        echo (isset($context["help_key"]) ? $context["help_key"] : null);
        echo "\">";
        echo (isset($context["entry_key"]) ? $context["entry_key"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_ups_key\" value=\"";
        // line 31
        echo (isset($context["shipping_ups_key"]) ? $context["shipping_ups_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_key"]) ? $context["entry_key"] : null);
        echo "\" id=\"input-key\" class=\"form-control\" />
              ";
        // line 32
        if ((isset($context["error_key"]) ? $context["error_key"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_key"]) ? $context["error_key"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-username\"><span data-toggle=\"tooltip\" title=\"";
        // line 38
        echo (isset($context["help_username"]) ? $context["help_username"] : null);
        echo "\">";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_ups_username\" value=\"";
        // line 40
        echo (isset($context["shipping_ups_username"]) ? $context["shipping_ups_username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "\" id=\"input-username\" class=\"form-control\" />
              ";
        // line 41
        if ((isset($context["error_username"]) ? $context["error_username"] : null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_username"]) ? $context["error_username"] : null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 47
        echo (isset($context["help_password"]) ? $context["help_password"] : null);
        echo "\">";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_ups_password\" value=\"";
        // line 49
        echo (isset($context["shipping_ups_password"]) ? $context["shipping_ups_password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 50
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 51
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
              ";
        }
        // line 53
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-pickup\"><span data-toggle=\"tooltip\" title=\"";
        // line 56
        echo (isset($context["help_pickup"]) ? $context["help_pickup"] : null);
        echo "\">";
        echo (isset($context["entry_pickup"]) ? $context["entry_pickup"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ups_pickup\" id=\"input-pickup\" class=\"form-control\">
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pickups"]) ? $context["pickups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pickup"]) {
            // line 60
            echo "                ";
            if (($this->getAttribute($context["pickup"], "value", array()) == (isset($context["shipping_ups_pickup"]) ? $context["shipping_ups_pickup"] : null))) {
                // line 61
                echo "                <option value=\"";
                echo $this->getAttribute($context["pickup"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["pickup"], "text", array());
                echo "</option>
                ";
            } else {
                // line 63
                echo "                <option value=\"";
                echo $this->getAttribute($context["pickup"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["pickup"], "text", array());
                echo "</option>
                ";
            }
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pickup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-packaging\"><span data-toggle=\"tooltip\" title=\"";
        // line 70
        echo (isset($context["help_packaging"]) ? $context["help_packaging"] : null);
        echo "\">";
        echo (isset($context["entry_packaging"]) ? $context["entry_packaging"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ups_packaging\" id=\"input-packaging\" class=\"form-control\">
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packages"]) ? $context["packages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 74
            echo "                ";
            if (($this->getAttribute($context["package"], "value", array()) == (isset($context["shipping_ups_packaging"]) ? $context["shipping_ups_packaging"] : null))) {
                // line 75
                echo "                <option value=\"";
                echo $this->getAttribute($context["package"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["package"], "text", array());
                echo "</option>
                ";
            } else {
                // line 77
                echo "                <option value=\"";
                echo $this->getAttribute($context["package"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["package"], "text", array());
                echo "</option>
                ";
            }
            // line 79
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-classification\"><span data-toggle=\"tooltip\" title=\"";
        // line 84
        echo (isset($context["help_classification"]) ? $context["help_classification"] : null);
        echo "\">";
        echo (isset($context["entry_classification"]) ? $context["entry_classification"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ups_classification\" id=\"input-classification\" class=\"form-control\">
                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classifications"]) ? $context["classifications"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["classification"]) {
            // line 88
            echo "                ";
            if (($this->getAttribute($context["classification"], "value", array()) == (isset($context["shipping_ups_classification"]) ? $context["shipping_ups_classification"] : null))) {
                // line 89
                echo "                <option value=\"";
                echo $this->getAttribute($context["classification"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["classification"], "text", array());
                echo "</option>
                ";
            } else {
                // line 91
                echo "                <option value=\"";
                echo $this->getAttribute($context["classification"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["classification"], "text", array());
                echo "</option>
                ";
            }
            // line 93
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-origin\"><span data-toggle=\"tooltip\" title=\"";
        // line 98
        echo (isset($context["help_origin"]) ? $context["help_origin"] : null);
        echo "\">";
        echo (isset($context["entry_origin"]) ? $context["entry_origin"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ups_origin\" id=\"input-origin\" class=\"form-control\">
                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["origins"]) ? $context["origins"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["origin"]) {
            // line 102
            echo "                ";
            if (($this->getAttribute($context["origin"], "value", array()) == (isset($context["shipping_ups_origin"]) ? $context["shipping_ups_origin"] : null))) {
                // line 103
                echo "                <option value=\"";
                echo $this->getAttribute($context["origin"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["origin"], "text", array());
                echo "</option>
                ";
            } else {
                // line 105
                echo "                <option value=\"";
                echo $this->getAttribute($context["origin"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["origin"], "text", array());
                echo "</option>
                ";
            }
            // line 107
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['origin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-city\"><span data-toggle=\"tooltip\" title=\"";
        // line 112
        echo (isset($context["help_city"]) ? $context["help_city"] : null);
        echo "\">";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_ups_city\" value=\"";
        // line 114
        echo (isset($context["shipping_ups_city"]) ? $context["shipping_ups_city"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-city\" class=\"form-control\" />
              ";
        // line 115
        if ((isset($context["error_city"]) ? $context["error_city"] : null)) {
            // line 116
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_city"]) ? $context["error_city"] : null);
            echo "</div>
              ";
        }
        // line 118
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-state\"><span data-toggle=\"tooltip\" title=\"";
        // line 121
        echo (isset($context["help_state"]) ? $context["help_state"] : null);
        echo "\">";
        echo (isset($context["entry_state"]) ? $context["entry_state"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_ups_state\" value=\"";
        // line 123
        echo (isset($context["shipping_ups_state"]) ? $context["shipping_ups_state"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_state"]) ? $context["entry_state"] : null);
        echo "\" id=\"input-state\" class=\"form-control\" maxlength=\"2\" />
              ";
        // line 124
        if ((isset($context["error_state"]) ? $context["error_state"] : null)) {
            // line 125
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_state"]) ? $context["error_state"] : null);
            echo "</div>
              ";
        }
        // line 127
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-country\"><span data-toggle=\"tooltip\" title=\"";
        // line 130
        echo (isset($context["help_country"]) ? $context["help_country"] : null);
        echo "\">";
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_ups_country\" value=\"";
        // line 132
        echo (isset($context["shipping_ups_country"]) ? $context["shipping_ups_country"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "\" id=\"input-country\" class=\"form-control\" maxlength=\"2\" />
              ";
        // line 133
        if ((isset($context["error_country"]) ? $context["error_country"] : null)) {
            // line 134
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_country"]) ? $context["error_country"] : null);
            echo "</div>
              ";
        }
        // line 136
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-postcode\"><span data-toggle=\"tooltip\" title=\"";
        // line 139
        echo (isset($context["help_postcode"]) ? $context["help_postcode"] : null);
        echo "\">";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_ups_postcode\" value=\"";
        // line 141
        echo (isset($context["shipping_ups_postcode"]) ? $context["shipping_ups_postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 145
        echo (isset($context["help_test"]) ? $context["help_test"] : null);
        echo "\">";
        echo (isset($context["entry_test"]) ? $context["entry_test"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 148
        if ((isset($context["shipping_ups_test"]) ? $context["shipping_ups_test"] : null)) {
            // line 149
            echo "                <input type=\"radio\" name=\"shipping_ups_test\" value=\"1\" checked=\"checked\" />
                ";
            // line 150
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 152
            echo "                <input type=\"radio\" name=\"shipping_ups_test\" value=\"1\" />
                ";
            // line 153
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        }
        // line 155
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 157
        if ( !(isset($context["shipping_ups_test"]) ? $context["shipping_ups_test"] : null)) {
            // line 158
            echo "                <input type=\"radio\" name=\"shipping_ups_test\" value=\"0\" checked=\"checked\" />
                ";
            // line 159
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 161
            echo "                <input type=\"radio\" name=\"shipping_ups_test\" value=\"0\" />
                ";
            // line 162
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        }
        // line 164
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-quote-type\"><span data-toggle=\"tooltip\" title=\"";
        // line 168
        echo (isset($context["help_quote_type"]) ? $context["help_quote_type"] : null);
        echo "\">";
        echo (isset($context["entry_quote_type"]) ? $context["entry_quote_type"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ups_quote_type\" id=\"input-quote-type\" class=\"form-control\">
                ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quote_types"]) ? $context["quote_types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quote_type"]) {
            // line 172
            echo "                ";
            if (($this->getAttribute($context["quote_type"], "value", array()) == (isset($context["shipping_ups_quote_type"]) ? $context["shipping_ups_quote_type"] : null))) {
                // line 173
                echo "                <option value=\"";
                echo $this->getAttribute($context["quote_type"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["quote_type"], "text", array());
                echo "</option>
                ";
            } else {
                // line 175
                echo "                <option value=\"";
                echo $this->getAttribute($context["quote_type"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["quote_type"], "text", array());
                echo "</option>
                ";
            }
            // line 177
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 182
        echo (isset($context["help_service"]) ? $context["help_service"] : null);
        echo "\">";
        echo (isset($context["entry_service"]) ? $context["entry_service"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <div id=\"service\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                <div id=\"US\">
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 188
        if ((isset($context["shipping_ups_us_01"]) ? $context["shipping_ups_us_01"] : null)) {
            // line 189
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_01\" value=\"1\" checked=\"checked\" />
                      ";
            // line 190
            echo (isset($context["text_next_day_air"]) ? $context["text_next_day_air"] : null);
            echo "
                      ";
        } else {
            // line 192
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_01\" value=\"1\" />
                      ";
            // line 193
            echo (isset($context["text_next_day_air"]) ? $context["text_next_day_air"] : null);
            echo "
                      ";
        }
        // line 195
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 199
        if ((isset($context["shipping_ups_us_02"]) ? $context["shipping_ups_us_02"] : null)) {
            // line 200
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_02\" value=\"1\" checked=\"checked\" />
                      ";
            // line 201
            echo (isset($context["text_2nd_day_air"]) ? $context["text_2nd_day_air"] : null);
            echo "
                      ";
        } else {
            // line 203
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_02\" value=\"1\" />
                      ";
            // line 204
            echo (isset($context["text_2nd_day_air"]) ? $context["text_2nd_day_air"] : null);
            echo "
                      ";
        }
        // line 206
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 210
        if ((isset($context["shipping_ups_us_03"]) ? $context["shipping_ups_us_03"] : null)) {
            // line 211
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_03\" value=\"1\" checked=\"checked\" />
                      ";
            // line 212
            echo (isset($context["text_ground"]) ? $context["text_ground"] : null);
            echo "
                      ";
        } else {
            // line 214
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_03\" value=\"1\" />
                      ";
            // line 215
            echo (isset($context["text_ground"]) ? $context["text_ground"] : null);
            echo "
                      ";
        }
        // line 217
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 221
        if ((isset($context["shipping_ups_us_07"]) ? $context["shipping_ups_us_07"] : null)) {
            // line 222
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_07\" value=\"1\" checked=\"checked\" />
                      ";
            // line 223
            echo (isset($context["text_worldwide_express"]) ? $context["text_worldwide_express"] : null);
            echo "
                      ";
        } else {
            // line 225
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_07\" value=\"1\" />
                      ";
            // line 226
            echo (isset($context["text_worldwide_express"]) ? $context["text_worldwide_express"] : null);
            echo "
                      ";
        }
        // line 228
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 232
        if ((isset($context["shipping_ups_us_08"]) ? $context["shipping_ups_us_08"] : null)) {
            // line 233
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_08\" value=\"1\" checked=\"checked\" />
                      ";
            // line 234
            echo (isset($context["text_worldwide_expedited"]) ? $context["text_worldwide_expedited"] : null);
            echo "
                      ";
        } else {
            // line 236
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_08\" value=\"1\" />
                      ";
            // line 237
            echo (isset($context["text_worldwide_expedited"]) ? $context["text_worldwide_expedited"] : null);
            echo "
                      ";
        }
        // line 239
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 243
        if ((isset($context["shipping_ups_us_11"]) ? $context["shipping_ups_us_11"] : null)) {
            // line 244
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_11\" value=\"1\" checked=\"checked\" />
                      ";
            // line 245
            echo (isset($context["text_standard"]) ? $context["text_standard"] : null);
            echo "
                      ";
        } else {
            // line 247
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_11\" value=\"1\" />
                      ";
            // line 248
            echo (isset($context["text_standard"]) ? $context["text_standard"] : null);
            echo "
                      ";
        }
        // line 250
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 254
        if ((isset($context["shipping_ups_us_12"]) ? $context["shipping_ups_us_12"] : null)) {
            // line 255
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_12\" value=\"1\" checked=\"checked\" />
                      ";
            // line 256
            echo (isset($context["text_3_day_select"]) ? $context["text_3_day_select"] : null);
            echo "
                      ";
        } else {
            // line 258
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_12\" value=\"1\" />
                      ";
            // line 259
            echo (isset($context["text_3_day_select"]) ? $context["text_3_day_select"] : null);
            echo "
                      ";
        }
        // line 261
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 265
        if ((isset($context["shipping_ups_us_13"]) ? $context["shipping_ups_us_13"] : null)) {
            // line 266
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_13\" value=\"1\" checked=\"checked\" />
                      ";
            // line 267
            echo (isset($context["text_next_day_air_saver"]) ? $context["text_next_day_air_saver"] : null);
            echo "
                      ";
        } else {
            // line 269
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_13\" value=\"1\" />
                      ";
            // line 270
            echo (isset($context["text_next_day_air_saver"]) ? $context["text_next_day_air_saver"] : null);
            echo "
                      ";
        }
        // line 272
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 276
        if ((isset($context["shipping_ups_us_14"]) ? $context["shipping_ups_us_14"] : null)) {
            // line 277
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_14\" value=\"1\" checked=\"checked\" />
                      ";
            // line 278
            echo (isset($context["text_next_day_air_early_am"]) ? $context["text_next_day_air_early_am"] : null);
            echo "
                      ";
        } else {
            // line 280
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_14\" value=\"1\" />
                      ";
            // line 281
            echo (isset($context["text_next_day_air_early_am"]) ? $context["text_next_day_air_early_am"] : null);
            echo "
                      ";
        }
        // line 283
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 287
        if ((isset($context["shipping_ups_us_54"]) ? $context["shipping_ups_us_54"] : null)) {
            // line 288
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_54\" value=\"1\" checked=\"checked\" />
                      ";
            // line 289
            echo (isset($context["text_worldwide_express_plus"]) ? $context["text_worldwide_express_plus"] : null);
            echo "
                      ";
        } else {
            // line 291
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_54\" value=\"1\" />
                      ";
            // line 292
            echo (isset($context["text_worldwide_express_plus"]) ? $context["text_worldwide_express_plus"] : null);
            echo "
                      ";
        }
        // line 294
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 298
        if ((isset($context["shipping_ups_us_59"]) ? $context["shipping_ups_us_59"] : null)) {
            // line 299
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_59\" value=\"1\" checked=\"checked\" />
                      ";
            // line 300
            echo (isset($context["text_2nd_day_air_am"]) ? $context["text_2nd_day_air_am"] : null);
            echo "
                      ";
        } else {
            // line 302
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_59\" value=\"1\" />
                      ";
            // line 303
            echo (isset($context["text_2nd_day_air_am"]) ? $context["text_2nd_day_air_am"] : null);
            echo "
                      ";
        }
        // line 305
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 309
        if ((isset($context["shipping_ups_us_65"]) ? $context["shipping_ups_us_65"] : null)) {
            // line 310
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_65\" value=\"1\" checked=\"checked\" />
                      ";
            // line 311
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        } else {
            // line 313
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_us_65\" value=\"1\" />
                      ";
            // line 314
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        }
        // line 316
        echo "                    </label>
                  </div>
                </div>
                <div id=\"PR\">
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 322
        if ((isset($context["shipping_ups_pr_01"]) ? $context["shipping_ups_pr_01"] : null)) {
            // line 323
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_01\" value=\"1\" checked=\"checked\" />
                      ";
            // line 324
            echo (isset($context["text_next_day_air"]) ? $context["text_next_day_air"] : null);
            echo "
                      ";
        } else {
            // line 326
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_01\" value=\"1\" />
                      ";
            // line 327
            echo (isset($context["text_next_day_air"]) ? $context["text_next_day_air"] : null);
            echo "
                      ";
        }
        // line 329
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 333
        if ((isset($context["shipping_ups_pr_02"]) ? $context["shipping_ups_pr_02"] : null)) {
            // line 334
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_02\" value=\"1\" checked=\"checked\" />
                      ";
            // line 335
            echo (isset($context["text_2nd_day_air"]) ? $context["text_2nd_day_air"] : null);
            echo "
                      ";
        } else {
            // line 337
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_02\" value=\"1\" />
                      ";
            // line 338
            echo (isset($context["text_2nd_day_air"]) ? $context["text_2nd_day_air"] : null);
            echo "
                      ";
        }
        // line 340
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 344
        if ((isset($context["shipping_ups_pr_03"]) ? $context["shipping_ups_pr_03"] : null)) {
            // line 345
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_03\" value=\"1\" checked=\"checked\" />
                      ";
            // line 346
            echo (isset($context["text_ground"]) ? $context["text_ground"] : null);
            echo "
                      ";
        } else {
            // line 348
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_03\" value=\"1\" />
                      ";
            // line 349
            echo (isset($context["text_ground"]) ? $context["text_ground"] : null);
            echo "
                      ";
        }
        // line 351
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 355
        if ((isset($context["shipping_ups_pr_07"]) ? $context["shipping_ups_pr_07"] : null)) {
            // line 356
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_07\" value=\"1\" checked=\"checked\" />
                      ";
            // line 357
            echo (isset($context["text_worldwide_express"]) ? $context["text_worldwide_express"] : null);
            echo "
                      ";
        } else {
            // line 359
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_07\" value=\"1\" />
                      ";
            // line 360
            echo (isset($context["text_worldwide_express"]) ? $context["text_worldwide_express"] : null);
            echo "
                      ";
        }
        // line 362
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 366
        if ((isset($context["shipping_ups_pr_08"]) ? $context["shipping_ups_pr_08"] : null)) {
            // line 367
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_08\" value=\"1\" checked=\"checked\" />
                      ";
            // line 368
            echo (isset($context["text_worldwide_expedited"]) ? $context["text_worldwide_expedited"] : null);
            echo "
                      ";
        } else {
            // line 370
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_08\" value=\"1\" />
                      ";
            // line 371
            echo (isset($context["text_worldwide_expedited"]) ? $context["text_worldwide_expedited"] : null);
            echo "
                      ";
        }
        // line 373
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 377
        if ((isset($context["shipping_ups_pr_14"]) ? $context["shipping_ups_pr_14"] : null)) {
            // line 378
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_14\" value=\"1\" checked=\"checked\" />
                      ";
            // line 379
            echo (isset($context["text_next_day_air_early_am"]) ? $context["text_next_day_air_early_am"] : null);
            echo "
                      ";
        } else {
            // line 381
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_14\" value=\"1\" />
                      ";
            // line 382
            echo (isset($context["text_next_day_air_early_am"]) ? $context["text_next_day_air_early_am"] : null);
            echo "
                      ";
        }
        // line 384
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 388
        if ((isset($context["shipping_ups_pr_54"]) ? $context["shipping_ups_pr_54"] : null)) {
            // line 389
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_54\" value=\"1\" checked=\"checked\" />
                      ";
            // line 390
            echo (isset($context["text_worldwide_express_plus"]) ? $context["text_worldwide_express_plus"] : null);
            echo "
                      ";
        } else {
            // line 392
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_54\" value=\"1\" />
                      ";
            // line 393
            echo (isset($context["text_worldwide_express_plus"]) ? $context["text_worldwide_express_plus"] : null);
            echo "
                      ";
        }
        // line 395
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 399
        if ((isset($context["shipping_ups_pr_65"]) ? $context["shipping_ups_pr_65"] : null)) {
            // line 400
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_65\" value=\"1\" checked=\"checked\" />
                      ";
            // line 401
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        } else {
            // line 403
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_pr_65\" value=\"1\" />
                      ";
            // line 404
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        }
        // line 406
        echo "                    </label>
                  </div>
                </div>
                <div id=\"CA\">
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 412
        if ((isset($context["shipping_ups_ca_01"]) ? $context["shipping_ups_ca_01"] : null)) {
            // line 413
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_01\" value=\"1\" checked=\"checked\" />
                      ";
            // line 414
            echo (isset($context["text_express"]) ? $context["text_express"] : null);
            echo "
                      ";
        } else {
            // line 416
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_01\" value=\"1\" />
                      ";
            // line 417
            echo (isset($context["text_express"]) ? $context["text_express"] : null);
            echo "
                      ";
        }
        // line 419
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 423
        if ((isset($context["shipping_ups_ca_02"]) ? $context["shipping_ups_ca_02"] : null)) {
            // line 424
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_02\" value=\"1\" checked=\"checked\" />
                      ";
            // line 425
            echo (isset($context["text_expedited"]) ? $context["text_expedited"] : null);
            echo "
                      ";
        } else {
            // line 427
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_02\" value=\"1\" />
                      ";
            // line 428
            echo (isset($context["text_expedited"]) ? $context["text_expedited"] : null);
            echo "
                      ";
        }
        // line 430
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 434
        if ((isset($context["shipping_ups_ca_07"]) ? $context["shipping_ups_ca_07"] : null)) {
            // line 435
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_07\" value=\"1\" checked=\"checked\" />
                      ";
            // line 436
            echo (isset($context["text_worldwide_express"]) ? $context["text_worldwide_express"] : null);
            echo "
                      ";
        } else {
            // line 438
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_07\" value=\"1\" />
                      ";
            // line 439
            echo (isset($context["text_worldwide_express"]) ? $context["text_worldwide_express"] : null);
            echo "
                      ";
        }
        // line 441
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 445
        if ((isset($context["shipping_ups_ca_08"]) ? $context["shipping_ups_ca_08"] : null)) {
            // line 446
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_08\" value=\"1\" checked=\"checked\" />
                      ";
            // line 447
            echo (isset($context["text_worldwide_expedited"]) ? $context["text_worldwide_expedited"] : null);
            echo "
                      ";
        } else {
            // line 449
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_08\" value=\"1\" />
                      ";
            // line 450
            echo (isset($context["text_worldwide_expedited"]) ? $context["text_worldwide_expedited"] : null);
            echo "
                      ";
        }
        // line 452
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 456
        if ((isset($context["shipping_ups_ca_11"]) ? $context["shipping_ups_ca_11"] : null)) {
            // line 457
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_11\" value=\"1\" checked=\"checked\" />
                      ";
            // line 458
            echo (isset($context["text_standard"]) ? $context["text_standard"] : null);
            echo "
                      ";
        } else {
            // line 460
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_11\" value=\"1\" />
                      ";
            // line 461
            echo (isset($context["text_standard"]) ? $context["text_standard"] : null);
            echo "
                      ";
        }
        // line 463
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 467
        if ((isset($context["shipping_ups_ca_12"]) ? $context["shipping_ups_ca_12"] : null)) {
            // line 468
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_12\" value=\"1\" checked=\"checked\" />
                      ";
            // line 469
            echo (isset($context["text_3_day_select"]) ? $context["text_3_day_select"] : null);
            echo "
                      ";
        } else {
            // line 471
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_12\" value=\"1\" />
                      ";
            // line 472
            echo (isset($context["text_3_day_select"]) ? $context["text_3_day_select"] : null);
            echo "
                      ";
        }
        // line 474
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 478
        if ((isset($context["shipping_ups_ca_13"]) ? $context["shipping_ups_ca_13"] : null)) {
            // line 479
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_13\" value=\"1\" checked=\"checked\" />
                      ";
            // line 480
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        } else {
            // line 482
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_13\" value=\"1\" />
                      ";
            // line 483
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        }
        // line 485
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 489
        if ((isset($context["shipping_ups_ca_14"]) ? $context["shipping_ups_ca_14"] : null)) {
            // line 490
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_14\" value=\"1\" checked=\"checked\" />
                      ";
            // line 491
            echo (isset($context["text_express_early_am"]) ? $context["text_express_early_am"] : null);
            echo "
                      ";
        } else {
            // line 493
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_14\" value=\"1\" />
                      ";
            // line 494
            echo (isset($context["text_express_early_am"]) ? $context["text_express_early_am"] : null);
            echo "
                      ";
        }
        // line 496
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 500
        if ((isset($context["shipping_ups_ca_54"]) ? $context["shipping_ups_ca_54"] : null)) {
            // line 501
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_54\" value=\"1\" checked=\"checked\" />
                      ";
            // line 502
            echo (isset($context["text_worldwide_express_plus"]) ? $context["text_worldwide_express_plus"] : null);
            echo "
                      ";
        } else {
            // line 504
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_54\" value=\"1\" />
                      ";
            // line 505
            echo (isset($context["text_worldwide_express_plus"]) ? $context["text_worldwide_express_plus"] : null);
            echo "
                      ";
        }
        // line 507
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 511
        if ((isset($context["shipping_ups_ca_65"]) ? $context["shipping_ups_ca_65"] : null)) {
            // line 512
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_65\" value=\"1\" checked=\"checked\" />
                      ";
            // line 513
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        } else {
            // line 515
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_ca_65\" value=\"1\" />
                      ";
            // line 516
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        }
        // line 518
        echo "                    </label>
                  </div>
                </div>
                <div id=\"MX\">
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 524
        if ((isset($context["shipping_ups_mx_07"]) ? $context["shipping_ups_mx_07"] : null)) {
            // line 525
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_mx_07\" value=\"1\" checked=\"checked\" />
                      ";
            // line 526
            echo (isset($context["text_worldwide_express"]) ? $context["text_worldwide_express"] : null);
            echo "
                      ";
        } else {
            // line 528
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_mx_07\" value=\"1\" />
                      ";
            // line 529
            echo (isset($context["text_worldwide_express"]) ? $context["text_worldwide_express"] : null);
            echo "
                      ";
        }
        // line 531
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 535
        if ((isset($context["shipping_ups_mx_08"]) ? $context["shipping_ups_mx_08"] : null)) {
            // line 536
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_mx_08\" value=\"1\" checked=\"checked\" />
                      ";
            // line 537
            echo (isset($context["text_worldwide_expedited"]) ? $context["text_worldwide_expedited"] : null);
            echo "
                      ";
        } else {
            // line 539
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_mx_08\" value=\"1\" />
                      ";
            // line 540
            echo (isset($context["text_worldwide_expedited"]) ? $context["text_worldwide_expedited"] : null);
            echo "
                      ";
        }
        // line 542
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 546
        if ((isset($context["shipping_ups_mx_54"]) ? $context["shipping_ups_mx_54"] : null)) {
            // line 547
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_mx_54\" value=\"1\" checked=\"checked\" />
                      ";
            // line 548
            echo (isset($context["text_worldwide_express_plus"]) ? $context["text_worldwide_express_plus"] : null);
            echo "
                      ";
        } else {
            // line 550
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_mx_54\" value=\"1\" />
                      ";
            // line 551
            echo (isset($context["text_worldwide_express_plus"]) ? $context["text_worldwide_express_plus"] : null);
            echo "
                      ";
        }
        // line 553
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 557
        if ((isset($context["shipping_ups_mx_65"]) ? $context["shipping_ups_mx_65"] : null)) {
            // line 558
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_mx_65\" value=\"1\" checked=\"checked\" />
                      ";
            // line 559
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        } else {
            // line 561
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_mx_65\" value=\"1\" />
                      ";
            // line 562
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        }
        // line 564
        echo "                    </label>
                  </div>
                </div>
                <div id=\"EU\">
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 570
        if ((isset($context["shipping_ups_eu_07"]) ? $context["shipping_ups_eu_07"] : null)) {
            // line 571
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_07\" value=\"1\" checked=\"checked\" />
                      ";
            // line 572
            echo (isset($context["text_express"]) ? $context["text_express"] : null);
            echo "
                      ";
        } else {
            // line 574
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_07\" value=\"1\" />
                      ";
            // line 575
            echo (isset($context["text_express"]) ? $context["text_express"] : null);
            echo "
                      ";
        }
        // line 577
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 581
        if ((isset($context["shipping_ups_eu_08"]) ? $context["shipping_ups_eu_08"] : null)) {
            // line 582
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_08\" value=\"1\" checked=\"checked\" />
                      ";
            // line 583
            echo (isset($context["text_expedited"]) ? $context["text_expedited"] : null);
            echo "
                      ";
        } else {
            // line 585
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_08\" value=\"1\" />
                      ";
            // line 586
            echo (isset($context["text_expedited"]) ? $context["text_expedited"] : null);
            echo "
                      ";
        }
        // line 588
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 592
        if ((isset($context["shipping_ups_eu_11"]) ? $context["shipping_ups_eu_11"] : null)) {
            // line 593
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_11\" value=\"1\" checked=\"checked\" />
                      ";
            // line 594
            echo (isset($context["text_standard"]) ? $context["text_standard"] : null);
            echo "
                      ";
        } else {
            // line 596
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_11\" value=\"1\" />
                      ";
            // line 597
            echo (isset($context["text_standard"]) ? $context["text_standard"] : null);
            echo "
                      ";
        }
        // line 599
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 603
        if ((isset($context["shipping_ups_eu_54"]) ? $context["shipping_ups_eu_54"] : null)) {
            // line 604
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_54\" value=\"1\" checked=\"checked\" />
                      ";
            // line 605
            echo (isset($context["text_worldwide_express_plus"]) ? $context["text_worldwide_express_plus"] : null);
            echo "
                      ";
        } else {
            // line 607
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_54\" value=\"1\" />
                      ";
            // line 608
            echo (isset($context["text_worldwide_express_plus"]) ? $context["text_worldwide_express_plus"] : null);
            echo "
                      ";
        }
        // line 610
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 614
        if ((isset($context["shipping_ups_eu_65"]) ? $context["shipping_ups_eu_65"] : null)) {
            // line 615
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_65\" value=\"1\" checked=\"checked\" />
                      ";
            // line 616
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        } else {
            // line 618
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_65\" value=\"1\" />
                      ";
            // line 619
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        }
        // line 621
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 625
        if ((isset($context["shipping_ups_eu_82"]) ? $context["shipping_ups_eu_82"] : null)) {
            // line 626
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_82\" value=\"1\" checked=\"checked\" />
                      ";
            // line 627
            echo (isset($context["text_today_standard"]) ? $context["text_today_standard"] : null);
            echo "
                      ";
        } else {
            // line 629
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_82\" value=\"1\" />
                      ";
            // line 630
            echo (isset($context["text_today_standard"]) ? $context["text_today_standard"] : null);
            echo "
                      ";
        }
        // line 632
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 636
        if ((isset($context["shipping_ups_eu_83"]) ? $context["shipping_ups_eu_83"] : null)) {
            // line 637
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_83\" value=\"1\" checked=\"checked\" />
                      ";
            // line 638
            echo (isset($context["text_today_dedicated_courier"]) ? $context["text_today_dedicated_courier"] : null);
            echo "
                      ";
        } else {
            // line 640
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_83\" value=\"1\" />
                      ";
            // line 641
            echo (isset($context["text_today_dedicated_courier"]) ? $context["text_today_dedicated_courier"] : null);
            echo "
                      ";
        }
        // line 643
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 647
        if ((isset($context["shipping_ups_eu_84"]) ? $context["shipping_ups_eu_84"] : null)) {
            // line 648
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_84\" value=\"1\" checked=\"checked\" />
                      ";
            // line 649
            echo (isset($context["text_today_intercity"]) ? $context["text_today_intercity"] : null);
            echo "
                      ";
        } else {
            // line 651
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_84\" value=\"1\" />
                      ";
            // line 652
            echo (isset($context["text_today_intercity"]) ? $context["text_today_intercity"] : null);
            echo "
                      ";
        }
        // line 654
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 658
        if ((isset($context["shipping_ups_eu_85"]) ? $context["shipping_ups_eu_85"] : null)) {
            // line 659
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_85\" value=\"1\" checked=\"checked\" />
                      ";
            // line 660
            echo (isset($context["text_today_express"]) ? $context["text_today_express"] : null);
            echo "
                      ";
        } else {
            // line 662
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_85\" value=\"1\" />
                      ";
            // line 663
            echo (isset($context["text_today_express"]) ? $context["text_today_express"] : null);
            echo "
                      ";
        }
        // line 665
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 669
        if ((isset($context["shipping_ups_eu_86"]) ? $context["shipping_ups_eu_86"] : null)) {
            // line 670
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_86\" value=\"1\" checked=\"checked\" />
                      ";
            // line 671
            echo (isset($context["text_today_express_saver"]) ? $context["text_today_express_saver"] : null);
            echo "
                      ";
        } else {
            // line 673
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_eu_86\" value=\"1\" />
                      ";
            // line 674
            echo (isset($context["text_today_express_saver"]) ? $context["text_today_express_saver"] : null);
            echo "
                      ";
        }
        // line 676
        echo "                    </label>
                  </div>
                </div>
                <div id=\"other\">
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 682
        if ((isset($context["shipping_ups_other_07"]) ? $context["shipping_ups_other_07"] : null)) {
            // line 683
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_other_07\" value=\"1\" checked=\"checked\" />
                      ";
            // line 684
            echo (isset($context["text_express"]) ? $context["text_express"] : null);
            echo "
                      ";
        } else {
            // line 686
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_other_07\" value=\"1\" />
                      ";
            // line 687
            echo (isset($context["text_express"]) ? $context["text_express"] : null);
            echo "
                      ";
        }
        // line 689
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 693
        if ((isset($context["shipping_ups_other_08"]) ? $context["shipping_ups_other_08"] : null)) {
            // line 694
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_other_08\" value=\"1\" checked=\"checked\" />
                      ";
            // line 695
            echo (isset($context["text_expedited"]) ? $context["text_expedited"] : null);
            echo "
                      ";
        } else {
            // line 697
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_other_08\" value=\"1\" />
                      ";
            // line 698
            echo (isset($context["text_expedited"]) ? $context["text_expedited"] : null);
            echo "
                      ";
        }
        // line 700
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 704
        if ((isset($context["shipping_ups_other_11"]) ? $context["shipping_ups_other_11"] : null)) {
            // line 705
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_other_11\" value=\"1\" checked=\"checked\" />
                      ";
            // line 706
            echo (isset($context["text_standard"]) ? $context["text_standard"] : null);
            echo "
                      ";
        } else {
            // line 708
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_other_11\" value=\"1\" />
                      ";
            // line 709
            echo (isset($context["text_standard"]) ? $context["text_standard"] : null);
            echo "
                      ";
        }
        // line 711
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 715
        if ((isset($context["shipping_ups_other_54"]) ? $context["shipping_ups_other_54"] : null)) {
            // line 716
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_other_54\" value=\"1\" checked=\"checked\" />
                      ";
            // line 717
            echo (isset($context["text_worldwide_express_plus"]) ? $context["text_worldwide_express_plus"] : null);
            echo "
                      ";
        } else {
            // line 719
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_other_54\" value=\"1\" />
                      ";
            // line 720
            echo (isset($context["text_worldwide_express_plus"]) ? $context["text_worldwide_express_plus"] : null);
            echo "
                      ";
        }
        // line 722
        echo "                    </label>
                  </div>
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 726
        if ((isset($context["shipping_ups_other_65"]) ? $context["shipping_ups_other_65"] : null)) {
            // line 727
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_other_65\" value=\"1\" checked=\"checked\" />
                      ";
            // line 728
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        } else {
            // line 730
            echo "                      <input type=\"checkbox\" name=\"shipping_ups_other_65\" value=\"1\" />
                      ";
            // line 731
            echo (isset($context["text_saver"]) ? $context["text_saver"] : null);
            echo "
                      ";
        }
        // line 733
        echo "                    </label>
                  </div>
                </div>
              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 737
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</button></div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 740
        echo (isset($context["help_insurance"]) ? $context["help_insurance"] : null);
        echo "\">";
        echo (isset($context["entry_insurance"]) ? $context["entry_insurance"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 743
        if ((isset($context["shipping_ups_insurance"]) ? $context["shipping_ups_insurance"] : null)) {
            // line 744
            echo "                <input type=\"radio\" name=\"shipping_ups_insurance\" value=\"1\" checked=\"checked\" />
                ";
            // line 745
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 747
            echo "                <input type=\"radio\" name=\"shipping_ups_insurance\" value=\"1\" />
                ";
            // line 748
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        }
        // line 750
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 752
        if ( !(isset($context["shipping_ups_insurance"]) ? $context["shipping_ups_insurance"] : null)) {
            // line 753
            echo "                <input type=\"radio\" name=\"shipping_ups_insurance\" value=\"0\" checked=\"checked\" />
                ";
            // line 754
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 756
            echo "                <input type=\"radio\" name=\"shipping_ups_insurance\" value=\"0\" />
                ";
            // line 757
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        }
        // line 759
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 763
        echo (isset($context["entry_display_weight"]) ? $context["entry_display_weight"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 766
        if ((isset($context["shipping_ups_display_weight"]) ? $context["shipping_ups_display_weight"] : null)) {
            // line 767
            echo "                <input type=\"radio\" name=\"shipping_ups_display_weight\" value=\"1\" checked=\"checked\" />
                ";
            // line 768
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 770
            echo "                <input type=\"radio\" name=\"shipping_ups_display_weight\" value=\"1\" />
                ";
            // line 771
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        }
        // line 773
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 775
        if ( !(isset($context["shipping_ups_display_weight"]) ? $context["shipping_ups_display_weight"] : null)) {
            // line 776
            echo "                <input type=\"radio\" name=\"shipping_ups_display_weight\" value=\"0\" checked=\"checked\" />
                ";
            // line 777
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 779
            echo "                <input type=\"radio\" name=\"shipping_ups_display_weight\" value=\"0\" />
                ";
            // line 780
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        }
        // line 782
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-weight-class\"><span data-toggle=\"tooltip\" title=\"";
        // line 786
        echo (isset($context["help_weight_class"]) ? $context["help_weight_class"] : null);
        echo "\">";
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ups_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                ";
        // line 789
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 790
            echo "                ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["shipping_ups_weight_class_id"]) ? $context["shipping_ups_weight_class_id"] : null))) {
                // line 791
                echo "                <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                ";
            } else {
                // line 793
                echo "                <option value=\"";
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                ";
            }
            // line 795
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 796
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-length-class\"><span data-toggle=\"tooltip\" title=\"";
        // line 800
        echo (isset($context["help_length_class"]) ? $context["help_length_class"] : null);
        echo "\">";
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ups_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                ";
        // line 803
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 804
            echo "                ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["shipping_ups_length_class_id"]) ? $context["shipping_ups_length_class_id"] : null))) {
                // line 805
                echo "                <option value=\"";
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                ";
            } else {
                // line 807
                echo "                <option value=\"";
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                ";
            }
            // line 809
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 810
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-length\"><span data-toggle=\"tooltip\" title=\"";
        // line 814
        echo (isset($context["help_dimension"]) ? $context["help_dimension"] : null);
        echo "\">";
        echo (isset($context["entry_dimension"]) ? $context["entry_dimension"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <div class=\"row\">
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"shipping_ups_length\" value=\"";
        // line 818
        echo (isset($context["shipping_ups_length"]) ? $context["shipping_ups_length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_length"]) ? $context["entry_length"] : null);
        echo "\" id=\"input-length\" class=\"form-control\" />
                </div>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"shipping_ups_width\" value=\"";
        // line 821
        echo (isset($context["shipping_ups_width"]) ? $context["shipping_ups_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                </div>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"shipping_ups_height\" value=\"";
        // line 824
        echo (isset($context["shipping_ups_height"]) ? $context["shipping_ups_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                </div>
              </div>
              ";
        // line 827
        if ((isset($context["error_dimension"]) ? $context["error_dimension"] : null)) {
            // line 828
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_dimension"]) ? $context["error_dimension"] : null);
            echo "</div>
              ";
        }
        // line 830
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 833
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ups_tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                <option value=\"0\">";
        // line 836
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                ";
        // line 837
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 838
            echo "                ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["shipping_ups_tax_class_id"]) ? $context["shipping_ups_tax_class_id"] : null))) {
                // line 839
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            } else {
                // line 841
                echo "                <option value=\"";
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                ";
            }
            // line 843
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 844
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 848
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ups_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 851
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 852
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 853
            echo "                ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["shipping_ups_geo_zone_id"]) ? $context["shipping_ups_geo_zone_id"] : null))) {
                // line 854
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            } else {
                // line 856
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            }
            // line 858
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 859
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 863
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ups_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 866
        if ((isset($context["shipping_ups_status"]) ? $context["shipping_ups_status"] : null)) {
            // line 867
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 868
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 870
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 871
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 873
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 877
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_ups_sort_order\" value=\"";
        // line 879
        echo (isset($context["shipping_ups_sort_order"]) ? $context["shipping_ups_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-debug\"><span data-toggle=\"tooltip\" title=\"";
        // line 883
        echo (isset($context["help_debug"]) ? $context["help_debug"] : null);
        echo "\">";
        echo (isset($context["entry_debug"]) ? $context["entry_debug"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_ups_debug\" id=\"input-debug\" class=\"form-control\">
                ";
        // line 886
        if ((isset($context["shipping_ups_debug"]) ? $context["shipping_ups_debug"] : null)) {
            // line 887
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 888
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 890
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 891
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 893
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'shipping_ups_origin\\']').on('change', function() {
\t\$('#service > div').hide();\t
\t\t\t\t\t\t\t\t\t\t 
\t\$('#' + this.value).show();\t
});

\$('select[name=\\'shipping_ups_origin\\']').trigger('change');
//--></script></div>
";
        // line 909
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/shipping/ups.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2159 => 909,  2141 => 893,  2136 => 891,  2131 => 890,  2126 => 888,  2121 => 887,  2119 => 886,  2111 => 883,  2102 => 879,  2097 => 877,  2091 => 873,  2086 => 871,  2081 => 870,  2076 => 868,  2071 => 867,  2069 => 866,  2063 => 863,  2057 => 859,  2051 => 858,  2043 => 856,  2035 => 854,  2032 => 853,  2028 => 852,  2024 => 851,  2018 => 848,  2012 => 844,  2006 => 843,  1998 => 841,  1990 => 839,  1987 => 838,  1983 => 837,  1979 => 836,  1973 => 833,  1968 => 830,  1962 => 828,  1960 => 827,  1952 => 824,  1944 => 821,  1936 => 818,  1927 => 814,  1921 => 810,  1915 => 809,  1907 => 807,  1899 => 805,  1896 => 804,  1892 => 803,  1884 => 800,  1878 => 796,  1872 => 795,  1864 => 793,  1856 => 791,  1853 => 790,  1849 => 789,  1841 => 786,  1835 => 782,  1830 => 780,  1827 => 779,  1822 => 777,  1819 => 776,  1817 => 775,  1813 => 773,  1808 => 771,  1805 => 770,  1800 => 768,  1797 => 767,  1795 => 766,  1789 => 763,  1783 => 759,  1778 => 757,  1775 => 756,  1770 => 754,  1767 => 753,  1765 => 752,  1761 => 750,  1756 => 748,  1753 => 747,  1748 => 745,  1745 => 744,  1743 => 743,  1735 => 740,  1727 => 737,  1721 => 733,  1716 => 731,  1713 => 730,  1708 => 728,  1705 => 727,  1703 => 726,  1697 => 722,  1692 => 720,  1689 => 719,  1684 => 717,  1681 => 716,  1679 => 715,  1673 => 711,  1668 => 709,  1665 => 708,  1660 => 706,  1657 => 705,  1655 => 704,  1649 => 700,  1644 => 698,  1641 => 697,  1636 => 695,  1633 => 694,  1631 => 693,  1625 => 689,  1620 => 687,  1617 => 686,  1612 => 684,  1609 => 683,  1607 => 682,  1599 => 676,  1594 => 674,  1591 => 673,  1586 => 671,  1583 => 670,  1581 => 669,  1575 => 665,  1570 => 663,  1567 => 662,  1562 => 660,  1559 => 659,  1557 => 658,  1551 => 654,  1546 => 652,  1543 => 651,  1538 => 649,  1535 => 648,  1533 => 647,  1527 => 643,  1522 => 641,  1519 => 640,  1514 => 638,  1511 => 637,  1509 => 636,  1503 => 632,  1498 => 630,  1495 => 629,  1490 => 627,  1487 => 626,  1485 => 625,  1479 => 621,  1474 => 619,  1471 => 618,  1466 => 616,  1463 => 615,  1461 => 614,  1455 => 610,  1450 => 608,  1447 => 607,  1442 => 605,  1439 => 604,  1437 => 603,  1431 => 599,  1426 => 597,  1423 => 596,  1418 => 594,  1415 => 593,  1413 => 592,  1407 => 588,  1402 => 586,  1399 => 585,  1394 => 583,  1391 => 582,  1389 => 581,  1383 => 577,  1378 => 575,  1375 => 574,  1370 => 572,  1367 => 571,  1365 => 570,  1357 => 564,  1352 => 562,  1349 => 561,  1344 => 559,  1341 => 558,  1339 => 557,  1333 => 553,  1328 => 551,  1325 => 550,  1320 => 548,  1317 => 547,  1315 => 546,  1309 => 542,  1304 => 540,  1301 => 539,  1296 => 537,  1293 => 536,  1291 => 535,  1285 => 531,  1280 => 529,  1277 => 528,  1272 => 526,  1269 => 525,  1267 => 524,  1259 => 518,  1254 => 516,  1251 => 515,  1246 => 513,  1243 => 512,  1241 => 511,  1235 => 507,  1230 => 505,  1227 => 504,  1222 => 502,  1219 => 501,  1217 => 500,  1211 => 496,  1206 => 494,  1203 => 493,  1198 => 491,  1195 => 490,  1193 => 489,  1187 => 485,  1182 => 483,  1179 => 482,  1174 => 480,  1171 => 479,  1169 => 478,  1163 => 474,  1158 => 472,  1155 => 471,  1150 => 469,  1147 => 468,  1145 => 467,  1139 => 463,  1134 => 461,  1131 => 460,  1126 => 458,  1123 => 457,  1121 => 456,  1115 => 452,  1110 => 450,  1107 => 449,  1102 => 447,  1099 => 446,  1097 => 445,  1091 => 441,  1086 => 439,  1083 => 438,  1078 => 436,  1075 => 435,  1073 => 434,  1067 => 430,  1062 => 428,  1059 => 427,  1054 => 425,  1051 => 424,  1049 => 423,  1043 => 419,  1038 => 417,  1035 => 416,  1030 => 414,  1027 => 413,  1025 => 412,  1017 => 406,  1012 => 404,  1009 => 403,  1004 => 401,  1001 => 400,  999 => 399,  993 => 395,  988 => 393,  985 => 392,  980 => 390,  977 => 389,  975 => 388,  969 => 384,  964 => 382,  961 => 381,  956 => 379,  953 => 378,  951 => 377,  945 => 373,  940 => 371,  937 => 370,  932 => 368,  929 => 367,  927 => 366,  921 => 362,  916 => 360,  913 => 359,  908 => 357,  905 => 356,  903 => 355,  897 => 351,  892 => 349,  889 => 348,  884 => 346,  881 => 345,  879 => 344,  873 => 340,  868 => 338,  865 => 337,  860 => 335,  857 => 334,  855 => 333,  849 => 329,  844 => 327,  841 => 326,  836 => 324,  833 => 323,  831 => 322,  823 => 316,  818 => 314,  815 => 313,  810 => 311,  807 => 310,  805 => 309,  799 => 305,  794 => 303,  791 => 302,  786 => 300,  783 => 299,  781 => 298,  775 => 294,  770 => 292,  767 => 291,  762 => 289,  759 => 288,  757 => 287,  751 => 283,  746 => 281,  743 => 280,  738 => 278,  735 => 277,  733 => 276,  727 => 272,  722 => 270,  719 => 269,  714 => 267,  711 => 266,  709 => 265,  703 => 261,  698 => 259,  695 => 258,  690 => 256,  687 => 255,  685 => 254,  679 => 250,  674 => 248,  671 => 247,  666 => 245,  663 => 244,  661 => 243,  655 => 239,  650 => 237,  647 => 236,  642 => 234,  639 => 233,  637 => 232,  631 => 228,  626 => 226,  623 => 225,  618 => 223,  615 => 222,  613 => 221,  607 => 217,  602 => 215,  599 => 214,  594 => 212,  591 => 211,  589 => 210,  583 => 206,  578 => 204,  575 => 203,  570 => 201,  567 => 200,  565 => 199,  559 => 195,  554 => 193,  551 => 192,  546 => 190,  543 => 189,  541 => 188,  530 => 182,  524 => 178,  518 => 177,  510 => 175,  502 => 173,  499 => 172,  495 => 171,  487 => 168,  481 => 164,  476 => 162,  473 => 161,  468 => 159,  465 => 158,  463 => 157,  459 => 155,  454 => 153,  451 => 152,  446 => 150,  443 => 149,  441 => 148,  433 => 145,  424 => 141,  417 => 139,  412 => 136,  406 => 134,  404 => 133,  398 => 132,  391 => 130,  386 => 127,  380 => 125,  378 => 124,  372 => 123,  365 => 121,  360 => 118,  354 => 116,  352 => 115,  346 => 114,  339 => 112,  333 => 108,  327 => 107,  319 => 105,  311 => 103,  308 => 102,  304 => 101,  296 => 98,  290 => 94,  284 => 93,  276 => 91,  268 => 89,  265 => 88,  261 => 87,  253 => 84,  247 => 80,  241 => 79,  233 => 77,  225 => 75,  222 => 74,  218 => 73,  210 => 70,  204 => 66,  198 => 65,  190 => 63,  182 => 61,  179 => 60,  175 => 59,  167 => 56,  162 => 53,  156 => 51,  154 => 50,  148 => 49,  141 => 47,  136 => 44,  130 => 42,  128 => 41,  122 => 40,  115 => 38,  110 => 35,  104 => 33,  102 => 32,  96 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-shipping" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-shipping" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-key"><span data-toggle="tooltip" title="{{ help_key }}">{{ entry_key }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_ups_key" value="{{ shipping_ups_key }}" placeholder="{{ entry_key }}" id="input-key" class="form-control" />*/
/*               {% if error_key %}*/
/*               <div class="text-danger">{{ error_key }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-username"><span data-toggle="tooltip" title="{{ help_username }}">{{ entry_username }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_ups_username" value="{{ shipping_ups_username }}" placeholder="{{ entry_username }}" id="input-username" class="form-control" />*/
/*               {% if error_username %}*/
/*               <div class="text-danger">{{ error_username }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-password"><span data-toggle="tooltip" title="{{ help_password }}">{{ entry_password }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_ups_password" value="{{ shipping_ups_password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*               {% if error_password %}*/
/*               <div class="text-danger">{{ error_password }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-pickup"><span data-toggle="tooltip" title="{{ help_pickup }}">{{ entry_pickup }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ups_pickup" id="input-pickup" class="form-control">*/
/*                 {% for pickup in pickups %}*/
/*                 {% if pickup.value == shipping_ups_pickup %}*/
/*                 <option value="{{ pickup.value }}" selected="selected">{{ pickup.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ pickup.value }}">{{ pickup.text }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-packaging"><span data-toggle="tooltip" title="{{ help_packaging }}">{{ entry_packaging }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ups_packaging" id="input-packaging" class="form-control">*/
/*                 {% for package in packages %}*/
/*                 {% if package.value == shipping_ups_packaging %}*/
/*                 <option value="{{ package.value }}" selected="selected">{{ package.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ package.value }}">{{ package.text }}</option>*/
/*                 {% endif %}*/
/*                {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-classification"><span data-toggle="tooltip" title="{{ help_classification }}">{{ entry_classification }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ups_classification" id="input-classification" class="form-control">*/
/*                 {% for classification in classifications %}*/
/*                 {% if classification.value == shipping_ups_classification %}*/
/*                 <option value="{{ classification.value }}" selected="selected">{{ classification.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ classification.value }}">{{ classification.text }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-origin"><span data-toggle="tooltip" title="{{ help_origin }}">{{ entry_origin }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ups_origin" id="input-origin" class="form-control">*/
/*                 {% for origin in origins %}*/
/*                 {% if origin.value == shipping_ups_origin %}*/
/*                 <option value="{{ origin.value }}" selected="selected">{{ origin.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ origin.value }}">{{ origin.text }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-city"><span data-toggle="tooltip" title="{{ help_city }}">{{ entry_city }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_ups_city" value="{{ shipping_ups_city }}" placeholder="{{ entry_city }}" id="input-city" class="form-control" />*/
/*               {% if error_city %}*/
/*               <div class="text-danger">{{ error_city }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-state"><span data-toggle="tooltip" title="{{ help_state }}">{{ entry_state }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_ups_state" value="{{ shipping_ups_state }}" placeholder="{{ entry_state }}" id="input-state" class="form-control" maxlength="2" />*/
/*               {% if error_state %}*/
/*               <div class="text-danger">{{ error_state }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-country"><span data-toggle="tooltip" title="{{ help_country }}">{{ entry_country }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_ups_country" value="{{ shipping_ups_country }}" placeholder="{{ entry_country }}" id="input-country" class="form-control" maxlength="2" />*/
/*               {% if error_country %}*/
/*               <div class="text-danger">{{ error_country }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-postcode"><span data-toggle="tooltip" title="{{ help_postcode }}">{{ entry_postcode }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_ups_postcode" value="{{ shipping_ups_postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_test }}">{{ entry_test }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline">*/
/*                 {% if shipping_ups_test %}*/
/*                 <input type="radio" name="shipping_ups_test" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_ups_test" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not shipping_ups_test %}*/
/*                 <input type="radio" name="shipping_ups_test" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_ups_test" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %}*/
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-quote-type"><span data-toggle="tooltip" title="{{ help_quote_type }}">{{ entry_quote_type }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ups_quote_type" id="input-quote-type" class="form-control">*/
/*                 {% for quote_type in quote_types %}*/
/*                 {% if quote_type.value == shipping_ups_quote_type %}*/
/*                 <option value="{{ quote_type.value }}" selected="selected">{{ quote_type.text }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ quote_type.value }}">{{ quote_type.text }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_service }}">{{ entry_service }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <div id="service" class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                 <div id="US">*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_us_01 %}*/
/*                       <input type="checkbox" name="shipping_ups_us_01" value="1" checked="checked" />*/
/*                       {{ text_next_day_air }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_us_01" value="1" />*/
/*                       {{ text_next_day_air }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_us_02 %}*/
/*                       <input type="checkbox" name="shipping_ups_us_02" value="1" checked="checked" />*/
/*                       {{ text_2nd_day_air }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_us_02" value="1" />*/
/*                       {{ text_2nd_day_air }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_us_03 %}*/
/*                       <input type="checkbox" name="shipping_ups_us_03" value="1" checked="checked" />*/
/*                       {{ text_ground }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_us_03" value="1" />*/
/*                       {{ text_ground }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_us_07 %}*/
/*                       <input type="checkbox" name="shipping_ups_us_07" value="1" checked="checked" />*/
/*                       {{ text_worldwide_express }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_us_07" value="1" />*/
/*                       {{ text_worldwide_express }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_us_08 %}*/
/*                       <input type="checkbox" name="shipping_ups_us_08" value="1" checked="checked" />*/
/*                       {{ text_worldwide_expedited }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_us_08" value="1" />*/
/*                       {{ text_worldwide_expedited }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_us_11 %}*/
/*                       <input type="checkbox" name="shipping_ups_us_11" value="1" checked="checked" />*/
/*                       {{ text_standard }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_us_11" value="1" />*/
/*                       {{ text_standard }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_us_12 %}*/
/*                       <input type="checkbox" name="shipping_ups_us_12" value="1" checked="checked" />*/
/*                       {{ text_3_day_select }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_us_12" value="1" />*/
/*                       {{ text_3_day_select }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_us_13 %}*/
/*                       <input type="checkbox" name="shipping_ups_us_13" value="1" checked="checked" />*/
/*                       {{ text_next_day_air_saver }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_us_13" value="1" />*/
/*                       {{ text_next_day_air_saver }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_us_14 %}*/
/*                       <input type="checkbox" name="shipping_ups_us_14" value="1" checked="checked" />*/
/*                       {{ text_next_day_air_early_am }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_us_14" value="1" />*/
/*                       {{ text_next_day_air_early_am }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_us_54 %}*/
/*                       <input type="checkbox" name="shipping_ups_us_54" value="1" checked="checked" />*/
/*                       {{ text_worldwide_express_plus }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_us_54" value="1" />*/
/*                       {{ text_worldwide_express_plus }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_us_59 %}*/
/*                       <input type="checkbox" name="shipping_ups_us_59" value="1" checked="checked" />*/
/*                       {{ text_2nd_day_air_am }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_us_59" value="1" />*/
/*                       {{ text_2nd_day_air_am }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_us_65 %}*/
/*                       <input type="checkbox" name="shipping_ups_us_65" value="1" checked="checked" />*/
/*                       {{ text_saver }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_us_65" value="1" />*/
/*                       {{ text_saver }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="PR">*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_pr_01 %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_01" value="1" checked="checked" />*/
/*                       {{ text_next_day_air }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_01" value="1" />*/
/*                       {{ text_next_day_air }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_pr_02 %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_02" value="1" checked="checked" />*/
/*                       {{ text_2nd_day_air }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_02" value="1" />*/
/*                       {{ text_2nd_day_air }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_pr_03 %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_03" value="1" checked="checked" />*/
/*                       {{ text_ground }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_03" value="1" />*/
/*                       {{ text_ground }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_pr_07 %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_07" value="1" checked="checked" />*/
/*                       {{ text_worldwide_express }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_07" value="1" />*/
/*                       {{ text_worldwide_express }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_pr_08 %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_08" value="1" checked="checked" />*/
/*                       {{ text_worldwide_expedited }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_08" value="1" />*/
/*                       {{ text_worldwide_expedited }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_pr_14 %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_14" value="1" checked="checked" />*/
/*                       {{ text_next_day_air_early_am }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_14" value="1" />*/
/*                       {{ text_next_day_air_early_am }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_pr_54 %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_54" value="1" checked="checked" />*/
/*                       {{ text_worldwide_express_plus }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_54" value="1" />*/
/*                       {{ text_worldwide_express_plus }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_pr_65 %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_65" value="1" checked="checked" />*/
/*                       {{ text_saver }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_pr_65" value="1" />*/
/*                       {{ text_saver }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="CA">*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_ca_01 %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_01" value="1" checked="checked" />*/
/*                       {{ text_express }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_01" value="1" />*/
/*                       {{ text_express }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_ca_02 %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_02" value="1" checked="checked" />*/
/*                       {{ text_expedited }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_02" value="1" />*/
/*                       {{ text_expedited }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_ca_07 %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_07" value="1" checked="checked" />*/
/*                       {{ text_worldwide_express }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_07" value="1" />*/
/*                       {{ text_worldwide_express }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_ca_08 %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_08" value="1" checked="checked" />*/
/*                       {{ text_worldwide_expedited }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_08" value="1" />*/
/*                       {{ text_worldwide_expedited }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_ca_11 %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_11" value="1" checked="checked" />*/
/*                       {{ text_standard }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_11" value="1" />*/
/*                       {{ text_standard }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_ca_12 %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_12" value="1" checked="checked" />*/
/*                       {{ text_3_day_select }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_12" value="1" />*/
/*                       {{ text_3_day_select }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_ca_13 %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_13" value="1" checked="checked" />*/
/*                       {{ text_saver }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_13" value="1" />*/
/*                       {{ text_saver }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_ca_14 %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_14" value="1" checked="checked" />*/
/*                       {{ text_express_early_am }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_14" value="1" />*/
/*                       {{ text_express_early_am }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_ca_54 %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_54" value="1" checked="checked" />*/
/*                       {{ text_worldwide_express_plus }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_54" value="1" />*/
/*                       {{ text_worldwide_express_plus }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_ca_65 %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_65" value="1" checked="checked" />*/
/*                       {{ text_saver }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_ca_65" value="1" />*/
/*                       {{ text_saver }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="MX">*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_mx_07 %}*/
/*                       <input type="checkbox" name="shipping_ups_mx_07" value="1" checked="checked" />*/
/*                       {{ text_worldwide_express }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_mx_07" value="1" />*/
/*                       {{ text_worldwide_express }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_mx_08 %}*/
/*                       <input type="checkbox" name="shipping_ups_mx_08" value="1" checked="checked" />*/
/*                       {{ text_worldwide_expedited }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_mx_08" value="1" />*/
/*                       {{ text_worldwide_expedited }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_mx_54 %}*/
/*                       <input type="checkbox" name="shipping_ups_mx_54" value="1" checked="checked" />*/
/*                       {{ text_worldwide_express_plus }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_mx_54" value="1" />*/
/*                       {{ text_worldwide_express_plus }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_mx_65 %}*/
/*                       <input type="checkbox" name="shipping_ups_mx_65" value="1" checked="checked" />*/
/*                       {{ text_saver }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_mx_65" value="1" />*/
/*                       {{ text_saver }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="EU">*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_eu_07 %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_07" value="1" checked="checked" />*/
/*                       {{ text_express }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_07" value="1" />*/
/*                       {{ text_express }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_eu_08 %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_08" value="1" checked="checked" />*/
/*                       {{ text_expedited }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_08" value="1" />*/
/*                       {{ text_expedited }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_eu_11 %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_11" value="1" checked="checked" />*/
/*                       {{ text_standard }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_11" value="1" />*/
/*                       {{ text_standard }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_eu_54 %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_54" value="1" checked="checked" />*/
/*                       {{ text_worldwide_express_plus }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_54" value="1" />*/
/*                       {{ text_worldwide_express_plus }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_eu_65 %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_65" value="1" checked="checked" />*/
/*                       {{ text_saver }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_65" value="1" />*/
/*                       {{ text_saver }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_eu_82 %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_82" value="1" checked="checked" />*/
/*                       {{ text_today_standard }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_82" value="1" />*/
/*                       {{ text_today_standard }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_eu_83 %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_83" value="1" checked="checked" />*/
/*                       {{ text_today_dedicated_courier }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_83" value="1" />*/
/*                       {{ text_today_dedicated_courier }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_eu_84 %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_84" value="1" checked="checked" />*/
/*                       {{ text_today_intercity }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_84" value="1" />*/
/*                       {{ text_today_intercity }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_eu_85 %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_85" value="1" checked="checked" />*/
/*                       {{ text_today_express }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_85" value="1" />*/
/*                       {{ text_today_express }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_eu_86 %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_86" value="1" checked="checked" />*/
/*                       {{ text_today_express_saver }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_eu_86" value="1" />*/
/*                       {{ text_today_express_saver }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="other">*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_other_07 %}*/
/*                       <input type="checkbox" name="shipping_ups_other_07" value="1" checked="checked" />*/
/*                       {{ text_express }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_other_07" value="1" />*/
/*                       {{ text_express }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_other_08 %}*/
/*                       <input type="checkbox" name="shipping_ups_other_08" value="1" checked="checked" />*/
/*                       {{ text_expedited }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_other_08" value="1" />*/
/*                       {{ text_expedited }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_other_11 %}*/
/*                       <input type="checkbox" name="shipping_ups_other_11" value="1" checked="checked" />*/
/*                       {{ text_standard }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_other_11" value="1" />*/
/*                       {{ text_standard }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_other_54 %}*/
/*                       <input type="checkbox" name="shipping_ups_other_54" value="1" checked="checked" />*/
/*                       {{ text_worldwide_express_plus }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_other_54" value="1" />*/
/*                       {{ text_worldwide_express_plus }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if shipping_ups_other_65 %}*/
/*                       <input type="checkbox" name="shipping_ups_other_65" value="1" checked="checked" />*/
/*                       {{ text_saver }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="shipping_ups_other_65" value="1" />*/
/*                       {{ text_saver }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="btn btn-link">{{ text_select_all }}</button> / <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="btn btn-link">{{ text_unselect_all }}</button></div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_insurance }}">{{ entry_insurance }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline">*/
/*                 {% if shipping_ups_insurance %}*/
/*                 <input type="radio" name="shipping_ups_insurance" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_ups_insurance" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not shipping_ups_insurance %}*/
/*                 <input type="radio" name="shipping_ups_insurance" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_ups_insurance" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %}*/
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_display_weight }}</label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline">*/
/*                 {% if shipping_ups_display_weight %}*/
/*                 <input type="radio" name="shipping_ups_display_weight" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_ups_display_weight" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 {% if not shipping_ups_display_weight %}*/
/*                 <input type="radio" name="shipping_ups_display_weight" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="shipping_ups_display_weight" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %}*/
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-weight-class"><span data-toggle="tooltip" title="{{ help_weight_class }}">{{ entry_weight_class }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ups_weight_class_id" id="input-weight-class" class="form-control">*/
/*                 {% for weight_class in weight_classes %}*/
/*                 {% if weight_class.weight_class_id == shipping_ups_weight_class_id %}*/
/*                 <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-length-class"><span data-toggle="tooltip" title="{{ help_length_class }}">{{ entry_length_class }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ups_length_class_id" id="input-length-class" class="form-control">*/
/*                 {% for length_class in length_classes %}*/
/*                 {% if length_class.length_class_id == shipping_ups_length_class_id %}*/
/*                 <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-length"><span data-toggle="tooltip" title="{{ help_dimension }}">{{ entry_dimension }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <div class="row">*/
/*                 <div class="col-sm-4">*/
/*                   <input type="text" name="shipping_ups_length" value="{{ shipping_ups_length }}" placeholder="{{ entry_length }}" id="input-length" class="form-control" />*/
/*                 </div>*/
/*                 <div class="col-sm-4">*/
/*                   <input type="text" name="shipping_ups_width" value="{{ shipping_ups_width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control" />*/
/*                 </div>*/
/*                 <div class="col-sm-4">*/
/*                   <input type="text" name="shipping_ups_height" value="{{ shipping_ups_height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               {% if error_dimension %}*/
/*               <div class="text-danger">{{ error_dimension }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ups_tax_class_id" id="input-tax-class" class="form-control">*/
/*                 <option value="0">{{ text_none }}</option>*/
/*                 {% for tax_class in tax_classes %}*/
/*                 {% if tax_class.tax_class_id == shipping_ups_tax_class_id %}*/
/*                 <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ups_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 {% if geo_zone.geo_zone_id == shipping_ups_geo_zone_id %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ups_status" id="input-status" class="form-control">*/
/*                 {% if shipping_ups_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="shipping_ups_sort_order" value="{{ shipping_ups_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-debug"><span data-toggle="tooltip" title="{{ help_debug }}">{{ entry_debug }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <select name="shipping_ups_debug" id="input-debug" class="form-control">*/
/*                 {% if shipping_ups_debug %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'shipping_ups_origin\']').on('change', function() {*/
/* 	$('#service > div').hide();	*/
/* 										 */
/* 	$('#' + this.value).show();	*/
/* });*/
/* */
/* $('select[name=\'shipping_ups_origin\']').trigger('change');*/
/* //--></script></div>*/
/* {{ footer }}*/
