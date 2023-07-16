<?php

/* essence/template/extension/module/featured.twig */
class __TwigTemplate_3702f0efc2c80cb9ee50e287825f3dc1071375bcd06e3c08363c0ef190dcec14 extends Twig_Template
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
        echo "<h3 class=\"title\">";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
<div class=\"row\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "<div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6\">
<div class=\"product-thumb transition\">
<div class=\"image\">
<a href=\"";
            // line 7
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
            // line 10
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
<p>";
            // line 11
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
";
            // line 12
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 13
                echo "<p class=\"price\">
";
                // line 14
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo " ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo " ";
                } else {
                    // line 15
                    echo "<span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
";
                }
                // line 16
                echo " ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 17
                    echo "<span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
";
                }
                // line 19
                echo "</p>
";
            }
            // line 21
            echo "</div>
<div class=\"button-group\">
<button type=\"button\" onclick=\"cart.add('";
            // line 23
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
            // line 29
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span>
</button>
<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 31
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
<path d=\"M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z\"></path>
</svg>
</button>
<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 36
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
        // line 47
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "essence/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 47,  126 => 36,  116 => 31,  111 => 29,  98 => 23,  94 => 21,  90 => 19,  82 => 17,  79 => 16,  71 => 15,  65 => 14,  62 => 13,  60 => 12,  56 => 11,  50 => 10,  34 => 7,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <h3 class="title">{{ heading_title }}</h3>*/
/* <div class="row">*/
/* {% for product in products %}*/
/* <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6">*/
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
/* */
