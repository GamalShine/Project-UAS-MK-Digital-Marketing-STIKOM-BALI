<?php

/* theme--5005a/template/common/cart.twig */
class __TwigTemplate_d985d5ec2a75811d01170951d53f39e8e99fc4f205086d089912ed7ff2f4198a extends Twig_Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button id=\"cart-total\" type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\"><img src=\"image/catalog/CartIcon.png\" alt=\"CartIcon.png\"/> ";
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</button>
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 4
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 5
            echo "    <li>
      <table class=\"table table-striped ttr_prochec_table_background\" id=\"cart_summary\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 8
                echo "        <tr class=\"ttr_prochec_Heading\">
          <td class=\"ttr_prochec_image_border text-center\">";
                // line 9
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"opc_normal_link\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left opc_cart_desc\"><a href=\"";
                // line 10
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 11
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 12
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "            ";
                }
                // line 14
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
            - <small>";
                    // line 15
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right opc_cart_desc\">x ";
                // line 16
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
          <td class=\"text-right ttr_prochec_price\">";
                // line 17
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 18
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-remove-circle\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 22
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 24
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right opc_cart_desc\">x&nbsp;1</td>
          <td class=\"text-right ttr_prochec_price\">";
                // line 26
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 27
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "      </table>
    </li>
    <li>
      <div>
        <table id=\"cart_summary\" class=\"table table-bordered ttr_prochec_table_background\">
          ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 36
                echo "          <tr class=\"ttr_opc_table\">
            <td class=\"text-right ttr_prochec_subtotal\"><strong>";
                // line 37
                echo $this->getAttribute($context["total"], "title", array());
                echo "</strong></td>
            <td class=\"text-right ttr_prochec_subtotal\">";
                // line 38
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 42
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\"><strong class=\"btn btn-info\"> ";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\"><strong class=\"btn btn-info\"> ";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</strong></a></p>
      </div>
    </li>
    ";
        } else {
            // line 46
            echo "    <li>
      <p class=\"text-center\">";
            // line 47
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 50
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "theme--5005a/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 50,  188 => 47,  185 => 46,  172 => 42,  169 => 41,  160 => 38,  156 => 37,  153 => 36,  149 => 35,  142 => 30,  131 => 27,  127 => 26,  122 => 24,  118 => 22,  113 => 21,  102 => 18,  98 => 17,  94 => 16,  86 => 15,  81 => 14,  78 => 13,  69 => 12,  62 => 11,  56 => 10,  42 => 9,  39 => 8,  35 => 7,  31 => 5,  29 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div id="cart" class="btn-group btn-block">*/
/*   <button id="cart-total" type="button" data-toggle="dropdown" data-loading-text="{{ text_loading }}" class="btn btn-inverse btn-block btn-lg dropdown-toggle"><img src="image/catalog/CartIcon.png" alt="CartIcon.png"/> {{ text_items }}</button>*/
/*   <ul class="dropdown-menu pull-right">*/
/*     {% if products or vouchers %}*/
/*     <li>*/
/*       <table class="table table-striped ttr_prochec_table_background" id="cart_summary">*/
/*         {% for product in products %}*/
/*         <tr class="ttr_prochec_Heading">*/
/*           <td class="ttr_prochec_image_border text-center">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="opc_normal_link" /></a> {% endif %}</td>*/
/*           <td class="text-left opc_cart_desc"><a href="{{ product.href }}">{{ product.name }}</a> {% if product.option %}*/
/*             {% for option in product.option %} <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %} <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}</td>*/
/*           <td class="text-right opc_cart_desc">x {{ product.quantity }}</td>*/
/*           <td class="text-right ttr_prochec_price">{{ product.total }}</td>*/
/*           <td class="text-center"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove-circle"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right opc_cart_desc">x&nbsp;1</td>*/
/*           <td class="text-right ttr_prochec_price">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*     <li>*/
/*       <div>*/
/*         <table id="cart_summary" class="table table-bordered ttr_prochec_table_background">*/
/*           {% for total in totals %}*/
/*           <tr class="ttr_opc_table">*/
/*             <td class="text-right ttr_prochec_subtotal"><strong>{{ total.title }}</strong></td>*/
/*             <td class="text-right ttr_prochec_subtotal">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         <p class="text-right"><a href="{{ cart }}"><strong class="btn btn-info"> {{ text_cart }}</strong></a>&nbsp;&nbsp;&nbsp;<a href="{{ checkout }}"><strong class="btn btn-info"> {{ text_checkout }}</strong></a></p>*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
