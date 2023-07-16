<?php

/* materialize/template/common/search.twig */
class __TwigTemplate_d349beef80dea6811cf4e0c797410dddaeec7932894f36474ed7a57023f0126f extends Twig_Template
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
        echo "<nav class=\"search-wrapper z-depth-0 ";
        echo (isset($context["color_search"]) ? $context["color_search"] : null);
        echo "\">
\t<div class=\"nav-wrapper\">
\t\t<div id=\"search\" class=\"input-field\">
\t\t\t<input id=\"input-search\" class=\"search-input autocomplete\" type=\"search\" name=\"search\" value=\"";
        // line 4
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" autocomplete=\"off\">
\t\t\t<label class=\"label-icon search-buttons search-buttons__search waves-effect waves-circle\" for=\"input-search\"><i class=\"material-icons\">search</i></label>
\t\t\t<i class=\"material-icons search-buttons search-buttons__clear waves-effect waves-circle\">close</i>
\t\t</div>
\t</div>
</nav>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$(document).ready(function() {
\t\t\$('input[name=\\'search\\']').autocomplete({
\t\t\t'source': function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=common/search/autocomplete&filter_name=' + encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\timg: item['img'],
\t\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\t'select': function(item) {
\t\t\t\twindow.location = \"";
        // line 30
        echo (isset($context["product_path"]) ? $context["product_path"] : null);
        echo "&product_id=\"+item['value'];
\t\t\t}
\t\t});
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 30,  26 => 4,  19 => 1,);
    }
}
/* <nav class="search-wrapper z-depth-0 {{ color_search }}">*/
/* 	<div class="nav-wrapper">*/
/* 		<div id="search" class="input-field">*/
/* 			<input id="input-search" class="search-input autocomplete" type="search" name="search" value="{{ search }}" autocomplete="off">*/
/* 			<label class="label-icon search-buttons search-buttons__search waves-effect waves-circle" for="input-search"><i class="material-icons">search</i></label>*/
/* 			<i class="material-icons search-buttons search-buttons__clear waves-effect waves-circle">close</i>*/
/* 		</div>*/
/* 	</div>*/
/* </nav>*/
/* <script>*/
/* document.addEventListener("DOMContentLoaded", function(event) {*/
/* 	$(document).ready(function() {*/
/* 		$('input[name=\'search\']').autocomplete({*/
/* 			'source': function(request, response) {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=common/search/autocomplete&filter_name=' + encodeURIComponent(request),*/
/* 					dataType: 'json',*/
/* 					success: function(json) {*/
/* 						response($.map(json, function(item) {*/
/* 							return {*/
/* 								label: item['name'],*/
/* 								img: item['img'],*/
/* 								value: item['product_id']*/
/* 							}*/
/* 						}));*/
/* 					}*/
/* 				});*/
/* 			},*/
/* 			'select': function(item) {*/
/* 				window.location = "{{ product_path }}&product_id="+item['value'];*/
/* 			}*/
/* 		});*/
/* 	});*/
/* });*/
/* </script>*/
