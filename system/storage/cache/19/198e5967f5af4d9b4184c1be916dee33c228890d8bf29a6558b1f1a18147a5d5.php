<?php

/* essence/template/common/language.twig */
class __TwigTemplate_e8c4885484ecf3fdc7c3c74651b27de161953ffb56d04fca3af698cac9742e88 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "  <form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
      <ul>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 5
                echo "        <li class=\"flex-center\">
          <button class=\"language-select\" type=\"button\" name=\"";
                // line 6
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</button>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "      </ul>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 11
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "essence/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  45 => 9,  34 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-language">*/
/*       <ul>*/
/*         {% for language in languages %}*/
/*         <li class="flex-center">*/
/*           <button class="language-select" type="button" name="{{ language.code }}">{{ language.name }}</button>*/
/*         </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     <input type="hidden" name="code" value="" />*/
/*     <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*   </form>*/
/* {% endif %}*/
/* */
