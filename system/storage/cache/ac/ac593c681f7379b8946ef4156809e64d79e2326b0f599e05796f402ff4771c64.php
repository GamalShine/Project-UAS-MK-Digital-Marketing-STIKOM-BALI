<?php

/* essence/template/common/currency.twig */
class __TwigTemplate_013b9d56906ca5bf4818f61f34ac5621a10647b93cd743233748f24a61ead16c extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "  <form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
      <ul class=\"list-inline text-center\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 5
                echo "        ";
                if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                    // line 6
                    echo "        <li>
          <button class=\"currency-select\" type=\"button\" name=\"";
                    // line 7
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo "</button>
        </li>
        ";
                } else {
                    // line 10
                    echo "        <li>
          <button class=\"currency-select\" type=\"button\" name=\"";
                    // line 11
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo "</button>
        </li>
        ";
                }
                // line 14
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </ul>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 17
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
  </form>
";
        }
        // line 19
        echo " ";
    }

    public function getTemplateName()
    {
        return "essence/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  66 => 17,  62 => 15,  56 => 14,  48 => 11,  45 => 10,  37 => 7,  34 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*       <ul class="list-inline text-center">*/
/*         {% for currency in currencies %}*/
/*         {% if currency.symbol_left %}*/
/*         <li>*/
/*           <button class="currency-select" type="button" name="{{ currency.code }}">{{ currency.symbol_left }}</button>*/
/*         </li>*/
/*         {% else %}*/
/*         <li>*/
/*           <button class="currency-select" type="button" name="{{ currency.code }}">{{ currency.symbol_right }}</button>*/
/*         </li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     <input type="hidden" name="code" value="" />*/
/*     <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*   </form>*/
/* {% endif %} */
