<?php

/* marketing/coupon_history.twig */
class __TwigTemplate_3b3b78392e182f04a7aa489ce6ca5121527e169240424b44121f2c9afe53e3b0 extends Twig_Template
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
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-right\">";
        // line 5
        echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 6
        echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
        echo "</td>
        <td class=\"text-right\">";
        // line 7
        echo (isset($context["column_amount"]) ? $context["column_amount"] : null);
        echo "</td>
        <td class=\"text-left\">";
        // line 8
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 12
        if ((isset($context["histories"]) ? $context["histories"] : null)) {
            // line 13
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 14
                echo "      <tr>
        <td class=\"text-right\">";
                // line 15
                echo $this->getAttribute($context["history"], "order_id", array());
                echo "</td>
        <td class=\"text-left\">";
                // line 16
                echo $this->getAttribute($context["history"], "customer", array());
                echo "</td>
        <td class=\"text-right\">";
                // line 17
                echo $this->getAttribute($context["history"], "amount", array());
                echo "</td>
        <td class=\"text-left\">";
                // line 18
                echo $this->getAttribute($context["history"], "date_added", array());
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      ";
        } else {
            // line 22
            echo "      <tr>
        <td class=\"text-center\" colspan=\"4\">";
            // line 23
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
      ";
        }
        // line 26
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 30
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 31
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "marketing/coupon_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  93 => 30,  87 => 26,  81 => 23,  78 => 22,  75 => 21,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  51 => 14,  46 => 13,  44 => 12,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="table-responsive">*/
/*   <table class="table table-bordered table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-right">{{ column_order_id }}</td>*/
/*         <td class="text-left">{{ column_customer }}</td>*/
/*         <td class="text-right">{{ column_amount }}</td>*/
/*         <td class="text-left">{{ column_date_added }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if histories %}*/
/*       {% for history in histories %}*/
/*       <tr>*/
/*         <td class="text-right">{{ history.order_id }}</td>*/
/*         <td class="text-left">{{ history.customer }}</td>*/
/*         <td class="text-right">{{ history.amount }}</td>*/
/*         <td class="text-left">{{ history.date_added }}</td>*/
/*       </tr>*/
/*       {% endfor %}*/
/*       {% else %}*/
/*       <tr>*/
/*         <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*       </tr>*/
/*       {% endif %}*/
/*     </tbody>*/
/*   </table>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*   <div class="col-sm-6 text-right">{{ results }}</div>*/
/* </div>*/
/* */
