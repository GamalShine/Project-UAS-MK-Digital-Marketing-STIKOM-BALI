<?php

/* essence/template/extension/module/slideshow.twig */
class __TwigTemplate_b383deeac2c7c08a0d4f09c8024ab3b6f7feef17c8fd4efcd106e1c16a4a0b42 extends Twig_Template
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
        echo "<div class=\"slider-mask\">
";
        // line 2
        if (((isset($context["slider_text_slider_status"]) ? $context["slider_text_slider_status"] : null) == 1)) {
            // line 3
            echo "<div class=\"slider-text\">
<p>";
            // line 4
            echo $this->getAttribute((isset($context["slider_text_slider_text1"]) ? $context["slider_text_slider_text1"] : null), (isset($context["lang"]) ? $context["lang"] : null), array(), "array");
            echo "</p>
<h3>";
            // line 5
            echo $this->getAttribute((isset($context["slider_text_slider_text2"]) ? $context["slider_text_slider_text2"] : null), (isset($context["lang"]) ? $context["lang"] : null), array(), "array");
            echo "</h3>
<em>";
            // line 6
            echo $this->getAttribute((isset($context["slider_text_slider_text3"]) ? $context["slider_text_slider_text3"] : null), (isset($context["lang"]) ? $context["lang"] : null), array(), "array");
            echo "</em>
<a href=\"";
            // line 7
            echo $this->getAttribute((isset($context["slider_text_slider_link"]) ? $context["slider_text_slider_link"] : null), (isset($context["lang"]) ? $context["lang"] : null), array(), "array");
            echo "\">";
            echo $this->getAttribute((isset($context["slider_text_slider_textlink"]) ? $context["slider_text_slider_textlink"] : null), (isset($context["lang"]) ? $context["lang"] : null), array(), "array");
            echo "</a>
</div>
";
        }
        // line 10
        echo "<svg viewBox=\"0 0 1920 1080\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" preserveAspectRatio=\"xMidYMid slice\">
<g fill=\"none\" fill-rule=\"evenodd\">
<path d=\"M0,856.513433 L1920,201.5\" stroke-dasharray=\"2028.6553955078125\"></path>
<path d=\"M519.5,679.48665 L56.4884224,0\" stroke-dasharray=\"822.241943359375\"></path>
<path d=\"M519.4875,679.48665 L792,1079.51335\" stroke-dasharray=\"484.02935791015625\"></path>
<path d=\"M1190.51242,449.514039 L759.487585,0.485961123\" stroke-dasharray=\"622.4215698242188\"></path>
<path d=\"M1631.5125,300.486284 L1281.4875,1079.51372\" stroke-dasharray=\"854.0498046875\"></path>
<path d=\"M1565.48764,447.486807 L1920,815.513193\" stroke-dasharray=\"511.0013732910156\"></path>
</g>
</svg>
<span> </span>
<div class=\"slider-main slider";
        // line 21
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\">
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 23
            echo "<div class=\"slider-main-item\" style=\"background-image:url(";
            echo $this->getAttribute($context["banner"], "image", array());
            echo ")\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>
</div>
<script type=\"text/javascript\">
<!--
   \$('.slider";
        // line 29
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').slick({
     dots: false,
\t arrows: false,
     infinite: true,
     slidesToShow: 1,
     slidesToScroll: 1,
     autoplay: true,
     autoplaySpeed: 5000,
   });
   -->
</script>
<style>
.slider-mask {
position: relative;
height: 80vh;
overflow: hidden;
width: calc(100% + 30px);
margin: 0 -15px;
animation: header-animation 2s;
}

.slider-mask svg {
position: absolute;
height: 100%;
width: 100%;
top: 0;
left: 0;
stroke: #fff;
transition: stroke-width 2s;
transition-delay: 1s;
stroke-width: 15px;
z-index: 3;
}

.slider-mask span {
position: absolute;
height: 100%;
width: calc(100% - 30px);
top: 0;
left: 15px;
z-index: 2;
background-color: rgba(15, 62, 91, 0.3);
}
.slider-text {
position: absolute;
height: 100%;
width: 100%;
color: #fff;
font-weight: 600;
text-align: center;
display: flex;
justify-content: end;
align-items: center;
flex-direction: column;
margin-bottom: 10%;
animation: header-animation 6s;
z-index: 9;
}

.slider-text p {
font-size: 20px;
margin: 0;
}
.slider-text h3 {
font-size: 50px;
font-weight: 900;
text-transform: uppercase;
margin: 15px auto;
}

.slider-text em {
font-size: 16px;
margin-bottom: 20px;
}

.slider-text a {
font-size: 20px;
color: #fff;
position: relative;
margin-bottom: 20px;
font-weight: 900;
text-decoration: underline;
}
.slider-main {
width: calc(100% - 30px);
padding: 0;
margin: 0 15px 50px 15px;
}
.slide {
width: 100%;
margin: auto;
}
.slider-main-item {
min-height: 80vh;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
padding: 0;
margin: 0;
}

