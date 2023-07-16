<?php

/* theme--5004a/template/common/menu.twig */
class __TwigTemplate_3df56d1bb0ab8d64b3e650a21ca8b560832507ed9ca9d870d5410a7747d6b751 extends Twig_Template
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
        echo "<ul class=\"ttr_menu_items nav navbar-nav nav-center\">
";
        // line 2
        $context["key"] = 1;
        echo " ";
        $context["child_count"] = twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null));
        // line 3
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            $context["cat_id"] = $this->getAttribute($context["category"], "category_id", array());
            // line 5
            if ($this->getAttribute($context["category"], "children", array())) {
                // line 6
                if (((isset($context["path"]) ? $context["path"] : null) == (isset($context["cat_id"]) ? $context["cat_id"] : null))) {
                    // line 7
                    echo "<li class=\"ttr_menu_items_parent dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"ttr_menu_items_parent_link_active_arrow dropdown-toggle\" data-toggle=\"dropdown\"><span class=\" menuchildicon\"></span>";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo " </a>
";
                } else {
                    // line 9
                    echo "<li class=\"ttr_menu_items_parent dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"ttr_menu_items_parent_link_arrow dropdown-toggle\" data-toggle=\"dropdown\"><span class=\" menuchildicon\"></span>";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo " </a>
";
                }
                // line 11
                echo "<div id=\"dropdown-container\"class=\"dropdown-menu oc_menu\">
";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                    // line 13
                    echo "<ul class=\"child dropdown-menu\"> 
";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["children"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 15
                        echo "<li class = \"dropdown dropdown-submenu\"><a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\"><span class=\"menuchildicon\" ></span>";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a><hr class=\"separator\"></li>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "<li class = \"dropdown dropdown-submenu\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
</ul>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "</div>
";
                // line 21
                if (((isset($context["key"]) ? $context["key"] : null) != (isset($context["child_count"]) ? $context["child_count"] : null))) {
                    // line 22
                    echo "<hr class=\"horiz_separator\" >
";
                }
                // line 24
                echo "</li>
";
            } else {
                // line 26
                if (((isset($context["path"]) ? $context["path"] : null) == (isset($context["cat_id"]) ? $context["cat_id"] : null))) {
                    // line 27
                    echo "<li class=\"ttr_menu_items_parent dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"ttr_menu_items_parent_link_active\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>";
                    if (((isset($context["key"]) ? $context["key"] : null) != (isset($context["child_count"]) ? $context["child_count"] : null))) {
                        echo "<hr class=\" horiz_separator\" >";
                    }
                    echo "</li>
";
                } else {
                    // line 29
                    echo "<li class=\"ttr_menu_items_parent dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"ttr_menu_items_parent_link\"><span class=\"menuchildicon\" ></span>";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>";
                    if (((isset($context["key"]) ? $context["key"] : null) != (isset($context["child_count"]) ? $context["child_count"] : null))) {
                        echo "<hr class=\" horiz_separator\" >";
                    }
                    echo "</li>
";
                }
            }
            // line 32
            $context["key"] = ((isset($context["key"]) ? $context["key"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "theme--5004a/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  132 => 32,  119 => 29,  107 => 27,  105 => 26,  101 => 24,  97 => 22,  95 => 21,  92 => 20,  78 => 17,  67 => 15,  63 => 14,  60 => 13,  56 => 12,  53 => 11,  45 => 9,  37 => 7,  35 => 6,  33 => 5,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="ttr_menu_items nav navbar-nav nav-center">*/
/* {% set key = 1 %} {% set child_count = categories|length %}*/
/*  {% for category in categories %}*/
/* {% set cat_id = category.category_id %}*/
/* {% if category.children %}*/
/* {% if path == cat_id %}*/
/* <li class="ttr_menu_items_parent dropdown"><a href="{{ category.href }}" class="ttr_menu_items_parent_link_active_arrow dropdown-toggle" data-toggle="dropdown"><span class=" menuchildicon"></span>{{ category.name }} </a>*/
/* {% else %}*/
/* <li class="ttr_menu_items_parent dropdown"><a href="{{ category.href }}" class="ttr_menu_items_parent_link_arrow dropdown-toggle" data-toggle="dropdown"><span class=" menuchildicon"></span>{{ category.name }} </a>*/
/* {% endif %}*/
/* <div id="dropdown-container"class="dropdown-menu oc_menu">*/
/* {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/* <ul class="child dropdown-menu"> */
/* {% for child in children %}*/
/* <li class = "dropdown dropdown-submenu"><a href="{{ child.href }}"><span class="menuchildicon" ></span>{{ child.name }}</a><hr class="separator"></li>*/
/* {% endfor %}*/
/* <li class = "dropdown dropdown-submenu"><a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a></li>*/
/* </ul>*/
/* {% endfor %}*/
/* </div>*/
/* {% if key != child_count %}*/
/* <hr class="horiz_separator" >*/
/* {% endif %}*/
/* </li>*/
/* {% else %}*/
/* {% if path == cat_id %}*/
/* <li class="ttr_menu_items_parent dropdown"><a href="{{ category.href }}" class="ttr_menu_items_parent_link_active">{{ category.name }}</a>{% if key != child_count %}<hr class=" horiz_separator" >{% endif %}</li>*/
/* {% else %}*/
/* <li class="ttr_menu_items_parent dropdown"><a href="{{ category.href }}" class="ttr_menu_items_parent_link"><span class="menuchildicon" ></span>{{ category.name }}</a>{% if key != child_count %}<hr class=" horiz_separator" >{% endif %}</li>*/
/* {% endif %}*/
/* {% endif %}*/
/* {% set key = key + 1 %}*/
/* {% endfor %}*/
/* </ul>*/
/* */
