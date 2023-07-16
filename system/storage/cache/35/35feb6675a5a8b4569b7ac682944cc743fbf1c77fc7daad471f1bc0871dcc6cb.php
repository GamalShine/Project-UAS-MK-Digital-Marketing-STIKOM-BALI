<?php

/* default/template/product/compare.twig */
class __TwigTemplate_2bdf3cc76172dc473011a9b6ea6f2521659f4f8c82655ba0587814c0ffee015a extends Twig_Template
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
<div id=\"product-compare\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 23
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 24
            echo "      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td colspan=\"";
            // line 27
            echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
            echo "\"><strong>";
            echo (isset($context["text_product"]) ? $context["text_product"] : null);
            echo "</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
            // line 32
            echo (isset($context["text_name"]) ? $context["text_name"] : null);
            echo "</td>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 34
                echo "            <td><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</strong></a></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo " </tr>
          <tr>
            <td>";
            // line 37
            echo (isset($context["text_image"]) ? $context["text_image"] : null);
            echo "</td>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 39
                echo "            <td class=\"text-center\">";
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /> ";
                }
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo " </tr>
          <tr>
            <td>";
            // line 42
            echo (isset($context["text_price"]) ? $context["text_price"] : null);
            echo "</td>
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 44
                echo "            <td>";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 45
                    echo "              ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 46
                        echo "              ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
              ";
                    } else {
                        // line 47
                        echo " <strike>";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</strike> ";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "
              ";
                    }
                    // line 49
                    echo "              ";
                }
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo " </tr>
          <tr>
            <td>";
            // line 52
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo "</td>
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 54
                echo "            <td>";
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo " </tr>
          <tr>
            <td>";
            // line 57
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</td>
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 59
                echo "            <td>";
                echo $this->getAttribute($context["product"], "manufacturer", array());
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo " </tr>
          <tr>
            <td>";
            // line 62
            echo (isset($context["text_availability"]) ? $context["text_availability"] : null);
            echo "</td>
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 64
                echo "            <td>";
                echo $this->getAttribute($context["product"], "availability", array());
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo " </tr>
        ";
            // line 66
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                // line 67
                echo "        <tr>
          <td>";
                // line 68
                echo (isset($context["text_rating"]) ? $context["text_rating"] : null);
                echo "</td>
          ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 70
                    echo "          <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 71
                        echo "            ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 72
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <br />
            ";
                    // line 73
                    echo $this->getAttribute($context["product"], "reviews", array());
                    echo "</td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo " </tr>
        ";
            }
            // line 76
            echo "        <tr>
          <td>";
            // line 77
            echo (isset($context["text_summary"]) ? $context["text_summary"] : null);
            echo "</td>
          ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 79
                echo "          <td class=\"description\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo " </tr>
        <tr>
          <td>";
            // line 82
            echo (isset($context["text_weight"]) ? $context["text_weight"] : null);
            echo "</td>
          ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 84
                echo "          <td>";
                echo $this->getAttribute($context["product"], "weight", array());
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo " </tr>
        <tr>
          <td>";
            // line 87
            echo (isset($context["text_dimension"]) ? $context["text_dimension"] : null);
            echo "</td>
          ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 89
                echo "          <td>";
                echo $this->getAttribute($context["product"], "length", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "width", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "height", array());
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo " </tr>
          </tbody>
        
        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 94
                echo "        <thead>
          <tr>
            <td colspan=\"";
                // line 96
                echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
                echo "\"><strong>";
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
          </tr>
        </thead>
        ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 100
                    echo "        <tbody>
          <tr>
            <td>";
                    // line 102
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
            ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 104
                        echo "            ";
                        if ($this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array")) {
                            // line 105
                            echo "            <td> ";
                            echo $this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array");
                            echo "</td>
            ";
                        } else {
                            // line 107
                            echo "            <td></td>
            ";
                        }
                        // line 109
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "          </tr>
        </tbody>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "        <tr>
          <td></td>
          ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 117
                echo "          <td><input type=\"button\" value=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" class=\"btn btn-primary btn-block\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\" />
            <a href=\"";
                // line 118
                echo $this->getAttribute($context["product"], "remove", array());
                echo "\" class=\"btn btn-danger btn-block\">";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "</a></td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo " </tr>
      </table>
      ";
        } else {
            // line 122
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 124
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-default\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 127
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 128
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 130
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 130,  493 => 128,  488 => 127,  480 => 124,  474 => 122,  469 => 119,  459 => 118,  450 => 117,  446 => 116,  442 => 114,  436 => 113,  428 => 110,  422 => 109,  418 => 107,  412 => 105,  409 => 104,  405 => 103,  401 => 102,  397 => 100,  393 => 99,  385 => 96,  381 => 94,  377 => 93,  372 => 90,  359 => 89,  355 => 88,  351 => 87,  347 => 85,  338 => 84,  334 => 83,  330 => 82,  326 => 80,  317 => 79,  313 => 78,  309 => 77,  306 => 76,  302 => 74,  294 => 73,  286 => 72,  279 => 71,  274 => 70,  270 => 69,  266 => 68,  263 => 67,  261 => 66,  258 => 65,  249 => 64,  245 => 63,  241 => 62,  237 => 60,  228 => 59,  224 => 58,  220 => 57,  216 => 55,  207 => 54,  203 => 53,  199 => 52,  195 => 50,  186 => 49,  178 => 47,  172 => 46,  169 => 45,  166 => 44,  162 => 43,  158 => 42,  154 => 40,  137 => 39,  133 => 38,  129 => 37,  125 => 35,  114 => 34,  110 => 33,  106 => 32,  96 => 27,  91 => 24,  89 => 23,  85 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  58 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-compare" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       {% if products %}*/
/*       <table class="table table-bordered">*/
/*         <thead>*/
/*           <tr>*/
/*             <td colspan="{{ products|length + 1 }}"><strong>{{ text_product }}</strong></td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td>{{ text_name }}</td>*/
/*             {% for product in products %}*/
/*             <td><a href="{{ product.href }}"><strong>{{ product.name }}</strong></a></td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_image }}</td>*/
/*             {% for product in products %}*/
/*             <td class="text-center">{% if product.thumb %} <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /> {% endif %}</td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_price }}</td>*/
/*             {% for product in products %}*/
/*             <td>{% if product.price %}*/
/*               {% if not product.special %}*/
/*               {{ product.price }}*/
/*               {% else %} <strike>{{ product.price }}</strike> {{ product.special }}*/
/*               {% endif %}*/
/*               {% endif %}</td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_model }}</td>*/
/*             {% for product in products %}*/
/*             <td>{{ product.model }}</td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_manufacturer }}</td>*/
/*             {% for product in products %}*/
/*             <td>{{ product.manufacturer }}</td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_availability }}</td>*/
/*             {% for product in products %}*/
/*             <td>{{ product.availability }}</td>*/
/*             {% endfor %} </tr>*/
/*         {% if review_status %}*/
/*         <tr>*/
/*           <td>{{ text_rating }}</td>*/
/*           {% for product in products %}*/
/*           <td class="rating"> {% for i in 1..5 %}*/
/*             {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %}*/
/*             {% endfor %} <br />*/
/*             {{ product.reviews }}</td>*/
/*           {% endfor %} </tr>*/
/*         {% endif %}*/
/*         <tr>*/
/*           <td>{{ text_summary }}</td>*/
/*           {% for product in products %}*/
/*           <td class="description">{{ product.description }}</td>*/
/*           {% endfor %} </tr>*/
/*         <tr>*/
/*           <td>{{ text_weight }}</td>*/
/*           {% for product in products %}*/
/*           <td>{{ product.weight }}</td>*/
/*           {% endfor %} </tr>*/
/*         <tr>*/
/*           <td>{{ text_dimension }}</td>*/
/*           {% for product in products %}*/
/*           <td>{{ product.length }} x {{ product.width }} x {{ product.height }}</td>*/
/*           {% endfor %} </tr>*/
/*           </tbody>*/
/*         */
/*         {% for attribute_group in attribute_groups %}*/
/*         <thead>*/
/*           <tr>*/
/*             <td colspan="{{ products|length + 1 }}"><strong>{{ attribute_group.name }}</strong></td>*/
/*           </tr>*/
/*         </thead>*/
/*         {% for key, attribute in attribute_group.attribute %}*/
/*         <tbody>*/
/*           <tr>*/
/*             <td>{{ attribute.name }}</td>*/
/*             {% for product in products %}*/
/*             {% if product.attribute[key] %}*/
/*             <td> {{ product.attribute[key] }}</td>*/
/*             {% else %}*/
/*             <td></td>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </tr>*/
/*         </tbody>*/
/*         {% endfor %}*/
/*         {% endfor %}*/
/*         <tr>*/
/*           <td></td>*/
/*           {% for product in products %}*/
/*           <td><input type="button" value="{{ button_cart }}" class="btn btn-primary btn-block" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');" />*/
/*             <a href="{{ product.remove }}" class="btn btn-danger btn-block">{{ button_remove }}</a></td>*/
/*           {% endfor %} </tr>*/
/*       </table>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-default">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
