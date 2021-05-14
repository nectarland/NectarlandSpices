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

/* themes/sshop/templates/block/nav_collapsible/block--navigation-collapsible--sshop-account-menu.html.twig */
class __TwigTemplate_698d097910b759c98ac21c3cea93f50f0d9ee5ba79ea58a192aa84448c0a62e0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 38, "block" => 49];
        $filters = ["t" => 45, "escape" => 48];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['t', 'escape'],
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
        // line 36
        echo "
";
        // line 38
        $context["classes"] = [0 => "block-content", 1 => "header-dropdown", 2 => "user-menu-header-right"];
        // line 44
        echo "<div class=\"block user-menu-block has-dropdown\">
  <a href=\"#\" title=\"";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("User menu"));
        echo "\">
    <span class=\"shop-icon fa fa-user-circle-o\"></span>
  </a>
  <div";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "  </div>
</div>
";
    }

    // line 49
    public function block_content($context, array $blocks = [])
    {
        // line 50
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/sshop/templates/block/nav_collapsible/block--navigation-collapsible--sshop-account-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 50,  82 => 49,  76 => 52,  74 => 49,  70 => 48,  64 => 45,  61 => 44,  59 => 38,  56 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/sshop/templates/block/nav_collapsible/block--navigation-collapsible--sshop-account-menu.html.twig", "/var/www/html/nectarland/spices/themes/sshop/templates/block/nav_collapsible/block--navigation-collapsible--sshop-account-menu.html.twig");
    }
}
