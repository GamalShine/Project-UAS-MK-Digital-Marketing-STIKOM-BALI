<?php

/* materialize/template/extension/module/slideshow.twig */
class __TwigTemplate_178243fef4018ba8d447450638466a1c57f62a3ed23d60d56094806c9c5d10d3 extends Twig_Template
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
        echo "<div class=\"section\">
\t<div id=\"slideshow";
        // line 2
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"slick-slider slick-slider-slideshow z-depth-1\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "\t\t";
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 5
                echo "\t\t<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img class=\"responsive-img\" src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\"></a>
\t\t";
            } else {
                // line 7
                echo "\t\t<img class=\"responsive-img z-depth-1\" src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\">
\t\t";
            }
            // line 9
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</div>
</div>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$('.slick-slider').not('.slick-initialized').slick({
\t\tinfinite: true,
\t\tautoplay: true,
\t\tautoplaySpeed: 5000,
\t\tslidesToShow: 1,
\t\tadaptiveHeight: true,
\t\tfade: true,
\t\tcssEase: 'linear',
\t\tdots: true,
\t\tarrows: true
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  43 => 7,  33 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="section">*/
/* 	<div id="slideshow{{ module }}" class="slick-slider slick-slider-slideshow z-depth-1">*/
/* 	{% for banner in banners %}*/
/* 		{% if banner.link %}*/
/* 		<a href="{{ banner.link }}"><img class="responsive-img" src="{{ banner.image }}" alt="{{ banner.title }}"></a>*/
/* 		{% else %}*/
/* 		<img class="responsive-img z-depth-1" src="{{ banner.image }}" alt="{{ banner.title }}">*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	$('.slick-slider').not('.slick-initialized').slick({*/
/* 		infinite: true,*/
/* 		autoplay: true,*/
/* 		autoplaySpeed: 5000,*/
/* 		slidesToShow: 1,*/
/* 		adaptiveHeight: true,*/
/* 		fade: true,*/
/* 		cssEase: 'linear',*/
/* 		dots: true,*/
/* 		arrows: true*/
/* 	});*/
/* });*/
/* </script>*/
