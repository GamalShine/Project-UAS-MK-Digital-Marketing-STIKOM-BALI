<?php

/* materialize/template/extension/module/featured.twig */
class __TwigTemplate_77a13a8f99140053b40690dad372eaedd8b27989c7d0460240c43aa73d8709cd extends Twig_Template
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
        echo "<section class=\"section href-underline\">
\t<h2>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
\t<div class=\"row\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "\t\t<div class=\"col s12 m6 xl4\">
\t\t\t<div class=\"card sticky-action large hoverable\">
\t\t\t\t";
            // line 7
            if ($this->getAttribute($context["product"], "labels", array())) {
                // line 8
                echo "\t\t\t\t<ul class=\"labels-wrap\">
\t\t\t\t\t";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                    // line 10
                    echo "\t\t\t\t\t<li class=\"labels-wrap__item\"><span class=\"waves-effect badge ";
                    echo $this->getAttribute($context["label"], "color", array());
                    echo " ";
                    echo $this->getAttribute($context["label"], "color_text", array());
                    echo "\">";
                    echo $this->getAttribute($context["label"], "name", array());
                    echo "</span></li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 14
            echo "\t\t\t\t";
            if ($this->getAttribute($context["product"], "special", array())) {
                echo "<span class=\"white-text badge red lighten-1 percent\">";
                echo (isset($context["text_percent"]) ? $context["text_percent"] : null);
                echo " ";
                echo $this->getAttribute($context["product"], "percent_discount", array());
                echo "%</span>";
            }
            // line 15
            echo "\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t<i class=\"material-icons waves-effect waves-circle close-icon activator\">more_vert</i>
\t\t\t\t\t<a href=\"";
            // line 17
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img class=\"responsive-img lazyload\" src=\"";
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-content center-align\">
\t\t\t\t\t<span class=\"card-title\"><a href=\"";
            // line 20
            echo $this->getAttribute($context["product"], "href", array());
            echo "\" class=\"grey-text text-darken-4\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></span>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-action center-align grey lighten-5\">
\t\t\t\t\t";
            // line 23
            if ($this->getAttribute($context["product"], "add_cart", array())) {
                // line 24
                echo "\t\t\t\t\t\t<button class=\"btn btn-floating btn-large waves-effect waves-light red add-cart\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t\t<button class=\"btn btn-floating btn-large add-cart\" disabled=\"disabled\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 29
                echo "\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 30
                    echo "\t\t\t\t\t\t\t<span class=\"card-price\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t\t<span class=\"card-price old-price grey-text\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
\t\t\t\t\t\t\t<span class=\"card-price red-text text-darken-2\">";
                    // line 33
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 36
                    echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<span class=\"grey lighten-5\">
\t\t\t\t\t\t\t";
            // line 42
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 43
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 47
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 49
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"";
            // line 59
            echo $this->getAttribute($context["product"], "href", array());
            echo "\" class=\"btn waves-effect waves-light red width-max\">";
            echo (isset($context["text_more_detailed"]) ? $context["text_more_detailed"] : null);
            echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-reveal\">
\t\t\t\t\t<span class=\"card-title\"><a href=\"";
            // line 62
            echo $this->getAttribute($context["product"], "href", array());
            echo "\" class=\"grey-text text-darken-4\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a><i class=\"material-icons waves-effect waves-circle close-icon\">close</i></span>
\t\t\t\t\t<p>";
            // line 63
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 68,  204 => 63,  198 => 62,  190 => 59,  186 => 57,  178 => 51,  175 => 50,  169 => 49,  165 => 47,  161 => 45,  158 => 44,  153 => 43,  151 => 42,  146 => 39,  143 => 38,  135 => 36,  132 => 35,  127 => 33,  122 => 32,  116 => 30,  113 => 29,  110 => 28,  106 => 26,  98 => 24,  96 => 23,  88 => 20,  74 => 17,  70 => 15,  61 => 14,  57 => 12,  44 => 10,  40 => 9,  37 => 8,  35 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <section class="section href-underline">*/
/* 	<h2>{{ heading_title }}</h2>*/
/* 	<div class="row">*/
/* 		{% for product in products %}*/
/* 		<div class="col s12 m6 xl4">*/
/* 			<div class="card sticky-action large hoverable">*/
/* 				{% if product.labels %}*/
/* 				<ul class="labels-wrap">*/
/* 					{% for label in product.labels %}*/
/* 					<li class="labels-wrap__item"><span class="waves-effect badge {{ label.color }} {{ label.color_text }}">{{ label.name }}</span></li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 				{% endif %}*/
/* 				{% if product.special %}<span class="white-text badge red lighten-1 percent">{{ text_percent }} {{ product.percent_discount }}%</span>{% endif %}*/
/* 				<div class="card-image">*/
/* 					<i class="material-icons waves-effect waves-circle close-icon activator">more_vert</i>*/
/* 					<a href="{{ product.href }}"><img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"></a>*/
/* 				</div>*/
/* 				<div class="card-content center-align">*/
/* 					<span class="card-title"><a href="{{ product.href }}" class="grey-text text-darken-4">{{ product.name }}</a></span>*/
/* 				</div>*/
/* 				<div class="card-action center-align grey lighten-5">*/
/* 					{% if product.add_cart %}*/
/* 						<button class="btn btn-floating btn-large waves-effect waves-light red add-cart" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}');"><i class="material-icons">add_shopping_cart</i></button>*/
/* 					{% else %}*/
/* 						<button class="btn btn-floating btn-large add-cart" disabled="disabled"><i class="material-icons">add_shopping_cart</i></button>*/
/* 					{% endif %}*/
/* 					{% if product.price %}*/
/* 						{% if not product.special %}*/
/* 							<span class="card-price">{{ product.price }}</span>*/
/* 						{% else %}*/
/* 							<span class="card-price old-price grey-text">{{ product.price }}</span>*/
/* 							<span class="card-price red-text text-darken-2">{{ product.special }}</span>*/
/* 						{% endif %}*/
/* 						{% if product.tax %}*/
/* 							<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 					<div class="rating">*/
/* 						<hr>*/
/* 						<span class="grey lighten-5">*/
/* 							{% if product.rating %}*/
/* 								{% for i in 1..5 %}*/
/* 									{% if product.rating < i %}*/
/* 									<i class="material-icons">star_border</i>*/
/* 									{% else %}*/
/* 									<i class="material-icons">star</i>*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 							{% else %}*/
/* 								<i class="material-icons">star_border</i>*/
/* 								<i class="material-icons">star_border</i>*/
/* 								<i class="material-icons">star_border</i>*/
/* 								<i class="material-icons">star_border</i>*/
/* 								<i class="material-icons">star_border</i>*/
/* 							{% endif %}*/
/* 						</span>*/
/* 					</div>*/
/* 					<a href="{{ product.href }}" class="btn waves-effect waves-light red width-max">{{ text_more_detailed }}</a>*/
/* 				</div>*/
/* 				<div class="card-reveal">*/
/* 					<span class="card-title"><a href="{{ product.href }}" class="grey-text text-darken-4">{{ product.name }}</a><i class="material-icons waves-effect waves-circle close-icon">close</i></span>*/
/* 					<p>{{ product.description }}</p>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* </section>*/
