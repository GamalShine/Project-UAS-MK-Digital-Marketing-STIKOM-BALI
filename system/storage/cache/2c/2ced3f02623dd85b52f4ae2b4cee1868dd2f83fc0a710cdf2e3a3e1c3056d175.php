<?php

/* essence/template/common/cart.twig */
class __TwigTemplate_d3fa4ccd6e22363b7c3cd00f84ee86dab04ff416c0a4f1803cddf8026b442caf extends Twig_Template
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
        echo "<div id=\"cart\">
  <button type=\"button\" data-toggle=\"modal\" data-target=\"#cartmodal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon-shopping-bag\"><path d=\"M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z\"></path><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><path d=\"M16 10a4 4 0 0 1-8 0\"></path></svg><span id=\"cart-total\">";
        // line 2
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span></button>
  <div class=\"modal fade\" tabindex=\"-1\" id=\"cartmodal\" role=\"dialog\" >
  <div class=\"modal-dialog modal-block\" role=\"document\">
  <button type=\"button\" data-dismiss=\"modal\" aria-label=\"close\" class=\"modal-close\"><span aria-hidden=\"true\">&times;</span></button>
    <div class=\"menu-modal\">
  <ul class=\"cart-block\">
    ";
        // line 8
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 9
            echo "    <li>
      <table class=\"table cart-table\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "        <tr class=\"flex-center\">
          <td class=\"text-center\">";
                // line 13
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 14
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 15
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 16
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "            ";
                }
                // line 18
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
            - <small>";
                    // line 19
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
      
          <td class=\"text-right\">";
                // line 21
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 22
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"cart-close\"><span aria-hidden=\"true\">&times;</span></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 26
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 28
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
   
          <td class=\"text-right\">";
                // line 30
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 31
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"cart-close\"><span aria-hidden=\"true\">&times;</span></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table cart-total\">
          ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 40
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 41
                echo $this->getAttribute($context["total"], "title", array());
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 42
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </table>
        <p class=\"text-center\">
\t\t<a href=\"";
            // line 47
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</a></br></br>
\t\t<a href=\"";
            // line 48
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\" class=\"btn btn-default\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a></p>
      </div>
    </li>
    ";
        } else {
            // line 52
            echo "    <li>
      <p class=\"text-center cart-text\">";
            // line 53
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 56
        echo "  </ul>
    </div>
  </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "essence/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 56,  190 => 53,  187 => 52,  178 => 48,  172 => 47,  168 => 45,  159 => 42,  155 => 41,  152 => 40,  148 => 39,  141 => 34,  130 => 31,  126 => 30,  121 => 28,  117 => 26,  112 => 25,  101 => 22,  97 => 21,  88 => 19,  83 => 18,  80 => 17,  71 => 16,  64 => 15,  58 => 14,  44 => 13,  41 => 12,  37 => 11,  33 => 9,  31 => 8,  22 => 2,  19 => 1,);
    }
}
/* <div id="cart">*/
/*   <button type="button" data-toggle="modal" data-target="#cartmodal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg><span id="cart-total">{{ text_items }}</span></button>*/
/*   <div class="modal fade" tabindex="-1" id="cartmodal" role="dialog" >*/
/*   <div class="modal-dialog modal-block" role="document">*/
/*   <button type="button" data-dismiss="modal" aria-label="close" class="modal-close"><span aria-hidden="true">&times;</span></button>*/
/*     <div class="menu-modal">*/
/*   <ul class="cart-block">*/
/*     {% if products or vouchers %}*/
/*     <li>*/
/*       <table class="table cart-table">*/
/*         {% for product in products %}*/
/*         <tr class="flex-center">*/
/*           <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /></a> {% endif %}</td>*/
/*           <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% if product.option %}*/
/*             {% for option in product.option %} <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %} <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}</td>*/
/*       */
/*           <td class="text-right">{{ product.total }}</td>*/
/*           <td class="text-center"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="cart-close"><span aria-hidden="true">&times;</span></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*    */
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="cart-close"><span aria-hidden="true">&times;</span></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*     <li>*/
/*       <div>*/
/*         <table class="table cart-total">*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td class="text-right"><strong>{{ total.title }}</strong></td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         <p class="text-center">*/
/* 		<a href="{{ cart }}" class="btn btn-primary">{{ text_cart }}</a></br></br>*/
/* 		<a href="{{ checkout }}" class="btn btn-default">{{ text_checkout }}</a></p>*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center cart-text">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* */