@media (max-width: 768px) {
.slider-mask {
height: 260px;
}
.slider-main-item {
min-height: 260px;
}
.slider-text p {
font-size: 14px;
}
.slider-text h3 {
font-size: 30px;
}

.slider-text em {
font-size: 12px;
}

.slider-text a {
font-size: 14px;
}
}
</style>
";
    }

    public function getTemplateName()
    {
        return "essence/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  77 => 25,  68 => 23,  64 => 22,  60 => 21,  47 => 10,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="slider-mask">*/
/* {% if (slider_text_slider_status == 1) %}*/
/* <div class="slider-text">*/
/* <p>{{ slider_text_slider_text1[lang] }}</p>*/
/* <h3>{{ slider_text_slider_text2[lang] }}</h3>*/
/* <em>{{ slider_text_slider_text3[lang] }}</em>*/
/* <a href="{{ slider_text_slider_link[lang] }}">{{ slider_text_slider_textlink[lang] }}</a>*/
/* </div>*/
/* {% endif %}*/
/* <svg viewBox="0 0 1920 1080" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid slice">*/
/* <g fill="none" fill-rule="evenodd">*/
/* <path d="M0,856.513433 L1920,201.5" stroke-dasharray="2028.6553955078125"></path>*/
/* <path d="M519.5,679.48665 L56.4884224,0" stroke-dasharray="822.241943359375"></path>*/
/* <path d="M519.4875,679.48665 L792,1079.51335" stroke-dasharray="484.02935791015625"></path>*/
/* <path d="M1190.51242,449.514039 L759.487585,0.485961123" stroke-dasharray="622.4215698242188"></path>*/
/* <path d="M1631.5125,300.486284 L1281.4875,1079.51372" stroke-dasharray="854.0498046875"></path>*/
/* <path d="M1565.48764,447.486807 L1920,815.513193" stroke-dasharray="511.0013732910156"></path>*/
/* </g>*/
/* </svg>*/
/* <span> </span>*/
/* <div class="slider-main slider{{ module }}">*/
/* {% for banner in banners %}*/
/* <div class="slider-main-item" style="background-image:url({{ banner.image }})"></div>*/
/* {% endfor %}*/
/* </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* <!--*/
/*    $('.slider{{ module }}').slick({*/
/*      dots: false,*/
/* 	 arrows: false,*/
/*      infinite: true,*/
/*      slidesToShow: 1,*/
/*      slidesToScroll: 1,*/
/*      autoplay: true,*/
/*      autoplaySpeed: 5000,*/
/*    });*/
/*    -->*/
/* </script>*/
/* <style>*/
/* .slider-mask {*/
/* position: relative;*/
/* height: 80vh;*/
/* overflow: hidden;*/
/* width: calc(100% + 30px);*/
/* margin: 0 -15px;*/
/* animation: header-animation 2s;*/
/* }*/
/* */
/* .slider-mask svg {*/
/* position: absolute;*/
/* height: 100%;*/
/* width: 100%;*/
/* top: 0;*/
/* left: 0;*/
/* stroke: #fff;*/
/* transition: stroke-width 2s;*/
/* transition-delay: 1s;*/
/* stroke-width: 15px;*/
/* z-index: 3;*/
/* }*/
/* */
/* .slider-mask span {*/
/* position: absolute;*/
/* height: 100%;*/
/* width: calc(100% - 30px);*/
/* top: 0;*/
/* left: 15px;*/
/* z-index: 2;*/
/* background-color: rgba(15, 62, 91, 0.3);*/
/* }*/
/* .slider-text {*/
/* position: absolute;*/
/* height: 100%;*/
/* width: 100%;*/
/* color: #fff;*/
/* font-weight: 600;*/
/* text-align: center;*/
/* display: flex;*/
/* justify-content: end;*/
/* align-items: center;*/
/* flex-direction: column;*/
/* margin-bottom: 10%;*/
/* animation: header-animation 6s;*/
/* z-index: 9;*/
/* }*/
/* */
/* .slider-text p {*/
/* font-size: 20px;*/
/* margin: 0;*/
/* }*/
/* .slider-text h3 {*/
/* font-size: 50px;*/
/* font-weight: 900;*/
/* text-transform: uppercase;*/
/* margin: 15px auto;*/
/* }*/
/* */
/* .slider-text em {*/
/* font-size: 16px;*/
/* margin-bottom: 20px;*/
/* }*/
/* */
/* .slider-text a {*/
/* font-size: 20px;*/
/* color: #fff;*/
/* position: relative;*/
/* margin-bottom: 20px;*/
/* font-weight: 900;*/
/* text-decoration: underline;*/
/* }*/
/* .slider-main {*/
/* width: calc(100% - 30px);*/
/* padding: 0;*/
/* margin: 0 15px 50px 15px;*/
/* }*/
/* .slide {*/
/* width: 100%;*/
/* margin: auto;*/
/* }*/
/* .slider-main-item {*/
/* min-height: 80vh;*/
/* background-position: center;*/
/* background-repeat: no-repeat;*/
/* background-size: cover;*/
/* padding: 0;*/
/* margin: 0;*/
/* }*/
/* */
/* @media (max-width: 768px) {*/
/* .slider-mask {*/
/* height: 260px;*/
/* }*/
/* .slider-main-item {*/
/* min-height: 260px;*/
/* }*/
/* .slider-text p {*/
/* font-size: 14px;*/
/* }*/
/* .slider-text h3 {*/
/* font-size: 30px;*/
/* }*/
/* */
/* .slider-text em {*/
/* font-size: 12px;*/
/* }*/
/* */
/* .slider-text a {*/
/* font-size: 14px;*/
/* }*/
/* }*/
/* </style>*/
/* */
