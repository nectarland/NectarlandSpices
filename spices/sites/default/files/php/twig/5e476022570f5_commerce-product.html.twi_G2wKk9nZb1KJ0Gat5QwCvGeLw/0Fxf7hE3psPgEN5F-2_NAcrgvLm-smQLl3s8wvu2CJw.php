<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/sshop/templates/commerce/commerce-product.html.twig */
class __TwigTemplate_89d8bad199eb4d7005782ebdf06a8d5c792fa06bc388ad8a069e32252865b2ba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 37, "trans" => 62];
        $filters = ["escape" => 22, "without" => 28, "t" => 34, "render" => 81];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'without', 't', 'render'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "commerce-product-full"], "method")), "html", null, true);
        echo ">
  <div class=\"row\">
    <div class=\"product-left col-sm-6\">
      ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_images", [])), "html", null, true);
        echo "
    </div>
    <div class=\"product-right col-sm-6\">
      ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null)), "variation_attributes", "field_images", "field_reviews", "field_related_products"), "html", null, true);
        echo "
    </div>

    <div class=\"product-bottom col-sm-12\">
      <ul class=\"nav nav-tabs\">
        <li class=\"active\">
          <a data-toggle=\"tab\" href=\"#description\">";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description"));
        echo "</a>
        </li>
        <li>
          ";
        // line 37
        if (($context["reviews_count"] ?? null)) {
            // line 38
            echo "            <li>
              <a data-toggle=\"tab\" href=\"#reviews\">
                ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Reviews"));
            echo "
                ";
            // line 41
            if ((($context["reviews_count"] ?? null) > 0)) {
                // line 42
                echo "                  <span class=\"reviews-count\">(";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["reviews_count"] ?? null)), "html", null, true);
                echo ")</span>
                ";
            }
            // line 44
            echo "              </a>
            </li>
          ";
        }
        // line 47
        echo "        </li>
      </ul>

      <div class=\"tab-content\">
        <div id=\"description\" name=\"description\" class=\"tab-pane fade in active\">
          <h3 class=\"tab-title\">";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description"));
        echo "</h3>
          <div class=\"description-content\">
            ";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "body", [])), "html", null, true);
        echo "
          </div>
        </div>
        ";
        // line 57
        if (($context["reviews_count"] ?? null)) {
            // line 58
            echo "          <div id=\"reviews\" name=\"reviews\" class=\"tab-pane fade\">
            <h3 class=\"tab-title\">
              ";
            // line 60
            if ((($context["reviews_count"] ?? null) > 0)) {
                // line 61
                echo "                ";
                if ((($context["reviews_count"] ?? null) == 1)) {
                    // line 62
                    echo "                  ";
                    echo t("@reviews_count review for @title", array("@reviews_count" =>                     // line 63
($context["reviews_count"] ?? null), "@title" => ($context["title"] ?? null), ), ["context" => "product reviews title"]);
                    // line 65
                    echo "                ";
                } else {
                    // line 66
                    echo "                  ";
                    echo t("@reviews_count reviews for @title", array("@reviews_count" =>                     // line 67
($context["reviews_count"] ?? null), "@title" => ($context["title"] ?? null), ), ["context" => "product reviews title"]);
                    // line 69
                    echo "                ";
                }
                // line 70
                echo "              ";
            }
            // line 71
            echo "            </h3>

            <div class=\"reviews-content\">
              ";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_reviews", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 78
        echo "      </div>
    </div>

    ";
        // line 81
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "field_related_products", [])) != "")) {
            // line 82
            echo "      <div class=\"related-products col-sm-12\">
        <h3 class=\"tab-title\">";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Related products"));
            echo "</h3>
        <div class=\"related-products-items row\">
          ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_related_products", [])), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 89
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/sshop/templates/commerce/commerce-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 89,  179 => 85,  174 => 83,  171 => 82,  169 => 81,  164 => 78,  157 => 74,  152 => 71,  149 => 70,  146 => 69,  144 => 67,  142 => 66,  139 => 65,  137 => 63,  135 => 62,  132 => 61,  130 => 60,  126 => 58,  124 => 57,  118 => 54,  113 => 52,  106 => 47,  101 => 44,  95 => 42,  93 => 41,  89 => 40,  85 => 38,  83 => 37,  77 => 34,  68 => 28,  62 => 25,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/sshop/templates/commerce/commerce-product.html.twig", "/var/www/html/nectarland/spices/themes/contrib/sshop/templates/commerce/commerce-product.html.twig");
    }
}
