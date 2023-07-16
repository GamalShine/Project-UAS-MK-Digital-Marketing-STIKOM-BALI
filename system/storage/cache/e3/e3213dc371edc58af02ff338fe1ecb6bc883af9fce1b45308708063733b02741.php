<?php

/* materialize/template/common/menu.twig */
class __TwigTemplate_2903f376f33a114e3b8f6a49173245fc82c4a373f9f445864cc824b70de75cb0 extends Twig_Template
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
            echo "<a id=\"main-dd-nav\" class=\"dropdown-trigger text-uppercase ";
            echo (isset($context["color_navigation_text"]) ? $context["color_navigation_text"] : null);
            echo "\" rel=\"nofollow\" data-target=\"dropdown-nav-top\">";
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</a>
<ul id=\"dropdown-nav-top\" class=\"dropdown-content z-depth-5\" itemscope itemtype=\"http://www.schema.org/SiteNavigationElement\">
\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                echo "\t<li><a class=\"waves-effect\" href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" itemprop=\"url\"><span itemprop=\"name\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</span></a></li>
\t<li class=\"divider\"></li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "materialize/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  33 => 5,  29 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <a id="main-dd-nav" class="dropdown-trigger text-uppercase {{ color_navigation_text }}" rel="nofollow" data-target="dropdown-nav-top">{{ text_category }}</a>*/
/* <ul id="dropdown-nav-top" class="dropdown-content z-depth-5" itemscope itemtype="http://www.schema.org/SiteNavigationElement">*/
/* 	{% for category in categories %}*/
/* 	<li><a class="waves-effect" href="{{ category.href }}" itemprop="url"><span itemprop="name">{{ category.name }}</span></a></li>*/
/* 	<li class="divider"></li>*/
/* 	{% endfor %}*/
/* </ul>*/
/* {% endif %}*/
