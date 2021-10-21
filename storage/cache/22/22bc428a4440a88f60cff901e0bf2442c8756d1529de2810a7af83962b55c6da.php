<?php

/* yoodream/template/common/menu.twig */
class __TwigTemplate_49b08acf26e0565ae44b4a1c4399335ce1ab924476e68fb769b6e097bb91ff31 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<div class=\"wrap-menu \">
  <nav id=\"menu\" class=\"navbar container\">
\t<div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 4
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</span>
\t  <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
\t</div>
\t<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
\t  <ul class=\"nav navbar-nav\">
\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                echo "\t\t";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 11
                    echo "\t\t<li class=\"dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
\t\t  <div class=\"dropdown-menu\">
\t\t\t<div class=\"dropdown-inner\"> ";
                    // line 13
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 14
                        echo "\t\t\t  <ul class=\"list-unstyled\">
\t\t\t\t";
                        // line 15
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 16
                            echo "\t\t\t\t<li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 18
                        echo "\t\t\t  </ul>
\t\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "</div>
\t\t\t<a href=\"";
                    // line 20
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a> </div>
\t\t</li>
\t\t";
                } else {
                    // line 23
                    echo "\t\t<li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
\t\t";
                }
                // line 25
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t  </ul>
\t</div>
  </nav>
</div>
";
        }
        // line 30
        echo " ";
    }

    public function getTemplateName()
    {
        return "yoodream/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  104 => 26,  98 => 25,  90 => 23,  80 => 20,  77 => 19,  70 => 18,  59 => 16,  55 => 15,  52 => 14,  48 => 13,  40 => 11,  37 => 10,  33 => 9,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <div class="wrap-menu ">*/
/*   <nav id="menu" class="navbar container">*/
/* 	<div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/* 	  <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/* 	</div>*/
/* 	<div class="collapse navbar-collapse navbar-ex1-collapse">*/
/* 	  <ul class="nav navbar-nav">*/
/* 		{% for category in categories %}*/
/* 		{% if category.children %}*/
/* 		<li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/* 		  <div class="dropdown-menu">*/
/* 			<div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/* 			  <ul class="list-unstyled">*/
/* 				{% for child in children %}*/
/* 				<li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/* 				{% endfor %}*/
/* 			  </ul>*/
/* 			  {% endfor %}</div>*/
/* 			<a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a> </div>*/
/* 		</li>*/
/* 		{% else %}*/
/* 		<li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/* 		{% endif %}*/
/* 		{% endfor %}*/
/* 	  </ul>*/
/* 	</div>*/
/*   </nav>*/
/* </div>*/
/* {% endif %} */
