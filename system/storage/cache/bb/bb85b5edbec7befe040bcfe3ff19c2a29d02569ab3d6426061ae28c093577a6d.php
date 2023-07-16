<?php

/* theme--5005a/template/common/header.twig */
class __TwigTemplate_6fe3e48b80a95bf4d915cd87dd1224654701c7128eddcb29b9c8be143e469254 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<meta charset=\"UTF-8\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<title>";
        // line 7
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 8
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\"/>
";
        // line 9
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 10
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\"/>
";
        }
        // line 12
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 13
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\"/>
";
        }
        // line 15
        echo "<script type=\"text/javascript\" src=\"catalog/view/theme/theme--5005a/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--5005a/javascript/jquery-ui-1.10.4.custom.min.js\"></script>
<link href=\"catalog/view/theme/theme--5005a/stylesheet/bootstrap.css\" rel=\"stylesheet\" media=\"screen\"/>
<link href=\"catalog/view/theme/theme--5005a/stylesheet/style_opencart.css\" rel=\"stylesheet\" media=\"screen\"/>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--5005a/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"catalog/view/theme/theme--5005a/stylesheet/styles.css\" rel=\"stylesheet\"/>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--5005a/javascript/customjs.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--5005a/javascript/html5shiv.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--5005a/javascript/totop.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/theme/theme--5005a/javascript/tt_animation.js\"></script>
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 26
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 29
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "<script type=\"text/javascript\" src=\"catalog/view/theme/theme--5005a/javascript/common.js\"></script>
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 34
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 37
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</head>
";
        // line 40
        if (twig_test_empty((isset($context["route"]) ? $context["route"] : null))) {
            // line 41
            $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . "ttr_ecommerce");
        }
        // line 43
        if (( !twig_test_empty((isset($context["route"]) ? $context["route"] : null)) && ((isset($context["route"]) ? $context["route"] : null) == "product/product"))) {
            // line 44
            $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . "ttr_ecommerce productdescription");
        } else {
            // line 46
            if (((((isset($context["route"]) ? $context["route"] : null) == "checkout/cart") || ((isset($context["route"]) ? $context["route"] : null) == "checkout/checkout")) || ((isset($context["route"]) ? $context["route"] : null) == "checkout/success"))) {
                // line 47
                $context["class"] = "ttr_ecommerce productcheckout";
            }
        }
        // line 50
        echo "<body class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
