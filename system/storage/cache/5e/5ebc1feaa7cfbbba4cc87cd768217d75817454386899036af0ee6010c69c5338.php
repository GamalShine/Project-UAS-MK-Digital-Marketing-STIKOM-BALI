<?php

/* essence/template/product/category.twig */
class __TwigTemplate_be7f7af1818acf18eb8928d19f65aef9192e4574541665c86d3688d347d7cc72 extends Twig_Template
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
        echo "
<div id=\"product-category\" class=\"container-fluid\">
<ul class=\"breadcrumb\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 5
                echo "<li class=\"breadcrumb-item\" aria-current=\"page\"><span class=\"link active\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</span></li>
";
            } elseif (($this->getAttribute(            // line 6
$context["loop"], "revindex0", array()) == 1)) {
                // line 7
                echo "<li class=\"breadcrumb-item\" data-prev>
<a href=\"";
                // line 8
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\" class=\"link\"><span>";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</span></a>
</li>
";
            } else {
                // line 11
                echo "<li class=\"breadcrumb-item\">
<a href=\"";
                // line 12
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\" class=\"link\"><span>";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</span></a>
</li>
";
            }
            // line 14
            echo " ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>
<div class=\"row\">
";
        // line 17
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " ";
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            echo " ";
            $context["class"] = "col-sm-6";
            echo " ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            echo " ";
            $context["class"] = "col-sm-9";
            echo " ";
        } else {
            echo " ";
            $context["class"] = "col-sm-12";
            echo " ";
        }
        // line 18
        echo "<div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
";
        // line 19
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
<h2 class=\"title\">";
        // line 20
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
";
        // line 21
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 22
            echo "<div class=\"row\">
";
            // line 23
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 24
                echo "<div class=\"col-sm-2\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" /></div>
";
            }
            // line 25
            echo " ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 26
                echo "<div class=\"col-sm-10\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
";
            }
            // line 28
            echo "</div>
<hr />
";
        }
        // line 30
        echo " ";
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 31
            echo "<h3>";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
";
            // line 32
            if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) <= 5)) {
                // line 33
                echo "<div class=\"row\">
<div class=\"col-sm-3\">
<ul>
";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 37
                    echo "<li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "</ul>
</div>
</div>
";
            } else {
                // line 43
                echo "<div class=\"row\">
";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["categories"]) ? $context["categories"] : null), twig_round((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 45
                    echo "<div class=\"col-sm-3\">
<ul>
";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 48
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "</ul>
</div>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "</div>
<br />
";
            }
            // line 55
            echo " ";
        }
        echo " ";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 56
            echo "<div class=\"col-md-12\">
<div class=\"btn-group btn-group-sm pull-right\">
<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 58
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
<line x1=\"8\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
<line x1=\"8\" y1=\"12\" x2=\"21\" y2=\"12\"></line>
<line x1=\"8\" y1=\"18\" x2=\"21\" y2=\"18\"></line>
<line x1=\"3\" y1=\"6\" x2=\"3.01\" y2=\"6\"></line>
<line x1=\"3\" y1=\"12\" x2=\"3.01\" y2=\"12\"></line>
<line x1=\"3\" y1=\"18\" x2=\"3.01\" y2=\"18\"></line>
</svg>
</button>
<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 68
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
<rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"></rect>
<rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"></rect>
<rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"></rect>
<rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"></rect>
</svg>
</button>
</div>
</div>
<div class=\"row\">
";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 80
                echo "<div class=\"product-layout product-list col-xs-12\">
<div class=\"product-thumb transition\">
<div class=\"image\">
<a href=\"";
                // line 83
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive ";
                if (($this->getAttribute($context["product"], "quantity", array()) < 1)) {
                    echo "nostock";
                }
                echo "\" /></a>
</div>
<div class=\"caption\">
<h4><a href=\"";
                // line 86
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
<p>";
                // line 87
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
";
                // line 88
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 89
                    echo "<p class=\"price\">
