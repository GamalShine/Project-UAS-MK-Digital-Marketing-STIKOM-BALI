<?php

/* essence/template/common/menu.twig */
class __TwigTemplate_d10ccbc4054e36dd2560f72edc804721afeb48ac16cec96e43e38e0ee9169043 extends Twig_Template
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
            echo "   <ul class=\"list-inline menu\">
    <button type=\"button\" class=\"hidden-lg hidden-md hidden-sm\" id=\"mob-menu-close\">
                       <span aria-hidden=\"true\">&times;</span>
                     </button>
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 7
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "      </ul>
 ";
        }
        // line 10
        echo " ";
    }

    public function getTemplateName()
    {
        return "essence/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  42 => 9,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/*    <ul class="list-inline menu">*/
/*     <button type="button" class="hidden-lg hidden-md hidden-sm" id="mob-menu-close">*/
/*                        <span aria-hidden="true">&times;</span>*/
/*                      </button>*/
/*         {% for category in categories %}*/
/*         <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*  {% endif %} */
