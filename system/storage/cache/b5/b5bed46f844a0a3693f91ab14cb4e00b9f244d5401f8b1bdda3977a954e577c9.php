<?php

/* essence/template/extension/module/carousel.twig */
class __TwigTemplate_06b876fb1a3b18944248fa15c7ded36b56cf0a83b6aa8eec5b4421f197766436 extends Twig_Template
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
        echo "<div class=\"carusel-mask\">
<span> </span>
<div class=\"carusel-main carusel";
        // line 3
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "<div class=\"carusel-main-item\" style=\"background-image:url(";
            echo $this->getAttribute($context["banner"], "image", array());
            echo ")\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
</div>
<script type=\"text/javascript\">
<!--
   \$('.carusel";
        // line 11
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').slick({
     dots: false,
\t arrows: false,
     infinite: true,
\t slidesToShow: 6,
\t      slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 5000,
    responsive: [
\t{
      breakpoint: 991,
      settings: {
        slidesToShow: 5
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3
      }
    }

  ]

   });
   -->
</script>
<style>
.carusel-mask {
position: relative;
height: 100px;
overflow: hidden;
width: calc(100% + 30px);
margin: 0 -15px;
}
.carusel-mask span {
position: absolute;
height: 100%;
width: calc(100% - 30px);
top: 0;
left: 15px;
z-index: 8;
background-color: rgba(15, 62, 91, 0.3);
}
.carusel-main {
width: calc(100% - 30px);
padding: 0;
margin: 0 15px 50px 15px;
}
.slide {
width: 100%;
margin: auto;
}
.carusel-main-item {
min-height: 100px;
background-position: center;
background-repeat: no-repeat;
background-size: contain;
padding: 0;
margin: 0;
}

@media (max-width: 768px) {
.carusel-mask {
height: 80px;
}
.carusel-main-item {
min-height: 80px;
}
}
</style>
";
    }

    public function getTemplateName()
    {
        return "essence/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  40 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="carusel-mask">*/
/* <span> </span>*/
/* <div class="carusel-main carusel{{ module }}">*/
/* {% for banner in banners %}*/
/* <div class="carusel-main-item" style="background-image:url({{ banner.image }})"></div>*/
/* {% endfor %}*/
/* </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* <!--*/
/*    $('.carusel{{ module }}').slick({*/
/*      dots: false,*/
/* 	 arrows: false,*/
/*      infinite: true,*/
/* 	 slidesToShow: 6,*/
/* 	      slidesToScroll: 1,*/
/*      autoplay: true,*/
/*      autoplaySpeed: 5000,*/
/*     responsive: [*/
/* 	{*/
/*       breakpoint: 991,*/
/*       settings: {*/
/*         slidesToShow: 5*/
/*       }*/
/*     },*/
/*     {*/
/*       breakpoint: 600,*/
/*       settings: {*/
/*         slidesToShow: 4*/
/*       }*/
/*     },*/
/*     {*/
/*       breakpoint: 480,*/
/*       settings: {*/
/*         slidesToShow: 3*/
/*       }*/
/*     }*/
/* */
/*   ]*/
/* */
/*    });*/
/*    -->*/
/* </script>*/
/* <style>*/
/* .carusel-mask {*/
/* position: relative;*/
/* height: 100px;*/
/* overflow: hidden;*/
/* width: calc(100% + 30px);*/
/* margin: 0 -15px;*/
/* }*/
/* .carusel-mask span {*/
/* position: absolute;*/
/* height: 100%;*/
/* width: calc(100% - 30px);*/
/* top: 0;*/
/* left: 15px;*/
/* z-index: 8;*/
/* background-color: rgba(15, 62, 91, 0.3);*/
/* }*/
/* .carusel-main {*/
/* width: calc(100% - 30px);*/
/* padding: 0;*/
/* margin: 0 15px 50px 15px;*/
/* }*/
/* .slide {*/
/* width: 100%;*/
/* margin: auto;*/
/* }*/
/* .carusel-main-item {*/
/* min-height: 100px;*/
/* background-position: center;*/
/* background-repeat: no-repeat;*/
/* background-size: contain;*/
/* padding: 0;*/
/* margin: 0;*/
/* }*/
/* */
/* @media (max-width: 768px) {*/
/* .carusel-mask {*/
/* height: 80px;*/
/* }*/
/* .carusel-main-item {*/
/* min-height: 80px;*/
/* }*/
/* }*/
/* </style>*/
/* */
