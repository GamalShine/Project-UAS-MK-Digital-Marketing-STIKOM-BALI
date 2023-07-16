<?php

/* essence/template/common/footer.twig */
class __TwigTemplate_fdfefaf175cc14c95b1447f1fa02e1c0f1f9c203a85659d15f5887e369fa0ebe extends Twig_Template
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
        echo "<div class=\"footer-block\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 5
            echo "      <div class=\"col-sm-3\">
        <h5 class=\"footer-title\">";
            // line 6
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ul>
      </div>
      ";
        }
        // line 14
        echo "      <div class=\"col-sm-3\">
        <h5 class=\"footer-title\">";
        // line 15
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 17
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 18
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 19
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5 class=\"footer-title\">";
        // line 23
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 25
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 26
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 27
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 28
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5 class=\"footer-title\">";
        // line 32
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 34
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 35
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 36
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 37
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
        </ul>
      </div>
    </div>
</div>
</div>
<footer>
 <p>";
        // line 44
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
</footer>

 <button id=\"toTop\" title=\"Top\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-arrow-up\"><line x1=\"12\" y1=\"19\" x2=\"12\" y2=\"5\"></line><polyline points=\"5 12 12 5 19 12\"></polyline></svg></button>
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 49
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 52
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "<!-- Theme created by made HTML5 me, visit https://madehtml5.github.io/ for more detail. Please contact us if you need support or wish to fund our work -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "essence/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 54,  178 => 52,  174 => 51,  161 => 49,  157 => 48,  150 => 44,  138 => 37,  132 => 36,  126 => 35,  120 => 34,  115 => 32,  106 => 28,  100 => 27,  94 => 26,  88 => 25,  83 => 23,  74 => 19,  68 => 18,  62 => 17,  57 => 15,  54 => 14,  49 => 11,  38 => 9,  34 => 8,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="footer-block">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if informations %}*/
/*       <div class="col-sm-3">*/
/*         <h5 class="footer-title">{{ text_information }}</h5>*/
/*         <ul class="list-unstyled">*/
/*          {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-3">*/
/*         <h5 class="footer-title">{{ text_service }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5 class="footer-title">{{ text_extra }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5 class="footer-title">{{ text_account }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* <footer>*/
/*  <p>{{ powered }}</p>*/
/* </footer>*/
/* */
/*  <button id="toTop" title="Top"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></button>*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <!-- Theme created by made HTML5 me, visit https://madehtml5.github.io/ for more detail. Please contact us if you need support or wish to fund our work -->*/
/* </body></html>*/