";
                    // line 90
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        echo " ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " ";
                    } else {
                        // line 91
                        echo "<span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
";
                    }
                    // line 92
                    echo " ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 93
                        echo "<span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
";
                    }
                    // line 95
                    echo "</p>
";
                }
                // line 97
                echo "</div>
<div class=\"button-group\">
<button type=\"button\" onclick=\"cart.add('";
                // line 99
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" ";
                if (($this->getAttribute($context["product"], "quantity", array()) < 1)) {
                    echo "class=\"nobuy\" disabled";
                }
                echo ">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" >
<path d=\"M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z\"></path>
<line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line>
<path d=\"M16 10a4 4 0 0 1-8 0\"></path>
</svg>
<span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 105
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span>
</button>
<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 107
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
<path d=\"M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z\"></path>
</svg>
</button>
<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 112
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
<line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"10\"></line>
<line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"4\"></line>
<line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"14\"></line>
</svg>
</button>
</div>
</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "</div>
<div class=\"row hidden\">
<div class=\"col-sm-6 text-left\">";
            // line 125
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
<div class=\"col-sm-6 text-right\">";
            // line 126
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
</div>
";
        }
        // line 128
        echo " ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 129
            echo "<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
<div class=\"buttons\">
<div class=\"pull-right\"><a href=\"";
            // line 131
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
</div>
";
        }
        // line 133
        echo " ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
