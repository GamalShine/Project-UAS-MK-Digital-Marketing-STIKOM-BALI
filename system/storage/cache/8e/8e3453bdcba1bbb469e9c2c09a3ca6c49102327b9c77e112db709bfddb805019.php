<?php

/* materialize/template/common/home.twig */
class __TwigTemplate_4f1c9fad08a8ca37bc4313f90226923a659bd974e81d9e2a76155d2cda40031b extends Twig_Template
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
";
        // line 2
        ob_start();
        // line 3
        echo "<script type=\"application/ld+json\">
{
\t\"@context\": \"http://schema.org\",
\t\"@type\": \"WebSite\",
\t\"url\": \"";
        // line 7
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\",
\t\"potentialAction\": {
\t\t\"@type\": \"SearchAction\",
\t\t\"target\": \"";
        // line 10
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "index.php?route=product/search&search={query}\",
\t\t\"query-input\": \"required name=query\"
\t}
}
</script>
";
        // line 15
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "\t";
            list($context["main"], $context["goods"]) =             array("s12 l6", "s12");
        } elseif ((        // line 17
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "\t";
            list($context["main"], $context["goods"]) =             array("s12 l9", "s12 m6");
        } else {
            // line 20
            echo "\t";
            list($context["main"], $context["goods"]) =             array("s12", "s12 m6 l4");
        }
        // line 22
        echo "<main>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 25
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t\t<div class=\"col ";
        // line 26
        echo (isset($context["main"]) ? $context["main"] : null);
        echo "\">
\t\t\t";
        // line 27
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t";
        // line 28
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 30
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t\t</div>
\t</div>
</main>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 35
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "materialize/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  82 => 30,  77 => 28,  73 => 27,  69 => 26,  65 => 25,  60 => 22,  56 => 20,  52 => 18,  50 => 17,  47 => 16,  45 => 15,  37 => 10,  31 => 7,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {% spaceless %}*/
/* <script type="application/ld+json">*/
/* {*/
/* 	"@context": "http://schema.org",*/
/* 	"@type": "WebSite",*/
/* 	"url": "{{ base }}",*/
/* 	"potentialAction": {*/
/* 		"@type": "SearchAction",*/
/* 		"target": "{{ base }}index.php?route=product/search&search={query}",*/
/* 		"query-input": "required name=query"*/
/* 	}*/
/* }*/
/* </script>*/
/* {% if column_left and column_right %}*/
/* 	{% set main, goods = 's12 l6', 's12' %}*/
/* {% elseif column_left or column_right %}*/
/* 	{% set main, goods = 's12 l9', 's12 m6' %}*/
/* {% else %}*/
/* 	{% set main, goods = 's12', 's12 m6 l4' %}*/
/* {% endif %}*/
/* <main>*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			{{ column_left }}*/
/* 			<div class="col {{ main }}">*/
/* 			{{ content_top }}*/
/* 			{{ content_bottom }}*/
/* 			</div>*/
/* 			{{ column_right }}*/
/* 		</div>*/
/* 	</div>*/
/* </main>*/
/* {% endspaceless %}*/
/* {{ footer }}*/
