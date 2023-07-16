<?php

/* materialize/template/extension/module/carousel.twig */
class __TwigTemplate_da2be3bedb8fa823fead0a80bbde3612d192b72f7216fa6d029a23c025f3ec2c extends Twig_Template
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
        echo "<div id=\"carousel";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"slick-carousel card-panel\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            echo "\t<div>
\t\t";
            // line 4
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 5
                echo "\t\t<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img class=\"responsive-img lazyload\" src=\"";
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\"></a>
\t\t";
            } else {
                // line 7
                echo "\t\t<img class=\"responsive-img lazyload\" src=\"";
                echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\">
\t\t";
            }
            // line 9
            echo "\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$('.slick-carousel').not('.slick-initialized').slick({
\t\tinfinite: true,
\t\tslidesToShow: 6,
\t\tslidesToScroll: 3,
\t\tdots: true,
\t\tinfinite: true,
\t\tspeed: 300,
\t\tautoplay: true,
\t\tlazyLoad: 'ondemand',
\t\tresponsive: [
\t\t{
\t\t\tbreakpoint: 460,
\t\t\tsettings: {
\t\t\t\tslidesToShow: 1,
\t\t\t\tslidesToScroll: 1
\t\t\t}
\t\t},
\t\t{
\t\t\tbreakpoint: 600,
\t\t\tsettings: {
\t\t\t\tslidesToShow: 2,
\t\t\t\tslidesToScroll: 2
\t\t\t}
\t\t},
\t\t{
\t\t\tbreakpoint: 992,
\t\t\tsettings: {
\t\t\t\tslidesToShow: 3,
\t\t\t\tslidesToScroll: 3
\t\t\t}
\t\t},
\t\t{
\t\t\tbreakpoint: 1240,
\t\t\tsettings: {
\t\t\t\tslidesToShow: 4,
\t\t\t\tslidesToScroll: 4
\t\t\t}
\t\t},
\t\t]
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  55 => 9,  45 => 7,  33 => 5,  31 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div id="carousel{{ module }}" class="slick-carousel card-panel">*/
/* 	{% for banner in banners %}*/
/* 	<div>*/
/* 		{% if banner.link %}*/
/* 		<a href="{{ banner.link }}"><img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ banner.image }}" alt="{{ banner.title }}"></a>*/
/* 		{% else %}*/
/* 		<img class="responsive-img lazyload" src="{{ img_loader }}" data-src="{{ banner.image }}" alt="{{ banner.title }}">*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	{% endfor %}*/
/* </div>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	$('.slick-carousel').not('.slick-initialized').slick({*/
/* 		infinite: true,*/
/* 		slidesToShow: 6,*/
/* 		slidesToScroll: 3,*/
/* 		dots: true,*/
/* 		infinite: true,*/
/* 		speed: 300,*/
/* 		autoplay: true,*/
/* 		lazyLoad: 'ondemand',*/
/* 		responsive: [*/
/* 		{*/
/* 			breakpoint: 460,*/
/* 			settings: {*/
/* 				slidesToShow: 1,*/
/* 				slidesToScroll: 1*/
/* 			}*/
/* 		},*/
/* 		{*/
/* 			breakpoint: 600,*/
/* 			settings: {*/
/* 				slidesToShow: 2,*/
/* 				slidesToScroll: 2*/
/* 			}*/
/* 		},*/
/* 		{*/
/* 			breakpoint: 992,*/
/* 			settings: {*/
/* 				slidesToShow: 3,*/
/* 				slidesToScroll: 3*/
/* 			}*/
/* 		},*/
/* 		{*/
/* 			breakpoint: 1240,*/
/* 			settings: {*/
/* 				slidesToShow: 4,*/
/* 				slidesToScroll: 4*/
/* 			}*/
/* 		},*/
/* 		]*/
/* 	});*/
/* });*/
/* </script>*/