</div>
";
        // line 135
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
</div>
</div>
";
        // line 138
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "essence/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 138,  419 => 135,  413 => 133,  405 => 131,  399 => 129,  396 => 128,  390 => 126,  386 => 125,  382 => 123,  363 => 112,  353 => 107,  348 => 105,  335 => 99,  331 => 97,  327 => 95,  319 => 93,  316 => 92,  308 => 91,  302 => 90,  299 => 89,  297 => 88,  293 => 87,  287 => 86,  271 => 83,  266 => 80,  262 => 79,  248 => 68,  235 => 58,  231 => 56,  226 => 55,  221 => 53,  213 => 50,  202 => 48,  198 => 47,  194 => 45,  190 => 44,  187 => 43,  181 => 39,  170 => 37,  166 => 36,  161 => 33,  159 => 32,  154 => 31,  151 => 30,  146 => 28,  140 => 26,  137 => 25,  127 => 24,  125 => 23,  122 => 22,  120 => 21,  116 => 20,  112 => 19,  107 => 18,  91 => 17,  87 => 15,  73 => 14,  65 => 12,  62 => 11,  54 => 8,  51 => 7,  49 => 6,  44 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container-fluid">*/
/* <ul class="breadcrumb">*/
/* {% for breadcrumb in breadcrumbs %} {% if loop.last %}*/
/* <li class="breadcrumb-item" aria-current="page"><span class="link active">{{ breadcrumb.text }}</span></li>*/
/* {% elseif loop.revindex0 == 1 %}*/
/* <li class="breadcrumb-item" data-prev>*/
/* <a href="{{ breadcrumb.href }}" class="link"><span>{{ breadcrumb.text }}</span></a>*/
/* </li>*/
/* {% else %}*/
/* <li class="breadcrumb-item">*/
/* <a href="{{ breadcrumb.href }}" class="link"><span>{{ breadcrumb.text }}</span></a>*/
/* </li>*/
/* {% endif %} {% endfor %}*/
/* </ul>*/
/* <div class="row">*/
/* {{ column_left }} {% if column_left and column_right %} {% set class = 'col-sm-6' %} {% elseif column_left or column_right %} {% set class = 'col-sm-9' %} {% else %} {% set class = 'col-sm-12' %} {% endif %}*/
/* <div id="content" class="{{ class }}">*/
/* {{ content_top }}*/
/* <h2 class="title">{{ heading_title }}</h2>*/
/* {% if thumb or description %}*/
/* <div class="row">*/
/* {% if thumb %}*/
/* <div class="col-sm-2"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/* {% endif %} {% if description %}*/
/* <div class="col-sm-10">{{ description }}</div>*/
/* {% endif %}*/
/* </div>*/
/* <hr />*/
/* {% endif %} {% if categories %}*/
/* <h3>{{ text_refine }}</h3>*/
/* {% if categories|length <= 5 %}*/
/* <div class="row">*/
/* <div class="col-sm-3">*/
/* <ul>*/
/* {% for category in categories %}*/
/* <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/* {% endfor %}*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* {% else %}*/
/* <div class="row">*/
/* {% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}*/
/* <div class="col-sm-3">*/
/* <ul>*/
/* {% for child in category %}*/
/* <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/* {% endfor %}*/
/* </ul>*/
/* </div>*/
/* {% endfor %}*/
/* </div>*/
/* <br />*/
/* {% endif %} {% endif %} {% if products %}*/
/* <div class="col-md-12">*/
/* <div class="btn-group btn-group-sm pull-right">*/
/* <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}">*/
/* <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">*/
/* <line x1="8" y1="6" x2="21" y2="6"></line>*/
/* <line x1="8" y1="12" x2="21" y2="12"></line>*/
/* <line x1="8" y1="18" x2="21" y2="18"></line>*/
/* <line x1="3" y1="6" x2="3.01" y2="6"></line>*/
/* <line x1="3" y1="12" x2="3.01" y2="12"></line>*/
/* <line x1="3" y1="18" x2="3.01" y2="18"></line>*/
/* </svg>*/
/* </button>*/
/* <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}">*/
/* <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">*/
/* <rect x="3" y="3" width="7" height="7"></rect>*/
/* <rect x="14" y="3" width="7" height="7"></rect>*/
/* <rect x="14" y="14" width="7" height="7"></rect>*/
/* <rect x="3" y="14" width="7" height="7"></rect>*/
/* </svg>*/
/* </button>*/
/* </div>*/
/* </div>*/
/* <div class="row">*/
/* {% for product in products %}*/
/* <div class="product-layout product-list col-xs-12">*/
/* <div class="product-thumb transition">*/
/* <div class="image">*/
/* <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive {% if (product.quantity < 1) %}nostock{% endif %}" /></a>*/
/* </div>*/
/* <div class="caption">*/
/* <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* <p>{{ product.description }}</p>*/
/* {% if product.price %}*/
/* <p class="price">*/
/* {% if not product.special %} {{ product.price }} {% else %}*/
/* <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/* {% endif %} {% if product.tax %}*/
/* <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* {% endif %}*/
/* </p>*/
/* {% endif %}*/
/* </div>*/
/* <div class="button-group">*/
/* <button type="button" onclick="cart.add('{{ product.product_id }}');" {% if (product.quantity < 1) %}class="nobuy" disabled{% endif %}>*/
/* <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >*/
/* <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>*/
/* <line x1="3" y1="6" x2="21" y2="6"></line>*/
/* <path d="M16 10a4 4 0 0 1-8 0"></path>*/
/* </svg>*/
/* <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span>*/
/* </button>*/
/* <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');">*/
/* <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">*/
/* <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>*/
/* </svg>*/
/* </button>*/
/* <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');">*/
/* <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">*/
/* <line x1="18" y1="20" x2="18" y2="10"></line>*/
/* <line x1="12" y1="20" x2="12" y2="4"></line>*/
/* <line x1="6" y1="20" x2="6" y2="14"></line>*/
/* </svg>*/
/* </button>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {% endfor %}*/
/* </div>*/
/* <div class="row hidden">*/
/* <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/* <div class="col-sm-6 text-right">{{ results }}</div>*/
/* </div>*/
/* {% endif %} {% if not categories and not products %}*/
/* <p>{{ text_empty }}</p>*/
/* <div class="buttons">*/
/* <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/* </div>*/
/* {% endif %} {{ content_bottom }}*/
/* </div>*/
/* {{ column_right }}*/
/* </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
