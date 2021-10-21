<?php

/* default/template/extension/captcha/basic.twig */
class __TwigTemplate_ac0ae5469cdee7cce5d0e2b5b62f757c03205df2dba12656e567e2caa7981479 extends Twig_Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo (isset($context["text_captcha"]) ? $context["text_captcha"] : null);
        echo "</legend>
  <div class=\"form-group required\">
    ";
        // line 4
        if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : null), 0, 9) == "checkout/")) {
            // line 5
            echo "    <label class=\"control-label\" for=\"input-payment-captcha\">";
            echo (isset($context["entry_captcha"]) ? $context["entry_captcha"] : null);
            echo "</label>
    <input type=\"text\" name=\"captcha\" id=\"input-payment-captcha\" class=\"form-control\" autocomplete=\"off\" />
    <img src=\"index.php?route=extension/captcha/basic/captcha\" alt=\"\" />
    ";
        } else {
            // line 9
            echo "    <label class=\"col-sm-2 control-label\" for=\"input-captcha\">";
            echo (isset($context["entry_captcha"]) ? $context["entry_captcha"] : null);
            echo "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"captcha\" id=\"input-captcha\" class=\"form-control\" />
      <img src=\"index.php?route=extension/captcha/basic/captcha\" alt=\"\" />
      ";
            // line 13
            if ((isset($context["error_captcha"]) ? $context["error_captcha"] : null)) {
                // line 14
                echo "      <div class=\"text-danger\">";
                echo (isset($context["error_captcha"]) ? $context["error_captcha"] : null);
                echo "</div>
      ";
            }
            // line 16
            echo "    </div>
    ";
        }
        // line 18
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/captcha/basic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  53 => 16,  47 => 14,  45 => 13,  37 => 9,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <fieldset>*/
/*   <legend>{{ text_captcha }}</legend>*/
/*   <div class="form-group required">*/
/*     {% if route|slice(0, 9) == 'checkout/' %}*/
/*     <label class="control-label" for="input-payment-captcha">{{ entry_captcha }}</label>*/
/*     <input type="text" name="captcha" id="input-payment-captcha" class="form-control" autocomplete="off" />*/
/*     <img src="index.php?route=extension/captcha/basic/captcha" alt="" />*/
/*     {% else %}*/
/*     <label class="col-sm-2 control-label" for="input-captcha">{{ entry_captcha }}</label>*/
/*     <div class="col-sm-10">*/
/*       <input type="text" name="captcha" id="input-captcha" class="form-control" />*/
/*       <img src="index.php?route=extension/captcha/basic/captcha" alt="" />*/
/*       {% if error_captcha %}*/
/*       <div class="text-danger">{{ error_captcha }}</div>*/
/*       {% endif %}*/
/*     </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </fieldset>*/
/* */
