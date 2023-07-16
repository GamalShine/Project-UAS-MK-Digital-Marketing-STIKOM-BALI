<?php

/* theme--5004a/template/common/column_right.twig */
class __TwigTemplate_84d795e4b89f38b5a40357b0634240ca6d1e10c61c6cd2e886898155a16b1a67 extends Twig_Template
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
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 2
            echo "<aside id=\"ttr_sidebar_right\">
<div id=\"ttr_sidebar_right_margin\">
<div class=\"margin_collapsetop\"></div>
<div class=\"ttr_sidebar_right_padding\">
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 7
                echo "<div class=\"ttr_block\">
<div class=\"ttr_block_content\">
";
                // line 9
                echo $context["module"];
                echo "
</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "<div class=\"margin_collapsetop\"></div>
</div>
</div>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "theme--5004a/template/common/column_right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  35 => 9,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/* <aside id="ttr_sidebar_right">*/
/* <div id="ttr_sidebar_right_margin">*/
/* <div class="margin_collapsetop"></div>*/
/* <div class="ttr_sidebar_right_padding">*/
/* {% for module in modules %}*/
/* <div class="ttr_block">*/
/* <div class="ttr_block_content">*/
/* {{ module }}*/
/* </div>*/
/* </div>*/
/* {% endfor %}*/
/* <div class="margin_collapsetop"></div>*/
/* </div>*/
/* </div>*/
/* </aside>*/
/* {% endif %}*/
/* */
