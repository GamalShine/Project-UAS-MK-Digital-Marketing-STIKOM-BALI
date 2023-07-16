<?php

/* materialize/template/common/language.twig */
class __TwigTemplate_8baf887261728dbe94c3646d1673372e819eaec71b21a106531222ea37963bf0 extends Twig_Template
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
            echo "<div id=\"modal-language\" class=\"modal\">
\t<div class=\"modal-content\">
\t\t<i class=\"material-icons modal-action modal-close waves-effect waves-circle close-icon\">close</i>
\t\t<h4>";
            // line 5
            echo (isset($context["text_language"]) ? $context["text_language"] : null);
            echo "</h4>
\t\t<form action=\"";
            // line 6
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
\t\t\t<ul>
\t\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 9
                echo "\t\t\t\t<li>
\t\t\t\t\t<label for=\"";
                // line 10
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">
\t\t\t\t\t\t<input id=\"";
                // line 11
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" class=\"with-gap language-select\" type=\"radio\" name=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\"";
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    echo " checked=\"checked\"";
                }
                echo ">
\t\t\t\t\t\t<span>";
                // line 12
                echo $this->getAttribute($context["language"], "name", array());
                echo "</span>
\t\t\t\t\t</label>
\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t</ul>
\t\t\t<input type=\"hidden\" name=\"code\" value=\"\">
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 18
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\">
\t\t</form>
\t</div>
</div>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$('#form-language .language-select').on('click', function(e) {
\t\te.preventDefault();
\t\t\$('#form-language input[name=\\'code\\']').val(\$(this).attr('id'));
\t\t\$('#form-language').submit();
\t});
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "materialize/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  66 => 16,  56 => 12,  46 => 11,  42 => 10,  39 => 9,  35 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/* <div id="modal-language" class="modal">*/
/* 	<div class="modal-content">*/
/* 		<i class="material-icons modal-action modal-close waves-effect waves-circle close-icon">close</i>*/
/* 		<h4>{{ text_language }}</h4>*/
/* 		<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-language">*/
/* 			<ul>*/
/* 				{% for language in languages %}*/
/* 				<li>*/
/* 					<label for="{{ language.code }}">*/
/* 						<input id="{{ language.code }}" class="with-gap language-select" type="radio" name="{{ language.code }}"{% if language.code == code %} checked="checked"{% endif %}>*/
/* 						<span>{{ language.name }}</span>*/
/* 					</label>*/
/* 				</li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 			<input type="hidden" name="code" value="">*/
/* 			<input type="hidden" name="redirect" value="{{ redirect }}">*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	$('#form-language .language-select').on('click', function(e) {*/
/* 		e.preventDefault();*/
/* 		$('#form-language input[name=\'code\']').val($(this).attr('id'));*/
/* 		$('#form-language').submit();*/
/* 	});*/
/* });*/
/* </script>*/
/* {% endif %}*/
