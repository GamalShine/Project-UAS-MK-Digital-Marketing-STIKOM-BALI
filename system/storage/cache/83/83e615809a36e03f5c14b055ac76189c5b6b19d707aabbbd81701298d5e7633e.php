<?php

/* theme--5005a/template/common/home.twig */
class __TwigTemplate_ab491deecb9b05656378085a7bc81e93062bb20bc829ba1dadd8b8d4a9f7b08e extends Twig_Template
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
<div class=\"container\" id=\"ttr_content_and_sidebar_container\">
";
        // line 3
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 4
            $context["class"] = "ttr_both_sidebar";
        } elseif (        // line 5
(isset($context["column_left"]) ? $context["column_left"] : null)) {
            // line 6
            $context["class"] = "ttr_single_sidebar";
        } elseif (        // line 7
(isset($context["column_right"]) ? $context["column_right"] : null)) {
            // line 8
            $context["class"] = "ttr_single_sidebar_right";
        } else {
            // line 10
            $context["class"] = "ttr_zero_sidebar";
        }
        // line 12
        echo " <div id=\"ttr_content\" class=\"row ";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
<div id=\"ttr_content_margin\">
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["cabv"]) ? $context["cabv"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            list($context["flag"], $context["break"]) =             array(0, false);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("content_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        $context["flag"] = array(0 => 1);
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                echo "<div class=\"contenttopcolumn";
                                echo $context["i"];
                                echo "\">";
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
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("content_pos_above" . $context["i"])));
            foreach ($context['_seq'] as $context["i"] => $context["value"]) {
                if ( !($context["i"] % 2)) {
                    echo " ";
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            if ((isset($context["break"]) ? $context["break"] : null)) {
                echo " </div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<div style=\"clear: both;\"></div><!--content_above_end-->
";
        // line 15
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["cblw"]) ? $context["cblw"] : null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            list($context["flag"], $context["break"]) =             array(0, false);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("content_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if ( !($context["key"] % 2)) {
                    if (($this->getAttribute($context["value"], 1, array()) == true)) {
                        $context["flag"] = array(0 => 1);
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["flag"]) ? $context["flag"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                                echo "<div class=\"contentbottomcolumn";
                                echo $context["i"];
                                echo "\">";
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
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context, ("content_pos_below" . $context["i"])));
            foreach ($context['_seq'] as $context["i"] => $context["value"]) {
                if ( !($context["i"] % 2)) {
                    echo " ";
                    echo $this->getAttribute($context["value"], 0, array());
                    echo " ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            if ((isset($context["break"]) ? $context["break"] : null)) {
                echo " </div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<div style=\"clear: both;\"></div><!--content_below_end-->
<div id=\"content\" >
</div>
</div>
</div>
</div>
";
        // line 21
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "theme--5005a/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 21,  97 => 15,  46 => 14,  40 => 12,  37 => 10,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container" id="ttr_content_and_sidebar_container">*/
/* {% if column_left and column_right %}*/
/* {% set class = 'ttr_both_sidebar' %}*/
/* {% elseif column_left %}*/
/* {% set class = 'ttr_single_sidebar' %}*/
/* {% elseif column_right %}*/
/* {% set class = 'ttr_single_sidebar_right' %}*/
/* {% else %}*/
/* {% set class = 'ttr_zero_sidebar' %}*/
/* {% endif %}*/
/*  <div id="ttr_content" class="row {{ class }}">*/
/* <div id="ttr_content_margin">*/
/* {% for i in 0..cabv-1 %}{% set flag, break = 0, false %}{% for key, value in  attribute(_context, 'content_pos_above' ~ i) if not key % 2 %}{% if value.1 == true %}{% set flag = [1] %}{% for f in flag if not break %}<div class="contenttopcolumn{{ i }}">{% set break = true %}{% endfor %}{% endif %}{% endfor %}{% for i,value in attribute(_context, 'content_pos_above' ~ i) if not i % 2 %} {{ value.0 }} {% endfor %}{% if break %} </div>{% endif %}{% endfor %}<div style="clear: both;"></div><!--content_above_end-->*/
/* {{ content_top }}{{ content_bottom }}{% for i in 0..cblw-1 %}{% set flag, break = 0, false %}{% for key, value in  attribute(_context, 'content_pos_below' ~ i) if not key % 2 %}{% if value.1 == true %}{% set flag = [1] %}{% for f in flag if not break %}<div class="contentbottomcolumn{{ i }}">{% set break = true %}{% endfor %}{% endif %}{% endfor %}{% for i,value in attribute(_context, 'content_pos_below' ~ i) if not i % 2 %} {{ value.0 }} {% endfor %}{% if break %} </div>{% endif %}{% endfor %}<div style="clear: both;"></div><!--content_below_end-->*/
/* <div id="content" >*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
