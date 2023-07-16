<?php

/* theme--5004a/template/common/footer.twig */
class __TwigTemplate_6b367cc9cb4da5d19a6a692222a1ac6cd07d6d3d8b8bf017d29c38dc8491bbfd extends Twig_Template
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
        echo "</div>
<!--footer_above-->
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["fabv"]) ? $context["fabv"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "<div class=\"footer-widget-area\" >
<div class=\"ttr_footer-widget-area_inner_above_widget_container\">
";
            // line 6
            list($context["flag"], $context["break"]) =             array(0, false);
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("footer_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 8
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        // line 9
                        $context["flag"] = array(0 => 1);
                        // line 10
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                // line 11
                                echo "<div class=\"ttr_footer-widget-area_inner_above";
                                echo $context["i"];
                                echo "\">
";
                                // line 12
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
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("footer_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 17
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            if ((isset($context["break"]) ? $context["break"] : null)) {
                // line 20
                echo "</div>
";
            }
            // line 22
            echo "</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "<footer id=\"ttr_footer\" >
<div id=\"ttr_footer_inner\">
<div class=\"container\" >
";
        // line 29
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 30
            echo " <div class=\"col-md-3\">
<h5>";
            // line 31
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
<ul class=\"links\">
";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 34
                echo "<li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "</ul></div> ";
        }
        // line 37
        echo " <div class=\"col-md-3\">
<h5>";
        // line 38
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
<ul class=\"links\">
<li><a href=\"";
        // line 40
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 41
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 42
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
</ul>
</div>
 <div class=\"col-md-3\">
<h5>";
        // line 46
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
<ul class=\"links\">
<li><a href=\"";
        // line 48
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\"><?php echo \$text_manufacturer; ?></a></li>
<li><a href=\"";
        // line 49
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 50
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 51
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
</ul>
</div>
 <div class=\"col-md-3\">
<h5>";
        // line 55
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
<ul class=\"links\">
<li><a href=\"";
        // line 57
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 58
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 59
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
<li><a href=\"";
        // line 60
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
</ul>
</div>
 <div class=\" visible-sm-block visible-md-block visible-lg-block visible-xs-block d-xl-block d-lg-block d-sm-block d-md-block d-block \" style=\"clear:both;\"></div>
</div>
 <div class=\"ttr_footer_bottom_footer\">
 <div class=\"ttr_footer_bottom_footer_inner\">
<div class=\"ttr_footer_element_alignment container\">
";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["footer_pos"]) ? $context["footer_pos"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ( !($context["key"] % 2)) {
                // line 69
                if ($this->getAttribute($this->getAttribute((isset($context["footer_pos"]) ? $context["footer_pos"] : null), ($context["key"] + 1), array(), "array"), "position", array())) {
                    // line 70
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
";
                }
                // line 72
                echo " ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</div>
";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["footer_pos"]) ? $context["footer_pos"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ( !($context["key"] % 2)) {
                // line 75
                if ( !$this->getAttribute($this->getAttribute((isset($context["footer_pos"]) ? $context["footer_pos"] : null), ($context["key"] + 1), array(), "array"), "position", array())) {
                    // line 76
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
";
                }
                // line 78
                echo " ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "<div id=\"ttr_footer_designed_by_links\">
<a href=\"http://templatetoaster.com\" target=\"_self\" >
OpenCart Theme
</a>
<span id=\"ttr_footer_designed_by\">
Designed With TemplateToaster
</span>
</div>
<a href=\"http://www.facebook.com/TemplateToaster\" class=\"ttr_footer_facebook \" target=\"_self\" >
</a>
<a href=\"http://www.templatetoaster.com\"class=\"ttr_footer_linkedin \" target=\"_self\" >
</a>
<a href=\"http://twitter.com/templatetoaster\" class=\"ttr_footer_twitter \" target=\"_self\" >
</a>
</div>
</div>
<div class=\"margin_collapsetop\"></div>
</footer>
<!--footer_below-->
";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["fblw"]) ? $context["fblw"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 99
            echo "<div class=\"footer-widget-area\" >
<div class=\"ttr_footer-widget-area_inner_below_widget_container\">
";
            // line 101
            list($context["flag"], $context["break"]) =             array(0, false);
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("footer_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 103
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        // line 104
                        $context["flag"] = array(0 => 1);
                        // line 105
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                // line 106
                                echo "<div class=\"ttr_footer-widget-area_inner_below";
                                echo $context["i"];
                                echo "\">
";
                                // line 107
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
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("footer_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    // line 112
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " 
 ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            if ((isset($context["break"]) ? $context["break"] : null)) {
                // line 115
                echo "</div>
";
            }
            // line 117
            echo "</div></div>
<div style=\"clear: both;\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "theme--5004a/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 120,  346 => 117,  342 => 115,  340 => 114,  331 => 112,  326 => 111,  313 => 107,  308 => 106,  303 => 105,  301 => 104,  299 => 103,  294 => 102,  292 => 101,  288 => 99,  284 => 98,  263 => 79,  256 => 78,  251 => 76,  249 => 75,  244 => 74,  241 => 73,  234 => 72,  229 => 70,  227 => 69,  222 => 68,  209 => 60,  203 => 59,  197 => 58,  191 => 57,  186 => 55,  177 => 51,  171 => 50,  165 => 49,  161 => 48,  156 => 46,  147 => 42,  141 => 41,  135 => 40,  130 => 38,  127 => 37,  124 => 36,  113 => 34,  109 => 33,  104 => 31,  101 => 30,  99 => 29,  94 => 26,  85 => 22,  81 => 20,  79 => 19,  70 => 17,  65 => 16,  52 => 12,  47 => 11,  42 => 10,  40 => 9,  38 => 8,  33 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* </div>*/
/* <!--footer_above-->*/
/* {% for i in 0..fabv-1 %}*/
/* <div class="footer-widget-area" >*/
/* <div class="ttr_footer-widget-area_inner_above_widget_container">*/
/* {% set flag, break = 0, false %}*/
/* {% for key, value in  attribute(_context, 'footer_pos_above' ~ i) if not key % 2 %}*/
/* {% if value.1 == true %}*/
/* {% set flag = [1] %}*/
/* {% for f in flag if not break %}*/
/* <div class="ttr_footer-widget-area_inner_above{{ i }}">*/
/* {% set break = true %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for key, value in attribute(_context, 'footer_pos_above' ~ i) if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* {% if break %}*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
/* </div>*/
/* <div style="clear: both;"></div>*/
/* {% endfor %}*/
/* <footer id="ttr_footer" >*/
/* <div id="ttr_footer_inner">*/
/* <div class="container" >*/
/* {% if informations %}*/
/*  <div class="col-md-3">*/
/* <h5>{{ text_information }}</h5>*/
/* <ul class="links">*/
/* {% for information in informations %}*/
/* <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/* {% endfor %}*/
/* </ul></div> {% endif %}*/
/*  <div class="col-md-3">*/
/* <h5>{{ text_service }}</h5>*/
/* <ul class="links">*/
/* <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/* <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/* <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/* </ul>*/
/* </div>*/
/*  <div class="col-md-3">*/
/* <h5>{{ text_extra }}</h5>*/
/* <ul class="links">*/
/* <li><a href="{{ manufacturer }}"><?php echo $text_manufacturer; ?></a></li>*/
/* <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/* <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/* <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/* </ul>*/
/* </div>*/
/*  <div class="col-md-3">*/
/* <h5>{{ text_account }}</h5>*/
/* <ul class="links">*/
/* <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/* <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/* </ul>*/
/* </div>*/
/*  <div class=" visible-sm-block visible-md-block visible-lg-block visible-xs-block d-xl-block d-lg-block d-sm-block d-md-block d-block " style="clear:both;"></div>*/
/* </div>*/
/*  <div class="ttr_footer_bottom_footer">*/
/*  <div class="ttr_footer_bottom_footer_inner">*/
/* <div class="ttr_footer_element_alignment container">*/
/* {% for key, value in footer_pos if not key % 2 %}*/
/* {% if footer_pos[key + 1].position %}*/
/* {{ value.0 }} */
/* {% endif %}*/
/*  {% endfor %}*/
/* </div>*/
/* {% for key, value in footer_pos if not key % 2 %}*/
/* {% if not footer_pos[key + 1].position %}*/
/* {{ value.0 }} */
/* {% endif %}*/
/*  {% endfor %}*/
/* <div id="ttr_footer_designed_by_links">*/
/* <a href="http://templatetoaster.com" target="_self" >*/
/* OpenCart Theme*/
/* </a>*/
/* <span id="ttr_footer_designed_by">*/
/* Designed With TemplateToaster*/
/* </span>*/
/* </div>*/
/* <a href="http://www.facebook.com/TemplateToaster" class="ttr_footer_facebook " target="_self" >*/
/* </a>*/
/* <a href="http://www.templatetoaster.com"class="ttr_footer_linkedin " target="_self" >*/
/* </a>*/
/* <a href="http://twitter.com/templatetoaster" class="ttr_footer_twitter " target="_self" >*/
/* </a>*/
/* </div>*/
/* </div>*/
/* <div class="margin_collapsetop"></div>*/
/* </footer>*/
/* <!--footer_below-->*/
/* {% for i in 0..fblw-1 %}*/
/* <div class="footer-widget-area" >*/
/* <div class="ttr_footer-widget-area_inner_below_widget_container">*/
/* {% set flag, break = 0, false %}*/
/* {% for key, value in  attribute(_context, 'footer_pos_below' ~ i) if not key % 2 %}*/
/* {% if value.1 == true %}*/
/* {% set flag = [1] %}*/
/* {% for f in flag if not break %}*/
/* <div class="ttr_footer-widget-area_inner_below{{ i }}">*/
/* {% set break = true %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% for key, value in attribute(_context, 'footer_pos_below' ~ i) if not key % 2 %}*/
/* {{ value.0 }} */
/*  {% endfor %}*/
/* {% if break %}*/
/* </div>*/
/* {% endif %}*/
/* </div></div>*/
/* <div style="clear: both;"></div>*/
/* {% endfor %}*/
/* </div>*/
/* */
