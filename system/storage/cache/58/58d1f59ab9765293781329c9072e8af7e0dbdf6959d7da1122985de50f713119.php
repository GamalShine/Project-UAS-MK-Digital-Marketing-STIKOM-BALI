<?php

/* materialize/template/common/cart.twig */
class __TwigTemplate_1d3342afd8f092008274154ae67fb17e6e30eaa5ea1856479fa1a29090dd638a extends Twig_Template
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
        echo "<button type=\"button\" id=\"cart\" data-target=\"modal-cart\" class=\"btn-floating btn-large waves-effect waves-light waves-circle modal-trigger z-depth-4 ";
        echo (isset($context["color_cart"]) ? $context["color_cart"] : null);
        echo "\">
\t<i class=\"material-icons ";
        // line 2
        echo (isset($context["color_cart_text"]) ? $context["color_cart_text"] : null);
        echo "\">shopping_cart</i>
\t<small id=\"cart-total\" class=\"btn-floating z-depth-1 ";
        // line 3
        echo (isset($context["color_cart_total"]) ? $context["color_cart_total"] : null);
        echo " ";
        echo (isset($context["color_cart_total_text"]) ? $context["color_cart_total_text"] : null);
        echo "\">";
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</small>
</button>
<div id=\"modal-cart\" class=\"modal bottom-sheet modal-fixed-footer\">
\t<div id=\"modal-cart-content\" class=\"modal-content\">
\t\t<div id=\"modal-cart-list\" class=\"container\">
\t\t\t<h4 class=\"flow-text text-bold\">";
        // line 8
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</h4>
\t\t\t";
        // line 9
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 10
            echo "\t\t\t<ul class=\"collection z-depth-2\">
\t\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "\t\t\t\t<li class=\"collection-item avatar\">
\t\t\t\t\t";
                // line 13
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    // line 14
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                    echo "\" data-src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"circle lazyload\"></a>
\t\t\t\t\t";
                }
                // line 16
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><span class=\"title\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</span></a> x ";
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>";
                // line 18
                echo $this->getAttribute($context["product"], "total", array());
                echo "</b>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
                // line 20
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 21
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 22
                        echo "\t\t\t\t\t\t<br>
\t\t\t\t\t\t- <small>";
                        // line 23
                        echo $this->getAttribute($context["option"], "name", array());
                        echo ": ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    // line 27
                    echo "\t\t\t\t\t\t<br>
\t\t\t\t\t\t- <small>";
                    // line 28
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo ": ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small>
\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t</p>
\t\t\t\t\t<button onclick=\"cart.remove('";
                // line 31
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "', '";
                echo (isset($context["text_product_removed"]) ? $context["text_product_removed"] : null);
                echo "', '";
                echo (isset($context["text_cancel"]) ? $context["text_cancel"] : null);
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn-floating transparent z-depth-0 waves-effect secondary-content activator\"><i class=\"material-icons black-text\">remove_shopping_cart</i></button>
\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 35
                echo "\t\t\t\t<li class=\"collection-item avatar\">
\t\t\t\t\t<img src=\"";
                // line 36
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"catalog/view/theme/materialize/image/cart-voucher.png\" class=\"circle lazyload\" width=\"42\" height=\"42\">
\t\t\t\t\t<span class=\"title text-bold\">";
                // line 37
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</span>&nbsp;x&nbsp;1
\t\t\t\t\t<button type=\"button\" onclick=\"voucher.remove('";
                // line 38
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn-flat no-padding secondary-content activator black-text\"><i class=\"material-icons\">remove_shopping_cart</i></button>
\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t</ul>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 m6 offset-m6 l5 offset-l7\">
\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t<table class=\"bordered\">
\t\t\t\t\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 47
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
                // line 48
                echo $this->getAttribute($context["total"], "title", array());
                echo ":</th>
