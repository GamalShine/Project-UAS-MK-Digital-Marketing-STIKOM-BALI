<?php

/* materialize/template/common/currency.twig */
class __TwigTemplate_87b892df2f3c21082616c27cd167aafe011ae91481096b9c439018c235afa57c extends Twig_Template
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
            echo "<div id=\"modal-currency\" class=\"modal\">
\t<div class=\"modal-content\">
\t\t<i class=\"material-icons modal-action modal-close waves-effect waves-circle close-icon\">close</i>
\t\t<h4>";
            // line 5
            echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
            echo "</h4>
\t\t<form action=\"";
            // line 6
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
\t\t\t<ul>
\t\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 9
                echo "\t\t\t\t";
                if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                    // line 10
                    echo "\t\t\t\t<li>
\t\t\t\t\t<label for=\"";
                    // line 11
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">
\t\t\t\t\t\t<input id=\"";
                    // line 12
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\" class=\"with-gap currency-select\" type=\"radio\" name=\"";
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\"";
                    if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
\t\t\t\t\t\t<span>";
                    // line 13
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</span>
\t\t\t\t\t</label>
\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 17
                    echo "\t\t\t\t<li>
\t\t\t\t\t<label for=\"";
                    // line 18
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">
\t\t\t\t\t\t<input id=\"";
                    // line 19
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\" class=\"with-gap currency-select\" type=\"radio\" name=\"";
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\"";
                    if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
\t\t\t\t\t\t<span>";
                    // line 20
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</span>
\t\t\t\t\t</label>
\t\t\t\t</li>
\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t</ul>
\t\t\t<input type=\"hidden\" name=\"code\" value=\"\">
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 27
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\">
\t\t</form>
\t</div>
</div>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$('#form-currency .currency-select').on('click', function(e) {
\t\te.preventDefault();
\t\t\$('#form-currency input[name=\\'code\\']').val(\$(this).attr('name'));
\t\t\$('#form-currency').submit();
\t});
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "materialize/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  100 => 25,  94 => 24,  85 => 20,  75 => 19,  71 => 18,  68 => 17,  59 => 13,  49 => 12,  45 => 11,  42 => 10,  39 => 9,  35 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/* <div id="modal-currency" class="modal">*/
/* 	<div class="modal-content">*/
/* 		<i class="material-icons modal-action modal-close waves-effect waves-circle close-icon">close</i>*/
/* 		<h4>{{ text_currency }}</h4>*/
/* 		<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/* 			<ul>*/
/* 				{% for currency in currencies %}*/
/* 				{% if currency.symbol_left %}*/
/* 				<li>*/
/* 					<label for="{{ currency.code }}">*/
/* 						<input id="{{ currency.code }}" class="with-gap currency-select" type="radio" name="{{ currency.code }}"{% if currency.code == code %} checked="checked"{% endif %}>*/
/* 						<span>{{ currency.symbol_left }} {{ currency.title }}</span>*/
/* 					</label>*/
/* 				</li>*/
/* 				{% else %}*/
/* 				<li>*/
/* 					<label for="{{ currency.code }}">*/
/* 						<input id="{{ currency.code }}" class="with-gap currency-select" type="radio" name="{{ currency.code }}"{% if currency.code == code %} checked="checked"{% endif %}>*/
/* 						<span>{{ currency.symbol_right }} {{ currency.title }}</span>*/
/* 					</label>*/
/* 				</li>*/
/* 				{% endif %}*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 			<input type="hidden" name="code" value="">*/
/* 			<input type="hidden" name="redirect" value="{{ redirect }}">*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	$('#form-currency .currency-select').on('click', function(e) {*/
/* 		e.preventDefault();*/
/* 		$('#form-currency input[name=\'code\']').val($(this).attr('name'));*/
/* 		$('#form-currency').submit();*/
/* 	});*/
/* });*/
/* </script>*/
/* {% endif %}*/
