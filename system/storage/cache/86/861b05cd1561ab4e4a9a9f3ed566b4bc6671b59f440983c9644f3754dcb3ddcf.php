<?php

/* materialize/template/common/footer.twig */
class __TwigTemplate_ae3cc00adba8cfe1b16b5da9ab9ad414bf0cceb466b5d6734c90e52b769ae607 extends Twig_Template
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
        ob_start();
        // line 2
        if ((((isset($context["footer_title"]) ? $context["footer_title"] : null) || (isset($context["footer_description"]) ? $context["footer_description"] : null)) || (isset($context["footer_contact"]) ? $context["footer_contact"] : null))) {
            // line 3
            echo "\t";
            if ((isset($context["social_network"]) ? $context["social_network"] : null)) {
                // line 4
                echo "\t\t";
                list($context["col_information"], $context["col_extra"], $context["col_account"], $context["col_social_network"]) =                 array("s12 m6", "s12 m6", "s12 m6", "s12 m6");
                // line 5
                echo "\t";
            } else {
                // line 6
                echo "\t\t";
                list($context["col_information"], $context["col_extra"], $context["col_account"]) =                 array("s12 m6", "s12 m6", "s12 m6");
                // line 7
                echo "\t";
            }
        } else {
            // line 9
            echo "\t";
            if ((isset($context["social_network"]) ? $context["social_network"] : null)) {
                // line 10
                echo "\t\t";
                list($context["col_information"], $context["col_extra"], $context["col_account"], $context["col_social_network"]) =                 array("s6 m4 l3", "s6 m4 l3", "s6 m4 l3", "s6 m4 l3");
                // line 11
                echo "\t";
            } else {
                // line 12
                echo "\t\t";
                list($context["col_information"], $context["col_extra"], $context["col_account"]) =                 array("s6 m4", "s6 m4", "s6 m4");
                // line 13
                echo "\t";
            }
        }
        // line 15
        echo "<footer class=\"page-footer ";
        echo (isset($context["color_footer"]) ? $context["color_footer"] : null);
        echo " ";
        echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
        echo "\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 18
        if ((((isset($context["footer_title"]) ? $context["footer_title"] : null) || (isset($context["footer_description"]) ? $context["footer_description"] : null)) || (isset($context["footer_contact"]) ? $context["footer_contact"] : null))) {
            echo " <!-- Open footer info -->
\t\t\t<div class=\"col l6 s12 ";
            // line 19
            echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
            echo "\">
\t\t\t\t";
            // line 20
            if ((isset($context["footer_title"]) ? $context["footer_title"] : null)) {
                echo "<h5 class=\"text-bold\">";
                echo (isset($context["footer_title"]) ? $context["footer_title"] : null);
                echo "</h5>";
            }
            // line 21
            echo "\t\t\t\t";
            if ((isset($context["footer_description"]) ? $context["footer_description"] : null)) {
                echo "<p>";
                echo (isset($context["footer_description"]) ? $context["footer_description"] : null);
                echo "</p>";
            }
            // line 22
            echo "\t\t\t\t";
            if ((isset($context["footer_contact"]) ? $context["footer_contact"] : null)) {
                // line 23
                echo "\t\t\t\t<ul class=\"collection footer-info\">
\t\t\t\t\t<li class=\"collection-item\">
\t\t\t\t\t\t<address><i class=\"material-icons left\">location_on</i>";
                // line 25
                echo (isset($context["address"]) ? $context["address"] : null);
                echo "</address>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"collection-item\">
\t\t\t\t\t\t<a class=\"href-underline inherit-text\" href=\"tel:";
                // line 28
                echo twig_replace_filter((isset($context["telephone"]) ? $context["telephone"] : null), array("(" => "", ")" => "", " " => ""));
                echo "\"><i class=\"material-icons left\">phone</i>";
                echo (isset($context["telephone"]) ? $context["telephone"] : null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"collection-item\">
\t\t\t\t\t\t<a href=\"mailto:";
                // line 31
                echo (isset($context["email"]) ? $context["email"] : null);
                echo "\" class=\"inherit-text\"><i class=\"material-icons left\">email</i>";
                echo (isset($context["email"]) ? $context["email"] : null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                // line 33
                if ((isset($context["open"]) ? $context["open"] : null)) {
                    // line 34
                    echo "\t\t\t\t\t<li class=\"collection-item\">
\t\t\t\t\t\t<span><i class=\"material-icons left\">access_time</i>";
                    // line 35
                    echo (isset($context["open"]) ? $context["open"] : null);
                    echo "</span>
\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 40
            echo "\t\t\t</div>
\t\t\t<div class=\"col s12 l5 offset-l1\">
\t\t\t\t<div class=\"row\">
\t\t\t\t";
        }
        // line 43
        echo " <!-- ./ end footer info -->
\t\t\t\t\t";
        // line 44
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 45
            echo "\t\t\t\t\t<section class=\"col ";
            echo (isset($context["col_information"]) ? $context["col_information"] : null);
            echo "\">
\t\t\t\t\t\t<h5 class=\"text-bold\">";
            // line 46
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 49
                echo "\t\t\t\t\t\t\t<li><a class=\"";
                echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
                echo "\" href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t\t\t\t<li><a class=\"";
            echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
            echo "\" href=\"";
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\">";
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t<section class=\"col ";
        echo (isset($context["col_extra"]) ? $context["col_extra"] : null);
        echo "\">
\t\t\t\t\t\t<h5 class=\"text-bold\">";
        // line 56
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 58
        echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
        echo "\" href=\"";
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 59
        echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
        echo "\" href=\"";
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 60
        echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
        echo "\" href=\"";
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 61
        echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
        echo "\" href=\"";
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t";
        // line 64
        if ((((isset($context["footer_title"]) ? $context["footer_title"] : null) || (isset($context["footer_description"]) ? $context["footer_description"] : null)) || (isset($context["footer_contact"]) ? $context["footer_contact"] : null))) {
            echo " <!-- Open footer info -->
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t";
        }
        // line 67
        echo " <!-- ./ end footer info -->
\t\t\t\t\t<section class=\"col ";
        // line 68
        echo (isset($context["col_account"]) ? $context["col_account"] : null);
        echo "\">
\t\t\t\t\t\t<h5 class=\"text-bold\">";
        // line 69
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 71
        echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
        echo "\" href=\"";
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 72
        echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
        echo "\" href=\"";
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 73
        echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
        echo "\" href=\"";
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 74
        echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
        echo "\" href=\"";
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\" rel=\"nofollow\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t\t";
        // line 77
        if ((isset($context["social_network"]) ? $context["social_network"] : null)) {
            // line 78
            echo "\t\t\t\t\t<section class=\"col ";
            echo (isset($context["col_social_network"]) ? $context["col_social_network"] : null);
            echo "\">
\t\t\t\t\t\t<h5 class=\"text-bold\">";
            // line 79
            echo (isset($context["sn_text"]) ? $context["sn_text"] : null);
            echo "</h5>
\t\t\t\t\t\t";
            // line 80
            if ((isset($context["social_icons"]) ? $context["social_icons"] : null)) {
                // line 81
                echo "\t\t\t\t\t\t<ul class=\"footer-sn\">
\t\t\t\t\t\t\t";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["social_icons"]) ? $context["social_icons"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["social_icon"]) {
                    // line 83
                    echo "\t\t\t\t\t\t\t<li class=\"footer-sn__item\">
\t\t\t\t\t\t\t\t<a class=\"";
                    // line 84
                    echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["social_icon"], "link", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["social_icon"], "title", array());
                    echo "\" target=\"_blank\" rel=\"noopener";
                    echo (isset($context["no_index"]) ? $context["no_index"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<img class=\"width-max waves-effect waves-light lazyload\" src=\"";
                    // line 85
                    echo (isset($context["img_loader"]) ? $context["img_loader"] : null);
                    echo "\" data-src=\"";
                    echo $this->getAttribute($context["social_icon"], "icon", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["social_icon"], "title", array());
                    echo "\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social_icon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t</section>
\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t";
        if ((((isset($context["footer_title"]) ? $context["footer_title"] : null) || (isset($context["footer_description"]) ? $context["footer_description"] : null)) || (isset($context["footer_contact"]) ? $context["footer_contact"] : null))) {
            echo " <!-- Open footer info -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 96
        echo " <!-- ./ end footer info -->
\t\t</div>
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container ";
        // line 100
        echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
        echo "\">
\t\t\t";
        // line 101
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "
\t\t\t<a class=\"right ";
        // line 102
        echo (isset($context["color_footer_text"]) ? $context["color_footer_text"] : null);
        echo "\" href=\"//goo.gl/YpctDE\" target=\"_blank\" rel=\"noopener\">Materialize Template</a>
\t\t</div>
\t</div>
</footer>
<button type=\"button\" id=\"back-to-top\" class=\"btn-floating btn-large scale-transition scale-out z-depth-4 waves-effect waves-light ";
        // line 106
        echo (isset($context["color_btt"]) ? $context["color_btt"] : null);
        echo "\"><i class=\"material-icons ";
        echo (isset($context["color_btt_text"]) ? $context["color_btt_text"] : null);
        echo "\">keyboard_arrow_up</i></button>
<script defer src=\"catalog/view/theme/materialize/js/script.js\"></script>
</body></html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "materialize/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 106,  352 => 102,  348 => 101,  344 => 100,  338 => 96,  330 => 93,  326 => 91,  322 => 89,  308 => 85,  298 => 84,  295 => 83,  291 => 82,  288 => 81,  286 => 80,  282 => 79,  277 => 78,  275 => 77,  265 => 74,  257 => 73,  249 => 72,  241 => 71,  236 => 69,  232 => 68,  229 => 67,  222 => 64,  212 => 61,  204 => 60,  196 => 59,  188 => 58,  183 => 56,  178 => 55,  166 => 51,  153 => 49,  149 => 48,  144 => 46,  139 => 45,  137 => 44,  134 => 43,  128 => 40,  124 => 38,  118 => 35,  115 => 34,  113 => 33,  106 => 31,  98 => 28,  92 => 25,  88 => 23,  85 => 22,  78 => 21,  72 => 20,  68 => 19,  64 => 18,  55 => 15,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {% if footer_title or footer_description or footer_contact %}*/
/* 	{% if social_network %}*/
/* 		{% set col_information, col_extra, col_account, col_social_network = 's12 m6','s12 m6', 's12 m6', 's12 m6' %}*/
/* 	{% else %}*/
/* 		{% set col_information, col_extra, col_account = 's12 m6', 's12 m6', 's12 m6' %}*/
/* 	{% endif %}*/
/* {% else %}*/
/* 	{% if social_network %}*/
/* 		{% set col_information, col_extra, col_account, col_social_network = 's6 m4 l3','s6 m4 l3', 's6 m4 l3', 's6 m4 l3' %}*/
/* 	{% else %}*/
/* 		{% set col_information, col_extra, col_account = 's6 m4','s6 m4', 's6 m4' %}*/
/* 	{% endif %}*/
/* {% endif %}*/
/* <footer class="page-footer {{ color_footer }} {{ color_footer_text }}">*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			{% if footer_title or footer_description or footer_contact %} <!-- Open footer info -->*/
/* 			<div class="col l6 s12 {{ color_footer_text }}">*/
/* 				{% if footer_title %}<h5 class="text-bold">{{ footer_title }}</h5>{% endif %}*/
/* 				{% if footer_description %}<p>{{ footer_description }}</p>{% endif %}*/
/* 				{% if footer_contact %}*/
/* 				<ul class="collection footer-info">*/
/* 					<li class="collection-item">*/
/* 						<address><i class="material-icons left">location_on</i>{{ address }}</address>*/
/* 					</li>*/
/* 					<li class="collection-item">*/
/* 						<a class="href-underline inherit-text" href="tel:{{ telephone|replace({"(": "", ")" : "", " " : ""})}}"><i class="material-icons left">phone</i>{{ telephone }}</a>*/
/* 					</li>*/
/* 					<li class="collection-item">*/
/* 						<a href="mailto:{{ email }}" class="inherit-text"><i class="material-icons left">email</i>{{ email }}</a>*/
/* 					</li>*/
/* 					{% if open %}*/
/* 					<li class="collection-item">*/
/* 						<span><i class="material-icons left">access_time</i>{{ open }}</span>*/
/* 					</li>*/
/* 					{% endif %}*/
/* 				</ul>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<div class="col s12 l5 offset-l1">*/
/* 				<div class="row">*/
/* 				{% endif %} <!-- ./ end footer info -->*/
/* 					{% if informations %}*/
/* 					<section class="col {{ col_information }}">*/
/* 						<h5 class="text-bold">{{ text_information }}</h5>*/
/* 						<ul>*/
/* 							{% for information in informations %}*/
/* 							<li><a class="{{ color_footer_text }}" href="{{ information.href }}">{{ information.title }}</a></li>*/
/* 							{% endfor %}*/
/* 							<li><a class="{{ color_footer_text }}" href="{{ contact }}">{{ text_contact }}</a></li>*/
/* 						</ul>*/
/* 					</section>*/
/* 					{% endif %}*/
/* 					<section class="col {{ col_extra }}">*/
/* 						<h5 class="text-bold">{{ text_extra }}</h5>*/
/* 						<ul>*/
/* 							<li><a class="{{ color_footer_text }}" href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/* 							<li><a class="{{ color_footer_text }}" href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/* 							<li><a class="{{ color_footer_text }}" href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/* 							<li><a class="{{ color_footer_text }}" href="{{ special }}">{{ text_special }}</a></li>*/
/* 						</ul>*/
/* 					</section>*/
/* 				{% if footer_title or footer_description or footer_contact %} <!-- Open footer info -->*/
/* 				</div>*/
/* 				<div class="row">*/
/* 				{% endif %} <!-- ./ end footer info -->*/
/* 					<section class="col {{ col_account }}">*/
/* 						<h5 class="text-bold">{{ text_account }}</h5>*/
/* 						<ul>*/
/* 							<li><a class="{{ color_footer_text }}" href="{{ account }}" rel="nofollow">{{ text_account }}</a></li>*/
/* 							<li><a class="{{ color_footer_text }}" href="{{ order }}" rel="nofollow">{{ text_order }}</a></li>*/
/* 							<li><a class="{{ color_footer_text }}" href="{{ wishlist }}" rel="nofollow">{{ text_wishlist }}</a></li>*/
/* 							<li><a class="{{ color_footer_text }}" href="{{ newsletter }}" rel="nofollow">{{ text_newsletter }}</a></li>*/
/* 						</ul>*/
/* 					</section>*/
/* 					{% if social_network %}*/
/* 					<section class="col {{ col_social_network }}">*/
/* 						<h5 class="text-bold">{{ sn_text }}</h5>*/
/* 						{% if social_icons %}*/
/* 						<ul class="footer-sn">*/
/* 							{% for social_icon in social_icons %}*/
/* 							<li class="footer-sn__item">*/
/* 								<a class="{{ color_footer_text }}" href="{{ social_icon.link }}" title="{{ social_icon.title }}" target="_blank" rel="noopener{{ no_index }}">*/
/* 									<img class="width-max waves-effect waves-light lazyload" src="{{ img_loader }}" data-src="{{ social_icon.icon }}" alt="{{ social_icon.title }}">*/
/* 								</a>*/
/* 							</li>*/
/* 							{% endfor %}*/
/* 						</ul>*/
/* 						{% endif %}*/
/* 					</section>*/
/* 					{% endif %}*/
/* 				{% if footer_title or footer_description or footer_contact %} <!-- Open footer info -->*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %} <!-- ./ end footer info -->*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="footer-copyright">*/
/* 		<div class="container {{ color_footer_text }}">*/
/* 			{{ powered }}*/
/* 			<a class="right {{ color_footer_text }}" href="//goo.gl/YpctDE" target="_blank" rel="noopener">Materialize Template</a>*/
/* 		</div>*/
/* 	</div>*/
/* </footer>*/
/* <button type="button" id="back-to-top" class="btn-floating btn-large scale-transition scale-out z-depth-4 waves-effect waves-light {{ color_btt }}"><i class="material-icons {{ color_btt_text }}">keyboard_arrow_up</i></button>*/
/* <script defer src="catalog/view/theme/materialize/js/script.js"></script>*/
/* </body></html>*/
/* {% endspaceless %}*/