\t\t\t\t\t\t\t\t<td>";
                // line 49
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        } else {
            // line 57
            echo "\t\t\t<div class=\"card-panel\">
\t\t\t\t<p class=\"flow-text text-bold\">";
            // line 58
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s4 m3 l2 center\">
\t\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
            // line 61
            echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
            echo "\" data-src=\"catalog/view/theme/materialize/image/cart-empty.png\" alt=\"\" width=\"128\" height=\"128\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s8 m9 l10 grey lighten-3 z-depth-1 comment-body\">
\t\t\t\t\t\t<p>";
            // line 64
            echo (isset($context["text_cat_says"]) ? $context["text_cat_says"] : null);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 69
        echo "\t\t</div>
\t</div>
\t<div class=\"modal-footer grey lighten-3\">
\t\t<div class=\"container\">
\t\t\t<a href=\"";
        // line 73
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "\" class=\"modal-action btn-flat waves-effect waves-default href-underline\" rel=\"nofollow\">";
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "</a>
\t\t</div>
\t</div>
</div>
";
        // line 77
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 78
            echo "<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$('#cart').addClass('pulse');
\t\$('#cart-total').addClass('pulse');
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "materialize/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 78,  244 => 77,  235 => 73,  229 => 69,  221 => 64,  215 => 61,  209 => 58,  206 => 57,  199 => 52,  190 => 49,  186 => 48,  183 => 47,  179 => 46,  172 => 41,  161 => 38,  157 => 37,  153 => 36,  150 => 35,  145 => 34,  126 => 31,  123 => 30,  116 => 28,  113 => 27,  110 => 26,  107 => 25,  97 => 23,  94 => 22,  89 => 21,  87 => 20,  82 => 18,  72 => 16,  58 => 14,  56 => 13,  53 => 12,  49 => 11,  46 => 10,  44 => 9,  40 => 8,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <button type="button" id="cart" data-target="modal-cart" class="btn-floating btn-large waves-effect waves-light waves-circle modal-trigger z-depth-4 {{ color_cart }}">*/
/* 	<i class="material-icons {{ color_cart_text }}">shopping_cart</i>*/
/* 	<small id="cart-total" class="btn-floating z-depth-1 {{ color_cart_total }} {{ color_cart_total_text }}">{{ text_items }}</small>*/
/* </button>*/
/* <div id="modal-cart" class="modal bottom-sheet modal-fixed-footer">*/
/* 	<div id="modal-cart-content" class="modal-content">*/
/* 		<div id="modal-cart-list" class="container">*/
/* 			<h4 class="flow-text text-bold">{{ text_shopping_cart }}</h4>*/
/* 			{% if products or vouchers %}*/
/* 			<ul class="collection z-depth-2">*/
/* 				{% for product in products %}*/
/* 				<li class="collection-item avatar">*/
/* 					{% if product.thumb %}*/
/* 					<a href="{{ product.href }}"><img src="{{ img_loader }}" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="circle lazyload"></a>*/
/* 					{% endif %}*/
/* 					<a href="{{ product.href }}"><span class="title">{{ product.name }}</span></a> x {{ product.quantity }}*/
/* 					<p>*/
/* 						<b>{{ product.total }}</b>*/
/* 						<br>*/
/* 						{% if product.option %}*/
/* 						{% for option in product.option %}*/
/* 						<br>*/
/* 						- <small>{{ option.name }}: {{ option.value }}</small>*/
/* 						{% endfor %}*/
/* 						{% endif %}*/
/* 						{% if product.recurring %}*/
/* 						<br>*/
/* 						- <small>{{ text_recurring }}: {{ product.recurring }}</small>*/
/* 						{% endif %}*/
/* 					</p>*/
/* 					<button onclick="cart.remove('{{ product.cart_id }}', '{{ product.product_id }}', '{{ product.quantity }}', '{{ text_product_removed }}', '{{ text_cancel }}');" title="{{ button_remove }}" class="btn-floating transparent z-depth-0 waves-effect secondary-content activator"><i class="material-icons black-text">remove_shopping_cart</i></button>*/
/* 				</li>*/
/* 				{% endfor %}*/
/* 				{% for voucher in vouchers %}*/
/* 				<li class="collection-item avatar">*/
/* 					<img src="{{ img_loader }}" data-src="catalog/view/theme/materialize/image/cart-voucher.png" class="circle lazyload" width="42" height="42">*/
/* 					<span class="title text-bold">{{ voucher.description }}</span>&nbsp;x&nbsp;1*/
/* 					<button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn-flat no-padding secondary-content activator black-text"><i class="material-icons">remove_shopping_cart</i></button>*/
/* 				</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 			<div class="row">*/
/* 				<div class="col s12 m6 offset-m6 l5 offset-l7">*/
/* 					<div class="card-panel">*/
/* 						<table class="bordered">*/
/* 							{% for total in totals %}*/
/* 							<tr>*/
/* 								<th>{{ total.title }}:</th>*/
/* 								<td>{{ total.text }}</td>*/
/* 							</tr>*/
/* 							{% endfor %}*/
/* 						</table>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% else %}*/
/* 			<div class="card-panel">*/
/* 				<p class="flow-text text-bold">{{ text_empty }}</p>*/
/* 				<div class="row">*/
/* 					<div class="col s4 m3 l2 center">*/
/* 						<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="catalog/view/theme/materialize/image/cart-empty.png" alt="" width="128" height="128">*/
/* 					</div>*/
/* 					<div class="col s8 m9 l10 grey lighten-3 z-depth-1 comment-body">*/
/* 						<p>{{ text_cat_says }}</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="modal-footer grey lighten-3">*/
/* 		<div class="container">*/
/* 			<a href="{{ cart }}" class="modal-action btn-flat waves-effect waves-default href-underline" rel="nofollow">{{ text_cart }}</a>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% if products or vouchers %}*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	$('#cart').addClass('pulse');*/
/* 	$('#cart-total').addClass('pulse');*/
/* });*/
/* </script>*/
/* {% endif %}*/