<div class=\"totopshow\">
<a class=\"back-to-top\" href=\"#\" style=\"display: inline;\"><img src=\"catalog/view/theme/theme--5005a/image/gototop.png\" alt=\"Back to Top\"></img></a>
</div>
<!--header_above-->
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["abv"]) ? $context["abv"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 56
            echo "<div class=\"ttr_banner_header\">
<div class=\"ttr_banner_header_inner_above_widget_container\">
";
            // line 58
            list($context["flag"], $context["break"]) =             array(0, false);
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("header_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 60
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        // line 61
                        $context["flag"] = array(0 => 1);
                        // line 62
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                // line 63
                                echo "<div class=\"ttr_banner_header_inner_above";
                                echo $context["i"];
                                echo "\">
";
                                // line 64
                                $context["break"] = true;
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("header_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 69
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            if ((isset($context["break"]) ? $context["break"] : null)) {
                // line 72
                echo "</div>
";
            }
            // line 74
            echo "</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "<!--header_above_end-->
<header id=\"ttr_header\">
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_header_inner\">
<div class=\"ttr_header_element_alignment container\">
<nav id=\"top\">
<div class=\"ttr_currency_container \">
";
        // line 85
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
";
        // line 86
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
</div>
</nav>
<div class=\"ttr_header_links nav \" id=\"top-links\">
<ul class=\"list-inline links\">
<li class=\"first\">
<a class=\"ttr_phone_link\" href=\"";
        // line 92
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><span class=\"hidden-xs hidden-sm\">";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span></a></li>
 <li class=\"dropdown\">
<a class=\"ttr_userlink_link\" href=\"";
        // line 94
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"hidden-xs hidden-sm\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span><span class=\"caret dropdown-toggle\"></span></a>
<ul class=\"dropdown-menu dropdown-menu-right\">
";
        // line 96
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 97
            echo "<li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
<li><a href=\"";
            // line 98
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
<li><a href=\"";
            // line 99
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
<li><a href=\"";
            // line 100
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
<li><a href=\"";
            // line 101
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
";
        } else {
            // line 103
            echo "<li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
<li><a href=\"";
            // line 104
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
";
        }
        // line 106
        echo "</ul>
</li>
<li><a class=\"ttr_wishlist_link\" href=\"";
        // line 108
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a></li>
<li><a class=\"ttr_cartlink_link\" href=\"";
        // line 109
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</span></a></li>
<li class=\"last\">
<a class=\"ttr_checkoutlink_link\" href=\"";
        // line 111
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a></li>
</ul>
</div>
<div class=\"ttr_header_cart \">
";
        // line 115
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
<div class=\"ttr_images_container\">
<div class=\"ttr_header_logo\">
";
        // line 118
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 119
            echo "<a href=\"\" target=\"_self\">
<img src=\"";
            // line 120
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"\" />
</a>
";
        } else {
            // line 123
            echo "<h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
";
        }
        // line 125
        echo "</div>
";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["header_pos"]) ? $context["header_pos"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ( !($context["key"] % 2)) {
                // line 127
                if ($this->getAttribute($this->getAttribute((isset($context["header_pos"]) ? $context["header_pos"] : null), ($context["key"] + 1), array(), "array"), "position", array())) {
                    // line 128
                    echo " ";
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
                // line 129
                echo " 
 ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo " 
</div>
</div>
<div class=\"form-search input-group\">
";
        // line 134
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
 </div>
<div class=\"ttr_images_container\">
";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["header_pos"]) ? $context["header_pos"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ( !($context["key"] % 2)) {
                // line 138
                if ( !$this->getAttribute($this->getAttribute((isset($context["header_pos"]) ? $context["header_pos"] : null), ($context["key"] + 1), array(), "array"), "position", array())) {
                    // line 139
                    echo " ";
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
                // line 140
                echo " 
 ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo " 
</div>
</div>
</header>
<!--header_below-->
";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["blw"]) ? $context["blw"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 147
            echo "<div class=\"ttr_banner_header\">
<div class=\"ttr_banner_header_inner_below_widget_container\">
";
            // line 149
            list($context["flag"], $context["break"]) =             array(0, false);
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("header_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 151
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        // line 152
                        $context["flag"] = array(0 => 1);
                        // line 153
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                // line 154
                                echo "<div class=\"ttr_banner_header_inner_below";
                                echo $context["i"];
                                echo "\">
";
                                // line 155
                                $context["break"] = true;
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("header_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 160
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            if ((isset($context["break"]) ? $context["break"] : null)) {
                // line 163
                echo "</div>
";
            }
            // line 165
            echo "</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "<!--header_below_end-->
<!--menu_above-->
";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["mabv"]) ? $context["mabv"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 172
            echo "<div class=\"ttr_banner_menu\">
<div class=\"ttr_banner_menu_inner_above_widget_container\">
";
            // line 174
            list($context["flag"], $context["break"]) =             array(0, false);
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("menu_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 176
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        // line 177
                        $context["flag"] = array(0 => 1);
                        // line 178
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                // line 179
                                echo "<div class=\"ttr_banner_menu_inner_above";
                                echo $context["i"];
                                echo "\">
";
                                // line 180
                                $context["break"] = true;
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("menu_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 185
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            if ((isset($context["break"]) ? $context["break"] : null)) {
                // line 188
                echo "</div>
";
            }
            // line 190
            echo "</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "<!--menu_above_end-->
<div id=\"ttr_menu\"> 
<div class=\"margin_collapsetop\"></div>
<nav class=\"navbar-default navbar\">
   <div id=\"ttr_menu_inner_in\">
<div class=\"ttr_menu_element_alignment container\">
";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu_pos"]) ? $context["menu_pos"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ( !($context["key"] % 2)) {
                // line 201
                if ($this->getAttribute($this->getAttribute((isset($context["menu_pos"]) ? $context["menu_pos"] : null), ($context["key"] + 1), array(), "array"), "position", array())) {
                    // line 202
                    echo $this->getAttribute($context["value"], 0, array());
                    echo "
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "</div>
<div class=\"ttr_images_container\">
";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu_pos"]) ? $context["menu_pos"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ( !($context["key"] % 2)) {
                // line 208
                if ( !$this->getAttribute($this->getAttribute((isset($context["menu_pos"]) ? $context["menu_pos"] : null), ($context["key"] + 1), array(), "array"), "position", array())) {
                    // line 209
                    echo $this->getAttribute($context["value"], 0, array());
                    echo "
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "</div>
<?php if (\$categories) { ?>
<div id=\"navigationmenu\">
<div class=\"navbar-header\">
<button id=\"nav-expander\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
<span class=\"ttr_menu_toggle_button\">
<span class=\"sr-only\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
</span>
<span class=\"ttr_menu_button_text\">
Menu
</span>
</button>
</div>
<div class=\"menu-center collapse navbar-collapse\">
";
        // line 233
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
</div>
</div>
<?php } ?>
</div>
</nav>
</div>
<!--menu_below-->
";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["mblw"]) ? $context["mblw"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 242
            echo "<div class=\"ttr_banner_menu\">
<?php echo \${'menu_pos_below'.\$j}[\$i][0];
 } if (\$flag == 1){ ?>
<div class=\"ttr_banner_menu_inner_below_widget_container\">
";
            // line 246
            list($context["flag"], $context["break"]) =             array(0, false);
            // line 247
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("menu_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 248
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        // line 249
                        $context["flag"] = array(0 => 1);
                        // line 250
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                // line 251
                                echo "<div class=\"ttr_banner_menu_inner_below";
                                echo $context["i"];
                                echo "\">
";
                                // line 252
                                $context["break"] = true;
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("menu_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 257
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            if ((isset($context["break"]) ? $context["break"] : null)) {
                // line 260
                echo "</div>
";
            }
            // line 262
            echo "</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "<!--menu_below_end-->
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_page\" class=\"container\">
";
    }

    public function getTemplateName()
    {
        return "theme--5005a/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  738 => 266,  729 => 262,  725 => 260,  723 => 259,  714 => 257,  709 => 256,  696 => 252,  691 => 251,  686 => 250,  684 => 249,  682 => 248,  677 => 247,  675 => 246,  669 => 242,  665 => 241,  654 => 233,  631 => 212,  621 => 209,  619 => 208,  614 => 207,  610 => 205,  600 => 202,  598 => 201,  593 => 200,  585 => 194,  576 => 190,  572 => 188,  570 => 187,  561 => 185,  556 => 184,  543 => 180,  538 => 179,  533 => 178,  531 => 177,  529 => 176,  524 => 175,  522 => 174,  518 => 172,  514 => 171,  510 => 169,  501 => 165,  497 => 163,  495 => 162,  486 => 160,  481 => 159,  468 => 155,  463 => 154,  458 => 153,  456 => 152,  454 => 151,  449 => 150,  447 => 149,  443 => 147,  439 => 146,  432 => 141,  424 => 140,  418 => 139,  416 => 138,  411 => 137,  405 => 134,  399 => 130,  391 => 129,  385 => 128,  383 => 127,  378 => 126,  375 => 125,  367 => 123,  357 => 120,  354 => 119,  352 => 118,  346 => 115,  335 => 111,  326 => 109,  318 => 108,  314 => 106,  307 => 104,  300 => 103,  293 => 101,  287 => 100,  281 => 99,  275 => 98,  268 => 97,  266 => 96,  257 => 94,  250 => 92,  241 => 86,  237 => 85,  228 => 78,  219 => 74,  215 => 72,  213 => 71,  204 => 69,  199 => 68,  186 => 64,  181 => 63,  176 => 62,  174 => 61,  172 => 60,  167 => 59,  165 => 58,  161 => 56,  157 => 55,  148 => 50,  144 => 47,  142 => 46,  139 => 44,  137 => 43,  134 => 41,  132 => 40,  129 => 39,  121 => 37,  117 => 36,  106 => 34,  102 => 33,  99 => 32,  89 => 29,  85 => 28,  72 => 26,  68 => 25,  56 => 15,  50 => 13,  48 => 12,  42 => 10,  40 => 9,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <meta charset="UTF-8"/>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}"/>*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}"/>*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}"/>*/
/* {% endif %}*/
/* <script type="text/javascript" src="catalog/view/theme/theme--5005a/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--5005a/javascript/jquery-ui-1.10.4.custom.min.js"></script>*/
/* <link href="catalog/view/theme/theme--5005a/stylesheet/bootstrap.css" rel="stylesheet" media="screen"/>*/
/* <link href="catalog/view/theme/theme--5005a/stylesheet/style_opencart.css" rel="stylesheet" media="screen"/>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--5005a/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/* <link href="catalog/view/theme/theme--5005a/stylesheet/styles.css" rel="stylesheet"/>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--5005a/javascript/customjs.js"></script>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--5005a/javascript/html5shiv.js"></script>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--5005a/javascript/totop.js"></script>*/
/* <script type="text/javascript" src="catalog/view/theme/theme--5005a/javascript/tt_animation.js"></script>*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* <link rel="stylesheet" type="text/css" href="catalog/view/javascript/font-awesome/css/font-awesome.min.css"/>*/
/* {% endfor %}*/
/* <script type="text/javascript" src="catalog/view/theme/theme--5005a/javascript/common.js"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* {% if route is empty %}*/
/* {% set class = class ~ 'ttr_ecommerce' %}*/
/* {% endif %}*/
/* {% if route is not empty and route == 'product/product' %}*/
/* {% set class = class ~ 'ttr_ecommerce productdescription' %}*/
/* {% else %}*/
/* {% if route == 'checkout/cart' or route == 'checkout/checkout' or route == 'checkout/success' %}*/
/* {% set class = 'ttr_ecommerce productcheckout' %}*/
/* {% endif %}*/
/* {% endif %}*/
/* <body class="{{ class }}">*/
/* <div class="totopshow">*/
/* <a class="back-to-top" href="#" style="display: inline;"><img src="catalog/view/theme/theme--5005a/image/gototop.png" alt="Back to Top"></img></a>*/
/* </div>*/
/* <!--header_above-->*/
/* {% for i in 0..abv-1 %}*/
/* <div class="ttr_banner_header">*/
/* <div class="ttr_banner_header_inner_above_widget_container">*/
/* {% set flag, break = 0, false %}*/
/* {% for key, value in  attribute(_context, 'header_pos_above' ~ i) if not key % 2 %}*/
/* {% if value.1 == true %}*/
/* {% set flag = [1] %}*/
/* {% for f in flag if not break %}*/
/* <div class="ttr_banner_header_inner_above{{ i }}">*/
/* {% set break = true %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for key, value in attribute(_context, 'header_pos_above' ~ i) if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* {% if break %}*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* <div style="clear: both;"></div>*/
/* {% endfor %}*/
/* <!--header_above_end-->*/
/* <header id="ttr_header">*/
/* <div class="margin_collapsetop"></div>*/
/* <div id="ttr_header_inner">*/
/* <div class="ttr_header_element_alignment container">*/
/* <nav id="top">*/
/* <div class="ttr_currency_container ">*/
/* {{ currency }}*/
/* {{ language }}*/
/* </div>*/
/* </nav>*/
/* <div class="ttr_header_links nav " id="top-links">*/
/* <ul class="list-inline links">*/
/* <li class="first">*/
/* <a class="ttr_phone_link" href="{{ contact }}"><span class="hidden-xs hidden-sm">{{ telephone }}</span></a></li>*/
/*  <li class="dropdown">*/
/* <a class="ttr_userlink_link" href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><span class="hidden-xs hidden-sm">{{ text_account }}</span><span class="caret dropdown-toggle"></span></a>*/
/* <ul class="dropdown-menu dropdown-menu-right">*/
/* {% if logged %}*/
/* <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/* <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/* <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/* {% else %}*/
/* <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/* <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/* {% endif %}*/
/* </ul>*/
/* </li>*/
/* <li><a class="ttr_wishlist_link" href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/* <li><a class="ttr_cartlink_link" href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><span class="hidden-xs hidden-sm hidden-md">{{ text_shopping_cart }}</span></a></li>*/
/* <li class="last">*/
/* <a class="ttr_checkoutlink_link" href="{{ checkout }}" title="{{ text_checkout }}"><span class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a></li>*/
/* </ul>*/
/* </div>*/
/* <div class="ttr_header_cart ">*/
/* {{ cart }}</div>*/
/* <div class="ttr_images_container">*/
/* <div class="ttr_header_logo">*/
/* {% if logo %}*/
/* <a href="" target="_self">*/
/* <img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="" />*/
/* </a>*/
/* {% else %}*/
/* <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/* {% endif %}*/
/* </div>*/
/* {% for key, value in header_pos if not key % 2 %}*/
/* {% if header_pos[key + 1].position %}*/
/*  {{ value.0 }} */
/*  {% endif %} */
/*  {% endfor %} */
/* </div>*/
/* </div>*/
/* <div class="form-search input-group">*/
/* {{ search }}*/
/*  </div>*/
/* <div class="ttr_images_container">*/
/* {% for key, value in header_pos if not key % 2 %}*/
/* {% if not header_pos[key + 1].position %}*/
/*  {{ value.0 }} */
/*  {% endif %} */
/*  {% endfor %} */
/* </div>*/
/* </div>*/
/* </header>*/
/* <!--header_below-->*/
/* {% for i in 0..blw-1 %}*/
/* <div class="ttr_banner_header">*/
/* <div class="ttr_banner_header_inner_below_widget_container">*/
/* {% set flag, break = 0, false %}*/
/* {% for key, value in  attribute(_context, 'header_pos_below' ~ i) if not key % 2 %}*/
/* {% if value.1 == true %}*/
/* {% set flag = [1] %}*/
/* {% for f in flag if not break %}*/
/* <div class="ttr_banner_header_inner_below{{ i }}">*/
/* {% set break = true %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for key, value in attribute(_context, 'header_pos_below' ~ i) if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* {% if break %}*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* <div style="clear: both;"></div>*/
/* {% endfor %}*/
/* <!--header_below_end-->*/
/* <!--menu_above-->*/
/* {% for i in 0..mabv-1 %}*/
/* <div class="ttr_banner_menu">*/
/* <div class="ttr_banner_menu_inner_above_widget_container">*/
/* {% set flag, break = 0, false %}*/
/* {% for key, value in  attribute(_context, 'menu_pos_above' ~ i) if not key % 2 %}*/
/* {% if value.1 == true %}*/
/* {% set flag = [1] %}*/
/* {% for f in flag if not break %}*/
/* <div class="ttr_banner_menu_inner_above{{ i }}">*/
/* {% set break = true %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for key, value in attribute(_context, 'menu_pos_above' ~ i) if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* {% if break %}*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* <div style="clear: both;"></div>*/
/* {% endfor %}*/
/* <!--menu_above_end-->*/
/* <div id="ttr_menu"> */
/* <div class="margin_collapsetop"></div>*/
/* <nav class="navbar-default navbar">*/
/*    <div id="ttr_menu_inner_in">*/
/* <div class="ttr_menu_element_alignment container">*/
/* {% for key, value in menu_pos if not key % 2 %}*/
/* {% if menu_pos[key + 1].position %}*/
/* {{ value.0 }}*/
/* {% endif %}*/
/* {% endfor %}*/
/* </div>*/
/* <div class="ttr_images_container">*/
/* {% for key, value in menu_pos if not key % 2 %}*/
/* {% if not menu_pos[key + 1].position %}*/
/* {{ value.0 }}*/
/* {% endif %}*/
/* {% endfor %}*/
/* </div>*/
/* <?php if ($categories) { ?>*/
/* <div id="navigationmenu">*/
/* <div class="navbar-header">*/
/* <button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">*/
/* <span class="ttr_menu_toggle_button">*/
/* <span class="sr-only">*/
/* </span>*/
/* <span class="icon-bar">*/
/* </span>*/
/* <span class="icon-bar">*/
/* </span>*/
/* <span class="icon-bar">*/
/* </span>*/
/* </span>*/
/* <span class="ttr_menu_button_text">*/
/* Menu*/
/* </span>*/
/* </button>*/
/* </div>*/
/* <div class="menu-center collapse navbar-collapse">*/
/* {{ menu }}*/
/* </div>*/
/* </div>*/
/* <?php } ?>*/
/* </div>*/
/* </nav>*/
/* </div>*/
/* <!--menu_below-->*/
/* {% for i in 0..mblw-1 %}*/
/* <div class="ttr_banner_menu">*/
/* <?php echo ${'menu_pos_below'.$j}[$i][0];*/
/*  } if ($flag == 1){ ?>*/
/* <div class="ttr_banner_menu_inner_below_widget_container">*/
/* {% set flag, break = 0, false %}*/
/* {% for key, value in  attribute(_context, 'menu_pos_below' ~ i) if not key % 2 %}*/
/* {% if value.1 == true %}*/
/* {% set flag = [1] %}*/
/* {% for f in flag if not break %}*/
/* <div class="ttr_banner_menu_inner_below{{ i }}">*/
/* {% set break = true %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for key, value in attribute(_context, 'menu_pos_below' ~ i) if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* {% if break %}*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* <div style="clear: both;"></div>*/
/* {% endfor %}*/
/* <!--menu_below_end-->*/
/* <div class="margin_collapsetop"></div>*/
/* <div id="ttr_page" class="container">*/
/* */
